<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<?php
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
	
	var_dump ( $datas );
	?>
</body>
</html>