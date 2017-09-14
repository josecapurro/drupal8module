<?php

namespace Drupal\drupal8module\Controller;

use Drupal\Core\Controller\ControllerBase;

class Drupal8ModuleController extends ControllerBase {
    public function content() {
        return array(
            '#type' => 'markup',
            '#markup' => $this->t('Drupal8Module'),
        );
    }
}    
