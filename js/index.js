// 로그아웃
let logoutUrl = function () {
  location.href = 'check/logout.php';
};

let logoutFunc = function () {
  let logout = document.querySelector('.logout');
  logout.addEventListener('click', logoutUrl);
};
logoutFunc();

// 할일 값 체크
let tInput = function () {
  let todayToDo = document.querySelector('#todayToDo');
  return todayToDo.value;
}

let checktodoInput = function () {
  let todaySubmit = document.querySelector('#todaySubmit');
  
  todaySubmit.addEventListener('click', function (e) {
    if (!tInput()) {
      let todayToDo = document.querySelector('#todayToDo');
      alert('할 일을 적어주세요!');
      todayToDo.focus();
      e.preventDefault();  
    } else {
      let conf = confirm('추가 할 일이 ' + tInput() + '이 맞으십니까?');
      if (!conf) {
        e.preventDefault();
      }
    }
  });
}
checktodoInput();

