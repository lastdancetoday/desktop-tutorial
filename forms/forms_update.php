
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
<td>Адрес клиента:</td>
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
<button>Изменить</button>

 </form>
<button><a href="index.php">Вернуться к списку заявок</a></button>

<button><a href="index.php?logout">Выход</a></button>