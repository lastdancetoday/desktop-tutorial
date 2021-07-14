<?php
$mysqli = @new mysqli('localhost', 'mysql', 'mysql', 'zay');
  if (mysqli_connect_errno()) {
    echo "Подключение невозможно: ".mysqli_connect_error();
  }
