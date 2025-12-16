if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";
    $(function () {
        if ($('body[data-template="faq"]').length) {
            var tab_regex = /pages\/faq#([a-z]+)$/g;

            if (window.location.href.match(tab_regex)) {
                var tab_regex = tab_regex.exec(window.location.href);
                $('[data-tab="' + tab_regex[1] + '"]').click();
            }

            $(document).on('click', '.tab-content.resource-standarts a', function (e) {
                e.preventDefault();

                $('[data-tab="' + $(this).attr('href').replace('#', '') + '"]').click();
            });
        }
    });
}(window.jQuery, window, document);