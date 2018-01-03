<?php

namespace Drupal\test_dc\Entity;

use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\RevisionableInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Test entity entities.
 *
 * @ingroup test_dc
 */
interface TestEntityInterface extends RevisionableInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Test entity name.
   *
   * @return string
   *   Name of the Test entity.
   */
  public function getName();

  /**
   * Sets the Test entity name.
   *
   * @param string $name
   *   The Test entity name.
   *
   * @return \Drupal\test_dc\Entity\TestEntityInterface
   *   The called Test entity entity.
   */
  public function setName($name);

  /**
   * Gets the Test entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Test entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Test entity creation timestamp.
   *
   * @param int $timestamp
   *   The Test entity creation timestamp.
   *
   * @return \Drupal\test_dc\Entity\TestEntityInterface
   *   The called Test entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Test entity published status indicator.
   *
   * Unpublished Test entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Test entity is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Test entity.
   *
   * @param bool $published
   *   TRUE to set this Test entity to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\test_dc\Entity\TestEntityInterface
   *   The called Test entity entity.
   */
  public function setPublished($published);

  /**
   * Gets the Test entity revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Test entity revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\test_dc\Entity\TestEntityInterface
   *   The called Test entity entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Test entity revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Test entity revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\test_dc\Entity\TestEntityInterface
   *   The called Test entity entity.
   */
  public function setRevisionUserId($uid);

}
