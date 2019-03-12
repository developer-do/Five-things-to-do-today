<?php 
if(_INDEX_ && isset($_SESSION['userName'])) {
  echo '<script src="/js/index.js"></script>';
}
if(_INDEX_) {
  echo '<script src="/js/common.js"></script>';
  echo '<script src="/js/weather.js"></script>';
}
?>

</div>
</body>
</html>