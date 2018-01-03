<?php

namespace Drupal\test_dc;

use Drupal\Core\Entity\ContentEntityStorageInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Language\LanguageInterface;
use Drupal\test_dc\Entity\TestEntityInterface;

/**
 * Defines the storage handler class for Test entity entities.
 *
 * This extends the base storage class, adding required special handling for
 * Test entity entities.
 *
 * @ingroup test_dc
 */
interface TestEntityStorageInterface extends ContentEntityStorageInterface {

  /**
   * Gets a list of Test entity revision IDs for a specific Test entity.
   *
   * @param \Drupal\test_dc\Entity\TestEntityInterface $entity
   *   The Test entity entity.
   *
   * @return int[]
   *   Test entity revision IDs (in ascending order).
   */
  public function revisionIds(TestEntityInterface $entity);

  /**
   * Gets a list of revision IDs having a given user as Test entity author.
   *
   * @param \Drupal\Core\Session\AccountInterface $account
   *   The user entity.
   *
   * @return int[]
   *   Test entity revision IDs (in ascending order).
   */
  public function userRevisionIds(AccountInterface $account);

  /**
   * Counts the number of revisions in the default language.
   *
   * @param \Drupal\test_dc\Entity\TestEntityInterface $entity
   *   The Test entity entity.
   *
   * @return int
   *   The number of revisions in the default language.
   */
  public function countDefaultLanguageRevisions(TestEntityInterface $entity);

  /**
   * Unsets the language for all Test entity with the given language.
   *
   * @param \Drupal\Core\Language\LanguageInterface $language
   *   The language object.
   */
  public function clearRevisionsLanguage(LanguageInterface $language);

}
