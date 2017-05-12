<?php

namespace Drupal\holiday_offers\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for Holiday offer edit forms.
 *
 * @ingroup holiday_offers
 */
class HolidayOfferForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    /* @var $entity \Drupal\holiday_offers\Entity\HolidayOffer */
    $form = parent::buildForm($form, $form_state);

    $entity = $this->entity;

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $entity = &$this->entity;

    $status = parent::save($form, $form_state);

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Holiday offer.', [
          '%label' => $entity->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Holiday offer.', [
          '%label' => $entity->label(),
        ]));
    }
    $form_state->setRedirect('entity.holiday_offer.canonical', ['holiday_offer' => $entity->id()]);
  }

}
