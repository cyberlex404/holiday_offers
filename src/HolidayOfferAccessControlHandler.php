<?php

namespace Drupal\holiday_offers;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Holiday offer entity.
 *
 * @see \Drupal\holiday_offers\Entity\HolidayOffer.
 */
class HolidayOfferAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\holiday_offers\Entity\HolidayOfferInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished holiday offer entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published holiday offer entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit holiday offer entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete holiday offer entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add holiday offer entities');
  }

}
