<?php

namespace Drupal\drupal_up_contr_title\Controller;

/**
 * Controller with custom title callback.
 */
class CustomTitleController {

  /**
   * {@inheritdoc}
   */
  public function dummyPage() {

    return [
      '#type' => 'markup',
      '#markup' => 'Hello from our controller',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function titleCallback() {
    $randTitleId = rand(0, 2);
    $randTitles = [
      'This is a great page',
      'This is an awful page',
      'Is this a page?',
    ];

    return $randTitles[$randTitleId];
  }

}
