var A_SCROLL_1 = false;
var A_SCROLL_2 = false;
var A_SCROLL_3 = false;

// Send analytics function.
function sa(action) {
    if (window.location.href.indexOf("ignore-analytics") != -1)
        return;
    setTimeout(() => {
        $.get("/analytics.php?action="+action);
    }, 1);
}

function a_scrolled() {
    if (!A_SCROLL_1 && window.scrollY > 0) {A_SCROLL_1=true; sa("JS_SCROLL_1");}
    if (!A_SCROLL_2 && window.scrollY > 900) {A_SCROLL_2=true; sa("JS_SCROLL_2");}
    if (!A_SCROLL_3 && window.scrollY > 3000) {A_SCROLL_3=true; sa("JS_SCROLL_3");}
}
