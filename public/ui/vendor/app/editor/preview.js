/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.6.2 (2020-12-08)
 * 
 * Edited for Mention
 */
if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    var global = tinymce.util.Tools.resolve('tinymce.PluginManager');

    var global$1 = tinymce.util.Tools.resolve('tinymce.Env');

    var global$2 = tinymce.util.Tools.resolve('tinymce.util.Tools');

    var getContentStyle = function (editor) {
        return editor.getParam('content_style', '', 'string');
    };
    var shouldUseContentCssCors = function (editor) {
        return editor.getParam('content_css_cors', false, 'boolean');
    };
    var getBodyClassByHash = function (editor) {
        var bodyClass = editor.getParam('body_class', '', 'hash');
        return bodyClass[editor.id] || '';
    };
    var getBodyClass = function (editor) {
        var bodyClass = editor.getParam('body_class', '', 'string');
        if (bodyClass.indexOf('=') === -1) {
            return bodyClass;
        } else {
            return getBodyClassByHash(editor);
        }
    };
    var getBodyIdByHash = function (editor) {
        var bodyId = editor.getParam('body_id', '', 'hash');
        return bodyId[editor.id] || bodyId;
    };
    var getBodyId = function (editor) {
        var bodyId = editor.getParam('body_id', 'tinymce', 'string');
        if (bodyId.indexOf('=') === -1) {
            return bodyId;
        } else {
            return getBodyIdByHash(editor);
        }
    };

    var parseContent = function (editor, callback) {
        $('#post-edit').find('.progress').removeClass('d-none');

        if ($('#post-edit.show').length < 1) {
            $('.app-post-create .progress').removeClass('d-none');
        }

        app.post("editor?parseBbcode", { content: editor.getContent() }).done(function (response) {
            if (response.status === "ok") {
                callback(response.content);
            }
        });
    }

    var getPreviewHtml = function (editor, content) {
        var headHtml = '';
        var encode = editor.dom.encode;
        var contentStyle = getContentStyle(editor);
        headHtml += '<base href="' + encode(editor.documentBaseURI.getURI()) + '">';
        if (contentStyle) {
            headHtml += '<style type="text/css">' + contentStyle + '</style>';
        }
        var cors = shouldUseContentCssCors(editor) ? ' crossorigin="anonymous"' : '';
        global$2.each(editor.contentCSS, function (url) {
            headHtml += '<link type="text/css" rel="stylesheet" href="' + encode(editor.documentBaseURI.toAbsolute(url)) + '"' + cors + '>';
        });
        var bodyId = getBodyId(editor);
        var bodyClass = getBodyClass(editor);
        var isMetaKeyPressed = global$1.mac ? 'e.metaKey' : 'e.ctrlKey && !e.altKey';
        var preventClicksOnLinksScript = '<script>' + 'document.addEventListener && document.addEventListener("click", function(e) {' + 'for (var elm = e.target; elm; elm = elm.parentNode) {' + 'if (elm.nodeName === "A" && !(' + isMetaKeyPressed + ')) {' + 'e.preventDefault();' + '}' + '}' + '}, false);' + '</script> ';
        var directionality = editor.getBody().dir;
        var dirAttr = directionality ? ' dir="' + encode(directionality) + '"' : '';
        var previewHtml = '<!DOCTYPE html>' + '<html>' + '<head>' + headHtml + '</head>' + '<body id="' + encode(bodyId) + '" class="mce-content-body ' + encode(bodyClass) + '"' + dirAttr + '><div class="sandboxed">' + content + '</div>' + preventClicksOnLinksScript + '</body>' + '</html>';

        return previewHtml;
    };

    var open = function (editor) {
        parseContent(editor, function (content) {
            var content = content.replace(/&lt;br\s?(\/)?&gt;/gi, "<br />");
            var content = getPreviewHtml(editor, content);

            var dataApi = editor.windowManager.open({
                title: 'Preview',
                size: 'large',
                body: {
                    type: 'panel',
                    items: [{
                        name: 'preview',
                        type: 'iframe',
                        sandboxed: true
                    }]
                },
                buttons: [{
                    type: 'cancel',
                    name: 'close',
                    text: 'Close',
                    primary: true
                }],
                initialData: {
                    preview: content
                }
            });

            $('#post-edit').find('.progress').addClass('d-none');

            if ($('#post-edit.show').length < 1) {
                $('.app-post-create .progress').addClass('d-none');
            }

            dataApi.focus('close');
        });
    };

    var register = function (editor) {
        editor.addCommand('mcePreview', function () {
            open(editor);
        });
    };

    var register$1 = function (editor) {
        editor.ui.registry.addButton('preview', {
            icon: 'preview',
            tooltip: 'Preview',
            onAction: function () {
                return editor.execCommand('mcePreview');
            }
        });
        editor.ui.registry.addMenuItem('preview', {
            icon: 'preview',
            text: 'Preview',
            onAction: function () {
                return editor.execCommand('mcePreview');
            }
        });
    };

    function Plugin() {
        global.add('preview', function (editor) {
            register(editor);
            register$1(editor);
        });
    }

    Plugin();
}(window.jQuery, window, document);
