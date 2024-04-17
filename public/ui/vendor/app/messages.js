if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    $(document).on('click', '[data-ui="show-conversation"]', function (e) {
        e.preventDefault();

        $('.app-breadcrumb > div:last').text($(this).text());

        var confirmationMessage = app.phrases.alert_messages.not_saving_content;

        if ($('#form-conversation-create textarea[name="text"]').length) {
            if ($('#form-conversation-create textarea[name="text"]').val().length) {
                confirm(confirmationMessage);
            }
        }

        if ($('#form-message-create textarea[name="text"]').length) {
            if ($('#form-message-create textarea[name="text"]').val().length) {
                confirm(confirmationMessage);
            }
        }

        $('[data-ui="show-conversation"]').removeClass('active');
        $(this).addClass('active');

        $('.conversation-area').html('');

        $('.app-tab-container > .no-post').remove();
        $('.post-loader-spin').show();

        var dataString = {
            conversation_id: $(this).data('conversation-id')
        };

        app.post("messages/conversation/get", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.post-loader-spin').hide();

                $('.conversation-area').html(response.template);

                if ($('.conversation-area .messages > div:not(".d-none")').length > 0) {
                    $('.conversation-area .messages').animate({
                        scrollTop: $('.conversation-area .messages').children(':not(".d-none")').last().offset().top
                    }, 'fast');
                }
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });

        window.history.pushState(null, null, app.config.settings.site_url + "/messages/conversation/" + $(this).data('conversation-id'));
    });

    $(document).bind('ajaxStop', function () {
        $("#form-message-create textarea").TextAreaExpander(40, 100);
        $("#form-conversation-create textarea").TextAreaExpander(40, 100);

        $('.conversation-area .messages > div').each(function () {
            if ($(this).prev().hasClass($(this).attr('class').split(' ')[0])) {
                $(this).find('.user').addClass('d-none');

                if ($(this).hasClass('new-message')) {
                    $(this).prev().prev().find('small').addClass('d-none');
                } else {
                    $(this).prev().find('small').addClass('d-none');
                }

                $(this).prev().removeClass('mb-lg-3').addClass('mb-lg-1').removeClass('mb-4').addClass('mb-1');
            }
        });
    });

    $(document).on('keypress', function (e) {
        if (e.which == 13) {
            e.preventDefault();

            $('#form-message-create button.submit').click();
        }
    });

    $(document).on('click', '#form-message-create button.submit', function (e) {
        if ($('#form-message-create textarea[name="text"]').val().length > 0) {
            var dataString = {
                message_id: $('.app-box').data('message-id'),
                text: $('#form-message-create textarea[name="text"]').val()
            }

            $('.conversation-area .messages .me.new-message:last > span').text(dataString.text);
            $('.conversation-area .messages .me.new-message:last').removeClass('d-none');

            app.post("messages/conversation/send", dataString).done(function (response) {
                if (response.status === "ok") {
                    $('.conversation-area .messages .me.new-message > .anim-area > .post-loader-spin').removeClass('d-block');
                    $('.conversation-area .messages .me.new-message > div:first').attr('data-is-seeing', 0);

                    $('.conversation-area .messages').animate({ scrollTop: 20000000 }, "fast");

                    var clone_elem = $('.conversation-area .messages > .me.new-message:last').clone();
                    $('.conversation-area .messages > .me.new-message:last').after(clone_elem);

                    $('.conversation-area .messages .me.new-message:last > span').text('');
                    $('.conversation-area .messages .me.new-message:last').addClass('d-none');

                    $('#form-message-create textarea[name="text"]').val(app.phrases.alert_messages.wait_a_while);
                    $('#form-message-create textarea[name="text"]').prop('disabled', true);

                    setTimeout(function () {
                        $('#form-message-create textarea[name="text"]').removeAttr('disabled');
                        $('#form-message-create textarea[name="text"]').val('');
                    }, 5000);
                }
            }).fail(function (xhr, status, err) {
                console.log(status, err);
            });
        }
    });

    $(document).on('click', '[data-ui="conversation-refresher"]', function (e) {
        $('body[data-template="messages"] .list-group-item[data-conversation-id="' + $('.app-box').data('message-id') + '"]').click();
    });

    $(document).on('click', '[data-ui="conversation-archive"]', function (e) {
        e.preventDefault();

        var dataString = {
            message_id: $('.app-box').data('message-id')
        }

        app.post("messages/conversation/archive", dataString).done(function (response) {
            if (response.status === "ok") {
                var item = $('.list-group-item[data-conversation-id=' + dataString.message_id + ']').clone();
                $('.list-group-item[data-conversation-id=' + dataString.message_id + ']').remove();

                $('.app-archived-messages .list-group > .new').after(item);

                $('[data-ui="conversation-archive"] span').text($('[data-ui="conversation-archive"] span').data('toggle-text'));
                $('[data-ui="conversation-archive"]').attr('data-ui', 'conversation-remove-archive');

                $('body[data-template="messages"] [data-conversation-id="' + dataString.message_id + '"]').click();

                app.flashMessage(app.phrases.alert_messages.messages_archived);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $(document).on('click', '[data-ui="conversation-remove-archive"]', function (e) {
        e.preventDefault();

        var dataString = {
            message_id: $('.app-box').data('message-id')
        }

        app.post("messages/conversation/remove-archive", dataString).done(function (response) {
            if (response.status === "ok") {
                var item = $('.list-group-item[data-conversation-id=' + dataString.message_id + ']').clone();
                $('.list-group-item[data-conversation-id=' + dataString.message_id + ']').remove();

                $('.app-forums:not(".app-archived-messages") .list-group > .new').after(item);

                $('[data-ui="conversation-remove-archive"] span').text($('[data-ui="conversation-remove-archive"] span').data('text'));
                $('[data-ui="conversation-remove-archive"]').attr('data-ui', 'conversation-archive');

                $('body[data-template="messages"] [data-conversation-id="' + dataString.message_id + '"]').click();

                app.flashMessage(app.phrases.alert_messages.messages_removed_archive);
            }
        }).fail(function (xhr, status, err) {
            console.log(status, err);
        });
    });

    $('#messages-quick-search :input').on("keyup click input", function () {
        if ($(this).val().length > 0) {
            var value = $(this).val().toLowerCase();
            $('.app-forums:not(".app-search-messages") a').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        } else {
            $('.app-forums:not(".app-search-messages") a').show();
        }

        $(document).on('click', '#messages-quick-search .form-control-feedback', function (e) {
            $('.app-forums:not(".app-search-messages") a').show();
        });
    });

    $(document).on('click', '#form-conversation-create button.submit', function (e) {
        if ($('#form-conversation-create textarea[name="text"]').val().length > 0) {
            if ($('#form-conversation-create :input[name="username"]').val().length < 1) {
                app.flashMessage(app.phrases.alert_messages.messages_write_a_username);
                return false;
            }

            if ($('#form-conversation-create :input[name="title"]').val().length < 1) {
                app.flashMessage(app.phrases.alert_messages.messages_write_a_title);
                return false;
            }

            var dataString = {
                title: $('#form-conversation-create :input[name="title"]').val(),
                text: $('#form-conversation-create textarea[name="text"]').val(),
                target_user: $('#form-conversation-create :input[name="username"]').val()
            }

            if (dataString.target_user != app.visitor.username) {
                $('.conversation-area .messages .me.new-message > span').text(dataString.text);
                $('.conversation-area .messages .me.new-message').removeClass('d-none');
            }

            app.post("messages/conversation/new", dataString).done(function (response) {
                if (response.status === "ok") {
                    $('#form-conversation-create textarea[name="text"]').val('');
                    $('#form-conversation-create textarea[name="text"]').prop('disabled', true);
                    window.location.href = app.config.settings.site_url + '/messages/conversation/' + response.message_id;
                } else if (response.status === "user-is-same") {
                    app.flashMessage(app.phrases.alert_messages.messages_not_self);
                }
            }).fail(function (xhr, status, err) {
                console.log(status, err);
            });
        }
    });

    $(document).on('click', '[data-ui="send-message"]', function (e) {
        $('.conversation-area').html('');

        $('.app-breadcrumb > div:last').text($(this).data('text'));

        $('.post-loader-spin').show();
        $('.app-tab-container > .no-post').remove();

        var user_regex = /messages\/new\/([0-9]+)$/g;

        if (window.location.href.match(user_regex)) {
            var user_id = user_regex.exec(window.location.href);

            var dataString = {
                target_user: user_id[1]
            };
        } else {
            var dataString = {}
        }

        app.post("messages/new", dataString).done(function (response) {
            if (response.status === "ok") {
                $('.post-loader-spin').hide();

                $('.conversation-area').html(response.template);
            }
        });
        if (window.location.href.match(user_regex)) {
            window.history.pushState(null, null, app.config.settings.site_url + "/messages/new/" + dataString.target_user);
        } else {
            window.history.pushState(null, null, app.config.settings.site_url + "/messages/new");
        }
    });

    $(document).bind('ajaxStop', function () {
        $('#form-conversation-create :input[name="username"]').donetyping(function () {
            if ($(this).val().length > 0 && $(this).val() != ' ') {
                $('#form-conversation-create .user-results').removeClass('d-none');
                $('#form-conversation-create .user-results .post-loader-spin').show();

                $('#form-conversation-create .user-results .scrollable').html('');

                var dataString = {
                    keyword: $(this).val()
                };

                app.post("messages/conversation/search-user", dataString).done(function (response) {
                    if (response.status === "ok") {
                        $('#form-conversation-create .user-results .post-loader-spin').hide();

                        $('#form-conversation-create .user-results .scrollable').html(response.template);
                    }
                }).fail(function (xhr, status, err) {
                    console.log(status, err);
                });
            }
        });
    });

    $(document).on('click', '#form-conversation-create .user-results a', function (e) {
        e.preventDefault();

        $('#form-conversation-create .user-results').addClass('d-none');
        $('#form-conversation-create :input[name="username"]').val($(this).data('username'));
    });

    window.addEventListener("beforeunload", function (e) {
        if ($('#form-conversation-create textarea[name="text"]').length) {
            var confirmationMessage = "Kaydetmediğiniz veriler var!";
            if ($('#form-conversation-create textarea[name="text"]').val().length) {
                (e || window.event).returnValue = confirmationMessage;
                return confirmationMessage;
            }
        }

        if ($('#form-message-create textarea[name="text"]').length) {
            var confirmationMessage = "Kaydetmediğiniz veriler var!";
            if ($('#form-message-create textarea[name="text"]').val().length) {
                (e || window.event).returnValue = confirmationMessage;
                return confirmationMessage;
            }
        }
    });

    $(function () {
        if ($('body[data-template="messages"]').length) {
            var tab_regex = /messages\/conversation\/([0-9]+)$/g;

            if (window.location.href.match(tab_regex)) {
                var tab = tab_regex.exec(window.location.href);

                $('body[data-template="messages"] [data-conversation-id="' + tab[1] + '"]').click();
            }

            var tab_regex = /messages\/new/g;

            if (window.location.href.match(tab_regex)) {
                $('body[data-template="messages"] [data-ui="send-message"]').click();

                document.title = 'Yeni Mesaj - ' + app.config.settings.site_title;
            }
        }
    });
}(window.jQuery, window, document);