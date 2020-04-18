<?php 
$dataKey = ['dumb','ways','the','best'];

$word = "dumbways";

foreach ( $dataKey as $c ) {

    if ( strpos ( $word , $c ) !== FALSE ) {

		echo  "true : $c <br>";		

	}else{
		echo  "false: $c </br>";
	}
}

 ?>