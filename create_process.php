<?php
// form method post 로 전달시

$title = basename(htmlspecialchars($_POST['title']));
$description = htmlspecialchars($_POST['description']);

file_put_contents("data/".$title, $description);

// form method get 로 전달시
//file_put_contents('data/'.$_GET['title'], $_GET['description']);
header("Location: /index.php?id=".$title);

//echo "<p>title : ".$_POST['title']."</p>";
//echo "<p>description : ".$_POST['description']."</p>";
 ?>
