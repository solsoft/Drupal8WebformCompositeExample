<?php

namespace Drupal\WebformCompositeExample\Element;

use Drupal\webform\Element\WebformCompositeBase;

/**
 * Provides a CompositeExample form.
 *
 * @FormElement("CompositeExample")
 */
class CompositeExample extends WebformCompositeBase {

  /**
   * {@inheritdoc}
   */
  public static function getCompositeElements() {
    $elements = [];

    $elements['title'] = [
      '#type' => 'radios',
      '#title' => t('Title:'),
      '#title_display' => 'before',
      '#description' => t('Insert a title.'),
      '#description_display' => 'after',
      '#required' => true,
      '#required_error' => t('Insert a valid title.'),
      '#default_value' => '',
      '#test' => [
        'Mr',
        'Mrs',
        'Ms',
      ],
      '#options' => [
        'mr' => 'Mr',
        'mrs' => 'Mrs',
        'ms' => 'Ms',
      ],
      '#options_display' => 'side_by_side',
    ];

    $elements['name'] = [
      '#type' => 'textfield',
      '#title' => t('Name:'),
      '#title_display' => 'before',
      '#description' => t('Insert a valid name.'),
      '#description_display' => 'after',
      '#required' => true,
      '#required_error' => t('Insert a valid name.'),
      '#placeholder' => 'Luís Vaz de Camões',
      '#default_value' => '',
      '#test' => [
        'Luís',
        'Ana',
      ],
    ];

    return $elements;
  }

  /**
   * {@inheritdoc}
   */
  public static function preRenderCompositeFormElement($element) {
    $element = parent::preRenderCompositeFormElement($element);

    return $element;
  }

}
