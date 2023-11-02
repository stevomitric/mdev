var canAnimateSection = [0,0,0,0]
var didAnimate = [0,0,0,0]
var animatingSection = false

var currentImage = 1
var currentSection = ""
var sectionImages = {"Microsoft": 3, "IOI": 8, "Oracle": 2, "TeachingAssistant": 2}

function expoDecrease_fast(iter, max) {
    if (iter > 0.95*max) return 0.5;
    if (iter > 0.9*max) return 1.5;
    if (iter > 0.8*max) return 2;
    if (iter > 0.5*max) return 3;
    if (iter > 0.4*max) return 4;
    if (iter > 0.3*max) return 5;
    if (iter > 0.2*max) return 5.5;
    return 5;
}

function changeAttribute(elemId, attr, from, to) {
    let abs = (to-from) > 0 ? to-from : from-to;
    if (abs <= 1) return;

    let add = 0.1 + abs/7;
    if (from-0 > to-0) add *= -1;
    
    from = from-0 + add;
    $("#"+elemId).attr(attr, from);
    setTimeout(()=>changeAttribute(elemId, attr,from, to), 1000/60 );

}

function animateFirstSection() {
    if (canAnimateSection[0] || didAnimate[0]) return;
    animatingSection = true;
    canAnimateSection[0] = 1;
    didAnimate[0] = 1


    let startAfter = 500;
    let ed2 = expoDecrease_fast;
    setTimeout(() => {
        startDrawingPath("#j-circle1", ed2);
    }, startAfter+100);
    setTimeout(() => {
        startDrawingPath("#j-line1", ed2);
    }, startAfter+300);

    setTimeout(() => {
        $("#j-text-2018").removeClass("hidden");
        changeAttribute("j-text-2018", "x", "480","460");

        animatingSection = false;
        if (canAnimateSection[1]) {
            animateSecondSection();
        }

    }, startAfter+600);

    setTimeout(() => {
        startDrawingPath("#j-line1a", ed2);
        startDrawingPath("#j-line1b", ed2);
    }, startAfter+1500);
    setTimeout(() => {
        changeAttribute("j-rect1", "width", "0","330");

    }, startAfter+1900);
    setTimeout(() => {
        $("#j-text-r1").animate({opacity: 1}, 100);
        $("#j-text-r2").animate({opacity: 1}, 100);
        $("#j-text-r3").animate({opacity: 1}, 100);
        setTimeout(()=> {
            $("#j-img-r1").animate({opacity: 1}, 500);
            $("#j-img-r2").animate({opacity: 1}, 500);
        }, 500)



    }, startAfter+2200);
    
}

function animateSecondSection() {
    canAnimateSection[1] = 1;
    if (animatingSection || didAnimate[1]) return;
    animatingSection = true;
    didAnimate[1] = 1;

    let startAfter = 100;
    let ed2 = expoDecrease_fast;
    
    setTimeout(() => {
        startDrawingPath("#j-line2", ed2);
    }, startAfter+300);

    setTimeout(() => {
        $("#j-text-2021").removeClass("hidden");
        changeAttribute("j-text-2021", "x", "480","500");

        animatingSection = false;
        if (canAnimateSection[2]) {
            animateThirdSection();
        }

    }, startAfter+800);

    setTimeout(() => {
        startDrawingPath("#j-line2a", ed2);
        startDrawingPath("#j-line2b", ed2);
    }, startAfter+1500);
    setTimeout(() => {
        changeAttribute("j-rect2", "width", "0","330");
        changeAttribute("j-rect2", "x", "400","70");

    }, startAfter+1900);
    setTimeout(() => {
        $("#j-text-l1").animate({opacity: 1}, 100);
        $("#j-text-l2").animate({opacity: 1}, 100);
        $("#j-text-l3").animate({opacity: 1}, 100);

        setTimeout(()=> {
            $("#j-img-l1").animate({opacity: 1}, 500);
            $("#j-img-l2").animate({opacity: 1}, 500);
        }, 500)
        


    }, startAfter+2200);
    
}

function animateThirdSection() {
    canAnimateSection[2] = 1;
    if (animatingSection || didAnimate[2]) return;
    animatingSection = true;
    didAnimate[2] = 1

    let startAfter = 100;
    let ed2 = expoDecrease_fast;
    
    setTimeout(() => {
        startDrawingPath("#j-line3", ed2);
    }, startAfter+300);

    setTimeout(() => {
        $("#j-text-2022").removeClass("hidden");
        changeAttribute("j-text-2022", "x", "480","460");

        animatingSection = false;
        if (canAnimateSection[3]) {
            animateForthSection();
        }

    }, startAfter+800);

    setTimeout(() => {
        startDrawingPath("#j-line3a", ed2);
        startDrawingPath("#j-line3b", ed2);
    }, startAfter+1500);
    setTimeout(() => {
        changeAttribute("j-rect3", "width", "0","330");

    }, startAfter+1900);
    setTimeout(() => {
        $("#j-text-r1b").animate({opacity: 1}, 100);
        $("#j-text-r2b").animate({opacity: 1}, 100);
        $("#j-text-r3b").animate({opacity: 1}, 100);
        $("#j-img-microsoft").animate({opacity: 1}, 100);

        setTimeout(()=> {
            $("#j-img-r1b").animate({opacity: 1}, 500);
            $("#j-img-r2b").animate({opacity: 1}, 500);
        }, 500)


    }, startAfter+2200);
    
}

function animateForthSection() {
    canAnimateSection[3] = 1;
    if (animatingSection || didAnimate[3]) return;
    animatingSection = true;
    didAnimate[3] = 1

    let startAfter = 100;
    let ed2 = expoDecrease_fast;
    
    setTimeout(() => {
        startDrawingPath("#j-line4", ed2);
    }, startAfter+300);

    setTimeout(() => {
        $("#j-text-2023").removeClass("hidden");
        changeAttribute("j-text-2023", "x", "480","500");
    }, startAfter+800);

    setTimeout(() => {
        startDrawingPath("#j-line4a", ed2);
        startDrawingPath("#j-line4b", ed2);
    }, startAfter+1500);
    
    setTimeout(() => {
        changeAttribute("j-rect4", "width", "0","330");
        changeAttribute("j-rect4", "x", "400","70");

    }, startAfter+1900);
    setTimeout(() => {
        $("#j-text-l1b").animate({opacity: 1}, 100);
        $("#j-text-l2b").animate({opacity: 1}, 100);
        $("#j-text-l3b").animate({opacity: 1}, 100);
        $("#j-img-oracle").animate({opacity: 1}, 100);

        setTimeout(()=> {
            $("#j-img-l1b").animate({opacity: 1}, 500);
            $("#j-img-l2b").animate({opacity: 1}, 500);
        }, 500)
    }, startAfter+2200);
}

function scheduleAnimate(section) {
    if (section == 0) animateFirstSection();
    else if (section == 1) animateSecondSection();
    else if (section == 2) animateThirdSection();
    else if (section == 3) animateForthSection();
}

function showImage(blank=false) {
    if (blank) {
        $("#image-menu-item").attr("src", "")
    } else {
        $("#image-menu-item").attr("src", "images/photos/" + currentSection + "/"+currentImage + ".jpg")
    }
}

function openImages(target="Microsoft", count=1) {
    showImage(true)
    //$("#images-menu").animate({left:'50vw'}, 200);
    $("#images-menu-blur").show();
    currentImage = count
    currentSection = target
    showImage()
}

function closeImages() {
    $("#images-menu-blur").hide();
}

function nextImage() {
    currentImage += 1
    if (currentImage > sectionImages[currentSection]) {
        currentImage = 1;
    }
    showImage();
}

function prevImage() {
    currentImage -= 1
    if (currentImage <= 0) {
        currentImage = sectionImages[currentSection];
    }
    showImage();
}