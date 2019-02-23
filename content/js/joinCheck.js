/**
 * userBirthDayRex  =>
 * 19 또는 20으로 시작되는 4개의 년도와
 * 1월 ~ 12월 까지의 월과
 * 1일부터 31일까지 8개의 숫자로 이루어져야 한다.

 * userPasswordRex  => 비밀번호는 특수문자를 숫자, 특문 각 1회 이상, 영문은 2개 이상 사용하여 8자리 이상 입력하여야 합니다.

 * userNameRex      => 이름은 한글이라면 2~6글자(공백 x) ||(또는)
 * 영문이라면 firstName 2~14글자 lastName 2~14글자로 입력해주세요.

 * userIDRex        => id는 영문자로 시작하는 6~20자 영문자 또는 숫자여야 합니다.
 * userEmailRex     => email영문 소,대문자, 숫자로 이루어진 2~20자 @ 이후 영문자 2~10자 . 이후 영문자 2~5자
*/
(function () {
  let joinForm          = document.querySelector('#joinForm');
  let userID            = document.querySelector('#userID');
  let checkID           = document.querySelector('#checkID');
  let userName          = document.querySelector('#userName');
  let userPassword      = document.querySelector('#userPassword');
  let userPasswordChk   = document.querySelector('#userPasswordChk');
  let userBirthDay      = document.querySelector('#userBirthDay');
  let userEmail         = document.querySelector('#userEmail');
  let lastChk           = document.querySelector('#lastChk');
  let formSubmitBtn     = document.querySelector('#formSubmitBtn');
  let inputAll          = document.querySelectorAll('#joinForm input');
  
  let existID           = false;
  let checkPasswordBool = false;

  let userIDRex         = /^[a-z]+[a-z0-9]{3,19}$/;
  let userNameRex       = /^[가-힣]{2,6}|[a-zA-Z]{2,14}\s[a-zA-Z]{2,14}$/;
  let userPasswordRex   = /(?=.*\d{1,50})(?=.*[\W]{1,50})(?=.*[a-zA-Z]{2,50}).{8,50}$/;
  let userBirthDayRex   = /^(19[0-9][0-9]|20\d{2})(0[1-9]|1[0-2])([0-2][0-9]|[3][0-1]){1,8}$/;
  let userEmailRex      = /^[a-zA-Z0-9\W]{2,20}@[a-z]{2,10}.[a-z]{2,5}$/;
  
  let falseFunc = function(formSubmitBtn, e) {
    formSubmitBtn.setAttribute('disabled', 'disabled');
    e.preventDefault();
    return false;
  }

  let valueChk = function (e) {
    if (!userIDRex.test(userID.value)) {
      alert("아이디는 최소 4자리 최대 20자리입니다.");
      userID.focus();
      return falseFunc(formSubmitBtn, e);
    }

    if (!userNameRex.test(userName.value)) {
      userName.focus();
      return falseFunc(formSubmitBtn, e);
    }

    if (!userPasswordRex.test(userPassword.value)) {
      userPassword.focus();
      return falseFunc(formSubmitBtn, e);
    }

    if (!userBirthDayRex.test(userBirthDay.value)) {
      userBirthDay.focus();
      return falseFunc(formSubmitBtn, e);
    }

    if (!userEmailRex.test(userEmail.value)) {
      userEmail.focus();
      return falseFunc(formSubmitBtn, e);
    }

    if (userPassword.value === userPasswordChk.value) {
      checkPasswordBool = true;
    } else {
      checkPasswordBool = false;
      alert("비밀번호를 확인해주세요.");
    }

    if (!checkPasswordBool || !existID) {
      return falseFunc(formSubmitBtn, e);
    } else {
      formSubmitBtn.removeAttribute('disabled', 'disabled');
    }
  }
  
  let checkIDFunc = function() {
    if (userIDRex.test(userID.value)) {
      $.ajax({
        url  : '../../check/memberIdExist.php',
        type : 'POST',
        data : {
          ajaxUserID : userID.value
        },
        success : function(data) {
          let regExp = /true/gi;
          if (regExp.test(data) === true) {
            existID = true;
            lastChk.removeAttribute('disabled', 'disabled');
            alert("사용 가능한 아이디 입니다.");
          } else {
            existID = false;
            lastChk.setAttribute('disabled', 'disabled');
            alert("사용 불가능한 아이디 입니다.");
          }
        }
      });
    } else {
      alert("아이디는 최소 4자리 최대 20자리입니다.");
    }
  }

  function idChange() {
    lastChk.setAttribute('disabled', 'disabled');
    formSubmitBtn.setAttribute('disabled', 'disabled');
  }
  function inputChange() {
    formSubmitBtn.setAttribute('disabled', 'disabled');
  }
  
  for (let i = 0; i < inputAll.length; i++) {
    inputAll[i].addEventListener('change', inputChange);
  }

  userID.addEventListener('change', idChange);
  lastChk.addEventListener('click', valueChk);
  checkID.addEventListener('click', checkIDFunc);

})();


