<?php

if(!isset($COOKIE['email'] or trim($COOKIE['email']) == '')){
  header("Location: rega.html")
  exit;
}

?>
