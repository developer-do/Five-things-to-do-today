<?php
  include_once('../query/connect.php');
  session_start();
  

  $filtered_id = mysqli_real_escape_string($conn, $_POST['ajaxUserID']);
  $password = $_POST['ajaxPassword'];

  $sql = "SELECT * FROM member WHERE userID = '{$filtered_id}';";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $_SESSION['userID']     = $row['userID'];
  $_SESSION['memberAI']   = $row['memberAI'];
  $_SESSION['userName']   = $row['userName'];
  $_SESSION['userEmail']  = $row['userEmail'];
  $_SESSION['userBirth']  = $row['userBirth'];

  if($row && password_verify($password, $row['userPassword'])) {
    echo "success";
  } else {
    echo "false";
    session_destroy();
  }
?>