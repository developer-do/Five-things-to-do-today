<?php include_once('common.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>To Do List!!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <?php
    if(_INDEX_) {
      echo '<link rel="stylesheet" href="/css/index.css">';
    }
  ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
  <div id="bgcImg"></div>
  <div class="wrap">
  <?php
    $hTag = "";
    if(_INDEX_) {
      $hTag = "To Do List!";
    }

    $loginTag = "<a href='{$content}/login.php'>로그인</a>";
    $joinTag  = "<a href='{$content}/join.php'>회원가입</a>";
    $welcome  = "To Do List에 온걸 환영합니다!";
    $infoTag  = "";

    
    if(isset($_SESSION['userName'])) {
      $loginTag = "<button class='logout'>로그아웃</button>";
      $joinTag  = "<a href='{$content}/mylist.php'>나의 리스트</a>";
      $infoTag  = "<a href='{$content}/myinfo.php'>나의정보</a>";
      $welcome  = $_SESSION['userName']."님! To Do List에 온걸 환영합니다!";
    }
  ?>
