let userBirthDay      = document.querySelector('#userBirthDay');
let userEmail         = document.querySelector('#userEmail');
let userPassword      = document.querySelector('#userPassword');
let userPasswordChk   = document.querySelector('#userPasswordCHk');
let userName          = document.querySelector('#userName');
let submitBtn         = document.querySelector('#submitBtn');

let userNameRex       = /^[가-힣]{2,6}|[a-zA-Z]{2,14}\s[a-zA-Z]{2,14}$/;
let userPasswordRex   = /(?=.*\d{1,50})(?=.*[\W]{1,50})(?=.*[a-zA-Z]{2,50}).{8,50}$/;
let userBirthDayRex   = /^(19[0-9][0-9]|20\d{2})(0[1-9]|1[0-2])([0-2][0-9]|[3][0-1]){1,8}$/;
let userEmailRex      = /^[a-zA-Z0-9\W]{2,20}@[a-z]{2,10}.[a-z]{2,5}$/;

let valueChk = function (e) {
  if (!userNameRex.test(userName.value)) {
    alert("이름 형식이 잘못되었습니다.");
    userName.focus();
    e.preventDefault();
    return false;
  }

  if (!userBirthDayRex.test(userBirthDay.value)) {
    alert("생년월일 형식이 잘못되었습니다.");
    userBirthDay.focus();
    e.preventDefault();
    return false;
  }

  if (!userEmailRex.test(userEmail.value)) {
    alert("이메일 형식이 잘못되었습니다.");
    userEmail.focus();
    e.preventDefault();
    return false;
  }

  if ( userPassword.value != "" && !userPasswordChk.value != "" ) {
    if (!userPasswordRex.test(userPassword.value)) {
      alert("비밀번호 형식이 잘못되었습니다.");
      userPassword.focus();
      e.preventDefault();
      return false;
    }
  
    if (!userPasswordRex.test(userPasswordChk.value)) {
      alert("비밀번호 형식이 잘못되었습니다.");
      userPasswordChk.focus();
      e.preventDefault();
      return false;
    }
  
    if (userPassword.value !== userPasswordChk.value) {
      alert("비밀번호가 다릅니다. 비밀번호를 확인해주세요!");
      userPasswordChk.focus();
      e.preventDefault();
      return false;
    }
  }
};

let eventInit = function () {
  submitBtn.addEventListener('click', valueChk);
};
eventInit();

let userPwdChk = function () {
  let prom = prompt('현재 비밀번호를 입력해주세요.');
  return prom;
}

let ajaxPwdChk = function () {
  $.ajax({
    url: '../../check/myInfoChange.php',
    type: 'POST',
    data: {
      ajaxPwd: userPwdChk()
    },
    success: function (data) {
      if (data == 'success') {
        let infoUpdate = document.querySelector('#infoUpdate');
        infoUpdate.classList.remove('displayNone');
      }
    }
  });
};

let myinfoBtn = function () {
  let myinfoChange = document.querySelector('#myinfoChange');
  myinfoChange.addEventListener('click', ajaxPwdChk);
}
myinfoBtn();