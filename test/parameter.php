<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
	<h1>PHP - Parameter</h1>
	<div>
    안녕하세요.
    <?php
    //parameter.php?address=서울&name=alexnet
    echo $_GET["address"];
    ?>에 사시는
		<?php
    echo $_GET["name"];
    ?>님.
</div>
</body>
</html>
