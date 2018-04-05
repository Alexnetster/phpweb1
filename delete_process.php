<?php
$title = htmlspecialchars($_POST['title']);

// form method post 로 전달시
unlink('data/'.$title);

// form method get 로 전달시
//file_put_contents('data/'.$_GET['title'], $_GET['description']);
header("Location: /index.php");

//echo "<p>title : ".$_POST['title']."</p>";
//echo "<p>description : ".$_POST['description']."</p>";
 ?>
