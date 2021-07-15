 <h1 align="center">Список заявок</h1>
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
 for ($i = 0; $i!=count($data)-1; $i++) { 
 	 $row = $data[$i];
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
           
     } ?>   </tbody></table>

     <div><button><a href="index5.php">Количество заявок по датам</a></button></div>

<div><button><a href="index.php?logout">Выход</a></button></div>
