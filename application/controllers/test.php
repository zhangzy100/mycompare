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
		
		echo similar_text ( "������ҵ��˾��������112������", "���ֱ�Դ����ҵ��˾��������112������", $percent ) . '<br/>';
		
		echo $percent;
	}
}