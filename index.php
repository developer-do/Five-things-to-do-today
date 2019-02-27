<?php include_once('head.php'); ?>

<?php
  $hTag = "";
  if(_INDEX_) {
    $hTag = "<h1 class='headerTags notUserName'>To Do List!</h1>";
  }

  $loginTag = "<a href='{$content}/login.php'>로그인</a>";
  $joinTag  = "<a href='{$content}/join.php'>회원가입</a>";
  $welcome  = "To Do List에 온걸 환영합니다!";
  $infoTag  = "";
  $pwdWhat  = "<a href='{$content}/pwdWhat.php'>비밀번호 찾기</a>";

  if(isset($_SESSION['userName'])) {
    $hTag = "<h1 class='headerTags'>To Do List!</h1>";
    $loginTag = "<button class='logout'>로그아웃</button>";
    $joinTag  = "<a href='{$content}/mylist.php'>나의 리스트</a>";
    $infoTag  = "<a href='{$content}/myinfo.php'>나의정보</a>";
    $welcome  = $_SESSION['userName']."님! To Do List에 온걸 환영합니다!";
    $pwdWhat  = "";
  }
?>



<div class="wrapCenter">
  <div>
    <?= $hTag ?>
    <p class="headerTags"><?= $welcome ?></p>
    <?php if(isset($_SESSION['userName'])) { ?>
    <form action="/check/todoAdd.php" method="POST" id="todayForm">
      <div class="formInWrap">
        <div class="todoBox">
          <input type="text" name="todayToDo" id="todayToDo" placeholder="To Do ADD!!">
        </div>
        <input type="submit" value="To Do" id="todaySubmit">
      </div>
    </form>
    <?php } else { ?>
      <p class="loginPlease notlogin">로그인 후 해당 서비스 이용이 가능 합니다!</p>
    <?php } ?>
    <div class="memberWrap">
      <p><?= $loginTag ?></p>
      <p><?= $joinTag ?></p>
      <p><?= $infoTag ?></p>
      <p><?= $pwdWhat ?></p>
    </div>
  </div>
</div>

<?php include_once('footer.php'); ?>