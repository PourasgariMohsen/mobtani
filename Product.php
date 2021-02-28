<?php

if( isset( $_POST['submit'] ) ){ 
	

$dbc = new mysqli('sql308.b6b.ir', 'b6bi_27932046', 'mohsen9998', 'b6bi_27932046_mobtani'); 
$dbc->set_charset("utf8");

	$sql = "INSERT INTO Product (name, price, weekday,
	timeFrom, timeTo, imgSrc, description) 
	VALUES('{$_POST['name']}', {$_POST['price']},
	'{$_POST['weekday']}',
	'{$_POST['timeFrom']}', '{$_POST['timeTo']}', '{$imgSrc}',
	'{$_POST['description']}')";


$result = $db -> execute( $sql );
unset( $db );


if( $result )	
	$alert = alertTemplate('با موفقیت ثبت شد!', 'success');


}
?>
