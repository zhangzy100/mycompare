<?php
class DoCompare extends CI_Controller {
	public function getsimilars($key) {
		$this->output->set_content_type ( 'application/json' );
		
		$this->output->append_output ( json_encode ( array (
				'total' => '2',
				'rows' => array (
						array (
								'd1' => '001',
								'd2' => '尼莫地平' 
						),
						array (
								'd1' => '002',
								'd2' => '热毒宁' 
						) 
				) 
		), JSON_UNESCAPED_UNICODE ) );
	}
	public function index() {
		$filepath = "e:/data2.txt";
		$file = fopen ( $filepath, "r" ) or exit ( "Unable to open file!" );
		// Output a line of the file until the end is reached
		
		$datas = array ();
		$k = 0;
		
		while ( ! feof ( $file ) ) {
			$str = fgets ( $file );
			$arr1 = explode ( '	', $str );
			$arrlength = count ( $arr1 );
			for($i = 0; $i < $arrlength; $i ++) {
				$datas [$k] ['d' . $i] = $arr1 [$i];
			}
			$k ++;
		}
		
		fclose ( $file );
		
		$memcache = new memcache ();
		$memcache->connect ( '127.0.0.1', 11211 ) or die ( "连接失败" );
		$memcache->set ( 'd', $datas );	
		$memcache->close ();
		
		echo '加载成功!';
	}
}