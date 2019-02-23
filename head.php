<?php include_once('common.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>To Do List!!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/reset.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="wrap">
  <?php 
    $hTag = "";
    if(_INDEX_) {
      $hTag = "<h1>To Do List!</h1>";
      $loginTag = "<a href='{$content}/login.php'>로그인</a>";
      $joinTag = "<a href='{$content}/join.php'>회원가입</a>";
      $infoTag = "<a href='{$content}/info.php'>이용방법안내</a>";
    }
  ?>
  