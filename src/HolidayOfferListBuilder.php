<?php

namespace Drupal\holiday_offers;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Routing\LinkGeneratorTrait;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of Holiday offer entities.
 *
 * @ingroup holiday_offers
 */
class HolidayOfferListBuilder extends EntityListBuilder {

  use LinkGeneratorTrait;

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Holiday offer ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\holiday_offers\Entity\HolidayOffer */
    $row['id'] = $entity->id();
    $row['name'] = $this->l(
      $entity->label(),
      new Url(
        'entity.holiday_offer.edit_form', [
          'holiday_offer' => $entity->id(),
        ]
      )
    );
    return $row + parent::buildRow($entity);
  }

}
