let formBtnClick = function () {
  let dataNumBtn = document.querySelectorAll('.dataNumBtn');
  
  for (let i = 0; i < dataNumBtn.length; i++) {
    (function (j) {
      dataNumBtn[j].addEventListener('click', function (e) {
        let question = confirm("정말 삭제하시겠습니까?");
        if (question) {
          let cntValue = document.querySelector('#cntValue');
          cntValue.value = this.getAttribute('data-num');  
        } else {
          e.preventDefault();
        }
      });   
    })(i);
  }
}
formBtnClick();

let showBtn = function () {
  let displayBtn = document.querySelectorAll('.displayBtn');
  let todoInfo = document.querySelectorAll('.todoInfo');
  let todoUpdate = document.querySelectorAll('.todoUpdate');
  let thisSubmit = document.querySelectorAll('.thisSubmit');

  for (let i = 0; i < displayBtn.length; i++){
    (function (j) {
      displayBtn[j].addEventListener('click', function (e) {
        todoInfo[j].classList.add('displayNone');
        thisSubmit[j].classList.remove('displayNone');
        todoUpdate[j].classList.remove('displayNone');
        e.preventDefault();
      });
    })(i);
  }
}
showBtn();

let updateSubmit = function () {
  let thisSubmit = document.querySelectorAll('.thisSubmit');
  for (let i = 0; i < thisSubmit.length; i++) {
    (function (j) {
      thisSubmit[j].addEventListener('click', function () {
        let updateCnt = document.querySelector('#updateCnt');
        let todoValueOutput = document.querySelector('#todoValueOutput');
        let todoValueInput = document.querySelectorAll('.todoValueInput');
        updateCnt.value = this.getAttribute('data-num');
        todoValueOutput.value = todoValueInput[j].value;
      });
    })(i);
  }
}
updateSubmit();
