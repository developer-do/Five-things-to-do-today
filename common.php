<?php
  /* URL check 하기
   * $str  =>   url체크 할 문자열
   */
  function indexChk($str) {
    $uri = $_SERVER['REQUEST_URI'];
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

  
  
?>