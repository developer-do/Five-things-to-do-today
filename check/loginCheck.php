<?php
  include_once('/query/connect.php');
  $filtered_id = mysqli_real_escape_string($conn, $_POST['ajaxUserID']);
  $sql = "SELECT userID, userPassword FROM member WHERE userID {$filtered_id}";
  die($sql);
?>