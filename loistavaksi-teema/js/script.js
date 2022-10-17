var navOpen = false;

function navbar() {
    if(navOpen) {
        navOpen = false;
        $(".responsive").slideUp('fast');
    } else {
        navOpen = true
        $(".responsive").slideDown('fast');
    }
}

var windowsize = $(window).width();

$(window).resize(function() {
    windowsize = $(window).width();
    if (windowsize > 1000) {
        $(".responsive").slideUp('fast');
        hamburger.classList.remove("active");
        navopen = false
    }
});