<?php
// require_once dirname(__FILE__).'../'.'core/compare/compare.php';
require_once $_SERVER ['DOCUMENT_ROOT'] . '/app1/application/core/compare/compare.php';
class test extends CI_Controller {
	public function getdata() {
		$this->output->set_content_type ( 'application/json' )->set_output ( json_encode ( array (
				'foo' => 'bar' 
		) ) );
	}
	public function index() {
		echo 'hello world<br/>';
		// ('abc','1a2b3c4d');
		
		echo similar_text ( "吉林禽业公司火灾已致112人遇难", "吉林宝源丰禽业公司火灾已致112人遇难", $percent ) . '<br/>';
		
		echo $percent;
	}
}