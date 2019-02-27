// 백그라운드 넣기
let bgcFunc = function () {
  let bgcImg = document.querySelector('#bgcImg');
  let randomNum = Math.floor(Math.random() * 6) + 1;

  bgcImg.style.backgroundImage = "url('../images/main"+ randomNum +".jpg')";
}
bgcFunc();