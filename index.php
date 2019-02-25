<?php include_once('head.php'); ?>

<div class="wrapCenter">
  <h1 class="headerTags"><?= $hTag ?></h1>
  <p class="headerTags"><?= $welcome ?></p>
  <?php if(isset($_SESSION['userName'])) { ?>
  <form action="/check/todoAdd.php" method="POST" id="todayForm">
    <div class="formInWrap">
      <div class="todoBox">
        <input type="text" name="todayToDo" id="todayToDo">
      </div>
      <input type="submit" value="할 일 추가하기" id="todaySubmit">
    </div>
  </form>
  <?php } else { ?>
    <p class="loginPlease">로그인 후 해당 서비스 이용이 가능 합니다!</p>
  <?php } ?>
  <div class="memberWrap">
    <p><?= $loginTag ?></p>
    <p><?= $joinTag ?></p>
    <p><?= $infoTag ?></p>
  </div>
</div>

<?php include_once('footer.php'); ?>