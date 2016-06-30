jQuery(document).ready(function ($) {
// Clipboard

    new Clipboard('.copy-btn');

// Text helper effect

(function () {
    var heading = $('.helper-heading'),
        text = heading.text();
    heading.css('display', 'none');
    var i = text.length;
    var timer = setInterval(function () {
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
})();

// Helper menu

(function () {
    var accordionsMenu = $('.cd-accordion-menu'),
        children = accordionsMenu.find('.children');
    if (accordionsMenu.length > 0) {
        children.prev().css('display', 'none');
        for (var i = 0; i < children.prev().length; i++) {
            var text = children.prev()[i].text;
            var add = '<input type="checkbox" name ="group-' + text + '" id="group-' + text + '"><label for="group-' + text + '">' + text + '</label>';
            children[i].classList.add('children-' + i + '');
            $('.children-' + i + '').before(add);
        }
        accordionsMenu.each(function () {
            var accordion = $(this);
            accordion.on('change', 'input[type="checkbox"]', function () {
                var checkbox = $(this);
                // console.log(checkbox.prop('checked'));
                ( checkbox.prop('checked') ) ? checkbox.siblings('ul').attr('style', 'display:none;').slideDown(300) : checkbox.siblings('ul').attr('style', 'display:block;').slideUp(300);
            });
        });
    }
})();
})
;