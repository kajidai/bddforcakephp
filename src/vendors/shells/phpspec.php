<?php
require_once 'PHPSpec.php';

class PhpspecShell extends Shell {

	public function model(){
		$this->phpspec();
	}
	private function phpspec(){
		$options = new stdClass;
		$options->recursive = true;
		$options->specdoc = true;
		// $options->reporter = 'html';

		PHPSpec_Runner::run($options);
	}
}
