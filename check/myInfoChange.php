<?php
include_once('../common.php');
include_once('../query/connect.php');


if($_POST['ajaxPwd'] != "") {
  $sql = "SELECT userPassword FROM member WHERE memberAI = {$_SESSION['memberAI']};";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $dbPwd = $row['userPassword'];
  $pwd = $_POST['ajaxPwd'];

  
  if(password_verify($pwd, $dbPwd)) {
    echo "success";
  } else {
    echo "false";
  }
  exit();
} 

if( ($_POST['userPassword'] == "") && ($_POST['userPasswordChk'] == "") ) {
  $filtered = array(
    'userName'        => mysqli_real_escape_string($conn, $_POST['userName']),
    'userBirthDay'    => mysqli_real_escape_string($conn, $_POST['userBirthDay']),
    'userEmail'       => mysqli_real_escape_string($conn, $_POST['userEmail']),
  );

  $sql = "UPDATE `member` SET 
    userName = '{$filtered['userName']}',
    userBirthDay = {$filtered['userBirthDay']},
    userEmail = '{$filtered['userEmail']}'
    WHERE memberAI = {$_SESSION['memberAI']};
  ";
} else {
  $filtered = array(
    'userName'        => mysqli_real_escape_string($conn, $_POST['userName']),
    'userBirthDay'    => mysqli_real_escape_string($conn, $_POST['userBirthDay']),
    'userEmail'       => mysqli_real_escape_string($conn, $_POST['userEmail']),
    'userPassword'    => password_hash($_POST['userPassword'], PASSWORD_DEFAULT),
    'userPasswordChk' => $_POST['userPasswordChk']
  );

  $sql = "UPDATE `member` SET 
    userName = '{$filtered['userName']}',
    userBirthDay = {$filtered['userBirthDay']},
    userEmail = '{$filtered['userEmail']}',
    userPassword = '{$filtered['userPassword']}'
    WHERE memberAI = {$_SESSION['memberAI']};
  ";
}

$result = mysqli_query($conn, $sql);

var_dump($result);
if($result) {
  header("Location: /content/myinfo.php");
} else {
  echo "정보 수정 중 오류가 났습니다. 관리자에게 문의하세요!";
}

?>