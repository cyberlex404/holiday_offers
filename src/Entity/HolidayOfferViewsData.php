<?php

namespace Drupal\holiday_offers\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Holiday offer entities.
 */
class HolidayOfferViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
