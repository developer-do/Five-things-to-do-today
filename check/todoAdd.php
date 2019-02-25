<?php
include_once('../query/connect.php');
session_start();

$filtered_todo = mysqli_real_escape_string($conn, $_POST['todayToDo']);

$sql = "
  INSERT INTO todo
  (
    memberAI,
    todo,
    timeStamp
  )
  VALUES
  (
    {$_SESSION['memberAI']},
    '{$filtered_todo}',
    NOW()
  );
";

$result = mysqli_query($conn, $sql);
header('Location: /index.php');
?>