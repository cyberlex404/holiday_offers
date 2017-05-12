<?php

namespace Drupal\holiday_offers\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Holiday offer entities.
 *
 * @ingroup holiday_offers
 */
interface HolidayOfferInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Holiday offer name.
   *
   * @return string
   *   Name of the Holiday offer.
   */
  public function getName();

  /**
   * Sets the Holiday offer name.
   *
   * @param string $name
   *   The Holiday offer name.
   *
   * @return \Drupal\holiday_offers\Entity\HolidayOfferInterface
   *   The called Holiday offer entity.
   */
  public function setName($name);

  /**
   * Gets the Holiday offer creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Holiday offer.
   */
  public function getCreatedTime();

  /**
   * Sets the Holiday offer creation timestamp.
   *
   * @param int $timestamp
   *   The Holiday offer creation timestamp.
   *
   * @return \Drupal\holiday_offers\Entity\HolidayOfferInterface
   *   The called Holiday offer entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Holiday offer published status indicator.
   *
   * Unpublished Holiday offer are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Holiday offer is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Holiday offer.
   *
   * @param bool $published
   *   TRUE to set this Holiday offer to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\holiday_offers\Entity\HolidayOfferInterface
   *   The called Holiday offer entity.
   */
  public function setPublished($published);

}
