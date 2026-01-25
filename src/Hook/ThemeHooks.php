<?php

declare(strict_types=1);

namespace Drupal\farm_organic\Hook;

use Drupal\Core\Hook\Attribute\Hook;

/**
 * Theme hook implementations for farm_organic.
 */
class ThemeHooks {

  /**
   * Implements hook_preproces_HOOK().
   */
  #[Hook('preprocess_field__flag')]
  public function preprocessFieldFlag(array &$variables) {
    $variables['#attached']['library'][] = 'farm_organic/flag';
  }

}
