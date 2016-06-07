
<html>
	<head>
		<meta charset="utf-8" />

<link rel="stylesheet" type="text/css" href="/css/style.css">
		
		<title>Тестове завдання</title>
	
<header>
	<h1 align="center">Post Page</h1>';
</header>

<?php
include 'mysql.php';
$result = mysql_safe_query('SELECT * FROM posts WHERE id=%s LIMIT 1', $_GET['id']);

if(!mysql_num_rows($result)) {
	echo 'Пост #'.$_GET['id'].' не знайдено';
	exit;
}

$row = mysql_fetch_assoc($result);
echo '<h2 align="center">'.$row['title'].'</h2>';
echo '<p align="center"><em align="center">Опубліковано '.date('F j<\s\up>S</\s\up>, Y', $row['date']).'</em></p><br/>';
echo  '<p align="center">'.nl2br($row['body']).'<br/>';
echo '<p align="center"><a href="post_edit.php?id='.$_GET['id'].'">Редагувати</a> | <a href="post_delete.php?id='.$_GET['id'].'">Видалити</a> | <a href="index.php">Подивитися всі пости</a></p>';

echo '<hr/>';
$result = mysql_safe_query('SELECT * FROM comments WHERE post_id=%s ORDER BY date ASC', $_GET['id']);

while($row = mysql_fetch_assoc($result)) {
	echo '<li id="post-'.$row['id'].'">';
	echo (empty($row['website'])?'<strong>'.$row['name'].'</strong>':'<p align="center"><a href="'.$row['website'].'" target="_blank">'.$row['name'].'</a></p>');
	echo '<small>'.date('j-M-Y g:ia', $row['date']).'</small><br/>';
	echo nl2br($row['content']);
	echo '</li>';
}
echo '</ol>';
?>

<footer >

	<p align="center">Created by Nazar Khandoha</p>';

</footer>

<body>