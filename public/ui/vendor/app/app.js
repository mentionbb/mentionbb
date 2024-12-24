var app = {};

(function (context) {

    context.post = function (url, data, processData = true, contentType = "application/x-www-form-urlencoded") {
        var promise = $.ajax({
            url: app.config.settings.ajax_path + "/" + url,
            type: "post",
            headers: {
                'X-CSRF': app.visitor.csrf
            },
            data: data,
            dataType: "JSON",
            processData: processData,
            contentType: contentType
        }).done(function (responseData, status, xhr) {
            if (responseData.status == 'fail_security_x_token') {
                app.flashMessage('A security error has occurred. <br /><br /><kbd>The X-CSRF header is incorrect or corrupted. Please refresh the browser.</kbd>', 'danger');
                return;
            }
        }).fail(function (xhr, status, err) {
            app.flashMessage('Unknown error. <br /><br /><kbd>Json response indicated that an error was returned.</kbd>', 'danger');
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
        if (typeof app.visitor.user_id == 'undefined') {
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
            content_css: [
                app.config.settings.public_dir + "/vendor/tinymce/skins/content/" + content_theme + "/content.min.css",
                app.config.settings.public_dir + "/themes/frontend/assets/editor/content.css?v=6.1"
            ],

            language: 'app_EditorLanguage',

            plugins: "bbcodeCustom code autoresize imagetools autolink link image customEmoticons lists codesample media table autosave userTagging spoiler quoteMessage paste preview fullscreen quickbars textpattern wordcount",
            toolbar: app.setupEditorToolbars(),

            inline_boundaries: false,

            quickbars_insert_toolbar: false,
            quickbars_selection_toolbar: 'bold italic underline | backcolor forecolor | formatselect | bullist numlist | quicklink | quoteMessage',

            invalid_elements: "div",

            paste_webkit_styles: "font-size color",
            paste_data_images: true,

            menubar: false,
            statusbar: true,
            resize: true,
            branding: false,
            min_height: 230,
            max_height: 400,

            autosave_interval: "30s",
            autosave_ask_before_unload: false,
            autosave_restore_when_empty: true,

            file_picker_types: 'image',
            file_picker_callback: app.editorFilePickerCallback(),

            image_file_types: app.config.settings.editor.image_filepicker_types,

            relative_urls: false,
            remove_script_host: false,
            convert_urls: true,

            placeholder: app.phrases.editor_placeholder,

            toolbar_mode: 'sliding',

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

            textpattern_patterns: [
                { start: '*', end: '*', format: 'italic' },
                { start: '**', end: '**', format: 'bold' },
                { start: '#', format: 'h1' },
                { start: '##', format: 'h2' },
                { start: '###', format: 'h3' },
                { start: '####', format: 'h4' },
                { start: '#####', format: 'h5' },
                { start: '######', format: 'h6' },
                { start: '1. ', cmd: 'InsertOrderedList' },
                { start: '* ', cmd: 'InsertUnorderedList' },
                { start: '- ', cmd: 'InsertUnorderedList' }
            ],

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

                editor.on('focus', function (e) {
                    $('.tox-tinymce').addClass('--focus');
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

                    $('.tox-statusbar__branding').html('<a href="https://www.tiny.cloud/powered-by-tiny?utm_campaign=poweredby&amp;utm_source=tiny&amp;utm_medium=referral&amp;utm_content=v5" rel="noopener" target="_blank" aria-label="Powered by Tiny" tabindex="-1"><svg width="50px" height="16px" viewBox="0 0 50 16" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.143 0c2.608.015 5.186 2.178 5.186 5.331 0 0 .077 3.812-.084 4.87-.361 2.41-2.164 4.074-4.65 4.496-1.453.284-2.523.49-3.212.623-.373.071-.634.122-.785.152-.184.038-.997.145-1.35.145-2.732 0-5.21-2.04-5.248-5.33 0 0 0-3.514.03-4.442.093-2.4 1.758-4.342 4.926-4.963 0 0 3.875-.752 4.036-.782.368-.07.775-.1 1.15-.1Zm1.826 2.8L5.83 3.989v2.393l-2.455.475v5.968l6.137-1.189V9.243l2.456-.476V2.8ZM5.83 6.382l3.682-.713v3.574l-3.682.713V6.382Zm27.173-1.64-.084-1.066h-2.226v9.132h2.456V7.743c-.008-1.151.998-2.064 2.149-2.072 1.15-.008 1.987.92 1.995 2.072v5.065h2.455V7.359c-.015-2.18-1.657-3.929-3.837-3.913a3.993 3.993 0 0 0-2.908 1.296Zm-6.3-4.266L29.16 0v2.387l-2.456.475V.476Zm0 3.2v9.132h2.456V3.676h-2.456Zm18.179 11.787L49.11 3.676H46.58l-1.612 4.527-.46 1.382-.384-1.382-1.611-4.527H39.98l3.3 9.132L42.15 16l2.732-.537ZM22.867 9.738c0 .752.568 1.075.921 1.075.353 0 .668-.047.998-.154l.537 1.765c-.23.154-.92.537-2.225.537-1.305 0-2.655-.997-2.686-2.686a136.877 136.877 0 0 1 0-4.374H18.8V3.676h1.612v-1.98l2.455-.476v2.456h2.302V5.9h-2.302v3.837Z"></path></svg></a>&nbsp;<span>Customized for MentionBB</span>');
                });

                editor.on('keydown', function (e) {
                    if (e.keyCode == 13 || e.keyCode == 32) {
                        $sel = editor.selection;

                        $.each(app.setupEditorRealtimeParser(), function (key, value) {
                            $pattern = new RegExp(key, 'gm');

                            if ($pattern.test($sel.getNode().innerText)) {
                                $node = $sel.getNode();
                                $text = $node.innerText;

                                $sel.getNode().replaceWith('');

                                $needNodes = ['li'];
                                if ($.inArray($node.nodeName.toLowerCase(), $needNodes) !== -1) {
                                    $sel.setContent(
                                        `<${$node.nodeName}>${$text.replace($pattern, value)}</${$node.nodeName}>`
                                    );
                                } else {
                                    $sel.setContent(
                                        $text.replace($pattern, value)
                                    );
                                }
                            }
                        });
                    }
                });

                editor.on('FullscreenStateChanged', function (e) {
                    if (e.state) {
                        editor.dom.addClass(
                            editor.dom.select('body'), 'mention-tox-fs'
                        );

                        if (!$('.modal-backdrop').length) {
                            $('body').append('<div class="modal-backdrop show"></div>');
                        }

                        $('.modal-backdrop.show').addClass('no-bg');
                    } else {
                        editor.dom.removeClass(
                            editor.dom.select('body'), 'mention-tox-fs'
                        );

                        $('.modal-backdrop.show').removeClass('no-bg');

                        if (!$('.modal.show').length) {
                            $('.modal-backdrop').remove();
                        }
                    }
                });

                editor.on('paste drop', function (e) {
                    if(e.clipboardData) {
                        var imageBlob = app.retrieveImageFromClipboardAsBlob(e);
                    }
                    else {
                        var imageBlob = e.dataTransfer.files[0];
                    }

                    if (!imageBlob) {
                        return;
                    }

                    var supportImageTypes = app.config.settings.editor.image_filepicker_types.replace(/\s?\./g, '').split(',');
                    if (!$.inArray(imageBlob.name.split('.').pop().toLowerCase(), supportImageTypes)) {
                        return false;
                    }

                    e.preventDefault();

                    var dataString = new FormData();
                    dataString.append('file', imageBlob);

                    const img = new Image();
                    img.src = URL.createObjectURL(imageBlob);
                    img.onload = () => {
                        app.post("attachments/editor-image-upload", dataString, false, false).done(function (response) {
                            if (response.status === "ok") {
                                if (editor) {
                                    editor.insertContent('<img src="' + response.location + '" alt="' + imageBlob.name + '" width="' + img.width + '" height="' + img.height + '" />');
                                } else {
                                    console.log('Tinymce editor not found!');
                                }
                            }
                        });
                    }
                });
            },

            init_instance_callback: function (editor) {
                editor.on('click', function (e) {
                    $('.tox-tinymce').addClass('--focus');
                });
                editor.on('focusout', function (e) {
                    $('.tox-tinymce').removeClass('--focus');
                });
            },
        });
    };

    context.retrieveImageFromClipboardAsBlob = function (pasteEvent) {
        if (pasteEvent.clipboardData === false) {
            return false;
        }

        if (pasteEvent.clipboardData.items === undefined) {
            return false;
        }

        var items = pasteEvent.clipboardData.items;

        for (var i = 0; i < items.length; i++) {
            if (items[i].type.indexOf("image") === -1) {
                return false;
            }

            var blob = items[i].getAsFile();

            if (blob !== null) {
                const reader = new FileReader();
                reader.onload = function (e) {
                };
                reader.readAsDataURL(blob);

                return blob;
            }
        }
        return false;
    }

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

    context.setupEditorPostProcess = function () {
        try {
            var mod = $.parseJSON($('.app_EditorPostProcess').first().html()) || {};
        } catch (e) {
            var mod = {};
        }

        return mod;
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

    context.setupEditorRealtimeParser = function () {
        return {
            "\\{\\username\\}": app.visitor.username,
            "\\[(?!\\!)([^\\n]+)\\]\\(([^\\n]+)\\)": "<a href=\"$2\">$1</a>",
            "\\[([^\\]]+)\\]\\((\\S+)\\)": "<img alt=\"$1\" src=\"$2\" />",
            "```(html|xml|js|javascript|css|php|twig|ruby|python|java|c|c\\#|c\\+\\+)\\n([\\s\\S]*?)```": "<pre class=\"language-$1\"><code>$2</code></pre>"
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