<?php 

include_once('_common.php');
include_once('../query/connect.php');

if(!isset($_SESSION['userName'])) {
  header('Location: /index.php');
}

$sql = "SELECT * FROM todo WHERE memberAI = {$_SESSION['memberAI']};";
$result = mysqli_query($conn, $sql);
$arr = array();
for($i = 0; $row = mysqli_fetch_array($result); $i++) {
  $arr[$i] = $row;
}


include_once('_head.php');
include_once($skin_url.'/mylist_skin.php');
include_once('_footer.php');

?>

<script src="./js/myList.js"></script>