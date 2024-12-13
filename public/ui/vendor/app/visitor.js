if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    $(function () {
        if ($('#register-attempt input[data-recaptcha]').length) {
            window.verifyRecaptchaCallback = function (response) {
                $('#register-attempt input[data-recaptcha]').val(response).trigger('change');

                $('#register-attempt form').addClass('validated');
            }

            window.expiredRecaptchaCallback = function () {
                $('#register-attempt input[data-recaptcha]').val("").trigger('change');

                $('#register-attempt form').removeClass('validated');
            }

            $(document).on('click', '#register-attempt [name="login-submit"]', function () {
                if ($('#register-attempt form.validated').length < 1) {
                    $('#register-attempt #g-recaptcha-error').removeClass('d-none');
                }
            });
        }
    });

    $(function () {
        if ($('.alert-login').length) {
            $("#login-attempt").modal();
        }
    });

    $(document).on('click', '[data-ui="login-attempt"]', function () {
        event.preventDefault();

        $("#login-attempt").modal();

        $('[name="username"]').focus();

        $(document).on('click', '#login-attempt .modal-body a.register', function () {
            event.preventDefault();

            $("#login-attempt .close").click();

            $("#register-attempt").modal();
        });
    });

    $(document).on('click', '[data-ui="register-attempt"]', function () {
        event.preventDefault();

        $("#register-attempt").modal();

        $('[name="mail"]').focus();

        $(document).on('click', '#register-attempt .modal-body a.login', function () {
            event.preventDefault();

            $("#register-attempt .close").click();

            $("#login-attempt").modal();
        });
    });

    $(document).on('click', '[data-ui="sign-out-confirmation"]', function () {
        event.preventDefault();

        $("#sign-out-confirmation").modal();
    });

    $(document).on('click', '[data-ui="forgot-password"]', function () {
        event.preventDefault();

        $(this).closest('.modal').find('.close').click();

        $("#forgot-password-attempt").modal();

        $('[name="mail"]').focus();
    });

    $(function () {
        $("#register-attempt form :input[name='username']").donetyping(function () {
            var dataString = {
                username: $(this).val()
            };

            $("#register-attempt form .post-loader-spin").show();

            $("#register-attempt form #username-control").removeClass('available');
            $("#register-attempt form #username-control").removeClass('not-available');

            if ($(this).val().length > 0) {
                app.post("auth/control-username", dataString).done(function (response) {
                    if (response.status === "ok") {
                        $("#register-attempt form .post-loader-spin").hide();

                        if (response.exist === 0) {
                            $("#register-attempt form #username-control").addClass('available');
                            $("#register-attempt form #username-control").text(app.phrases.username_available);

                            $("#register-attempt form button").attr('disabled', false);
                        } else if (response.exist === 1) {
                            $("#register-attempt form #username-control").addClass('not-available');
                            $("#register-attempt form #username-control").text(app.phrases.username_not_available);

                            $("#register-attempt form button").attr('disabled', true);
                        }
                    }
                }).fail(function (xhr, status, err) {
                    console.log(status, err);
                });
            } else {

            }
        });
    });

    $(function () {
        if ($('.app-account-area .notify-count').text() > 0) {
            var title = $(document).attr('title');

            document.title = '(' + $('.app-account-area .notify-count').text() + ') ' + title;

            $('.app-account-area .btn-app-account.notification').on('click', function () {
                document.title = title;

                $('.app-account-area .notify-count').text('');

                $.ajax({
                    url: app.config.settings.site_url + "/account/mark-read-notifications",
                    type: "post",
                    success: function (response) {
                    }
                });
            });
        }

        if ($('.app-account-area .message-count').text() > 0) {
            var title = $(document).attr('title');

            document.title = '(' + $('.app-account-area .message-count').text() + ') ' + title;

            $('.app-account-area [data-ui="markread-messages"]').on('click', function (e) {
                e.preventDefault();

                document.title = title;

                $.ajax({
                    url: app.config.settings.site_url + "/account/mark-read-messages",
                    type: "post",
                    success: function (response) {
                        $('.app-account-area .message-count').text('');

                        $('.message-menu a.message').attr('data-is-seeing', 1);
                    }
                });
            });
        } else {
            $('.app-account-area [data-ui="markread-messages"]').on('click', function (e) {
                e.preventDefault();
            });
        }

        $('.app-account-area [data-ui="message-refresher"]').on('click', function (e) {
            e.preventDefault();

            $('.message-menu a.notification.message').remove();
            $('.message-menu .no-records').remove();

            $('.message-menu .post-loader-spin').show();

            app.post("account/refresh-messages", {}).done(function (response) {
                if (response.status === "ok") {
                    $('.message-menu .post-loader-spin').hide();

                    $('.message-menu .post-loader-spin').before(response.template);

                    if ($('.message-menu a.message[data-is-seeing="0"]').length) {
                        $('.app-account-area .message-count').text($('.message-menu a.message[data-is-seeing="0"]').length);
                    }
                }
            }).fail(function (xhr, status, err) {
                console.log(status, err);
            });
        });

        $('.app-account-area [data-ui="notification-refresher"]').on('click', function (e) {
            e.preventDefault();

            $('.notification-menu a.notification').remove();
            $('.notification-menu .no-records').remove();

            $('.notification-menu .post-loader-spin').show();

            app.post("account/refresh-notification", {}).done(function (response) {
                if (response.status === "ok") {
                    $('.notification-menu .post-loader-spin').hide();

                    $('.notification-menu .post-loader-spin').before(response.template);

                    if ($('.notification-menu a.notification[data-is-seeing="0"]').length) {
                        $('.app-account-area .notify-count').text($('.notification-menu a.notification[data-is-seeing="0"]').length);
                    }
                }
            }).fail(function (xhr, status, err) {
                console.log(status, err);
            });
        });
    });

    $(function () {
        $('.auto-switch').on('click', function () {
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');

                $('.app-theme-mode').removeClass('disable');
                $('.app-theme-mode input').attr('disabled', false);

                Storages.cookieStorage.set('theme_mode_auto', 'off');
            } else {
                $(this).addClass('active');

                if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    if (!$('.app-theme-mode input').is(':checked')) {
                        $('.app-theme-mode input').click();
                    }
                } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                    if ($('.app-theme-mode input').is(':checked')) {
                        $('.app-theme-mode input').click();
                    }
                };

                $('.app-theme-mode').addClass('disable');
                $('.app-theme-mode input').attr('disabled', true);

                Storages.cookieStorage.set('theme_mode_auto', true);
            }
        });

        $('.app-theme-mode').on('click', function () {
            if ($('.app-theme-mode input').is(':checked')) {
                $(this).addClass('active');
                $('.app-theme-mode input').attr('checked', true);

                $('body').addClass('app-night-mode');
                $('.navbar .navbar-brand > img').attr('src', app.config.settings.logo.night);

                $('#login-attempt .logo > img').attr('src', app.config.settings.logo.night);
                $('#register-attempt .logo > img').attr('src', app.config.settings.logo.night);

                Storages.cookieStorage.set('night_mode', true);
            } else {
                $(this).removeClass('active');
                $('.app-theme-mode input').attr('checked', false);

                $('body').removeClass('app-night-mode');
                $('.navbar .navbar-brand > img').attr('src', app.config.settings.logo.light);

                $('#login-attempt .logo > img').attr('src', app.config.settings.logo.light);
                $('#register-attempt .logo > img').attr('src', app.config.settings.logo.light);

                Storages.cookieStorage.remove('night_mode');
            }

            $(".app-post-create .progress").removeClass("d-none");

            setTimeout(function () {
                if ($('#post-editor').length) {
                    tinymce.remove();
                    app.editorConfig("#post-editor");
                }
                $(".app-post-create .progress").addClass("d-none");
            }, 200);
        });

        if (Storages.cookieStorage.get("night_mode")) {
            $('.app-theme-mode').addClass('active');
            $('.app-theme-mode input').attr('checked', true);

            if (!$('body').hasClass('app-night-mode')) {
                $('body').addClass('app-night-mode');
            }
        } else {
            $('.app-theme-mode').removeClass('active');
            $('.app-theme-mode input').attr('checked', false);
        }
    });

    $(function () {
        if ($('#twoStepVerification_Modal').length) {
            $('.navbar').remove();

            $('#twoStepVerification_Modal').modal({
                backdrop: 'static',
                keyboard: false
            });

            $('form#twoStepVerification input[name="twofa_code"]').focus();

            $("form#twoStepVerification").validate({
                onfocusout: false,
                submitHandler: function (form, e) {
                    e.preventDefault();

                    $('form#twoStepVerification .form-error span').text('');

                    var dataString = {
                        twofa_code: $('form#twoStepVerification input[name="twofa_code"]').val()
                    };

                    app.post("two-step-verification/verify", dataString).done(function (response) {
                        if (response.status === "ok") {
                            window.location.reload();
                        } else if (response.status === "fail") {
                            $('form#twoStepVerification .form-error span').text(app.phrases.alert_messages.two_step_verification_code_error);
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });
                }
            });
        }
    });

    function userTooltipInit() {
        $('img.user-status:not(.no-tooltip), a.user-tooltip-link').each(function (i, elem) {
            var elem = $(this);

            if (window.matchMedia('(max-width: 768px)').matches) {
                $(this).closest('a').on('click', function (e) {
                    e.preventDefault();
                });
                var placement = 'top';
            } else {
                var placement = 'right';
            }

            var timer;
            elem.popover({
                content: '<div class="post-loader-spin d-block"></div>',
                container: 'body',
                template: '<div class="popover user-tooltip ' + elem.data('user-id') + '" role="tooltip"><div class="arrow"></div><div class="popover-body"></div></div>',
                boundary: 'window',
                trigger: 'manual',
                placement: placement,
                html: true
            }).on("mouseenter", function () {
                var _this = this;
                timer = setTimeout(function () {
                    if ($(_this).attr('data-user-id') === undefined) {
                        console.error('Tooltip error: UserId is missing.');
                        return false;
                    }

                    $(_this).popover('show');

                    var dataString = {
                        user_id: $(_this).data('user-id')
                    };

                    app.post("account/profile-tooltip", dataString).done(function (response) {
                        if (response.status === "ok") {
                            $(".popover-body").html(response.template);
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });
                    $(".popover").on("mouseleave", function () {
                        $(_this).popover('hide');
                    });
                }, 600);
            }).on("mouseleave", function () {
                clearTimeout(timer);
                var _this = this;
                setTimeout(function () {
                    if (!$(".popover:hover").length) {
                        $(_this).popover('hide');
                    }
                }, 300);
            });
        });
    };

    $('[data-init="js-Mention_ExternalLogin"]').on('click', function (e) {
        window.location.href = app.config.settings.site_url + '/auth/' + $(this).data('callback');
    });

    $(document).on('click', '.tooltip.tooltipEmojiBox a.copy', function (event) {
        event.preventDefault();

        var text = $(this).closest('span').text();
        document.addEventListener('copy', function (e) {
            e.clipboardData.setData('text/plain', text);
            e.preventDefault();
        }, true);

        document.execCommand("copy");

        app.flashMessage(app.phrases.alert_messages.copy_to_clipboard);
    });

    $(document).bind('ajaxStop', function () {
        userTooltipInit();
    });

    $(document).ready(function () {
        if (Storages.cookieStorage.get("theme_mode_auto") === true) {
            if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                if (!$('.app-theme-mode input').is(':checked')) {
                    $('.app-theme-mode input').click();
                }
            } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                if ($('.app-theme-mode input').is(':checked')) {
                    $('.app-theme-mode input').click();
                }
            };
        };

        if (!Storages.cookieStorage.get("theme_mode_auto") && !Storages.cookieStorage.get("night_mode")) {
            $('.auto-switch').click();
        };

        userTooltipInit();
    });
}(window.jQuery, window, document);