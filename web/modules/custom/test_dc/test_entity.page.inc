<?php

/**
 * @file
 * Contains test_entity.page.inc.
 *
 * Page callback for Test entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Test entity templates.
 *
 * Default template: test_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_test_entity(array &$variables) {
  // Fetch TestEntity Entity Object.
  $test_entity = $variables['elements']['#test_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
