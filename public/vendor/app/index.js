if (window.jQuery === undefined) jQuery = $ = {};

!function($, window, document)
{
	"use strict";

	$(document).on('click', '[data-ui="post-refresher"]', function () {
		$('.app-post-container').addClass('d-none');
		$('[data-ui="load-more-posts"]').addClass('d-none');

		$('.post-loader-spin').show();

		$('.app-post-container').removeClass('d-none');
		$('[data-ui="load-more-posts"]').removeClass('d-none');

		$('.post-loader-spin').hide();

		$('.app-forums a.list-group-item.active').click();
	});

	$(document).on('click', '[data-ui="load-more-posts"]', function () {
		$('[data-ui="load-more-posts"]').remove();

		$('.app-post-container > .appNodeContainer.all > .post-loader-spin').remove();

		$('.app-post-container > .appNodeContainer.all > .app-post').last().after('<div class="post-loader-spin"></div>');
		$('.app-post-container > .appNodeContainer.all > .post-loader-spin').show();

		var dataString = {
			next_id: $(this).data('next-id'),
			current_page: $(this).data('current-page'),
			forum_id: $('.app-forums .list-group-item.active').data('forum-id'),
			order: $('[data-ui="order-index-posts"].active').data('order')
		};

		app.post("post/next-page", dataString).done(function(response) {
			if(response.status === "ok") {
				$('[data-ui="load-more-posts"]').attr('data-current-page', response.current_page)

				$('.app-post-container > .appNodeContainer.all > .post-loader-spin').remove();

				$('.app-post-container > .appNodeContainer.all').append(response.template);
				$('.app-post-container > .appNodeContainer.all > .app-post').last().after('<div class="post-loader-spin"></div>');
				$('.app-post-container > .appNodeContainer.all').css('height', 'auto');
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

	$(document).on('click', '[data-ui="expand-node"] a', function (e) {
		e.preventDefault();

		var nodeContainerElem = $(this).closest('.app-post-container').find('.appNodeContainer.' + $(this).closest('.js-appExpandNodes').data('target'));

		if(nodeContainerElem.hasClass('expanded')) {
			nodeContainerElem.removeClass('expanded');

			Storages.cookieStorage.set('collapse_node_' + $(this).closest('.js-appExpandNodes').data('target'), 1);

			$(this).addClass('expanded');
		} else {
			nodeContainerElem.addClass('expanded');

			Storages.cookieStorage.remove('collapse_node_' + $(this).closest('.js-appExpandNodes').data('target'));

			$(this).removeClass('expanded');
		}
	});

	$(document).on('click', '[data-ui="quick-forum-posts"]', function (e) {
		e.preventDefault();

		$('[data-ui="quick-forum-posts"]').removeClass('active');

		$('.app-post-container').addClass('d-none');
		$('.post-loader-spin').show();

		var dataString = {
			forum_id: $(this).data('forum-id'),
			order: $('[data-ui="order-index-posts"].active').data('order')
		};

		$(this).addClass('active');

		var elem = $(this);

		app.post("post/quick-forum-posts", dataString).done(function(response) {
			if(response.status === "ok") {
				$('.post-loader-spin').hide();

				$('.app-post-container').html(response.template);
				$('.app-post-container').removeClass('d-none');

				$('.app-post-create select[name="forum"]').val(dataString.forum_id);
				$('.selectpicker').selectpicker('refresh');

				if (elem.data('forum-id') != 0) {
					window.history.pushState(null, null, elem.attr('href'));
				} else {
					window.history.pushState(null, null, app.config.settings.site_url);
				}
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

	$(function() {
		$("#quick-search :input[name='keyword']").donetyping(function () {
			if($(this).val().length > 0 && $(this).val() != ' ') {
				if($("#quick-search :input[name='search-forum']").is(':checked')) {
					if($('.app-forums [data-ui="quick-forum-posts"].active').data('forum-id') === 0) {
						var forum_id = null;
					} else {
						var forum_id = $('.app-forums [data-ui="quick-forum-posts"].active').data('forum-id');
					}
				} else {
					var forum_id = null;
				}

				if($('.app-switch input').is(':checked')) {
					$('.app-switch').click();

					$('.app-forums .filter-content').attr('data-no-refresh', true);

					$('.app-switch').removeClass('active');

					$('.app-switch input').attr('disabled', true);
					$('.app-switch').addClass('disabled');
				}

				$('.app-forums a').addClass('disabled');

				var dataString = {
					keyword: $(this).val(),
					forum_id: forum_id,
					order: $('[data-ui="order-index-posts"].active').data('order')
				};

				$(".app-post-container").addClass("d-none");

				$(".app-order-post > button.order-newest").attr('disabled', true);
				$(".app-post-manage button.post-refresh").attr('disabled', true);

				$(".post-loader-spin").show();

				$('.app-post-create > .hide-editor').removeClass('d-none');

				app.post("post/search", dataString).done(function(response) {
					if(response.status === "ok") {
						$(".post-loader-spin").hide();

						$(".app-post-container").html(response.template);

						$(".app-post-container").removeClass("d-none");

						$(document).on('click', '#quick-search .form-control-clear', function (e) {
							$('.app-forums [data-ui="quick-forum-posts"].active').click();

							$('.app-post-create > .hide-editor').addClass('d-none');

							if($('.app-switch').hasClass('disabled')) {
								$('.app-switch input').attr('disabled', false);
								$('.app-switch').removeClass('disabled');

								$('.app-switch').click();

								$('.app-switch').addClass('active');

								Storages.localStorage.set('auto-refresh-post', true);

								$('.app-forums .filter-content').attr('data-no-refresh', false);

								$('.app-forums a').removeClass('disabled');

								$(".app-order-post > button.order-newest").attr('disabled', false);
								$(".app-post-manage button.post-refresh").attr('disabled', false);
							}
						});
					}
				}).fail(function(xhr, status, err) {
					console.log(status, err);
				});
			} else {

			}
		});
	});

	$(document).on('click', '[data-ui="order-index-posts"]', function (e) {
		e.preventDefault();

		$('[data-ui="order-index-posts"]').removeClass('active');

		$('.app-post-container').addClass('d-none');

		$(this).addClass('active');

		$('.app-order-post button').text($(this).text());
		$('.app-order-post button').alterClass('order-*', '');
		$('.app-order-post button').addClass('order-'+$(this).data('order'));

		$('.post-loader-spin').show();

		var dataString = {
			order: $(this).data('order'),
			forum_id: $('.app-forums .list-group-item.active').data('forum-id')
		};

		var elem = $(this);

		app.post("post/order-index-posts", dataString).done(function(response) {
			if(response.status === "ok") {
				$('.app-post-container').removeClass('d-none');
				$('.post-loader-spin').hide();

				$('.app-post-container').html(response.template);

				window.history.pushState(null, null, elem.attr('href'));
			}
		}).fail(function(xhr, status, err) {
			console.log(status, err);
		});
	});

	$(function() {
		$('.app-switch').on('click', function() {
			if($('.app-switch input').is(':checked')) {
				$(this).addClass('active');
				$('.app-switch input').attr('checked', true);

				Storages.localStorage.set('auto-refresh-post', true);
			} else {
				$(this).removeClass('active');
				$('.app-switch input').attr('checked', false);

				Storages.localStorage.remove('auto-refresh-post');
			}
		});

		if(Storages.localStorage.get("auto-refresh-post")) {
			$('.app-switch').addClass('active');
			$('.app-switch input').attr('checked', true);
		} else {
			$('.app-switch').removeClass('active');
			$('.app-switch input').attr('checked', false);
		}

		if($('.app-forums .filter-content [data-no-refresh="true"]').length < 1) {
			if($('.app-forums .list-group-item.active').length > 0) {
				$('.app-switch input').change(function() {
					if(this.checked) {
						var autoRefresher = setInterval(function(event){
							$('.app-forums .list-group-item.active').click();
						}, 60 * 1000);
					} else {
						clearInterval(autoRefresher);
					}
				});

				if($(".app-switch").hasClass('active')) {
					var autoRefresher = setInterval(function(event){
						$('.app-forums .list-group-item.active').click();
					}, 60 * 1000);
				}
			}
		}

		if($('.app-forums [data-ui="quick-forum-posts"].active').length > 0) {
			var forum_regex = /f\/([0-9]+)-([a-z0-9-]+)$/g;

			if(window.location.href.match(forum_regex)) {
				$('.app-forums .list-group-item').removeClass('active');

				var forum_id = forum_regex.exec(window.location.href);

				$('.app-forums [data-forum-id="'+forum_id[1]+'"]').click();
				$('.app-forums [data-forum-id="'+forum_id[1]+'"]').addClass('active');
			}
		}

		if($('[data-ui="order-index-posts"].active').length > 0) {
			var index_tab_regex = /(newest|popular|top-likes|oldest)$/g;

			if(window.location.href.match(index_tab_regex)) {
				$('.app-forums .list-group-item').removeClass('active');

				var tab_id = index_tab_regex.exec(window.location.href);

				$('[data-ui="order-index-posts"][data-order="'+tab_id[0]+'"]').click();
			}
		}
	});

	$(function() {
		if ($('.app-forums-mobile').is(':visible')) {
			$('.app-forums-mobile .post-loader-spin').show();

			$('.app-forums-mobile').removeClass('mb-4');
			$('.app-forums-mobile small').remove();

			setTimeout(function() {
				$('.app-forums-mobile').append($('.app-forums').eq(0).clone());
				$('.app-forums-mobile').append($('.app-forums').eq(1).clone());

				$('.app-forums-mobile .post-loader-spin').remove();
			}, 300);
		}
	});
}
(window.jQuery, window, document);