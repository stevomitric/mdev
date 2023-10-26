
/* https://stackoverflow.com/questions/14275249/how-can-i-animate-a-progressive-drawing-of-svg-path */

var drawFPS = 60;
var timers = {};

function expoDecrease(iter, max) {
    if (iter > 0.95*max) return 0.3;
    if (iter > 0.9*max) return 0.5;
    if (iter > 0.8*max) return 1;
    if (iter > 0.5*max) return 2;
    if (iter > 0.4*max) return 3;
    if (iter > 0.3*max) return 4;
    if (iter > 0.2*max) return 5;
    return 5;
}

function startDrawingPath(elem){
    let orig = $(elem)[0];
    let length = 0;

    orig.style.strokeDasharray = [0,orig.getTotalLength()].join(' ');
    orig.style.opacity = 1;

    let timer = setInterval( function() {
        let pathLength = orig.getTotalLength();
        length += expoDecrease(length, pathLength);
        orig.style.strokeDasharray = [length,pathLength].join(' ');
        if (length >= pathLength) stopTimer(elem);
    } ,1000/drawFPS);

    timers[elem] = timer;
}


function stopTimer(elem) {
    while (!timers[elem]) {}
    clearInterval(timers[elem]);
}