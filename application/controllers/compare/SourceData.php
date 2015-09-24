<?php
class SourceData extends CI_Controller {
	public function getdata() {
		$filepath = "e:/data1.txt";
		$file = fopen ( $filepath, "r" ) or exit ( "Unable to open file!" );
		// Output a line of the file until the end is reached
		
		$datas = array ();
		$k = 0;
		
		while ( ! feof ( $file ) ) {
			$str = fgets ( $file );
			$arr1 = explode ( '	', $str );
			$arrlength = count ( $arr1 );
			for($i = 0; $i < $arrlength; $i ++) {
				$datas [$k] ['s' . $i] = $arr1 [$i];
			}
			$k ++;
		}
		
		fclose ( $file );
		
		$this->output->set_content_type ( 'application/json' );
		$this->output->append_output ( json_encode ( array (
				'total' => count ( file ( $filepath ) ),
				'rows' => $datas 
		), JSON_UNESCAPED_UNICODE ) );
		
		/*
		 * $this->output->append_output ( json_encode ( array (
		 * 'total' => count ( file ( $filepath ) ),
		 * 'rows' => array (
		 * array (
		 * 's1' => '001',
		 * 's2' => '尼莫地平'
		 * ),
		 * array (
		 * 's1' => '002',
		 * 's2' => '热毒宁'
		 * )
		 * )
		 * ), JSON_UNESCAPED_UNICODE ) );
		 */
	}
}