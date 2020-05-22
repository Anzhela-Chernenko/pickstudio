
var swiper = new Swiper('.s_c_slide', {
    spaceBetween: 0,
    centeredSlides: true,
    speed: 4500,
    autoplay: {

        delay: 5500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.s_b_next',
        prevEl: '.s_b_prev',
    },
});

var swiper = new Swiper('.s_container', {
    speed: 600,
    parallax: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.s_b_prev__feedback',
        prevEl: '.s_b_next__feedback',
    },
});

function action(){
    let elemList=document.getElementById('setOrder');
    if(elemList != null){
        elemList.addEventListener('click',function () {
            document.getElementById('order').style.display = 'flex';
        });
    }

let goAway = document.querySelector('.exit');
    if(goAway != null){
        goAway.addEventListener('click',function () {
            document.getElementById('order').style.display = 'none';
        });
    }




}

action();



function byeExit(){


   document.getElementById('byeInfo').style.display = 'none';
    window.location.href = 'http://portfolioanzhela/';


}

function fullImg() {


    let list = document.querySelectorAll('.pictureHover');
    list.forEach(function(elem) {
        elem.addEventListener("focus", function(event){


            this.setAttribute('style', 'height: 2100px;max-height: 100%;margin-bottom: 100px;display:flex;align-item:center;background-color: black;width: 100%;position: relative;z-index: 10;background-position-y: top;top: 100px;background-size: contain;');
            //console.log(event);
            elem.children[0].style.visibility = 'collapse';
            event.path[2].style.justifyContent = 'center';
            document.querySelector('.header').style.cssText = "height: 100px;position:fixed;";
            document.querySelector('.positionPic').style.justifyContent = 'center';
            event.target.nextElementSibling.style.position = 'absolute';
            event.target.nextElementSibling.children[2].style.display = 'none';

        });

        elem.addEventListener("blur", function(event){
            document.querySelector('.header').style.cssText = "height: 100%;position:relative;";
            elem.children[0].style.cssText = 'visibility:visible;width:100%';
            this.setAttribute('style', 'background-color: transparent;width: 48%;position: relative;z-index: 1;background-position-y: top;background-size: cover;');
            event.target.nextElementSibling.style.position = 'relative';
            event.target.nextElementSibling.children[2].style.display = 'flex';
        });

    });


}
fullImg();


$(document).ready(function(){

    $("#calc").on("click","a", function (event) {
        //отменяем стандартную обработку нажатия по ссылке
        event.preventDefault();
        //забираем идентификатор бока с атрибута href
        let id  = $(this).attr('href'),
            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
        //анимируем переход на расстояние - top за 1500 мс
        $('body,html').animate({scrollTop: top}, 2500);
    });


});

function getOrderForm() {
    console.log('hello');
document.getElementById('order').style.display = 'flex';

}




