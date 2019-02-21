<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>To Do List!!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/reset.css">
</head>
<body>
  <?php 
    // uri 추출
    function uriExtraction($str) {
      $uri = $_SERVER['REQUEST_URI'];
      preg_match('/'.$str.'/', $uri, $match);
      if(count($match) === 0) {
        return false;
      } else {
        return true;
      }
    }
  ?>

  <?php echo (uriExtraction('index.php')) ? "<h1>To Do List!</h1>" : ""; ?>
  
  <div class="wrap">