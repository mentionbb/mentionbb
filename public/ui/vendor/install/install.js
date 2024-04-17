if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
    "use strict";

    $(function () {
        Storages.cookieStorage.setConf({
            expires: 30
        });

        $(document).on('click', '.js-App-Theme-ModeSwitcher', function (e) {
            if ($(this).find('input').is(':checked')) {
                $(this).find('input').attr('checked', true);
                $('body').addClass('app-night-mode');

                Storages.cookieStorage.set('night_mode', true);
            } else {
                $(this).find('input').attr('checked', false);
                $('body').removeClass('app-night-mode');

                Storages.cookieStorage.remove('night_mode');
            }
        });
    });

    $(function () {
        $(document).on('click', '.app-install .btn-install-next', function (e) {
            switch ($(this).attr('data-step')) {
                case ('1a'):
                    $('.hello-logo').addClass('d-none');
                    $('.step1a p').text('Proceed to installation.');

                    $(this).addClass('button-highlight');

                    $('.logo:not(.hello-logo)').fadeIn('fast');

                    $('.logo:not(.hello-logo)')
                        .removeClass('install-index')
                        .addClass('install')
                        .addClass('step1a');

                    document.getElementById('step1a-animate').beginElement();

                    $(this)
                        .attr('data-step', '1b')
                        .find('i')
                        .removeClass('fa-check-circle')
                        .addClass('fa-arrow-alt-circle-right')
                        .closest('button')
                        .find('span')
                        .text('Next');

                    setPercent(3);
                    consoleLogger('Setup is starting..');

                    break;
                case ('1b'):
                    consoleLogger('License agreement');

                    $('.app-install .progress:not(.install-progress)').removeClass('d-none');

                    app.post("install?next", { 'step': 'step1b' }).done(function (response) {
                        if (response.status === "ok") {
                            consoleLogger('{ok}');
                            nextStep('step1c', '33%', '.22;.33', false, 'I agree');

                            $('.app-install .progress:not(.install-progress)').addClass('d-none');

                            $('.js-AppInstall-Steps').html(response.template);

                            setPercent(5);
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });

                    break;
                case ('1c'):
                    consoleLogger('Checking server requirements..');

                    $('.app-install .progress:not(.install-progress)').removeClass('d-none');

                    app.post("install?next", { 'step': 'step1c' }).done(function (response) {
                        if (response.status === "ok") {
                            if (response.error.status === 'fail') {
                                consoleLogger('{fail}');
                                installError('step1d', '66%', '.33;.66', response.error.template);
                            } else {
                                consoleLogger('{ok}');
                                nextStep('step1d', '66%', '.33;.66', false);
                            }

                            $('.app-install .progress:not(.install-progress)').addClass('d-none');

                            $('.js-AppInstall-Steps').html(response.template);

                            setPercent(15);
                        }
                    }).fail(function (xhr, status, err) {
                        console.log(status, err);
                    });

                    break;
            }
        });
    });

    function nextStep(newStep, percent, animatePercent, error = false, buttonMessage = false) {
        $('.logo').addClass(newStep);

        var clonedStep = $('svg defs linearGradient:last').clone();

        $(clonedStep)
            .attr('id', newStep)
            .attr('offset', percent)
            .find('animate').attr('values', animatePercent).attr('id', newStep + '-animate');

        if (error) {
            $(clonedStep)
                .find('stop:first')
                .attr('stop-color', '#e53935');
        }

        $('svg defs linearGradient:last').after(clonedStep);

        document.getElementById(newStep + '-animate').beginElement();

        $('.app-install .btn-install-next')
            .attr('data-step', newStep.replace('step', ''));

        if (buttonMessage !== false) {
            $('.app-install .btn-install-next')
                .closest('button')
                .find('span')
                .text(buttonMessage)
        } else {
            $('.app-install .btn-install-next')
                .closest('button')
                .find('span')
                .text('Next')
        }
    }

    function installError(step, percent, animatePercent, template) {
        nextStep(step, percent, animatePercent, 'error');

        $('.app-install .progress:not(.install-progress)').addClass('d-none');
        $('.app-install').addClass('error');

        $('.app-install')
            .find('.btn-install-next')
            .remove();

        $('.app-install-block .app-install').before(template);
    }

    function setPercent(percent) {
        var realPercent = percent + '%';

        $('.app-install .progress.install-progress .progress-bar')
            .attr('aria-valuenow', percent)
            .css('width', realPercent)
            .text(realPercent);

        document.title = app.phrase.default_title + " " + realPercent;

        return realPercent;
    }

    function consoleLogger(message) {
        var outputFormat = {
            ok: "color: green;",
            fail: "color: red"
        };

        if (message == '{fail}') {
            console.log('%c FAIL', outputFormat['fail']);
        } else if (message == '{ok}') {
            console.log('%c SUCCESS', outputFormat['ok']);
        } else {
            console.log(message);
        }
    }
}(window.jQuery, window, document);