<?php
function print_list() {
  $list = scandir('data');
  $i = 0;
  for($i = 0; $i < count($list); $i++)
  {
    $listvalue = htmlspecialchars($list[$i]);
    if($listvalue == '.')
      continue;
    if($listvalue == '..')
      continue;
    echo "<li><a href=\"index.php?id=$listvalue\">$listvalue</a></li>\n";
  }
}
function print_title(){
  if(isset($_GET['id']))
  {
    echo htmlspecialchars($_GET['id']);
  }
  else
  {
    echo 'Welcome';
  }
}
function print_description() {
  // 실제 사용에는 주의 해야함. 보안 이슈가 있슴
  if(isset($_GET['id']))
  {
    $basename = basename(htmlspecialchars($_GET['id']));
    $contents = file_get_contents('data/'.$basename, true);
    echo htmlspecialchars($contents);
  }
  else
  {
    echo 'Welcome is Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  }
}
?>
