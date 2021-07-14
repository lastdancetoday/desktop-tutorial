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
$result_set = $mysqli->query('SELECT date1, COUNT(`id_zay`) as Num FROM `zayava` GROUP BY date1');
 while($row = mysqli_fetch_array($result_set)){
  
 $dat = $row['date1'];
 $num = $row['Num'];
echo <<<EOT
  
   <span> В дату - $dat</span> - количество заявок - $num   <div class="green" style="width:{$row['Num']}%"></div><br>
   
EOT;
}
?>
<div><button><a href="index.php">На главную</a></button></div>