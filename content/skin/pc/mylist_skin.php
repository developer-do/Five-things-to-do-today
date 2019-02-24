<div id="todoList">


<form action="/check/deleteData.php" method="POST">
  
  <?php if(sizeof($arr)) { ?>
    <h1><?= $_SESSION['userName'] ?>님 의 To Do List 입니다.</h1>
    <?php for($i = 0; $i < sizeof($arr); $i++) { ?>

    <div>
      <span><?= $arr[$i]['todo'] ?></span>
      <button data-num="<?= $arr[$i]['cnt']?>" class="dataNumBtn"><i class="fas fa-trash-alt"></i></button>
    </div>

  <?php 
    } 
  } else { ?>

  <h1><?= $_SESSION['userName'] ?>님 의 To Do List가 존재하지 않습니다.</h1>

  <?php } ?>

  <input type="hidden" name="cntValue" value="" id="cntValue">
</form>
</div>