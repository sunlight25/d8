<?php

namespace Drupal\test_dc\Controller;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Url;
use Drupal\test_dc\Entity\TestEntityInterface;

/**
 * Class TestEntityController.
 *
 *  Returns responses for Test entity routes.
 */
class TestEntityController extends ControllerBase implements ContainerInjectionInterface {

  /**
   * Displays a Test entity  revision.
   *
   * @param int $test_entity_revision
   *   The Test entity  revision ID.
   *
   * @return array
   *   An array suitable for drupal_render().
   */
  public function revisionShow($test_entity_revision) {
    $test_entity = $this->entityManager()->getStorage('test_entity')->loadRevision($test_entity_revision);
    $view_builder = $this->entityManager()->getViewBuilder('test_entity');

    return $view_builder->view($test_entity);
  }

  /**
   * Page title callback for a Test entity  revision.
   *
   * @param int $test_entity_revision
   *   The Test entity  revision ID.
   *
   * @return string
   *   The page title.
   */
  public function revisionPageTitle($test_entity_revision) {
    $test_entity = $this->entityManager()->getStorage('test_entity')->loadRevision($test_entity_revision);
    return $this->t('Revision of %title from %date', ['%title' => $test_entity->label(), '%date' => format_date($test_entity->getRevisionCreationTime())]);
  }

  /**
   * Generates an overview table of older revisions of a Test entity .
   *
   * @param \Drupal\test_dc\Entity\TestEntityInterface $test_entity
   *   A Test entity  object.
   *
   * @return array
   *   An array as expected by drupal_render().
   */
  public function revisionOverview(TestEntityInterface $test_entity) {
    $account = $this->currentUser();
    $langcode = $test_entity->language()->getId();
    $langname = $test_entity->language()->getName();
    $languages = $test_entity->getTranslationLanguages();
    $has_translations = (count($languages) > 1);
    $test_entity_storage = $this->entityManager()->getStorage('test_entity');

    $build['#title'] = $has_translations ? $this->t('@langname revisions for %title', ['@langname' => $langname, '%title' => $test_entity->label()]) : $this->t('Revisions for %title', ['%title' => $test_entity->label()]);
    $header = [$this->t('Revision'), $this->t('Operations')];

    $revert_permission = (($account->hasPermission("revert all test entity revisions") || $account->hasPermission('administer test entity entities')));
    $delete_permission = (($account->hasPermission("delete all test entity revisions") || $account->hasPermission('administer test entity entities')));

    $rows = [];

    $vids = $test_entity_storage->revisionIds($test_entity);

    $latest_revision = TRUE;

    foreach (array_reverse($vids) as $vid) {
      /** @var \Drupal\test_dc\TestEntityInterface $revision */
      $revision = $test_entity_storage->loadRevision($vid);
      // Only show revisions that are affected by the language that is being
      // displayed.
      if ($revision->hasTranslation($langcode) && $revision->getTranslation($langcode)->isRevisionTranslationAffected()) {
        $username = [
          '#theme' => 'username',
          '#account' => $revision->getRevisionUser(),
        ];

        // Use revision link to link to revisions that are not active.
        $date = \Drupal::service('date.formatter')->format($revision->getRevisionCreationTime(), 'short');
        if ($vid != $test_entity->getRevisionId()) {
          $link = $this->l($date, new Url('entity.test_entity.revision', ['test_entity' => $test_entity->id(), 'test_entity_revision' => $vid]));
        }
        else {
          $link = $test_entity->link($date);
        }

        $row = [];
        $column = [
          'data' => [
            '#type' => 'inline_template',
            '#template' => '{% trans %}{{ date }} by {{ username }}{% endtrans %}{% if message %}<p class="revision-log">{{ message }}</p>{% endif %}',
            '#context' => [
              'date' => $link,
              'username' => \Drupal::service('renderer')->renderPlain($username),
              'message' => ['#markup' => $revision->getRevisionLogMessage(), '#allowed_tags' => Xss::getHtmlTagList()],
            ],
          ],
        ];
        $row[] = $column;

        if ($latest_revision) {
          $row[] = [
            'data' => [
              '#prefix' => '<em>',
              '#markup' => $this->t('Current revision'),
              '#suffix' => '</em>',
            ],
          ];
          foreach ($row as &$current) {
            $current['class'] = ['revision-current'];
          }
          $latest_revision = FALSE;
        }
        else {
          $links = [];
          if ($revert_permission) {
            $links['revert'] = [
              'title' => $this->t('Revert'),
              'url' => $has_translations ?
              Url::fromRoute('entity.test_entity.translation_revert', ['test_entity' => $test_entity->id(), 'test_entity_revision' => $vid, 'langcode' => $langcode]) :
              Url::fromRoute('entity.test_entity.revision_revert', ['test_entity' => $test_entity->id(), 'test_entity_revision' => $vid]),
            ];
          }

          if ($delete_permission) {
            $links['delete'] = [
              'title' => $this->t('Delete'),
              'url' => Url::fromRoute('entity.test_entity.revision_delete', ['test_entity' => $test_entity->id(), 'test_entity_revision' => $vid]),
            ];
          }

          $row[] = [
            'data' => [
              '#type' => 'operations',
              '#links' => $links,
            ],
          ];
        }

        $rows[] = $row;
      }
    }

    $build['test_entity_revisions_table'] = [
      '#theme' => 'table',
      '#rows' => $rows,
      '#header' => $header,
    ];

    return $build;
  }

}
