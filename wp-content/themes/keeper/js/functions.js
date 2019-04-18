(function($) {
    $('figure.wp-caption.aligncenter').removeAttr('style');
    $('img.aligncenter').wrap('<figure class="centered-image"/>');
}) (jQuery);


(function($) {

    var skillsButton = $('#skills-button');
    var aboutText = $('.about-us-strip__text-area');
    var skillsText = $('.about-us-strip__skills-area');

    skillsButton.click(function() {
        aboutText.toggleClass('fade');
        skillsText.toggleClass('unfade');
    });

}) (jQuery);

