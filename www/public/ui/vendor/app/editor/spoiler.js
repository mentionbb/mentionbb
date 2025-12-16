if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    $(function () {
        tinymce.PluginManager.add("spoiler", function (editor, url) {
            editor.ui.registry.addButton('spoiler', {
                icon: 'spoiler',
                tooltip: 'Spoiler',
                onAction: function (_) {
                    editor.insertContent('\n[spoiler=Spoiler!]' + editor.selection.getContent() + '[/spoiler]\n');
                }
            });
        });
    });
}(window.jQuery, window, document);