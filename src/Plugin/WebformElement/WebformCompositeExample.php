<?php

namespace Drupal\WebformCompositeExample\Plugin\WebformElement;

use Drupal\Core\Form\FormState;
use Drupal\webform\Plugin\WebformElement\WebformCompositeBase;
use Drupal\WebformCompositeExample\Element\CompositeExample;

/**
 * Provides WebformCompositeExample webform composite element.
 *
 * @WebformElement(
 *   id = "WebformCompositeExample",
 *   label = @Translation("WebformCompositeExample"),
 *   description = @Translation("Provides a WebformCompositeExample webform composite element."),
 *   category = @Translation("Composite elements"),
 *   multiline = TRUE,
 *   composite = TRUE,
 *   states_wrapper = TRUE,
 * )
 */
class WebformCompositeExample extends WebformCompositeBase {

  /**
   * {@inheritdoc}
   */
  protected function getCompositeElements() {
    $elements = CompositeExample::getCompositeElements();

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  protected function getInitializedCompositeElement(array &$element) {
    $form_state = new FormState();
    $form_completed = [];

    return CompositeExample::processWebformComposite($element, $form_state, $form_completed);
  }

  /**
   * {@inheritdoc}
   */
  protected function formatTextItemValue(array $element, array $value) {
    $lines = [];

    if (!empty($value['title'])) {
      $lines['title'] = $value['title'];
    }

    if (!empty($value['name'])) {
      $lines['name'] = $value['name'];
    }

    return $lines;
  }

}
