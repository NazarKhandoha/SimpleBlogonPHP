<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
		
		<title>Тестове завдання</title>



	<link rel="stylesheet" href="css/style.css">
	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>


	
</head>

        <script src="js/index.js"></script>

<header>
	<h1 align="center">Домашня сторінка(Home page)</h1>';
</header>


<h2 align="center"><a href="post_add.php" >+  Створити новий пост (Post Creation Page)</a><h2><br/>
<h3 align="center" >Всі  останні пости <h3>	
<?php
include 'mysql.php';


$result = mysql_safe_query('SELECT * FROM posts ORDER BY date DESC');


if(!mysql_num_rows($result)) {
	echo '<p align="center">Поки що постів немає</p>';
} else {
	while($row = mysql_fetch_assoc($result)) {
		echo '<h2 align="center">'.$row['title'].'</h2>';

		$body = substr($row['body'], 0, 300);
		echo '<p align="center">'.nl2br($body).'...<br/>';
		echo '<p align="center"><a href="post_view.php?id='.$row['id'].'">Детальніше(Post page)</a></p>  ';
		
		echo '<hr/>';
	}
}

?>






<footer >

	<p align="center">Created by Nazar Khandoha</p>';

</footer>

<body>
</html>


