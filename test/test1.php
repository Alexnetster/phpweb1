<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
	<h1>PHP Number & Arithmetic Operator</h1>
  <h2>1+1</h2>
	<div>
		<?php
		echo 1+1;
		?>
	</div>
  <h2>2-1</h2>
	<div>
		<?php
		echo 2-1;
		?>
	</div>
  <h2>2*2</h2>
	<div>
		<?php
		echo 2*2;
		?>
	</div>
  <h2>4/2</h2>
	<div>
		<?php
		echo 4/2;
		?>
	</div>
  <h2>string Value</h2>
  <div>
    <?php
    // 출력되지 않음. 만드시 echo 사용할 것
    'this is a simple string test<br>';
    ?>
  </div>
  <h2>string output</h2>
  <div>
    <?php
    echo 'this is a "simple" string<br>';
    echo "this is a 'simple' string2<br>";
    echo "this is a \"simple\" string3<br>";
    echo 'this is a \'simple\' string4<br>';

    echo 'You can also have embedded newlines in
    strings this way as it is
    okay to do<br>';
    ?>
  </div>
  <h2>string concatenation</h2>
  <div>
    <?php
    $str = "Hello" . " World";
    echo $str . '<br>';
    echo strlen($str)

    ?>
  </div>
</body>
</html>
