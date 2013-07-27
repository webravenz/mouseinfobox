<?php
if(isset($_POST['name'])) {
  echo 'Hello '.$_POST['name'].', ';
}
echo 'It\'s '.date('h:i:s');
?>
