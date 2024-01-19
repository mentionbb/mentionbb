if (window.jQuery === undefined) jQuery = $ = {};

!function ($, window, document) {
	"use strict";

	$(function () {
		$(document).on('click', '.app-install .btn-install-next', function (e) {
			switch ($(this).attr('data-step')) {
				case ('1a'):
					$('.hello-logo').addClass('d-none');

					$('.logo:not(.hello-logo)').fadeIn('fast');

					setTimeout(function () {
						$('.logo:not(.hello-logo)')
							.removeClass('install-index')
							.addClass('install')
							.addClass('step1a');

						document.getElementById('step1a-animate').beginElement();
					}, 2500);

					$(this)
						.attr('data-step', '1b')
						.find('i')
						.removeClass('fa-check-circle')
						.addClass('fa-arrow-alt-circle-right')
						.closest('button')
						.find('span')
						.text('Next');

					setPercent(5);

					break;
				case ('1b'):
					$('.app-install .progress').removeClass('d-none');

					app.post("install?next", { 'step': 'step1b' }).done(function (response) {
						if (response.status === "ok") {
							if (response.error.status === 'fail') {
								installError('step1b', '66%', '.33;.66', response.error.template);
							} else {
								nextStep('step1b', '66%', '.33;.66');
							}

							$('.app-install .progress').addClass('d-none');

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

		$('.app-install .progress').addClass('d-none');
		$('.app-install').addClass('error');

		$('.app-install')
			.find('.btn-install-next')
			.remove();

		$('.app-install-block .app-install').before(template);
	}

	function setPercent(percent) {
		var realPercent = '%' + percent;
		
		document.title = app.phrase.default_title + " " + realPercent;

		return realPercent;
	}
}
(window.jQuery, window, document);