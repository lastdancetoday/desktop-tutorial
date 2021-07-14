<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
</head>
<body>
<?php
require_once('bd.php');  
$id = $_GET['id'];?>


<form action="?id=<?php echo $_GET['id']?>&ti" method="post" enctype="multipart/form-data">
 <table>

<tr>
<td><input type="hidden" name="id"></td>
</tr>

<tr>
<td>ФИО клиента:</td>
<td><input type="text" name="FIO"></td>
</tr>

<tr>
<td>Почта клиента:</td>
<td><input type="text" name="email"></td>
</tr>

<tr>
<td>Телефон клиента:</td>
<td><input type="text" name="phone"></td>
</tr>

<tr>
<td>Описание заявки:</td>
<td><input type="text" name="opis"></td>
</tr>

</table>
<button>Изменить</button>

      </form>


<?php
if (isset($_GET['id']) && isset($_GET['ti'])) 
{ 

    $id=$_GET['id'];
    $new_FIO = $_POST['FIO']; 
    $new_email = $_POST['email']; 
    $new_phone = $_POST['phone']; 
    $new_opis = $_POST['opis']; 


$result_set = $mysqli->query("UPDATE `zayava` SET FIO='{$new_FIO}', email='{$new_email}', phone='{$new_phone}', opis='{$new_opis}' WHERE id_zay='{$id}'");

 }
?>

<button><a href="index.php">Вернуться к списку заявок</a></button>
<button><a href="index.php?logout">Выход</a></button>
</body>
</html>