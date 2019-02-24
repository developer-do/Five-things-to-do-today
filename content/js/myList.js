let formBtnClick = function () {
  let dataNumBtn = document.querySelectorAll('.dataNumBtn');
  
  for (let i = 0; i < dataNumBtn.length; i++) {
    (function (j) {
      dataNumBtn[j].addEventListener('click', function (e) {
        let prom = confirm("정말 삭제하시겠습니까?");
        if (prom) {
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