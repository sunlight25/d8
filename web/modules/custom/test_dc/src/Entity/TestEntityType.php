<?php

namespace Drupal\test_dc\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the Test entity type entity.
 *
 * @ConfigEntityType(
 *   id = "test_entity_type",
 *   label = @Translation("Test entity type"),
 *   handlers = {
 *     "view_builder" = "Drupal\Core\Entity\EntityViewBuilder",
 *     "list_builder" = "Drupal\test_dc\TestEntityTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\test_dc\Form\TestEntityTypeForm",
 *       "edit" = "Drupal\test_dc\Form\TestEntityTypeForm",
 *       "delete" = "Drupal\test_dc\Form\TestEntityTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\test_dc\TestEntityTypeHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "test_entity_type",
 *   admin_permission = "administer site configuration",
 *   bundle_of = "test_entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/test_entity_type/{test_entity_type}",
 *     "add-form" = "/admin/structure/test_entity_type/add",
 *     "edit-form" = "/admin/structure/test_entity_type/{test_entity_type}/edit",
 *     "delete-form" = "/admin/structure/test_entity_type/{test_entity_type}/delete",
 *     "collection" = "/admin/structure/test_entity_type"
 *   }
 * )
 */
class TestEntityType extends ConfigEntityBundleBase implements TestEntityTypeInterface {

  /**
   * The Test entity type ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Test entity type label.
   *
   * @var string
   */
  protected $label;

}
