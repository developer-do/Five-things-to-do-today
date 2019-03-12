// // 백그라운드 넣기
// let bgcFunc = function (num) {
//   let bgcImg = document.querySelector('#bgcImg');
//   bgcImg.style.backgroundImage = "url('../images/main"+ randomNum +".jpg')";
// }
// bgcFunc();

const bgc = {
  img(it, num) {
    let bgcImg = document.querySelector(it);
    bgcImg.style.backgroundImage = "url('../images/image" + num + ".jpg')";
  }
}

const random = {
  number() {
    let imgLen = 11;
    let randomNum = Math.floor(Math.random() * imgLen) + 1;
    return randomNum;
  }
}

bgc.img('#bgcImg', random.number());