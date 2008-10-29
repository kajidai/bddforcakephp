<?php

class DescribeUser extends PHPSpec_Context {

	public function itShouldBeCorrectName() {
		App::import('Model', 'User');
		$user = new User();
		$ret = $user->create(array('name'=>'cakephp'));
		$ret = $user->validates();
		$this->spec($user->validates())->should->beTrue();
	}
}
?>
