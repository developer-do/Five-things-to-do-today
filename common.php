<?php
  session_start();
  header('Content-Type: text/html; charset=UTF-8');
  /* URL check 하기
   * $str  =>   url체크 할 문자열
   */
  function indexChk($str) {
    $uri = $_SERVER['SCRIPT_NAME'];
    preg_match('/'.$str.'/', $uri, $match);
    if(count($match) === 0) {
      return false;
    } else {
      return true;
    }
  }

  // 경로 상수 정의

    // INDEX 일 때
    define('_INDEX_', indexChk('index.php'));

    /* CONTENT 폴더 경로 */
    $content = '/content';
    define('CONTENT_IMG', $content.'/images');
    define('CONTENT_JS', $content.'/js');
    define('CONTENT_CSS', $content.'/css');

    /* CONTENT SKIN 폴더 경로 */
    define('CONTENT_SKIN_PC', $content.'/skin/pc');
    define('CONTENT_SKIN_MOBILE', $content.'/skin/mobile');
    
    /* 최상위 경로 */
    define('ROOT_IMG', '/images');
    define('ROOT_JS', '/js');
    define('ROOT_CSS', '/css');
    define('ROOT_LIB', '/lib');
    define('ROOT_QUERY', '/query');
    define('ROOT_CHECK', '/check');
    define('_COMMON', '/common.php');

  // MOBILE ? PC CHECK
  $mUserAgent = array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson');
  $chkmobile = false;
  for($i = 0; $i < sizeof($mUserAgent); $i++) {
    if(strpos($_SERVER['HTTP_USER_AGENT'], $mUserAgent[$i])) {
      $chkmobile = true;
      break;
    }
  }


  // Random String $length = 문자열 길이
  function randomTxt($length) {
    $randomText = "0123456789!@#$%^&*_+qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
    $randomLen = strlen($randomText);
    $randomString = '!1';
    for($i = 0; $i < 13; $i++){
      $randomString .= $randomText[rand(0, $randomLen - 1)];
    }
    return $randomString;
  }

  function mailSend($text, $email) {
    $to = "{$email}";
    $subject = "To Do List에서 변경된 비밀번호를 보내드렸습니다.";
    $message = "변경된 비밀번호는 \n". $text." 입니다. \n 로그인 하신 후에 내정보 변경에서 비밀번호 변경을 해주시기 바랍니다.";
    mail($to, $subject, $message);
  }
?>