<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<!-- Bootstrap  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
</head>
<body>

<h2> Доброго времени суток,здесь вы можете добавить заявку</h2>
<form action="?ti" method="post" enctype="multipart/form-data">
<table>
<tr>
<td>ФИО клиента:</td>
<td><input type="text" name="FIO"></td>
</tr>

<tr>
<td>Адрес:</td>
<td><input type="text" name="address"></td>
</tr>

<tr>
<td>Почта клиента:</td>
<td><input type="email" name="email"></td>
</tr>

<tr>
<td>Телефон клиента:</td>
<td><input type="number" name="phone"></td>
</tr>

<tr>
<td>Описание заявки:</td>
<td><input type="text" name="opis"></td>
</tr>

</table>
<button>Добавить</button>

</form>


<?php
if (isset($_GET['ti'])) 
{ 
    $new_FIO = $_POST['FIO']; 
    $new_email = $_POST['email']; 
    $new_address = $_POST['address']; 
    $new_phone = $_POST['phone']; 
    $new_opis = $_POST['opis']; 
 	$date1 = date('Y-m-d');
    require_once('bd.php'); 
  
  
$result_set = $mysqli->query("INSERT INTO `zayava` VALUES (NULL,'$new_FIO','$new_email','$new_address','$new_phone','$new_opis','$date1')");

}
?>


   

<button><a href="index.php">Назад</a></button>
</body>
</html>