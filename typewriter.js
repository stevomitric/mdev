function typeString($target, str, cursor, delay, cb) {
    $target.html(function(_, html) {
        return html + str[cursor];
    });

    if (cursor < str.length - 1) {
        setTimeout(function() {
            typeString($target, str, cursor + 1, delay, cb);
        }, delay);
    } else {
        cb();
    }
}