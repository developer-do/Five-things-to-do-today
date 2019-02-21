<?php include_once('common.php'); ?>
<?php include_once('head.php'); ?>

<div class="wrapCenter">
  <p>To Do List에 온걸 환영합니다!</p>
  <form action="" method="POST">
    <div>
      <input type="text" name="importantToDo" placeholder="중요한 할 일이라면 여기다가 작성해주세요.">
    </div>
    <div>
      <input type="text" name="todayToDo" placeholder="오늘 해야 될 일이라면 여기다가 작성해주세요.">
    </div>
    <div>
      <input type="submit" value="할 일 추가하기">
    </div>
  </form>
  <div>
    <p><a href="<?=$content ?>/login.php">로그인하기</a></p>
    <p><a href="<?=$content ?>/join.php">회원가입하기</a></p>
    <p><a href="<?=$content ?>/info.php">이용방법</a></p>
  </div>
</div>

<?php include_once('footer.php'); ?>