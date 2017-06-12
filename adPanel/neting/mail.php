<?php 
ob_start();
session_start();
include 'baglan.php';

if(isset($_POST['mesaj_gonder'])){
$ad = $_POST['Adi'];
$soyadi = $_POST['Soyadi'];
$eposta = $_POST['EPosta'];
$telefonNo = $_POST['Telefon'];
$mesaj = $_POST['Mesaj'];
}

$db -> exec("INSERT INTO mesaj(ad, soyadi, eposta, telefon, mesaj) VALUES ('$ad', '$soyadi', '$eposta', '$telefonNo', '$mesaj')");


/*
$s = $db -> prepare("SELECT * FROM mesaj");

$s -> execute();

foreach($s as $row){
	print_r($row);
}

*/
header('Location:http://www.otosturop.xyz/contact.php?durum=ok');




$db = null;
 ?>