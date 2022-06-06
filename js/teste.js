function showMenu(){
    var hide = document.querySelectorAll(".shMenu")
    var btnMenu = document.querySelector("#btnMenu")
    btnMenu.classList.toggle("hide")
    hide[0].classList.toggle("hide")
    var i = 1
    const timer = setInterval(function() {
        if (i >= hide.length) {
          clearInterval(timer)
        }
        hide[i].classList.toggle("hide")
        i++
      }, 100)
}

function showMenuProf(){
  var hide = document.querySelectorAll(".hPerfil")
  hide[0].classList.toggle("hide")
    var i = 1
    const timer = setInterval(function() {
        if (i >= hide.length) {
          clearInterval(timer)
        }
        hide[i].classList.toggle("hide")
        i++
      }, 100)
}

// var body = document.querySelector("body")
// body.addEventListener('click', function(){
//   var item = document.querySelectorAll('.carItem img')
//     if(item[2].style.width == '150px'){
//       item[2].style.width = '100px'
//       item[2].style.transition = 'all 0.5s'
//       item[2].style.transform = 'perspective(500px) translate3d(100px, 0px, 100px) rotate3d(0, 1, 0, 20deg)';
//       item[3].style.width = '100px'
//       item[3].style.transition = 'all 0.5s'
//       item[3].style.transform = 'perspective(500px) translate3d(100px, 0px, 10px) rotate3d(0, 1, 0, 45deg)';
//       item[4].style.width = '100px'
//       item[4].style.transition = 'all 0.5s'
//       item[4].style.transform = 'perspective(500px) translate3d(45px, 0px, -80px) rotate3d(0, 1, 0, 65deg)';
//     }else{
//       item[2].style.width = '150px'
//       item[2].style.transition = 'all 0.5s'
//       item[2].style.transform = 'perspective(500px) translate3d(100px, 0px, 100px) rotate3d(0, 0, 0, 60deg)';
//     }
  
// })

var i = 0
var c = 0
setInterval(function (){
  var item = document.querySelectorAll('.carItem img')
  item[2].style.transition = 'all 0.5s'
  item[2].style.transform = 'perspective(500px) translate3d(-8px, 0px, 50px) rotate3d(0, -1, 0, 40deg)'
  item[3].style.transition = 'all 0.5s'
  item[3].style.transform = 'perspective(500px) translate3d(-15px, 0px, 100px) rotate3d(0, -1, 0, 20deg)'
  item[4].style.transition = 'all 0.5s'
  item[4].style.transform = 'perspective(500px) translate3d(0px, 0px, 150px) rotate3d(0, 0, 0, 40deg)'
  item[0].style.transition = 'all 0.5s'
  item[0].style.transform = 'perspective(500px) translate3d(15px, 0px, 100px) rotate3d(0, 1, 0, 20deg)'
  item[1].style.transition = 'all 0.5s'
  item[1].style.transform = 'perspective(500px) translate3d(8px, 0px, 50px) rotate3d(0, 1, 0, 40deg)'
}
, 1000)