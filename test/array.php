<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP - array</title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
    $coworks = array('egoing', 'leezche', 'duru', 'taeho');
    var_dump($coworks).'<br>';
    echo $coworks[1].'<br>';
    echo $coworks[3].'<br>';
    var_dump(count($coworks)).'<br>';
    array_push($coworks, 'graphittie').'<br>';
    var_dump($coworks).'<br>';
    print_r($coworks).'<br>';
    ?>
  </body>
</html>
