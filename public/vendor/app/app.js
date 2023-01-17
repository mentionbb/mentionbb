var app = {};

(function(context) {

    context.post = function (url, data, processData = true, contentType = "application/x-www-form-urlencoded") {
        var promise = $.ajax({
            url: app.config.settings.ajax_path + "/" + url,
            type: "post",
            data: data,
            dataType: "JSON",
            processData: processData,
            contentType: contentType
        }).done(function (responseData, status, xhr) {
        }).fail(function (xhr, status, err) {
            app.flashMessage('Error: json response', 'danger');
        });

        return promise;
    };

    context.scrollTopAnchor = function (target) {
        $('html, body').animate({
            scrollTop: (target.offset().top)
        }, 500);

        $(target).addClass('highlight');

        setTimeout(function () {
            $(target).removeClass('highlight');
        }, 1000);
    };

    context.editorConfig = function (id, style = 'default') {
        if (typeof app.visitor == 'undefined') {
            return false;
        }

        if (Storages.cookieStorage.get("night_mode") || style == 'dark') {
            var theme = 'oxide-dark';
            var content_theme = 'dark';
        } else {
            var theme = 'oxide';
            var content_theme = 'default';
        }

        if (app.config.settings.emoticon_database == 'local') {
            twemoji.base = app.config.settings.public_dir + '/images/emoticons';
            twemoji.size = '';
        } else if (app.config.settings.emoticon_database == 'twemoji') {
            twemoji.base = 'https://twemoji.maxcdn.com/v/latest/';
            twemoji.size = '72x72';
        }
        twemoji.className = 'js-Twemoji_MentionEditor';

        app.setupEditorLanguage();

        tinymce.init({
            selector: id,

            skin: "oxide",

            skin_url: app.config.settings.public_dir + "/vendor/tinymce/skins/ui/" + theme,
            content_css: app.config.settings.public_dir + "/vendor/tinymce/skins/content/" + content_theme + "/content.min.css",

            content_style: ".mce-content-body[data-mce-placeholder]:not(.mce-visualblocks)::before { color: rgb(150 150 150); } p {margin:0; padding: 0;} img.js-Twemoji_MentionEditor { width: 22px; height: 22px; vertical-align: text-bottom; } .mce-content-body [data-mce-selected=inline-boundary] { color: #000; }",

            language: 'app_EditorLanguage',

            plugins: "bbcodeCustom code autoresize imagetools autolink link image customEmoticons lists codesample media table autosave userTagging spoiler quoteMessage paste",
            toolbar: app.setupEditorToolbars(),

            invalid_elements: "div",
            paste_webkit_styles: "font-size color",

            menubar: false,
            statusbar: false,
            min_height: 230,
            max_height: 400,

            autosave_interval: "30s",
            autosave_ask_before_unload: false,
            autosave_restore_when_empty: true,

            file_picker_types: 'image',
            file_picker_callback: app.editorFilePickerCallback(),

            relative_urls: false,
            remove_script_host: false,
            convert_urls: true,

            placeholder: app.phrases.editor_placeholder,

            codesample_languages: [
                { text: 'HTML/XML', value: 'markup' },
                { text: 'JavaScript', value: 'javascript' },
                { text: 'CSS', value: 'css' },
                { text: 'PHP', value: 'php' },
                { text: 'Twig', value: 'twig' },
                { text: 'Ruby', value: 'ruby' },
                { text: 'Python', value: 'python' },
                { text: 'Java', value: 'java' },
                { text: 'C', value: 'c' },
                { text: 'C#', value: 'csharp' },
                { text: 'C++', value: 'cpp' }
            ],

            codesample_global_prismjs: true,

            entity_encoding: "raw",

            setup: function (editor) {
                $.each(app.setupEditorButtons(), function (i, item) {
                    var content = item.bbcode;

                    editor.ui.registry.addButton(item.title, {
                        icon: item.title,
                        tooltip: item.title,
                        onAction: function (_) {
                            editor.insertContent('\n' + content.replace('{content}', editor.selection.getContent()) + '\n');
                        }
                    });
                });

                $.each(app.setupEditorToolbarIcons(), function (i, item) {
                    editor.ui.registry.addIcon(item.name, item.icon);
                });
                
                editor.on('init', function (e) {
                    $('.tox-tbtn').tooltip({
                        boundary: 'window',
                        trigger: 'hover'
                    });

                    $('.tox-split-button').tooltip({
                        boundary: 'window',
                        trigger: 'hover'
                    });
                });
            },
        });
    };

    context.setupEditorLanguage = function () {
        try {
            var lang = $.parseJSON($('.app_EditorLanguage').first().html()) || {};
        } catch (e) {
            var lang = {};

            console.error('Editor language could not be loaded. The default language is English.');
        }

        tinymce.addI18n('app_EditorLanguage', lang);
    };

    context.setupEditorToolbars = function () {
        try {
            var toolbars = $.parseJSON($('.app_EditorToolbars').first().html()).toolbars || {};
        } catch (e) {
            var toolbars = {};

            console.error('Editor toolbars could not be loaded.');
        }

        return toolbars;
    };

    context.setupEditorButtons = function () {
        try {
            var buttons = $.parseJSON($('.app_EditorButtons').first().html()).buttons || {};
        } catch (e) {
            var buttons = {};
        }

        return buttons;
    };

    context.setupEditorToolbarIcons = function () {
        try {
            var icons = $.parseJSON($('.app_EditorToolbarIcons').first().html()).icons || {};
        } catch (e) {
            var icons = {};
        }

        return icons;
    };

    context.editorFilePickerCallback = function () {
        return function (cb, value, meta) {
            var input = document.createElement('input');
            input.setAttribute('type', 'file');
            input.setAttribute('accept', app.config.settings.editor.image_filepicker_types);
            input.onchange = function () {
                var file = this.files[0];
                var reader = new FileReader();

                // FormData
                var fd = new FormData();
                var files = file;
                fd.append('filetype', meta.filetype);
                fd.append("file", files);

                var filename = "";

                // AJAX
                var xhr, formData;
                xhr = new XMLHttpRequest();
                xhr.withCredentials = false;
                xhr.open('POST', app.config.settings.site_url + "/attachments/editor-image-upload");

                xhr.onload = function () {
                    var json;
                    if (xhr.status != 200) {
                        alert('HTTP Error: ' + xhr.status);
                        return;
                    }
                    json = JSON.parse(xhr.responseText);
                    if (!json || typeof json.location != 'string') {
                        alert('Invalid JSON: ' + xhr.responseText);
                        return;
                    }
                    filename = json.location;
                    reader.onload = function (e) {
                        cb(filename);
                    };
                    reader.readAsDataURL(file);
                };
                xhr.send(fd);
                return
            };

            input.click();
        };
    };

    context.getStats = function (id) {
        var body = tinymce.get(id).getBody(), text = tinymce.trim(body.innerText || body.textContent);

        return {
            chars: text.length,
            words: text.split(/[\w\u2019\'-]+/).length
        };
    };

    context.flashMessage = function (text, type = 'info') {
        if (type === 'info') {
            $('.app-alert-container').removeClass('alert-login');
            var time = 3000;
        } else if (type === 'warning') {
            $('.app-alert-container').addClass('warning');
            var time = 5000;
        } else if (type === 'danger') {
            $('.app-alert-container').addClass('danger');
            var time = 50000;
        }

        $('.app-alert-container > .app-alert > span').html(text);

        $(".app-alert-container > .app-alert").slideDown('fast');

        setTimeout(function () {
            $('.app-alert-container > .app-alert').slideUp("fast");
        }, time);
    };

    context.reactionBox = function () {
        if ($(".like-button").length) {
            $(".like-button").hover(function () {
                $(this).find(".reaction-box").fadeIn(100, function () {
                    $(this).find(".reaction-icon").each(function (i, e) {
                        setTimeout(function () {
                            $(e).addClass("show");
                        }, i * 80);
                    });
                });
            }, function () {
                setTimeout(function () {
                    $(".reaction-box").fadeOut(200, function () {
                        $(this).find(".reaction-icon").removeClass("show");
                    })
                }, 100);
            });
        }
    };

    context.twitterApi = function () {
        if ($('body[data-template="discussion"] .bbWrapper_twitter:not(.loaded)').length) {
            $('.bbWrapper_twitter:not(.loaded)').each(function () {
                var elem = $(this);
                var tweet = $(this).find('#tweet');
                var id = tweet.data("tweet-id");

                if (Storages.cookieStorage.get("night_mode")) {
                    var theme = 'dark';
                } else {
                    var theme = 'light';
                }

                $(this).closest('.app-post').find('.progress').removeClass('d-none');

                $.getScript("https://platform.twitter.com/widgets.js", function (data, textStatus, jqxhr) {
                    twttr.widgets.createTweet(id, tweet.get(0), {
                        conversation: 'all',
                        cards: 'visible',
                        linkColor: '#cc0000',
                        theme: theme
                    }).then(function (el) {
                    });

                    twttr.ready(function (twttr) {
                        twttr.events.bind('rendered', function (event) {
                            elem.closest('.app-post').find('.progress').addClass('d-none');
                        });
                    });
                });

                $(this).addClass('loaded');
            });
        }
    };

    context.getPath = function (removeSlash = false) {
        return window.location.pathname;
    };

    context.removeEditorDraft = function () {
        Storages.localStorage.remove('tinymce-autosave-' + app.getPath(true) + '-post-editor-draft');
        Storages.localStorage.remove('tinymce-autosave-' + app.getPath(true) + '-post-editor-time');
    };

    context.initTooltip = function () {
        $('img:not(.user-status, .js-Twemoji_MentionEditor, .no-tooltip)').tooltip({ container: '.app-page-content' });
        $('a:not(.app-share-button, .no-tooltip)').tooltip({ container: '.app-page-content' });
        $('.toggle-tooltip:not(.app-share-button, .no-tooltip)').tooltip({ container: '.app-page-content' });

        $('img.js-Twemoji_MentionEditor').tooltip({
            container: '.app-page-content',
            title: function () {
                return "<div class=\"d-flex align-items-center\"><img src=\"" + $(this).attr('src') + "\" /><div class=\"ml-3\"><span>" + $(this).data('shortcut') + "<a href=\"#\" class=\"copy\" title=\"" + app.phrases.copy + "\"></a></span><span>" + $(this).data('title') + "</span></div></div>";
            },
            template: '<div class="tooltip tooltipEmojiBox" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
            boundary: 'window',
            trigger: 'manual',
            html: true,
            offset: '0'
        }).on("mouseenter", function () {
            var _this = this;
            $(_this).tooltip('show');

            $(".tooltipEmojiBox").on("mouseleave", function () {
                $(_this).tooltip('hide');
            });
        }).on("mouseleave", function () {
            var _this = this;
            setTimeout(function () {
                if (!$(".tooltipEmojiBox:hover").length) {
                    $(_this).tooltip('hide');
                }
            }, 100);
        });

        $('img.user-status.online.no-tooltip').tooltip({
            container: '.app-page-content',
            template: '<div class="tooltip user-status-online" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('img.user-status.offline.no-tooltip').tooltip({
            container: '.app-page-content',
            template: '<div class="tooltip user-status-offline" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });
    };

    context.isMobile = function () {
        var isMobile = false; //initiate as false
        if (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
            || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0, 4))) {
            isMobile = true;
        }

        return isMobile;
    }
})(app);