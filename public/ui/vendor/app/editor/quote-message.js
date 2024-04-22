if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    $(function () {
        tinymce.PluginManager.add("quoteMessage", function (editor, url) {
            editor.ui.registry.addButton('quoteMessage', {
                icon: 'quoteMessage',
                tooltip: 'Quote',
                onAction: function (_) {
                    editor.insertContent('\n[quote]' + editor.selection.getContent() + '[/quote]\n');
                }
            });
        });
    });
}(window.jQuery, window, document);