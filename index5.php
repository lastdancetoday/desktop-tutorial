<?php
session_start();
//Подключение скриптов, библиотек фронта вынесено в отельный файл
require_once('head.php'); 
if ($_SESSION['manager_yes']==true) { 
require_once('bd.php');  


$sth = $dbh->prepare('SELECT date1, COUNT(`id_zay`) as Num FROM `zayava` GROUP BY date1');
    $sth->execute(array($login,$pass));
   
  while ($row = $sth->fetch(PDO::FETCH_ASSOC))
{
 $dat = $row['date1'];
 $num = $row['Num'];
echo <<<EOT
<span> В дату - $dat</span> - количество заявок - $num   <div class="green" style="width:{$row['Num']}%"></div><br>
EOT;
}
?>
<div><button><a href="index.php">На главную</a></button></div>
<?php }
?>