<?php
  include_once('../query/connect.php');
  $filtered = array(
    "userID"        => mysqli_real_escape_string($conn, $_POST['userID']),
    "userPassword"  => password_hash($_POST['userPassword'], PASSWORD_DEFAULT),
    "userName"      => mysqli_real_escape_string($conn, $_POST['userName']),
    "userBirthDay"  => mysqli_real_escape_string($conn, $_POST['userBirthDay']),
    "userEmail"     => mysqli_real_escape_string($conn, $_POST['userEmail'])
  );
  $sql = "
    INSERT INTO member (
      userID,
      userPassword,
      userName,
      userBirthDay,
      userEmail,
      timeStamp
    )
    VALUES (
      '{$filtered['userID']}',
      '{$filtered['userPassword']}',
      '{$filtered['userName']}',
      '{$filtered['userBirthDay']}',
      '{$filtered['userEmail']}',
      NOW()
    );
  ";
  $result = mysqli_query($conn, $sql);
  if($result === false) {
    echo '저장하는 과정에서 오류가 났습니다. 관리자에게 문의해 주세요.';
    error_log(mysqli_error($conn));
  } else {
    header('Location: /index.php');
  }
?>