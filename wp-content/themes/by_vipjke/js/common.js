jQuery(document).ready(function($){
    (function(){
        var heading = $('.helper-heading'),
            text = heading.text();
            heading.css('display', 'none');
        var i = text.length;
        var timer = setInterval(function() {
            heading.before('<span>' + text.charAt(text.length - 1 - i) + '</span>');
            i--;
            if (i < 0) {
                clearInterval(timer);
                setTimeout(function () {
                    $('.helper-heading-effect').find('span').remove();
                    heading.css('display', 'block');
                }, 400);
            }
        }, 100);
        //for (var i = 0; i < text.length; i++) {
        //    var j = 0;
        //    var timer = setTimer(function() {
        //        heading.after('<span>' + text.charAt(text.length - 1 - j) + '</span>');
        //        j++;
        //        if (j == text.length - 1) {
        //            removeTimer()
        //        }
        //    }, 1000);
        //}
    })();
});