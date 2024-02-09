if (window.jQuery === undefined) jQuery = $ = {};

!function($, window, document)
{
	"use strict";

	$(function() {
		$('.app-tab-container > .tab-content.'+$('[data-ui="account-tab-item"].active').data('tab')).addClass('show');
	});

	$(document).on('click', '[data-ui="account-tab-item"]', function (e) {
		e.preventDefault();

		if(!$('.app-tab-container > .tab-content.'+$(this).data('tab')).hasClass('show'))
		{
			$('[data-ui="account-tab-item"]').removeClass('active');
			$(this).addClass('active');

			$('.app-tab-container > .tab-content').removeClass('show');
			$('.app-tab-container > .tab-content.'+$(this).data('tab')).addClass('show');

			$('.app-breadcrumb > .tab').text($(this).text());

			if($('body[data-template="account"]').length) {
			    window.history.pushState(null, null, app.config.settings.site_url+"/account/"+$(this).data('tab'));
			}
		}
	});

	$(document).on('click', '[data-ui="profile-picture-quick-preview"] > div', function (e) {
		e.preventDefault();

		if($(this).hasClass('active')) {
			$(this).removeClass('active');

			$('#acs_settings > .profile-picture > label > img').attr('src', $('[data-ui="profile-picture-quick-preview"] > div.default').data('src'));
		} else {
			$('[data-ui="profile-picture-quick-preview"] > div').removeClass('active');

			$(this).addClass('active');
			$('#acs_settings > .profile-picture > label > img').attr('src', $(this).find('img').attr('src'));
		}
	});

	$(function() {
		$("#acs_settings").trackChanges();

		$("#acs_settings").validate({
			onfocusout: false,
			submitHandler: function(form,e) {
				e.preventDefault();

				if($("#acs_settings").isChanged() || $('[data-ui="profile-picture-quick-preview"] > div.active').length) {
					$('.tab-content.settings .progress').removeClass('d-none');

					var dataString = new FormData();

					if($('#acs_usertitle').length) {
						dataString.append('acs_usertitle', $('#acs_settings [name="acs_usertitle"]').val());
					}

					if($("#acs_profile_picture").val().length) {
						dataString.append('acs_profile_picture', $("#acs_profile_picture").get(0).files[0]);
						if ($("#acs_profile_picture").get(0).files[0].size > app.config.settings.profile_photo_max_size) {
							$('.tab-content.settings .progress').addClass('d-none');
							app.flashMessage(app.phrases.profile_photo_max_size, 'warning');
							return false;
						}
					}

					if($('[data-ui="profile-picture-quick-preview"] > div.active').length) {
						dataString.append('acs_profile_picture_ready', $('[data-ui="profile-picture-quick-preview"] > div.active').data('name'));
					}

					if($('#acs_settings [name="acs_mail"]').val().length) {
						dataString.append('acs_mail', $('#acs_settings [name="acs_mail"]').val());
					}

					app.post("account/change-settings", dataString, false, false).done(function(response) {
						if(response.status === "ok") {
							$('.tab-content.settings .progress').addClass('d-none');

							app.flashMessage(app.phrases.alert_messages.account_settings_success);
						}
					}).fail(function(xhr, status, err) {
						console.log(status, err);
					});
				}
			}
		});
	});

	$(function() {
		$("#acs_password").validate({
			onfocusout: false,
			submitHandler: function(form,e) {
				e.preventDefault();

				$('.tab-content.security .progress').removeClass('d-none');

				if($('#acs_password  [name="password"]').val() !== $('#acs_password  [name="re-password"]').val()) {
					$('.tab-content.security .progress').addClass('d-none');
					app.flashMessage(app.phrases.alert_messages.account_passwords_must_much, 'warning');
					return false;
				}

				var dataString = {
					acs_password: $('#acs_password [name="password"]').val(),
					acs_old_password: $('#acs_password [name="acs_old_password"]').val()
				}

				app.post("account/change-password", dataString).done(function(response) {
					if(response.status === "ok") {
						$('.tab-content.security .progress').addClass('d-none');
						app.flashMessage(app.phrases.alert_messages.account_password_success);
					}
				}).fail(function(xhr, status, err) {
					console.log(status, err);
				});
			}
		});
	});

	$(document).on('change', '#acs_profile_picture', function() {
		var reader = new FileReader();
		reader.onload = function (e) {
			$('#acs_settings .profile-picture > label > img').attr('src', e.target.result);
		}

		reader.readAsDataURL($(this).get(0).files[0]);
	});

	$(function() {
		if($('body[data-template="account"]').length) {
			var tab_regex = /account\/([a-z-]+)$/g;

			if(window.location.href.match(tab_regex)) {
				var tab = tab_regex.exec(window.location.href);

				$('body[data-template="account"] [data-tab="'+tab[1]+'"]').click();
			}
		}
	});

	$(function() {
		$('#acs_two_step_verification input[name="acs_2fa"]').on('change', function() {
			if($(this).val() == 1) {
				$('#acs_two_step_verification .2fa_container').removeClass('d-none');
			} else {
				$('#acs_two_step_verification .2fa_container').addClass('d-none');
			}
		});
	});

	$(function() {
		$("#acs_two_step_verification").validate({
			onfocusout: false,
			submitHandler: function(form,e) {
				e.preventDefault();

				$('.tab-content.two-step-verification .progress').removeClass('d-none');

				$('#acs_two_step_verification .form-error span').text('');

				if($('#acs_two_step_verification input[name="acs_2fa"]:checked').val() == 1) {
					var dataString = {
						acs_twofa_code: $('#acs_two_step_verification input[name="acs_twofa_code"]').val()
					};

					app.post("account/two-step-verification-on", dataString).done(function(response) {
						if(response.status === "ok") {
							window.location.reload();
						} else if(response.status === "fail") {
							$('.tab-content.two-step-verification .progress').addClass('d-none');

							app.flashMessage(app.phrases.alert_messages.two_step_verification_code_error, 'warning');
						}
					}).fail(function(xhr, status, err) {
						console.log(status, err);
					});
				} else {
					app.post("account/two-step-verification-off", {}).done(function(response) {
						if(response.status === "ok") {
							$('.tab-content.two-step-verification .progress').addClass('d-none');
							window.location.reload();
						}
					}).fail(function(xhr, status, err) {
						console.log(status, err);
					});
				}
			}
		});
	});

	$(document).on('click', '[data-ui="account-remove-subscribe"]', function (e) {
		e.preventDefault();

		$('.tab-content.subscriptions .progress').removeClass('d-none');

		var elem = $(this);

		$(this).addClass('active');

		var dataString = {
			discussion_id: $(this).closest('.app-post').data('discussion-id')
		};

		app.post("post/discussion-remove-subscribe", dataString).done(function(response) {
			if(response.status === "ok") {
				elem.closest('.app-post').remove();

				$('.tab-content.subscriptions .progress').addClass('d-none');

				app.flashMessage(app.phrases.alert_messages.subscribe_remove);
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

	$(document).on('click', '[data-ui="load-more-user-likes-posts"]', function () {
		$(this).remove();

		$('.post-loader-spin').show();

		var dataString = {
			next_id: $(this).data('next-id'),
			current_page: $(this).data('current-page'),
		};

		app.post("post/account-user-likes-next-page", dataString).done(function(response) {
			if(response.status === "ok") {
				$('[data-ui="load-more-user-likes-posts"]').attr('data-current-page', response.current_page)

				$('.post-loader-spin').hide();

				$('.tab-content.reactions .app-post:last').after(response.template);
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

	$(document).on('click', '[data-ui="load-more-user-bookmarks-posts"]', function () {
		$(this).remove();

		$('.post-loader-spin').show();

		var dataString = {
			next_id: $(this).data('next-id'),
			current_page: $(this).data('current-page'),
		};

		app.post("post/account-user-bookmarks-next-page", dataString).done(function(response) {
			if(response.status === "ok") {
				$('[data-ui="load-more-user-bookmarks-posts"]').attr('data-current-page', response.current_page)

				$('.post-loader-spin').hide();

				$('.tab-content.bookmarks .app-post:last').after(response.template);
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

	$(document).on('click', '[data-ui="account-remove-bookmark"]', function (e) {
		e.preventDefault();

		$('.tab-content.bookmarks .progress').removeClass('d-none');

		var elem = $(this);

		$(this).addClass('active');

		var dataString = {
			post_id: $(this).data('post-id')
		};

		app.post("post/undo-bookmark", dataString).done(function(response) {
			if(response.status === "ok") {
				elem.closest('.app-post').remove();

				$('.tab-content.bookmarks .progress').addClass('d-none');

				app.flashMessage(app.phrases.alert_messages.unbookmark_post);
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

	$(document).on('click', '[data-ui="account-remove-friendship"]', function (e) {
		e.preventDefault();

		$('.tab-content.friend-list .progress').removeClass('d-none');

		var elem = $(this);

		var dataString = {
			user_id: $(this).closest('.app-friendships').data('user-id')
		};

		app.post("account/remove-friend", dataString).done(function(response) {
			if(response.status === "ok") {
				$('.tab-content.friend-list .progress').addClass('d-none');

				elem.closest('.app-friendships').remove();

				app.flashMessage(app.phrases.alert_messages.remove_friend);
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});
}
(window.jQuery, window, document);