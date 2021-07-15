<?php
session_start();

//Подключение скриптов, библиотек фронта вынесено в отельный файл
require_once('head.php'); 
require_once('bd.php');  
$id = $_GET['id'];?>
<?php

  if ($_SESSION['manager_yes']==true) { 


require_once('forms/forms_update.php');

if (isset($_GET['id']) && isset($_GET['ti'])) 
{ 

    $id=$_GET['id'];
    $new_FIO = htmlspecialchars($_POST['FIO']); 
    $new_email = htmlspecialchars($_POST['email']); 
    $new_address = htmlspecialchars($_POST['address']); 
    $new_phone = htmlspecialchars($_POST['phone']); 
    $new_opis = htmlspecialchars($_POST['opis']); 

$sth = $dbh->prepare("UPDATE `zayava` SET `FIO` = :FIO, `address` = :address, `email` = :email, `phone` = :phone, `opis` = :opis WHERE `id_zay` = :id_zay");

$sth->execute(array('FIO' => $new_FIO, 'address' => $new_address, 'email' => $new_email, 'phone' => $new_phone, 'opis' => $new_opis,'id_zay' => $id));


 }
 }
 ?>
