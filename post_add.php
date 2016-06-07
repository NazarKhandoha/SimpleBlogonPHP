
<html>
	<head>
		<meta charset="utf-8" />
		
		<title>Тестове завдання</title>
	
<header>
	<h1 align="center">Post Creation Page</h1>';
</header>
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	
<?php
if(!empty($_POST)) {
	include 'mysql.php';
	if(mysql_safe_query('INSERT INTO posts (title,body,date) VALUES (%s,%s,%s)', $_POST['title'], $_POST['body'], time()))
		echo '<p align="center"> Пост опубліковано <a " href="post_view.php?id='.mysql_insert_id().'">Поглянути на опублікований пост</a></p>';
	else
		echo mysql_error();
}
?>

<form  method="post">
	<table align="center">
		<tr>
			<td><label  for="title">Заголовок</label></td>
			<td><input name="title" id="title" /></td>
		</tr>
		<tr>
			<td><label for="body">Основна стаття</label></td>
			<td><textarea name="body" id="body"></textarea></td>
		</tr>
	<tr>
			<td>
			<label for="fileDocumet">Зображення:</label></td>
			<td><input type="file" name="fileDocument" id="fileDocument" /></td>
		</tr>
			<td></td><br>
			
			<td><input type="submit" value="Опублікувати" /></td>
		</tr>
	</table>
</form>




<footer >

	<p align="center">Created by Nazar Khandoha</p>';

</footer>

<body>