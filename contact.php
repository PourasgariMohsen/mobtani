<?php


$dbc = new mysqli('sql308.b6b.ir', 'b6bi_27932046', 'mohsen9998', 'b6bi_27932046_mobtani'); 
$dbc->set_charset("utf8");

$sql = "INSERT INTO message(title, body)
		VALUES('{$_POST['title']}', '{$_POST['body']}')";

$result = $dbc -> query( $sql ); 

$dbc -> close(); 

echo 'پیام با موفقیت ثبت شد';
?>