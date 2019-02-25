<?php 
include_once('_common.php');


include_once('_head.php');
include_once($skin_url.'/login_skin.php');
include_once('_footer.php');
if(isset($_SESSION['userName'])) {
  header("Location: /index.php");
}
?>

<script src="./js/loginCheck.js"></script>