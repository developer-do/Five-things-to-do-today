<?php
include_once('../common.php');
include_once('../query/connect.php');

$filtered = array(
  'userID'        => mysqli_real_escape_string($conn, $_POST['userID']),
  'userBirthDay'  => mysqli_real_escape_string($conn, $_POST['userBirthDay'])
);


$sql = "SELECT * FROM member WHERE userID = '{$filtered['userID']}' AND userBirthDay = {$filtered['userBirthDay']};";

$result = mysqli_query($conn, $sql);


if($result) {
  $row = mysqli_fetch_array($result);
  $id = $row['userID'];
  $idChk = $filtered['userID'];
  $birthDay = $row['userBirthDay'];
  $birthDayChk = $filtered['userBirthDay'];
  if( sizeof($row) && ($id === $idChk) && ($birthDay === $birthDayChk) ) {
    $ranPwd = randomTxt(8);
    mailSend($ranPwd, $row['userEmail']);
    $ranPwd = password_hash($ranPwd, PASSWORD_DEFAULT);
    $sql = "UPDATE member SET userPassword = '{$ranPwd}';";
    $result = mysqli_query($conn, $sql);
    echo "success";
  } else {
    echo "false!!!";
  } 
} else {
  echo "false";
}











// $to = "dev-do@naver.com";
// $subject = "Hello PHP";
// $message = ;

// mail($_SESSION['userEmail'], $subject, $message);
?>