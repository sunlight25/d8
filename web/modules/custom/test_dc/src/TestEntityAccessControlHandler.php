<?php

namespace Drupal\test_dc;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Test entity entity.
 *
 * @see \Drupal\test_dc\Entity\TestEntity.
 */
class TestEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\test_dc\Entity\TestEntityInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished test entity entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published test entity entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit test entity entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete test entity entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add test entity entities');
  }

}
