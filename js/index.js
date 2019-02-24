// 로그아웃
let logoutUrl = function () {
  location.href = '/check/logout.php';
};

let logoutFunc = function () {
  let logout = document.querySelector('.logout');
  logout.addEventListener('click', logoutUrl);
};
logoutFunc();

// 할일 값 체크
let tInput = function () {
  let todayToDo = document.querySelector('#todayToDo');
  let todaySubmit = document.querySelector('#todaySubmit');

  todayToDo.addEventListener('change', function () {
    if (!todayToDo.value) {
      todaySubmit.setAttribute('disabled', 'disabled');
    } else {
      todaySubmit.removeAttribute('disabled');
    }
  });
}
tInput();

// 백그라운드 넣기
let bgcFunc = function () {
  let bgcImg = document.querySelector('#bgcImg');
  let randomNum = Math.floor(Math.random() * 6) + 1;

  bgcImg.style.backgroundImage = "url('../images/main"+ randomNum +".jpg')";
}
bgcFunc();

