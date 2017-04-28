<?php
/**
 * @file
 * Contains \Drupal\example\Controller\ExampleController.
 */
namespace Drupal\webgm\Controller;
use Drupal\Core\Controller\ControllerBase;

class WebgmStartController {
	public function startAction() {
		return [
			'#markup' => '<h2>Welcome to the start page</h2>',
		];
	}
}
