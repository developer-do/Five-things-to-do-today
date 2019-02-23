<?php
  include_once('../query/connect.php');

  $filtered_id = mysqli_real_escape_string($conn, $_POST['ajaxUserID']);
  $sql = "SELECT userID FROM member WHERE userID = '{$filtered_id}'; ";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $size = sizeof($row);
  var_dump($size === 0);
?>
