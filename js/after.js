//grab all the elements 
const collectionBtn = document.querySelector('.left');
const mainNav = document.querySelector('.mainnav');
const closeBtn = document.querySelector('.fa-times');
const audioControl = document.querySelector('#audio-control');
const ch1 = document.querySelector('#chapter1');
const ch2 = document.querySelector('#chapter2');
const ch3 = document.querySelector('#chapter3');
const ch4 = document.querySelector('#chapter4');
const myvid = document.querySelector('#myVideo');
const btnskip = document.querySelector('.btn-skip');
const landingpage1 = document.querySelector('#landingpage1');
const menubtn = document.querySelector('#menubar');
const prevBtn1 = document.querySelector('.prev-btn1');
const nextBtn1 = document.querySelector('.next-btn1');
const prevBtn2 = document.querySelector('.prev-btn2');
const nextBtn2 = document.querySelector('.next-btn2');
const prevBtn3 = document.querySelector('.prev-btn3');
const nextBtn3 = document.querySelector('.next-btn3');
const prevBtn4 = document.querySelector('.prev-btn4');
const nextBtn4 = document.querySelector('.next-btn4');
const bookapt = document.querySelector('#contact-btn');
const closeform = document.querySelector('.close');
const myvideo = document.querySelector('#myVideo');
const pop = document.querySelector('.bookapt1')



bookapt.addEventListener('click', () => {
    myvid.pause();
})
closeform.addEventListener('click', () => {
    myvid.play();
})

//mute icon animation
const muteIcon = document.querySelector('#mute');
// console.log(muteIcon);
muteIcon.style.cursor = "pointer";
muteIcon.style.animation = "shadowPulse 2s linear infinite";
muteIcon.style.borderRadius = "100%";

//prev button for video seek
prevBtn1.addEventListener('click', function() {
        prevBtn1.style.cursor = "pointer";
        video.currentTime = 0;
        $('#landingpage1').hide();
        $('#mute').show();
        $('.btn-skip').show();
        $('.zy-chapters-block').css('zIndex', 1)
        $('#custom-seekbar').css('zIndex', 99)
        video.play();

    })
    //next btn
nextBtn1.addEventListener('click', function() {

    nextBtn1.style.cursor = "pointer";
    $('#landingpage1').hide();
    $('.btn-skip').show();
    $('#mute').show();
    $('.header-nav').css('zIndex', 999)
    $('.header-nav').css('zIndex', 999)
    $('.btn-skip').show();
    $('.zy-chapters-block').css('zIndex', 1)
    $('#custom-seekbar').css('zIndex', 99)
    video.play();

})
prevBtn2.addEventListener('click', function() {

    prevBtn2.style.cursor = "pointer";
    video.currentTime = 28;
    $('#landingpage2').hide();
    $('#mute').show();
    $('.btn-skip').show();
    $('.header-nav').css('zIndex', 999)
    $('.zy-chapters-block').css('zIndex', 1)
    $('#custom-seekbar').css('zIndex', 99)
    video.play();

})

//next btn
nextBtn2.addEventListener('click', function() {
    nextBtn2.style.cursor = "pointer";

    $('#landingpage2').hide();
    $('#mute').show();
    $('.btn-skip').show();
    $('.header-nav').css('zIndex', 999)
    $('.zy-chapters-block').css('zIndex', 1)
    $('#custom-seekbar').css('zIndex', 99)
    video.play();

})
prevBtn3.addEventListener('click', function() {
    prevBtn3.style.cursor = "pointer";

    video.currentTime = 46;
    $('#landingpage3').hide();
    $('#mute').show();
    $('.btn-skip').show();
    $('.header-nav').css('zIndex', 999)
    $('.zy-chapters-block').css('zIndex', 1)
    $('#custom-seekbar').css('zIndex', 99)
    video.play();

})

//next btn
nextBtn3.addEventListener('click', function() {
    nextBtn3.style.cursor = "pointer";

    $('#landingpage3').hide();
    $('#mute').show();
    $('.btn-skip').show();
    $('.header-nav').css('zIndex', 999)
    $('.zy-chapters-block').css('zIndex', 1)
    $('#custom-seekbar').css('zIndex', 99)
    video.play();

})
prevBtn4.addEventListener('click', function() {

    prevBtn4.style.cursor = "pointer";
    video.currentTime = 84;
    $('#landingpage4').hide();
    $('#mute').show();
    $('.btn-skip').show();
    $('.header-nav').css('zIndex', 999)
    $('.zy-chapters-block').css('zIndex', 1)
    $('#custom-seekbar').css('zIndex', 99)
    video.play();

})

//next btn
nextBtn4.addEventListener('click', function() {

    nextBtn4.style.cursor = "pointer";
    video.currentTime = 0;
    $('#landingpage4').hide();
    $('#mute').show();
    $('.btn-skip').show();
    $('.header-nav').css('zIndex', 999)
    $('.zy-chapters-block').css('zIndex', 1)
    $('#custom-seekbar').css('zIndex', 99)
    video.play();

})





//open book an appointment in modals 
const bookaptone = document.querySelector('.bookapt1');
const bookapttwo = document.querySelector('.bookapt2');
const bookaptthree = document.querySelector('.bookapt3');
const bookaptfour = document.querySelector('.bookapt4');
const bookaptfive = document.querySelector('.bookapt5');
const bookaptsix = document.querySelector('.bookapt6');
const bookaptseven = document.querySelector('.bookapt7');
const bookapteight = document.querySelector('.bookapt8');
const bookaptmenu = document.querySelector('#menuapt')
const formClose = document.querySelector('.closeBtnForm');

bookaptmenu.addEventListener('click', () => {
    mainNav.style.right = "-80%";
    video.pause();
    mainNav.style.transition = "0.9s ";
    $('.find-modalin').addClass('d-block')
    $('.find-modalin').addClass('show');
})

// start video on form close
closeform.addEventListener('click', () => {
    video.play();
    myvideo.play();
})

//pause  video on form open
bookapt.addEventListener('click', () => {
        video.pause();
        myvideo.pause();
    })
    //banner 1,2,3,4 video timer
ch2.addEventListener('click', function() {
    // location.href = "http://localhost/zoya/collectiongsap.html";
    video.currentTime = 29;
    video.play();
})



document.addEventListener("DOMContentLoaded", function() {
    // slide menu on collection tab
    collectionBtn.addEventListener('click', function() {
        mainNav.classList.remove('d-none');
    })
    closeBtn.addEventListener('click', function() {
        mainNav.style.right = "-80%"
        mainNav.style.transition = "0.2s "
    })

    // slide menu on collection tab
    menubtn.addEventListener('click', function() {
        mainNav.classList.remove('d-none');
        mainNav.style.right = "-0%"
        mainNav.style.transition = "0.2s "
    })
    closeBtn.addEventListener('click', function() {
        mainNav.style.right = "-80%"
        mainNav.style.transition = "0.2s "
    })

});


if (ch1.style.display = "block") {
    myvid.pause();
} else if (ch2.style.display = "block") {
    myvid.pause();
} else if (ch3.style.display = "block") {
    myvid.pause();
} else if (ch4.style.display = "block") {
    myvid.pause();
} else {
    myvid.play();
}