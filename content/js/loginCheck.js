let userIDRex         = /^[a-z]+[a-z0-9]{3,19}$/;
let userPasswordRex   = /(?=.*\d{1,50})(?=.*[\W]{1,50})(?=.*[a-zA-Z]{2,50}).{8,50}$/;

let form              = document.querySelector('form');
let userID            = document.querySelector('#userID');
let userPassword      = document.querySelector('#userPassword');
let formSubmitBtn     = document.querySelector('#formSubmitBtn');


let loginChk = function () {
  if (userIDRex.test(userID.value) && userPasswordRex.test(userPassword.value)) {
    $.ajax({
      url   : '../../check/loginCheck.php',
      type  : 'POST',
      data  : {
        ajaxUserID    : userID.value,
        ajaxPassword  : userPassword.value
      },
      success: function (data) {
        if (data === 'success') {
          alert("로그인 되셨습니다.");
          location.href = '/index.php';
        } else {
          alert("아이디 또는 비밀번호가 틀렸습니다. 확인해주세요!");
        }
      }
    });
  } else {
    alert("아이디 또는 비밀번호가 틀렸습니다. 확인해주세요!");
  }
}

formSubmitBtn.addEventListener("click", loginChk);
document.addEventListener('keydown', function (e) {
  if (e.keyCode === 13) {
    loginChk();
  }
});

