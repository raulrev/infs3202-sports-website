$(document).ready(function(){
var $root = $('html, body');
$('a').click(function() {
    var href = $.attr(this, 'href');
    $root.animate({
        scrollTop: $(href).offset().top
    }, 2000, function () {
        window.location.hash = href;
    });
    return false;
});
});