<?php

/**
 * @file
 * Contains holiday_offer.page.inc.
 *
 * Page callback for Holiday offer entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Holiday offer templates.
 *
 * Default template: holiday_offer.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_holiday_offer(array &$variables) {
  // Fetch HolidayOffer Entity Object.
  $holiday_offer = $variables['elements']['#holiday_offer'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
