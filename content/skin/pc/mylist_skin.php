<div id="todoList">


<form action="/check/deleteAndUpaate.php" method="POST">
  
  <?php if(sizeof($arr)) { ?>
    <h1><?= $_SESSION['userName'] ?>님 의 To Do List 입니다.</h1>
    <?php for($i = 0; $i < sizeof($arr); $i++) { ?>

    <div>
      <span class="todoInfo"><?= $arr[$i]['todo'] ?></span>
      <span class="todoUpdate displayNone"><input type="text" name="todoValueInput" class="todoValueInput" value="<?= $arr[$i]['todo']?>"></span>

      <button data-num="<?= $arr[$i]['cnt']?>" class="dataNumBtn"><i class="fas fa-trash-alt"></i></button>
      <button class="displayBtn"><i class="fas fa-pencil-alt"></i></button>
      <button data-num="<?= $arr[$i]['cnt']?>"class="thisSubmit displayNone">수정 완료</button>
    </div>

  <?php 
    } 
  } else { ?>

  <h1><?= $_SESSION['userName'] ?>님 의 To Do List가 존재하지 않습니다.</h1>

  <?php } ?>
  <input type="hidden" name="cntValue" value="" id="cntValue">
  <input type="hidden" name="updateCnt" value="" id="updateCnt">
  <input type="hidden" name="todoValueOutput" value="" id="todoValueOutput" >
  
</form>
</div>