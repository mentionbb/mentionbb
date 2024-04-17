if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    $(function () {
        if ($('body[data-template="discussion"]').length) {
            if ($('[class^=bbWrapper]').length) {
                $('[class^=bbWrapper]').each(function () {
                    var elem = $(this);
                    $(this).closest('.app-post').find('.progress').removeClass('d-none');

                    $(this).find('iframe').on('load', function () {
                        elem.closest('.app-post').find('.progress').addClass('d-none');
                    });

                    setTimeout(function () {
                        elem.closest('.app-post').find('.progress').addClass('d-none');
                    }, 3000);
                });
            }
        }
    });

    $(function () {
        if ($('body[data-template="discussion"]').length) {
            if ($('.quote-container .quote-container .quote-container .quote-container').length) {
                $('.quote-container .quote-container .quote-container .quote-container').remove();
            }
        }
    });

    $(document).on('click', '.expandQuote a', function (e) {
        e.preventDefault();

        var quoteContainerElem = $(this).closest('.discussion-text .bbContainer_appQuote');

        $(quoteContainerElem).css({
            'max-height': quoteContainerElem.data('height') + 'px',
            'height': 'auto'
        });

        $(this).closest('.expandQuote').addClass('d-none');
    });

    $(document).on('click', '[data-ui="order-discussion-posts"]', function (e) {
        e.preventDefault();

        $('[data-ui="order-discussion-posts"]').removeClass('active');

        $('.post:not(.first-post)').remove();

        $(this).addClass('active');

        $('.app-order-discussion-post button').text($(this).text());
        $('.app-order-discussion-post button').alterClass('order-*', '');
        $('.app-order-discussion-post button').addClass('order-' + $(this).data('order'));

        $('.post-loader-spin').show();

        var dataString = {
            discussion_id: $('.post.first-post').data('discussion-id'),
            order: $(this).data('order')
        };

        app.post("post/order-discussion-posts", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.post-loader-spin').hide();

                $('.post-timeliner div.last-post').text($('[data-ui="order-discussion-posts"].active').data('scrubber-text'))

                $('.post.first-post').after(response.template);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="copy-link"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var link = $(this).attr('href');

        $(this).attr('data-complete', '1');

        document.addEventListener('copy', function (e) {
            e.clipboardData.setData('text/plain', link);
            e.preventDefault();
        }, true);

        document.execCommand("copy");

        $('.custom-menu [data-complete="1"] .text span').addClass('active');
        var link_text = $('.custom-menu [data-complete="1"] .text span').text();

        $('.custom-menu [data-complete="1"] .text span').text($('.custom-menu [data-complete="1"]').data('complete-text'));

        setTimeout(function (event) {
            $('.custom-menu [data-complete="1"] .text span').text(link_text);
            $('.custom-menu [data-complete="1"] .text span').removeClass('active');
        }, 1000);
    });

    $(document).on('click', '[data-ui="report-post"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var dataString = {
            post_id: $(this).closest('.post').data('post-id')
        };

        var elem = $(this);

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("post/report", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                if ($('#post-report[data-post-id="' + response.post_id + '"]').length < 1) {
                    $('body').append(response.template);
                }

                $('#post-report[data-post-id="' + response.post_id + '"]').modal();

                $('#post-report[data-post-id="' + response.post_id + '"] textarea').focus();
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '.js-ClickableDivs[data-ui="quick-reporting"] > div', function (e) {
        e.preventDefault();
        e.stopPropagation();

        $(this).closest('#post-report').find('textarea').val($(this).text());
        $(this).closest('#post-report').find('textarea').focus();
    });

    $(document).bind('ajaxStop', function () {
        $('#post-report form').each(function () {
            var post_id = $(this).closest('#post-report').data('post-id');

            $(this).validate({
                onfocusout: false,
                submitHandler: function (form, e) {
                    e.preventDefault();

                    var elem = $('#post-report[data-post-id="' + post_id + '"]');

                    elem.find('button').attr('disabled', true);

                    if (elem.find('[name="report-text"]').val().length < 1) {
                        app.flashMessage(app.phrases.report_cannot_be_blank, 'warning');

                        elem.find('button').attr('disabled', false);
                        return false;
                    }

                    var dataString = {
                        post_id: post_id,
                        content: elem.find('[name="report-text"]').val()
                    };

                    app.post("post/report-complete", dataString).done(function (response) {
                        if (response.status === "ok") {
                            elem.find('button').addClass('succeeded');
                            elem.find('button').text(elem.find('button').data('complete-text'));

                            elem.find('span.close').click();

                            app.flashMessage(app.phrases.alert_messages.report_post);
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });
                }
            });
        });
    });

    $(document).on('click', '[data-ui="delete-post"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var dataString = {
            post_id: $(this).closest('.post').data('post-id')
        };

        var elem = $(this);

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("post/delete", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                if ($('#post-delete[data-post-id="' + response.post_id + '"]').length < 1) {
                    $('body').append(response.template);

                    $('#post-delete[data-post-id="' + response.post_id + '"]').modal();
                } else {
                    $('#post-delete[data-post-id="' + response.post_id + '"]').modal();
                }
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).bind('ajaxStop', function () {
        $('#post-delete form').each(function () {
            var post_id = $(this).closest('#post-delete').data('post-id');

            $(this).validate({
                onfocusout: false,
                submitHandler: function (form, e) {
                    e.preventDefault();

                    var elem = $('#post-delete[data-post-id="' + post_id + '"]');

                    elem.find('button').attr('disabled', true);

                    var dataString = {
                        post_id: post_id
                    };

                    app.post("post/delete-complete", dataString).done(function (response) {
                        if (response.status === "ok") {
                            elem.find('button').addClass('succeeded');
                            elem.find('button').text(elem.find('button').data('complete-text'));

                            elem.find('span.close').click();

                            if ($('.app-post-container > .post[data-post-id="' + response.post_id + '"]').hasClass('first-post')) {
                                window.location.replace(app.config.settings.site_url);
                            } else {
                                $('.app-post-container > .post[data-post-id="' + response.post_id + '"]').remove();
                            }

                            $('.app-post-container > .post').each(function (i, elem) {
                                var i = (i + 1)
                                $(this).attr('data-item', i);
                            });

                            app.flashMessage(app.phrases.alert_messages.delete_post);
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });
                }
            });
        });
    });

    $(document).on('click', '[data-ui="edit-post"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var dataString = {
            post_id: $(this).closest('.post').data('post-id')
        };

        var elem = $(this);

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("post/edit", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                if ($('#post-edit[data-post-id="' + response.post_id + '"]').length < 1) {
                    $('body').append(response.template);
                }

                app.editorConfig('#edit_' + response.post_id);
                tinymce.get('edit_' + response.post_id).setContent(
                    twemoji.parse(response.content), { format: 'bbcode' }
                );

                $('#post-edit[data-post-id="' + response.post_id + '"]').modal();
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '#post-edit .edit-attachments .attachment a', function (e) {
        e.preventDefault();
        e.stopPropagation();

        $(this).closest('.attachment').addClass('removed')
    });

    $(document).on('change', '[name="edit_post_attachment"]', function () {
        var filenames = [];
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            filenames.push($(this).get(0).files[i].name);
        }

        $(this).next('label').text(filenames.join(', '));
    });

    $(document).bind('ajaxStop', function () {
        $('#post-edit form').each(function () {
            var post_id = $(this).closest('#post-edit').data('post-id');

            $('#post-edit[data-post-id="' + post_id + '"]').find('form').trackChanges();

            $(this).validate({
                onfocusout: false,
                submitHandler: function (form, e) {
                    e.preventDefault();

                    var elem = $('#post-edit[data-post-id="' + post_id + '"]');

                    elem.find('.progress').removeClass('d-none');

                    elem.find('button').attr('disabled', true);

                    var post_title = false;

                    if (elem.find('[name="post-title"]').length > 0) {
                        if (elem.find('[name="post-title"]').val().length < 1) {
                            app.flashMessage(app.phrases.title_cannot_be_blank, 'warning');

                            elem.find('button').attr('disabled', false);
                            return false;
                        }

                        if (elem.find('[name="post-title"]').val().length < app.config.settings.title_char_min) {
                            app.flashMessage(app.phrases.title_is_greater_then, 'warning');

                            elem.find('button').attr('disabled', false);
                            return false;
                        }

                        var post_title = elem.find('[name="post-title"]').val();
                    }

                    if (app.getStats('edit_' + post_id).chars <= app.config.settings.content_char_min) {
                        app.flashMessage(app.phrases.content_is_greater_then, 'warning');

                        elem.find('button').attr('disabled', false);
                        return false;
                    }

                    var dataString = new FormData();

                    dataString.append('post_id', post_id);
                    dataString.append('content', tinyMCE.get('edit_' + post_id).getContent());
                    dataString.append('post_title', post_title);

                    if (elem.find('.attachment.removed').length) {
                        elem.find('.attachment.removed').each(function (i) {
                            dataString.append('removeAttachments[]', $(this).data('attachment-id'));
                        });
                    }

                    if (elem.find('[name="edit_post_attachment"]').val().length) {
                        for (var i = 0; i < elem.find('[name="edit_post_attachment"]').get(0).files.length; ++i) {
                            if (elem.find('[name="edit_post_attachment"]').get(0).files[i].size > app.config.settings.attachment_max_size) {
                                app.flashMessage(app.phrases.attachment_max_size.replace('{2}', elem.find('[name="edit_post_attachment"]').get(0).files[i].name), 'warning');

                                elem.find('button').attr('disabled', false);
                                return false;
                            }

                            dataString.append('attachments[]', elem.find('[name="edit_post_attachment"]').get(0).files[i]);
                        }

                        dataString.append('is_attachment', true);
                    }

                    if (post_title !== false) {
                        if (elem.find('form').isChanged()) {
                            var redirect = true;
                        } else {
                            var redirect = false;
                        }
                    }

                    app.post("post/edit-complete", dataString, false, false).done(function (response) {
                        if (response.status === "ok") {
                            elem.find('button').addClass('succeeded');
                            elem.find('button').text(elem.find('button').data('complete-text'));

                            elem.closest('.modal').remove();
                            $('.modal-backdrop').remove();
                            $('body').removeClass('modal-open');

                            for (var i = tinymce.editors.length - 1; i > -1; i--) {
                                tinyMCE.execCommand("mceRemoveEditor", true, tinymce.editors[i].id);
                            }

                            var post_elem = $('.post[data-post-id="' + response.post_id + '"]');

                            post_elem.find('.progress').removeClass('d-none');

                            post_elem.find('.discussion-text > article').html(response.template);
                            post_elem.find('.post-attachment-area').html(response.attachmentTemplate);

                            post_elem.find('.progress').addClass('d-none');

                            app.editorConfig('#post-editor');

                            app.flashMessage(app.phrases.alert_messages.edit_post);

                            elem.find('.progress').addClass('d-none');

                            if (redirect) {
                                window.location.reload();
                            }
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });
                }
            });
        });
    });

    $(document).on('click', '[data-ui="like-post"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        if ("ontouchstart" in document.documentElement) {
            if ($(this).is('a')) {
                return false;
            }
        }

        if ($(this).data('reaction')) {
            var dataString = {
                post_id: $(this).closest('.post').data('post-id'),
                reaction: $(this).data('reaction')
            };

            var reactionText = $(this).find('label').text();
        } else {
            var dataString = {
                post_id: $(this).closest('.post').data('post-id'),
                reaction: 'like'
            };

            var reactionText = $(this).closest('.like-button').data('toggle-text');
        }

        var elem = $(this).closest('.like-button');

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("post/like", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                elem.addClass('reaction')
                elem.addClass(dataString.reaction);
                elem.find('.reaction-box').addClass('d-none');
                elem.find('span').text(reactionText);
                elem.attr('data-ui', 'take-like-post');

                elem.closest('.post').find('.post-likes').remove();

                elem.closest('.post').find('.post-append').append(response.template);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="take-like-post"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var dataString = {
            post_id: $(this).closest('.post').data('post-id'),
            user_id: $(this).closest('.post').data('user-id')
        };

        var elem = $(this);

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("post/take-like", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                elem.removeClass('reaction');
                elem.removeClass(elem.attr('class').split(' ').pop());

                elem.find('.reaction-box').removeClass('d-none');
                elem.find('span').text(elem.data('text'));
                elem.attr('data-ui', 'like-post');

                elem.closest('.post').find('.post-likes').remove();

                elem.closest('.post').find('.post-append').append(response.template);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="post-quote"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var post_id = $(this).closest('.post').data('post-id');

        var elem = $(this);

        elem.closest('.post').find('[data-ui="post-quote"]').attr('post-quote');

        $('[data-ui="show-editor"]').click();

        var currentContent = tinymce.get('post-editor').getContent();

        if (app.getStats('post-editor').chars < 1) {
            var quoteInner = '[post-quote]' + post_id + '[/post-quote]';
        } else {
            var quoteInner = '<p><br></p>[post-quote]' + post_id + '[/post-quote]';
        }

        tinymce.get('post-editor').execCommand('mceInsertContent', false, currentContent + quoteInner);
    });

    $(document).on('click', '[data-ui="post-bookmark"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var dataString = {
            post_id: $(this).closest('.post').data('post-id')
        };

        var elem = $(this);

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("post/bookmark", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                elem.attr('data-ui', 'post-bookmark-undo');

                elem.find('span').text(elem.data('toggle-text'));

                elem.find('span').addClass('active');

                app.flashMessage(app.phrases.alert_messages.bookmark_post);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="post-bookmark-undo"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var dataString = {
            post_id: $(this).closest('.post').data('post-id')
        };

        var elem = $(this);

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("post/undo-bookmark", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                elem.attr('data-ui', 'post-bookmark');

                elem.find('span').text(elem.data('text'));

                elem.find('span').removeClass('active');

                app.flashMessage(app.phrases.alert_messages.unbookmark_post);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="move-discussion"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var elem = $(this);

        var dataString = {
            discussion_id: $(this).closest('.post').data('discussion-id')
        };

        if ($('.modal#move-discussion').length < 1) {
            elem.closest('.app-discussion').find('.progress').removeClass('d-none');

            app.post("moderation/discussion/move", dataString).done(function (response) {
                if (response.status === "ok") {
                    elem.closest('.app-discussion').find('.progress').addClass('d-none');

                    $('body').append(response.template);

                    $('select option[value="' + response.forum_id + '"').attr('selected', true);

                    $('.selectpicker').selectpicker();

                    $('.modal#move-discussion').modal();
                }
            }).fail(function (xhr, status, err) {
                console.log(status, err);
            });
        } else {
            $('.modal#move-discussion').modal();
        }
    });

    $(document).bind('ajaxStop', function () {
        $('#move-discussion form').validate({
            onfocusout: false,
            submitHandler: function (form, e) {
                e.preventDefault();

                var dataString = {
                    discussion_id: $('#move-discussion').data('discussion-id'),
                    forum_id: $('#move-discussion [name="forum"]').val()
                };

                if ($('.post.first-post').data('forum-id') != dataString.forum_id) {
                    app.post("moderation/discussion/move-complete", dataString).done(function (response) {
                        if (response.status === "ok") {
                            window.location.reload();
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });
                }
            }
        });
    });

    $(document).on('click', '[data-ui="pin-discussion"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var elem = $(this);

        var dataString = {
            discussion_id: $(this).closest('.post').data('discussion-id')
        };

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("moderation/discussion/pin", dataString).done(function (response) {
            if (response.status === "ok") {
                window.location.reload();
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="un-pin-discussion"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var elem = $(this);

        var dataString = {
            discussion_id: $(this).closest('.post').data('discussion-id')
        };

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("moderation/discussion/un-pin", dataString).done(function (response) {
            if (response.status === "ok") {
                window.location.reload();
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="lock-discussion"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var elem = $(this);

        var dataString = {
            discussion_id: $(this).closest('.post').data('discussion-id')
        };

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("moderation/discussion/lock", dataString).done(function (response) {
            if (response.status === "ok") {
                window.location.reload();
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="open-discussion"]', function (e) {
        e.preventDefault();
        e.stopPropagation();

        var elem = $(this);

        var dataString = {
            discussion_id: $(this).closest('.post').data('discussion-id')
        };

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("moderation/discussion/un-lock", dataString).done(function (response) {
            if (response.status === "ok") {
                window.location.reload();
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(function () {
        $('.app-post-container > .post').each(function (i, elem) {
            var i = (i + 1)
            $(this).attr('data-item', i);
        });

        var hiddenPagingOnPost_Fire = function () {
            if ($('[data-feature="hidden-paging"]').length) {
                var page_elem = $('[data-feature="hidden-paging"]');

                $('.post-loader-spin').show();

                var dataString = {
                    discussion_id: $('.post.first-post').data('discussion-id'),
                    next_id: page_elem.data('next-id'),
                    current_page: page_elem.data('current-page'),
                    order: $('[data-ui="order-discussion-posts"].active').data('order')
                };

                $('[data-feature="hidden-paging"]').remove();

                app.post("post/next-discussion-page", dataString).done(function (response) {
                    if (response.status === "ok") {
                        $('.post-loader-spin').hide();

                        $('.app-post-container > .post:last').after(response.template);

                        $('.app-post-container > .post').each(function (i, elem) {
                            var i = (i + 1)
                            $(this).attr('data-item', i);
                        });

                        if ($('[data-feature="hidden-paging"]').length < 1) {
                            $('[data-ui="load-more-dposts-mobile"]').remove();
                        }
                    }
                }).fail(function (xhr, status, err) {
                    console.log(status, err);
                });
            }
        }

        var hiddenPagingOnPost = function () {
            if ($(window).scrollTop() >= $(document).height() - $(window).height() - 300) {
                hiddenPagingOnPost_Fire();
            }
        };

        /**
         * [if Because problem is Mobile Browsers doesnt support Scroll, touchmove is supported]
         * @param  {[string]} 'ontouchmove' in document.documentElement [If browser support touchmove]
         * @return {[mixed]}
         */
        if ('ontouchmove' in document.documentElement) {
            $('[data-ui="load-more-dposts-mobile"]').removeClass('d-none');

            $(document).on('click', '[data-ui="load-more-dposts-mobile"]', function () {
                hiddenPagingOnPost_Fire();
            });
        } else {
            $(window).on('scroll', hiddenPagingOnPost);
        }
    });

    $(document).on('click', '[data-ui="go-first-post"]', function () {
        app.scrollTopAnchor($('.post.first-post'));
    });

    $(document).on('click', '[data-ui="go-last-post"]', function () {
        $("html, body").animate({
            scrollTop: $(document).height() + 100000
        }, 'slow');

        $('.post.last-post').addClass('highlight');

        setTimeout(function () {
            $('.post.last-post').removeClass('highlight');
        }, 1000);
    });

    function updateLastPost() {
        if ($('.app-post-container > .post').length > 1) {
            $('.app-post-container > .post:last').addClass('last-post');
        }
    };

    function quoteRenderer() {
        if ($('body[data-template="discussion"]').length) {
            if ($('.expandQuote').length) {
                $('.expandQuote').each(function (index) {
                    if ($(this).closest('.bbContainer_appQuote').height() > 200) {
                        $(this).closest('.bbContainer_appQuote').attr('data-height', $(this).closest('.bbContainer_appQuote').outerHeight(true));
                        $(this).closest('.bbContainer_appQuote').addClass('overflow-hidden');
                        $(this).closest('.bbContainer_appQuote').css('max-height', '200px');

                        $(this).find('a').text(app.phrases.expand);
                        $(this).removeClass('d-none');
                    }
                });
            }
        }
    };

    $(document).ready(function () {
        updateLastPost();
        quoteRenderer();
    });

    $(document).bind('ajaxStop', function () {
        updateLastPost();
        quoteRenderer();
    });

    var scrubber = new ScrubberView();

    $(function () {

        $(document).ready(function () {
            $('.scrollbar-area:not(.no-scrollbar) .scrubber__index').html(($('.app-post-container .post:nth-child(1)').index() + 1));
            $('.scrubber__date').html($('.app-post-container .post:nth-child(1)').data('date'));
        });

        if ($('.post.first-post').length > 0) {
            var count = $('.post.first-post').data('post-count');

            scrubber.min(1).max(count).step(1).value(count).orientation('vertical');

            $(window).bind('scroll', function () {
                $('.app-post-container .post').each(function () {
                    var post = $(this);
                    var position = post.position().bottom - $(window).scrollTop();

                    if (post.isOnScreen()) {
                        $('.scrubber__index').html((post.index() + 1));
                        $('.scrubber__date').html(post.data('date'));

                        scrubber.value(count - (post.index() + 1) + 1);
                    }
                });
            });
        }
    });

    $(function () {
        if ($('.post.first-post').data('post-count') > 2) {
            $('.scrollbar-area').append(scrubber.elt);

            var count = $('.post.first-post').data('post-count');

            var post = $('.post[data-item="1"]');

            $('.scrubber__index').html(post.data('item'));
            $('.scrubber__date').html(post.data('date'));

            scrubber.onScrubStart = function (value) {
                var value = ((count - value) + 1);

                if (value === '-1') {
                    var value = 1;
                }

                if (value > 6) {
                    if ($('.scrollbar-area .backto-post').has('.d-block')) {
                        $('.scrollbar-area .backto-post').addClass('d-none');
                        $('.scrollbar-area .backto-post').removeClass('active');
                    }

                    $('.scrollbar-area .backto-post').addClass('active');

                    $('.scrollbar-area .backto-post > button').attr('data-post-id', value);
                    $('.scrollbar-area .backto-post').css('top', $('.scrollbar-area .thumb').css('top'));
                }
            }

            scrubber.onValueChanged = function (value) {
                var value = ((count - value) + 1);

                if (value === '-1') {
                    var value = 1;
                }

                var post = $('.post[data-item="' + value + '"]');

                $('.scrubber__index').html(value);
                $('.scrubber__date').html(post.data('date'));

                $('.scrollbar-area .info').css('top', $('.scrollbar-area .thumb').css('top'));
            }

            scrubber.onScrubEnd = function (value) {
                var value = ((count - value) + 1);

                if (value === '-1') {
                    var value = 1;
                }

                if ($('.scrollbar-area .backto-post').hasClass('active')) {
                    $('.scrollbar-area .backto-post').removeClass('d-none');
                }

                var post = $('.post[data-item="' + value + '"]');

                if (post.length > 0) {
                    app.scrollTopAnchor(post);
                } else {
                    $('.post-loader-spin').show();

                    var dataString = {
                        discussion_id: $('.post.first-post').data('discussion-id'),
                        post_count: $('.scrollbar-area .info .post-count').text(),
                        request_post: $('.scrollbar-area .info .scrubber__index').text(),
                        order: $('[data-ui="order-discussion-posts"].active').data('order')
                    };

                    app.post("post/next-request-discussion-page", dataString).done(function (response) {
                        if (response.status === "ok") {
                            $('[data-feature="hidden-paging"]').remove();

                            $('.post-loader-spin').hide();

                            $('.app-post-container > .post:not(.first-post)').remove();

                            $('.app-post-container > .first-post').after(response.template);

                            $('.app-post-container > .post').each(function (i, elem) {
                                var i = (i + 1)
                                $(this).attr('data-item', i);
                            });

                            if ($('.post[data-post-id="' + $('.post.first-post').data('last-post-id') + '"').length > 0) {
                                $('[data-feature="hidden-paging"]').remove();
                            }

                            app.scrollTopAnchor($('[data-item="' + response.whichPost + '"]'));
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });
                }
            }

            $('.scrollbar-area [data-ui="backto-post"]').on('click', function () {
                $('.scrollbar-area .backto-post').addClass('d-none');
                $('.scrollbar-area .backto-post').removeClass('active');

                app.scrollTopAnchor($('[data-item="' + $(this).data('post-id') + '"]'));
            });
        }
    });

    $(document).on('click', '[data-ui="discussion-post-refresher"]', function () {
        $('.app-order-discussion-post a.active').click();
    });

    $(document).on('click', '[data-ui="share"]', function (e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $(function () {
        $('[data-ui="share"]').popover({
            trigger: 'focus',
            placement: 'bottom',
            animation: true,
            title: $('.share-popover-container').data('title'),
            content: $('.share-popover-container').html(),
            html: true
        });

        $('.share-popover-container').remove();

        $(document).on("click", '.share-content a', function (e) {
            e.preventDefault();
            e.stopPropagation();

            window.open(this.href, 'popUpWindow', 'height=400,width=600,left=10,top=10,,scrollbars=yes,menubar=no');
            $('[data-ui="share"]').popover('hide');
        });
    });

    $(document).on('click', '[data-ui="subscribe-discussion"]', function (e) {
        e.preventDefault();

        $(this).removeClass('subscription')
        $(this).addClass('subscription-remove');

        var dataString = {
            discussion_id: $('.post.first-post').data('discussion-id')
        };

        app.post("post/discussion-subscribe", dataString).done(function (response) {
            if (response.status === "ok") {
                $('[data-ui="subscribe-discussion"]').text($('[data-ui="subscribe-discussion"]').data('remove-text'));
                $('[data-ui="subscribe-discussion"]').attr('data-ui', 'remove-subscribe-discussion');

                app.flashMessage(app.phrases.alert_messages.subscribe_success);
            } else if (response.status === "allready-subscribe") {
                app.flashMessage(app.phrases.alert_messages.subscribe_allready);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="remove-subscribe-discussion"]', function (e) {
        e.preventDefault();

        $(this).removeClass('subscription-remove')
        $(this).addClass('subscription');

        var dataString = {
            discussion_id: $('.post.first-post').data('discussion-id')
        };

        app.post("post/discussion-remove-subscribe", dataString).done(function (response) {
            if (response.status === "ok") {
                $('[data-ui="remove-subscribe-discussion"]').text($('[data-ui="remove-subscribe-discussion"]').data('text'));
                $('[data-ui="remove-subscribe-discussion"]').attr('data-ui', 'subscribe-discussion');

                app.flashMessage(app.phrases.alert_messages.subscribe_remove);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="quick-add-as-friend"]', function (e) {
        e.preventDefault();

        var elem = $(this);

        var dataString = {
            user_id: $(this).closest('.post').data('user-id'),
        };

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("account/add-friend", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                elem.find('span').text(elem.data('complete-text'));

                elem.attr('data-ui', 'quick-remove-friend');

                app.flashMessage(app.phrases.alert_messages.add_friend);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="quick-remove-friend"]', function (e) {
        e.preventDefault();

        var elem = $(this);

        var dataString = {
            user_id: $(this).closest('.post').data('user-id'),
        };

        elem.closest('.app-discussion').find('.progress').removeClass('d-none');

        app.post("account/remove-friend", dataString).done(function (response) {
            if (response.status === "ok") {
                elem.closest('.app-discussion').find('.progress').addClass('d-none');

                elem.find('span').text(elem.data('text'));

                elem.attr('data-ui', 'quick-add-as-friend');

                app.flashMessage(app.phrases.alert_messages.remove_friend);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="spoiler-btn"]', function (e) {
        $(this).toggleClass('show');
    });

    $(function () {
        if ($('body[data-template="discussion"]').length) {
            var post_regex = /p\/([0-9A-Za-z]+)$/g;
            var post_regex2 = /d\/([0-9]+)-([a-z-]+)\/([0-9]+)$/g;

            if (window.location.href.match(post_regex)) {
                var post = post_regex.exec(window.location.href)[1];

                if ($('.app-post-container > .post[data-shortcode="' + post + '"]').length) {
                    app.scrollTopAnchor($('.app-post-container > .post[data-shortcode="' + post + '"]'));
                } else {
                    $("html, body").animate({
                        scrollTop: $(document).height() + 100000
                    }, 'slow');

                    app.scrollTopAnchor($('.app-post-container > .post[data-shortcode="' + post + '"]'));
                }
            } /*else if(window.location.href.match(post_regex2)) {
				var post = post_regex2.exec(window.location.href)[3];

				if($('.app-post-container > .post[data-post-id="'+post+'"]').length) {
					app.scrollTopAnchor($('.app-post-container > .post[data-post-id="'+post+'"]'));
				} else {
					$("html, body").animate({
						scrollTop: $(document).height() + 100000
					}, 'slow');

					app.scrollTopAnchor($('.app-post-container > .post[data-post-id="'+post+'"]'));
				}
			} */
        }
    });

    //https://codepen.io/FezVrasta/pen/vWXQdq
    $(function () {
        if ($('body[data-template="discussion"]').length && typeof app.visitor.user_id !== 'undefined') {
            class RangeRef {
                constructor() {
                    this.updateRect();

                    const update = (evt, hide = false) => {
                        let selection = document.getSelection();

                        this.range = selection && selection.rangeCount && selection.getRangeAt(0);

                        if (!$(selection.focusNode).closest('.app-bbcode-content').hasClasses(['app-bbcode-content'])) {
                            hide = true;
                        }

                        if (!selection.toString().length) {
                            hide = true;
                        }

                        var html = false;
                        if (typeof selection != "undefined") {
                            var sel = selection;
                            if (sel.rangeCount) {
                                var container = document.createElement("span");
                                for (var i = 0, len = sel.rangeCount; i < len; ++i) {
                                    container.appendChild(sel.getRangeAt(i).cloneContents()) + "<br>";
                                }
                                html = container.innerHTML;
                            }
                        } else if (typeof document.selection != "undefined") {
                            if (document.selection.type == "Text") {
                                html = document.selection.createRange().htmlText;
                            }
                        }

                        if (!html || !html.length) {
                            hide = true;
                        }

                        $('#quote-pop').attr('data-post-id',
                            $(selection.focusNode).closest('.post').data('post-id')
                        );
                        $('#quote-pop').attr('data-quote-json',
                            JSON.stringify({ 'quote': html })
                        );

                        this.updateRect(hide);
                    }
                    document
                        .querySelector(".app-bbcode-content")
                        .addEventListener("mouseup", update);
                    document
                        .querySelector(".app-bbcode-content")
                        .addEventListener("input", update);
                    document
                        .querySelector(".app-bbcode-content")
                        .addEventListener("keydown", evt => update(evt, true));

                    window
                        .addEventListener("scroll", update);
                    document
                        .scrollingElement
                        .addEventListener("scroll", update);

                    window
                        .addEventListener("click", update);
                }

                updateRect(hide) {
                    if (!hide && this.range) {
                        this.rect = this.range.getBoundingClientRect();
                    } else {
                        this.rect = {
                            top: 0,
                            left: 0,
                            right: 0,
                            bottom: 0,
                            width: 0,
                            height: 0
                        };
                    }

                    this.rectChangedCallback(this.rect);
                }

                rectChangedCallback() { }

                getBoundingClientRect() {
                    return this.rect;
                }

                get clientWidth() {
                    return this.rect.width;
                }

                get clientHeight() {
                    return this.rect.height;
                }
            }

            const pop = document.getElementById("quote-pop");
            const rangeRef = new RangeRef();
            const popper = new Popper(rangeRef, pop, {
                placement: "top",
                modifiers: {
                    name: 'eventListeners',
                    options: { scroll: false }
                },
            });

            rangeRef.rectChangedCallback = ({ width }) => {
                if (width > 0) {
                    popper.scheduleUpdate();
                    pop.classList.add('show');
                } else {
                    pop.classList.remove('show');
                }
            };
        }
    });

    $(document).on('click', '#quote-pop a', function (e) {
        e.preventDefault();

        var post_id = $(this).closest('#quote-pop').attr('data-post-id');
        var content = $.parseJSON($(this).closest('#quote-pop').attr('data-quote-json'));

        $('.post[data-post-id="' + post_id + '"]').find('.progress').removeClass('d-none');

        setTimeout(function () {
            $('[data-ui="show-editor"]').click();

            var currentContent = tinymce.get('post-editor').getContent();

            if (app.getStats('post-editor').chars < 1) {
                var quoteInner = '[post-selected-quote=' + post_id + ']' + content.quote + '[/post-quote]';
            } else {
                var quoteInner = '<p><br></p>[post-selected-quote=' + post_id + ']' + content.quote + '[/post-quote]';
            }

            tinymce.get('post-editor').execCommand('mceInsertContent', false, currentContent + quoteInner);

            $('.post[data-post-id="' + post_id + '"]').find('.progress').addClass('d-none');
        }, 200);
    });

    function codeHighlighterTitle() {
        $('.bbContainer_appCodeBlock').each(function (i, elem) {
            $(this).find('.codeBlockTitle').html(app.phrases.code_block + ' - <span style="text-transform: capitalize; font-weight: 900;">' + $(this).find('pre').attr('class').replace(' language-', '') + '</span>');
        });
    }

    function renderLink() {
        if ($('body[data-template="discussion"]').length) {
            if ($('.discussion-text > article > a:not(.no-unfurl)').length) {
                $('.discussion-text > article > a:not(.no-unfurl)').each(function (i, elem) {
                    if ($(this).attr('href') === $(this).text()) {
                        var matchingUrl = $(this).attr('href').match(/\b(http|https)?(:\/\/)?(\S*)\.?(\w{2,4})(.*)/g)

                        if (matchingUrl) {
                            var elem = $(this);
                            elem.addClass('d-none');

                            var elem_id = Math.floor(Math.random() * 1000);

                            elem.closest('.app-discussion').find('.progress').removeClass('d-none');

                            var dataString = {
                                post_id: elem.closest('.post').data('post-id'),
                                url: matchingUrl[0]
                            }

                            var html = "<div class=\"js-appExternalLink d-flex shadow-sm rounded mb-3\" data-id=\"" + elem_id + "\"><div class=\"image mr-2\"><div class=\"post-loader-spin m-0 d-block\"></div></div><div class=\"content\"><h6 class=\"font-weight-bold mb-1\"><a class=\"text-dark\" href=\"#\" target=\"blank\">" + app.phrases.proceed + "</a></h6><div class=\"description\"></div><div class=\"link\"></div></div></div>";
                            elem.after(html);
                            var replacedHtml = elem.next();

                            app.post("post/external-link-renderer", dataString).done(function (response) {
                                if (response.status === "ok") {
                                    if (response.data.image !== null) {
                                        replacedHtml.find('.image').html('<img src=' + response.data.image + ' />');
                                    } else {
                                        replacedHtml.find('.image').addClass('d-none');
                                        replacedHtml.find('.content').addClass('pl-2');
                                    }
                                    replacedHtml.find('.content > h6 > a').attr('href', response.data.url);
                                    replacedHtml.find('.content > h6 > a').text(response.data.title);
                                    replacedHtml.find('.content > .description').text(response.data.description);
                                    replacedHtml.find('.content > .link').text(response.data.site);

                                    replacedHtml.addClass('show');

                                    elem.closest('.app-discussion').find('.progress').addClass('d-none');

                                    elem.remove();
                                } else if (response.status === "fail" || response.status === "timeout" || response.status === "exception") {
                                    if (typeof response.message !== "undefined") {
                                        console.log(response.message);
                                    }

                                    elem.closest('.app-discussion').find('.progress').addClass('d-none');

                                    replacedHtml.remove();
                                    elem.addClass('no-unfurl');
                                    elem.removeClass('d-none');
                                }
                            }).fail(function (xhr, status, err) {
                                console.log(status, err);
                            });
                        }
                    }
                });
            }
        }
    }

    $(document).bind('ajaxStop', function () {
        app.reactionBox();
        app.twitterApi();
        renderLink();

        Prism.highlightAll();
        codeHighlighterTitle();
    });

    $(document).ready(function () {
        app.reactionBox();
        app.twitterApi();
        renderLink();

        codeHighlighterTitle();
    });
}(window.jQuery, window, document);