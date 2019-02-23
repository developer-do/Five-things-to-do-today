<?php
  include_once('../common.php');

  $skin_url = "";
  if($chkmobile) {
    $skin_url = "skin/mobile";
  } else {
    $skin_url = "skin/pc";
  }
?>