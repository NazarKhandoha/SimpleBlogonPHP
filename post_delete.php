<html>
	<head>
		<meta charset="utf-8" />
		
		<title>Тестове завдання</title>
		<link rel="stylesheet" type="text/css" href="/css/style.css">

<header>
	<h1 align="center">Видалення посту</h1>';
</header>
	<link rel="stylesheet" type="text/css" href="/css/style.css">

<?php
include 'mysql.php';
mysql_safe_query('DELETE FROM posts WHERE id=%s LIMIT 1', $_GET['id']);
mysql_safe_query('DELETE FROM comments WHERE post_id=%s', $_GET['id']);
redirect('index.php');
?>

<footer >

	<p align="center">Created by Nazar Khandoha</p>';

</footer>

<body>
</html>
