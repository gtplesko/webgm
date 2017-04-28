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
			'#markup' => '<h2>Lots of great features for you to get excited about.</h2>',
		];
	}
}
