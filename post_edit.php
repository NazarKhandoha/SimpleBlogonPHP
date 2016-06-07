<html>
	<head>
		<meta charset="utf-8" />
		
		<title>Тестове завдання</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css">

<header>
	<h1 align="center">Редагування посту</h1>';
</header>




	<link rel="stylesheet" type="text/css" href="/css/style.css">


<?php
include 'mysql.php';

if(!empty($_POST)) {
	if(mysql_safe_query('UPDATE posts SET title=%s, body=%s, date=%s WHERE id=%s', $_POST['title'], $_POST['body'], time(), $_GET['id']))
		redirect('post_view.php?id='.$_GET['id']);
	else
		echo mysql_error();
}

$result = mysql_safe_query('SELECT * FROM posts WHERE id=%s', $_GET['id']);

if(!mysql_num_rows($result)) {
	echo 'Пост #'.$_GET['id'].' не знайдено';
	exit;
}

$row = mysql_fetch_assoc($result);

echo <<<HTML
<form method="post">
	<table align="center">
		<tr>
			<td><label for="title">Заголовок </label></td>
			<td><input name="title" id="title" value="{$row['title']}" /></td>
		</tr>
		<tr>
			<td><label for="body">Основна стаття</label></td>
			<td><textarea name="body" id="body">{$row['body']}</textarea></td>
		</tr>
		<tr>
			<td>
			<label for="fileDocumet">Зображення:</label></td>
			<td><input type="file" name="fileDocument" id="fileDocument" /></td>
		</tr>
			<td></td><br>
			
		</tr>
			<td></td>
			<td><input type="submit" value="Зберегти зміни"/></td>
		</tr>
	</table>
</form>
HTML;
?>

<footer >

	<p align="center">Created by Nazar Khandoha</p>';

</footer>

<body>
</html>
