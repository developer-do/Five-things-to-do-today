<?php 
include_once('_common.php');

include_once('../query/connect.php');
if(!isset($_SESSION['userName'])) {
  header("Location: /index.php");
}

$sql = "SELECT * FROM member WHERE memberAI = {$_SESSION['memberAI']};";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

include_once('_head.php');
include_once($skin_url.'/myinfo_skin.php');
include_once('_footer.php');
?>


<script src="./js/myInfo.js"></script>