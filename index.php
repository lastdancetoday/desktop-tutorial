<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
  <!-- Bootstrap -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

  <style>
   /* CSS-стили, формирующие оформление */
   body div { height:1em; display:inline-block; vertical-align:middle }
 
   .green { background:green }

 
   
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
</head>
<body>

<?php
require_once('bd.php'); 
if (isset($_GET['logout'])) {
    unset($_SESSION['index']);
}

if(!isset($_SESSION['index'])){

  if(!isset($_POST['login'])) {
   ?>
<div style="margin-left: 25%;"> 

	<form method="post" action="zay">
 <h3>Если вы клиент и хотите подать заявку: </h3>
  <div><button type="submit" name=""><a href="index4.php">Подать заявку</a></button> </div>
  </form>
  </br>
  <form method="post" action="">
  <h3>Если вы менеджер - то авторизуйтесь: </h3>
  <div>Ваша фамилия: <input type="text" name="login"/></div>
  <div>Ваш пароль:  <input type="password" name="pass"/></div>
  <div><button type="submit" name="loginbtn">Вход</button></div>
  </form>
  </br>
   <?php
   
  } else {

    $login = $_POST['login'];
    $pass = $_POST['pass'];

        $result_set = $mysqli->query('SELECT * FROM managers WHERE surname="'.$login.'"');
        $row = mysqli_fetch_array($result_set);

   
      
       if($login==$row['surname'] and $pass==$row['password'] and $login !== '')
       {
        $is_admin = true;
       }
      
    // проверки тут

       if ($is_admin) {
      echo ("Вы залогинены ");
      $_SESSION['index'] = true;  
      $_SESSION['id']=$row['id'];
      $_SESSION['manager_yes']=true;
      echo ( $_SESSION['manager_name']);

      ?>

    <script>document.location.href="index.php"</script>
<?php
    }
if (isset($_GET['zay'])) 
{ 
}

     else {

      echo ("Вы ввели неверные данные");?>
  <script>document.location.href="index.php"</script> 

  <?php

    }

  }

exit;
} 
?>


<h1 align="center">Список заявок</h1>




<?php

  if ($_SESSION['manager_yes']==true) {

$result_set = $mysqli->query('SELECT * FROM zayava');?>

<input id="myInput" type="text" placeholder="Фильтр..">
<br><br>
<table border="1" width="100%">
<tr> 
<td> ФИО клиента</td>
<td> Почта </td>
<td> Адрес клиента </td>
<td>Телефон </td>
<td>Описание заявки </td>
<td>Выбрать для редактирования заявку</td>
</tr>
<?php
while($row = mysqli_fetch_array($result_set)){
?>
<tbody id="myTable" width="100%" border="1">   
<tr> <td> <?php print_r($row['FIO']);  ?> 
      </td> 
  <td> <option> <?php print_r($row['Address']); ?> </option>  
      </td>

      <td> <?php
             print_r(" ".$row['email']); 
 ?> 
     </td> 

 <td> <?php
             print_r($row['phone']);
 ?> 
      </td>
 <td> <?php
             print_r($row['opis']);
 ?> 
      </td>

      
      <td><a href="index3.php?id=<?php echo $row['id_zay']?>">Редактировать</a></td> 
       </tr> <?php
           
        $i++; } ?>   </tbody></table> <?php
        }

       ?>
</br>

   
<div><button><a href="index5.php">Количество заявок по датам</a></button></div>

<div><button><a href="index.php?logout">Выход</a></button></div>

</div>
</body>
</html>