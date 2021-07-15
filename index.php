<?php
session_start();

//Подключение скриптов, библиотек фронта вынесено в отельный файл
require_once('head.php'); ?>

<?php
//Подключение к бд
require_once('bd.php'); 

if (isset($_GET['logout'])) {
    unset($_SESSION['index']);
    $_SESSION['manager_yes']=false;
   
}

if(!isset($_SESSION['index'])){

  if(!isset($_POST['login'])) {

//Код форм в отдельном файле
require_once('forms/forms.php'); 

?>
  </br>
   <?php
   
  } else {

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $sth = $dbh->prepare("SELECT * FROM `managers` WHERE `surname` = ? AND `password` = ?");
    $sth->execute(array($login,$pass));
    $array = $sth->fetch(PDO::FETCH_ASSOC);
  
       if($login==$array['surname'] and $pass==$array['password'] and $array !== '')
       {
        $is_admin = true;
       }
      
    // проверки тут
       if ($is_admin) {
      echo ("Вы залогинены ");
      $_SESSION['index'] = true;  
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


  if ($_SESSION['manager_yes']==true) {
    //Отделение логики от представления
    function render($templ,$templDat)
    {

        extract($templDat,EXTR_SKIP);
        ob_start();
        require_once($templ);
        return ob_get_clean();
    }

    $sth = $dbh->prepare("SELECT * FROM `zayava`");
    $sth->execute();
    $template = array();
    $template['data'] = array();
    while ($template['data'][] = $sth->fetch(PDO::FETCH_ASSOC));
    $html = render('show.php',$template);
    echo $html;
  }
?>

