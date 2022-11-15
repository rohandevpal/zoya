$('#btn1').show();
$('#btn2').hide();
$('#btn3').hide();
$('#btn4').hide();
/* Keyboard space pause */
$(window).keypress(function(e) {
    var video = document.getElementById("vid1");
    console.log(video);
    if (e.which == 32) {
        if (video.paused) video.play();
        else video.pause();
    }
});
/* Keyboard space pause */
$("#audio-control, #audio-control-landing,#audio-control-main").click(function() {
    if ($("#myVideo,#vid1").prop("muted")) {
        $("#myVideo,#vid1").prop("muted", false);
        document.getElementById("mute").src = "images/unmute.svg";

    } else {
        $("#myVideo,#vid1").prop("muted", true);
        document.getElementById("mute").src = "images/mute.svg";
    }
});
/* video mute unmute js end */
/* loading js start */
const loading = document.querySelector('.loading');
setTimeout(() => {
    loading.style.display = "none"
}, 3000);
/* loading js end */
/* nav js start */
$(document).ready(function() {
    $(".left").click(function() {
        $(".mainnav").animate({
            right: "0px"
        }, 500);
    });
    $(".close-toggle").click(function() {
        $(".mainnav").animate({
            right: "-80%"
        }, 500);
    });
});
/* nav js end */
$('#myvideo').hover(function toggleControls() {
    if (this.hasAttribute("controls")) {
        this.removeAttribute("controls")
    } else {
        this.setAttribute("controls", "controls")
    }
})
AOS.init();
$('#one').on('click', function() {
        $('#checkVideo').val(1);
    })
    /* Collection Page js start */
var video = document.getElementById("vid1");
video.addEventListener("timeupdate", function() {
    if (this.currentTime >= 25.8 && this.currentTime <= 26.9) {
        setTimeout(
            function() {
                video.pause();
                $('#landingpage1').show();
                $('.header-nav').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', -0)
                $('.zy-chapters-block').css('zIndex', -0)
                $('#mute').hide();
                $('.btn-skip').hide();
                // console.log('paused 1')
            }, 1000);
        setTimeout(function() {
            if ($('#checkVideo').val() == 0) {
                video.play();
                $('#landingpage1').hide();
                $('#mute').show();
                $('.btn-skip').show();
                $('.header-nav').css('zIndex', 999)
                $('.zy-chapters-block').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', 99);
            }
        }, 10000);
        $("#clickbox1").on('click', function() {
            video.play();
            $('#landingpage1').hide();
            $('#mute').show();
            $('.btn-skip').show();
            $('.zy-chapters-block').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', 99)
        });
    } else if (this.currentTime >= 56.5 && this.currentTime <= 57) {
        setTimeout(function() {
            video.pause();
            $('#landingpage2').show();
            $('.header-nav').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', -0)
            $('.zy-chapters-block').css('zIndex', -0)
            $('#mute').hide();
            $('.btn-skip').hide();
            // $('.zy-chapters-block').css('zIndex', -0)
            // console.log('paused 2')
        }, 1000);
        setTimeout(function() {
            if ($('#checkVideo').val() == 0) {
                video.play();
                $('#landingpage2').hide();
                $('#mute').show();
                $('.btn-skip').show();
                $('.header-nav').css('zIndex', 999)
                $('.zy-chapters-block').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', 99)
                    // console.log('Video Paused for interval');
            }
            //if(document.getElementById('button').clicked == true){
        }, 10000);
        $("#clickbox2").on('click', function() {
            video.play();
            $('#landingpage2').hide();
            $('#mute').show();
            $('.btn-skip').show();
            $('.zy-chapters-block').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', 99)
        });
    } else if (this.currentTime >= 82.4 && this.currentTime <= 83) {
        setTimeout(function() {
            video.pause();
            $('#landingpage3').show();
            $('.header-nav').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', -0)
            $('.zy-chapters-block').css('zIndex', -0)
            $('#mute').hide();
            $('.btn-skip').hide();

            // console.log('paused 3')
        }, 1000);
        setTimeout(function() {
            if ($('#checkVideo').val() == 0) {
                video.play();
                $('#landingpage3').hide();
                $('#mute').show();
                $('.btn-skip').show();
                $('.header-nav').css('zIndex', 999)
                $('.zy-chapters-block').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', 99)
                    // console.log('Video Paused for interval')
            }
            //if(document.getElementById('button').clicked == true){
        }, 10000);
        $("#clickbox3").on('click', function() {
            video.play();
            $('#landingpage3').hide();
            $('#mute').show();
            $('.btn-skip').show();
            $('.zy-chapters-block').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', 99)
        }, );
    } else if (this.currentTime >= 148.7 && this.currentTime <= 149.5) {
        setTimeout(function() {
            video.pause();
            $('#landingpage4').show();
            $('.header-nav').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', -0)
            $('.zy-chapters-block').css('zIndex', -0)
            $('#mute').hide();
            $('.btn-skip').hide();
            $('.btn-skip').hide();
            // console.log('paused 4')
        }, 1000);
        setTimeout(function() {
            if ($('#checkVideo').val() == 0) {
                video.play();
                $('#landingpage4').hide();
                $('#mute').show();
                $('.btn-skip').hide();
                $('.header-nav').css('zIndex', 999)
                $('.zy-chapters-block').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', 99)
                    // console.log('Video Paused for interval')
            }
            //if(document.getElementById('button').clicked == true){
        }, 10000);
        $("#clickbox4").on('click', function() {
            video.pause();
            $('#landingpage4').hide();
            $('#mute').show();
            $('.btn-skip').hide();
            $('.zy-chapters-block').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', 99)
        });
    }
}, false);

function chapter1() {
    video.play();
    video.currentTime = 0;
    $('#btn1').show();
    $('#btn2').hide();
    $('#btn3').hide();
    $('#btn4').hide();
}

function chapter2() {
    video.play();
    video.currentTime = 28;
    $('#btn1').hide();
    $('#btn2').show();
    $('#btn3').hide();
    $('#btn4').hide();
}

function chapter3() {
    video.play();
    video.currentTime = 57;
    $('#btn1').hide();
    $('#btn2').hide();
    $('#btn3').show();
    $('#btn4').hide();
}

function chapter4() {
    video.play();
    video.currentTime = 84;
    $('#btn1').hide();
    $('#btn2').hide();
    $('#btn3').hide();
    $('#btn4').show();
}

function pause() {
    video.pause();
}

function play() {
    video.play();
    video.currentTime = 30;
}
$("#chapter1").on('click', function() {
    chapter1();
});
$("#chapter2").on('click', function() {
    chapter2();
});
$("#chapter3").on('click', function() {
    chapter3();
});
$("#chapter4").on('click', function() {
    chapter4();
});
/* test box */
var vid = document.getElementById("vid1");
vid.ontimeupdate = function() {
    var percentage = (vid.currentTime / vid.duration) * 100;
    $("#custom-seekbar span").css("width", percentage + "%");
};
$("#custom-seekbar").on("click", function(e) {
    var offset = $(this).offset();
    var left = (e.pageX - offset.left);
    var totalWidth = $("#custom-seekbar").width();
    var percentage = (left / totalWidth);
    var vidTime = vid.duration * percentage;
    vid.currentTime = vidTime;
}); //click()
// /* Collection Page js End */



/* Banner Page click chnages */
addEventListener('DOMContentLoaded', (event) => {
    // console.log(window.location.search);
    if (window.location.search == '?=chapter2') {
        video.currentTime = 27.1;
    } else if (window.location.search == '?=chapter3') {
        video.currentTime = 57.1;
    } else if (window.location.search == '?=chapter4') {
        video.currentTime = 84.1;
    }
});



/* Banner Page click chnages */
$('#one').on('click', function() {
        $('#checkVideo').val(1);
    })
    /* btn skip to next chapter */
$('.btn-skip').on('click', function() {
        if (video.currentTime <= 27) {
            video.currentTime = 27.1;
            video.pause();
            $('#landingpage1').show();
            $('#custom-seekbar').css('zIndex', -0)
            $('.zy-chapters-block').css('zIndex', -0)
            $('.header-nav').css('zIndex', 1)
            $('#mute').hide();
            $('.btn-skip').hide();

            setTimeout(function() {
                if ($('#checkVideo').val() == 0) {
                    video.play();
                    $('#landingpage1').hide();
                    $('#mute').show();
                    $('.btn-skip').show();
                    $('.header-nav').css('zIndex', 999)
                    $('.zy-chapters-block').css('zIndex', 1)
                    $('#custom-seekbar').css('zIndex', 99)
                        // console.log('Video Paused for interval')
                }
                //if(document.getElementById('button').clicked == true){
            }, 10000);

            $("#clickbox1").on('click', function() {
                $('#landingpage1').hide();
                $('#mute').show();
                $('.btn-skip').show();
                $('.zy-chapters-block').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', 99)
                video.play();
            });

        } else if (video.currentTime <= 55.9) {
            video.pause();
            video.currentTime = 57.1;
            $('#landingpage2').show();
            $('#landingpage1').hide();
            $('.header-nav').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', -0)
            $('.zy-chapters-block').css('zIndex', -0)
            $('#mute').hide();
            $('.btn-skip').hide();

            setTimeout(function() {
                if ($('#checkVideo').val() == 0) {
                    video.play();
                    $('#landingpage2').hide();
                    $('#mute').show();
                    $('.btn-skip').show();
                    $('.header-nav').css('zIndex', 999)
                    $('.zy-chapters-block').css('zIndex', 1)
                    $('#custom-seekbar').css('zIndex', 99)
                        // console.log('Video Paused for interval')
                }
                //if(document.getElementById('button').clicked == true){
            }, 10000);

            $("#clickbox2").on('click', function() {
                $('#landingpage2').hide();
                $('#mute').show();
                $('.btn-skip').show();
                $('.zy-chapters-block').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', 99)
                video.play();

            });
        } else if (video.currentTime <= 83) {
            video.pause();
            video.currentTime = 83.1;
            $('#landingpage3').show();
            $('#landingpage2').hide();
            $('.header-nav').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', -0)
            $('.zy-chapters-block').css('zIndex', -0)
            $('#mute').hide();


            setTimeout(function() {
                if ($('#checkVideo').val() == 0) {
                    video.play();
                    $('#landingpage3').hide();
                    $('#mute').show();
                    $('.btn-skip').show();
                    $('.header-nav').css('zIndex', 999)
                    $('.zy-chapters-block').css('zIndex', 1)
                    $('#custom-seekbar').css('zIndex', 99)
                        // console.log('Video Paused for interval')
                }
                //if(document.getElementById('button').clicked == true){
            }, 10000);

            $("#clickbox3").on('click', function() {
                $('#landingpage3').hide();
                $('#mute').show();
                $('.btn-skip').show();
                $('.zy-chapters-block').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', 99)
                video.play();

            });
        } else if (video.currentTime <= 108.9) {
            video.pause();
            video.currentTime = 109.5;
            $('#landingpage4').show();
            $('#landingpage3').hide();
            $('.header-nav').css('zIndex', 1)
            $('#custom-seekbar').css('zIndex', -0)
            $('.zy-chapters-block').css('zIndex', -0)
            $('#mute').hide();
            $('.btn-skip').hide();

            setTimeout(function() {
                if ($('#checkVideo').val() == 0) {
                    video.play();
                    $('#landingpage4').hide();
                    $('#mute').show();
                    $('.btn-skip').hide();
                    $('.header-nav').css('zIndex', 999)
                    $('.zy-chapters-block').css('zIndex', 1)
                    $('#custom-seekbar').css('zIndex', 99)
                        // console.log('Video Paused for interval')
                }
            }, 10000);

            $("#clickbox4").on('click', function() {
                $('#landingpage4').hide();
                $('#mute').show();
                $('.btn-skip').hide();
                $('.zy-chapters-block').css('zIndex', 1)
                $('#custom-seekbar').css('zIndex', 99)
                video.play();
            });
        }
    })
    /* btn skip to next chapter */