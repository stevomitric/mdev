var prevScroll = 0;

function animateHomeScreen() {
    //$("#line-b-front").animate({
    //    width: 240,
    //}, 500);
    $("#im_logo").animate( {
        opacity:1,
    }, 1000);

    setTimeout(() => {
        startDrawingPath("#f-line1");
        startDrawingPath("#f-line2");
        startDrawingPath("#f-line3");
        startDrawingPath("#f-line4");
    }, 300);
    setTimeout(() => {
        startDrawingPath("#f-text1");
        startDrawingPath("#f-text2");
        startDrawingPath("#f-text3");
        startDrawingPath("#f-text4");
    }, 1000);

    setTimeout( function() {
        $("#over-div").animate( {
            opacity:0,
            marginTop:"-=50",
        }, 500);
    }, 3000)
}

function animateFontPage() {
    // hide menu
    $("#over-div").hide();
    //$("#nav-img")[0].style.marginLeft = '-10px';
    $("#nav-img").animate({marginLeft:0, opacity:1}, 500)

    // menu text
    for (let i = 1; i<= 4; ++i) {
        setTimeout(function() {
            $("#nav-a"+i)[0].style.marginRight = '-10px';
            $("#nav-a"+i).animate({marginRight:0, opacity:1}, 500)
        }, i*70);
    }

    $("#mainmenu").addClass("addbox");

    // 'stevo mitric' text
    for (let i = 1; i<= 5; ++i) {
        $("#text-intro"+i)[0].style.position = 'relative';
        $("#text-intro"+i)[0].style.top = '-10px';
        setTimeout(function() {  
            $("#text-intro"+i).addClass('notransition');
            setTimeout( function() { $("#text-intro"+i).removeClass('notransition'); }, 500 );

            $("#text-intro"+i).animate({top:0, opacity:1}, 500);
        }, i*200  );
    }
    // left icons
    for (let i = 1; i<= 5; ++i) {
        setTimeout(function() {
            $("#icon-intro"+i).addClass('notransition');
            setTimeout( function() { $("#icon-intro"+i).removeClass('notransition'); }, 500 );

            $("#icon-intro"+i).animate({marginLeft:'0px', opacity:1}, 300, 'linear');
        }, i*300 );
    }

    $(".appear").animate({opacity:1}, 500);
}

function scrolled() {
    let jobElem = ["j-rect1", "j-rect2", "j-rect3", "j-rect4"]
    for (let elem of jobElem) {
        let bottomY = $("#"+elem)[0].getBoundingClientRect().bottom;
        let t = $(window).height();
        //console.log(bottomY)
        if (!bottomY) continue;

        if (t-bottomY > -200 || (elem =="j-rect1" && t-bottomY >= -600)) {
            //console.log("anim: ", elem)
            scheduleAnimate(jobElem.indexOf(elem));
        }
    }

    $('.anim').each(function () {
        var y = $(this)[0].getBoundingClientRect().top;
        var t = $(window).height();
        if (t-y > 150) {
            $(this).removeClass("hidden");
        }
        if (t-y < 150) {
            $(this).addClass("hidden");
        }
    });


    // "things i've built"
    let top = $("#manage-width")[0].getBoundingClientRect().top;
    let screen_height = $(window).height();
    let width = 40 + Math.max(0, Math.min(((screen_height-top+150) / screen_height), 1)) * 40;
    if (screen_height-top > 150 && window.innerWidth/window.innerHeight > 1)
        $("#manage-width")[0].style.width = width+"%";

    
    // nav menu
    if (window.scrollY < 50 || prevScroll-40 >= window.scrollY) {
        $("#mainmenu")[0].style.top = "0";
    }
    else if (window.scrollY >= 100 && prevScroll <= window.scrollY) {
        let h = Math.round($("#mainmenu")[0].getBoundingClientRect().height) + 10;
        $("#mainmenu")[0].style.top = "-"+h+"px";
    }
    if (window.scrollY == 0) {
        $("#mainmenu")[0].style.boxShadow = "5px 5px 10px #314a69";
    } else { $("#mainmenu")[0].style.boxShadow = "5px 10px 8px #314a69"; }

    $(".project-img").each(function() {
        var y = $(this)[0].getBoundingClientRect().top;
        var t = $(window).height();
        y = Math.min( Math.max(0, y), t);
        let offset = y/t  *50;
        $(this)[0].style.top=offset+"px"; 
    });

    a_scrolled();

    if (prevScroll < window.scrollY) {
        prevScroll = window.scrollY;
    }
    if (prevScroll-40 > window.scrollY) {
        prevScroll = window.scrollY+40;
    }
}

function showRightMenu() {
    $("#right-menu").animate({left:'50vw'}, 200);
    //$("#left-blur").animate({opacity:1}, 200);
    $("#left-blur").show();
}
function hideRightMenu() {
    $("#right-menu").animate({left:'100vw'}, 200);
    //$("#left-blur").animate({opacity:0}, 200);
    $("#left-blur").hide()
}

$(document).ready(function() {
    animateHomeScreen();

    setTimeout(() => {
        $("#main").attr("hidden", false);
        animateFontPage();
        sa('JS_FRONT_PAGE_LOAD')
    }, 3500);
    //animateFontPage();

    // pusti video kada hoverujes preko projekta
    $( ".vid-play-enter" ).mouseenter(function() {
        $(this)[0].play();
    });

    window.onscroll = scrolled;
    scrolled();

    sa('JS_PAGE_LOAD')
});


// UNCOMENT FOR PRODUCTION
//var loc = window.location.href+'';
//if (loc.indexOf('http://')==0){
//    window.location.href = loc.replace('http://','https://');
//}