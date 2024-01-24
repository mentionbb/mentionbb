if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
	"use strict";

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

					setPercent(5);
					consoleLogger('Setup is starting..');

					break;
				case ('1b'):
					consoleLogger('Checking server requirements..');
					
					$('.app-install .progress:not(.install-progress)').removeClass('d-none');

					app.post("install?next", { 'step': 'step1b' }).done(function (response) {
						if (response.status === "ok") {
							if (response.error.status === 'fail') {
								consoleLogger('{fail}');
								installError('step1b', '66%', '.33;.66', response.error.template);
							} else {
								consoleLogger('{ok}');
								nextStep('step1b', '66%', '.33;.66');
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

	function nextStep(newStep, percent, animatePercent, error = false) {
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
}
(window.jQuery, window, document);