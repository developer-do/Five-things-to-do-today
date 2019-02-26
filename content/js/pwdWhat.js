let userID = document.querySelector('#userID');
let userBirthDay = document.querySelector('#userBirthDay');

let submitAjax = function () {
  $.ajax({
    url: '/mail/pwdMail.php',
    type: "POST",
    data: {
      userID: userID.value,
      userBirthDay: userBirthDay.value
    },
    success: function (data) {
      if (data === 'success') {
        alert("임시 비밀번호를 메일로 보내드렸습니다.");
        location.href = '/content/login.php';
      } else {
        alert("아이디나 생년월일이 틀렸습니다. 확인해주세요.");
      }
    }
  });
}


let submitBtnClick = function () {
  let submitBtn = document.querySelector('#submitBtn');
  submitBtn.addEventListener("click", submitAjax);
}
submitBtnClick();