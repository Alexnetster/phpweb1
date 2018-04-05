<?php
// form method post 로 전달시
file_put_contents('data/'.$_POST['title'], $_POST['description']);

// form method get 로 전달시
//file_put_contents('data/'.$_GET['title'], $_GET['description']);

//echo "<p>title : ".$_POST['title']."</p>";
//echo "<p>description : ".$_POST['description']."</p>";

 ?>
