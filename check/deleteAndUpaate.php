<?php
include_once('../common.php');
include_once('../query/connect.php');


if($_POST['cntValue'] != "") {
  $cntValue = (int) $_POST['cntValue'];
  $sql = "DELETE FROM todo WHERE cnt = {$cntValue};";
  $result = mysqli_query($conn, $sql);
  
  if($result) {
    header("Location: ".$content."/mylist.php");
  }
}

if($_POST['updateCnt'] != "") {
  
  $todoValue = mysqli_real_escape_string($conn, $_POST['todoValueOutput']);
  $sql = "UPDATE `todo` SET todo = '{$todoValue}' WHERE cnt = {$_POST['updateCnt']};";
  $result = mysqli_query($conn, $sql);

  if($result) {
    header("Location: ".$content."/mylist.php");
  }
}
?>