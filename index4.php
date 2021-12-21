<?php
session_start();
//Подключение скриптов, библиотек фронта вынесено в отельный файл
require_once('head.php'); 
//Код формы добалвения заявки в отдельном файле
require_once('forms/form_add_zay.php'); 
?>
<?php
ac
    $new_phone = htmlspecialchars($_POST['phone']); 
    $new_opis = htmlspecialchars($_POST['opis']); 
 	$date1 = date('Y-m-d');

    require_once('bd.php'); 
    $sql = "INSERT INTO zayava (id_zay, FIO, Address, email, phone, opis, date1) VALUES (?,?,?,?,?,?,?)";
    $dbh->prepare($sql)->execute([NULL, $new_FIO, $new_email, $new_address, $new_phone, $new_opis, $date1]);

}
?>
