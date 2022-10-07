if (window.jQuery === undefined) jQuery = $ = {};

!function($, window, document)
{
	"use strict";

	$(function() {
		$("#app-create-post").validate({
			onfocusout: false,
			submitHandler: function(form,e) {
				e.preventDefault();

				if($('.app-post-create [name="post-title"]').val().length < 1)
				{
					app.flashMessage(app.phrases.title_cannot_be_blank, 'warning');
					return false;
				}

				if($('.app-post-create [name="post-title"]').val().length < app.config.settings.title_char_min)
				{
					app.flashMessage(app.phrases.title_is_greater_then, 'warning');
					return false;
				}

				if(app.getStats('post-editor').chars <= app.config.settings.content_char_min)
				{
					app.flashMessage(app.phrases.content_is_greater_then, 'warning');
					return false;
				}

				if($('.app-post-create [name="forum"] option:selected').val().length < 1) {
					app.flashMessage(app.phrases.please_select_a_forum, 'warning');
					return false;
				}

				if ($('.app-post-create [name="discussion_attachment"]').val().length ) {
					if ($('.app-post-create [name="discussion_attachment"]').get(0).files.length > app.config.settings.attachment_max) {
						app.flashMessage(app.phrases.attachment_max, 'warning');
						return false;
					}
				}

				var dataString = new FormData();

				dataString.append('discussion_name', $('.app-post-create [name="post-title"]').val());
				dataString.append('forum_id', $('.app-post-create [name="forum"]').val());
				dataString.append('content', tinyMCE.get('post-editor').getContent());

				if($('.app-post-create [name="is_pinned"]').length) {
					dataString.append('is_sticky', $('.app-post-create [name="is_pinned"]').is(':checked') ? 1: 0);
				}

				if($('.app-post-create [name="is_locked"]').length) {
					dataString.append('is_open', $('.app-post-create [name="is_locked"]').is(':checked') ? 0: 1);
				}

				if ($('.app-post-create [name="discussion_attachment"]').val().length) {
					for (var i = 0; i < $('.app-post-create [name="discussion_attachment"]').get(0).files.length; ++i) {
						if ($('.app-post-create [name="discussion_attachment"]').get(0).files[i].size > app.config.settings.attachment_max_size) {
							$('.app-post-create .progress').addClass('d-none');
							app.flashMessage(app.phrases.attachment_max_size.replace('{2}', $('.app-post-create [name="discussion_attachment"]').get(0).files[i].name), 'warning');
							return false;
						}
						
						dataString.append('attachments[]', $('.app-post-create [name="discussion_attachment"]').get(0).files[i]);
					}

					dataString.append('is_attachment', true);
				}

				$('.app-post-create .progress').removeClass('d-none');

				app.post("post/create-discussion", dataString, false, false).done(function(response) {
					if(response.status === "ok") {
						$('.app-post-create .progress').addClass('d-none');

						$('.app-post-create [name="post-title"]').val('');
						$('.app-post-create [name="forum"]').val('');
						$('.app-post-create [name="content"]').val('');

						$('.app-post-create .app-writer-area').addClass('d-none');

						tinymce.get('post-editor').setContent('');
						app.removeEditorDraft();

						$('[data-ui="post-refresher"]').click();
					}
				}).fail(function(xhr, status, err) {
					console.log(status, err);
				});
			}
		});
	});

	$(document).on('change', '[name="discussion_attachment"]', function() {
		var filenames = [];
		for (var i = 0; i < $(this).get(0).files.length; ++i) {
			filenames.push($(this).get(0).files[i].name);
		}

		$(this).next('label').text(filenames.join(', '));
	});

	$(function() {
		$("#app-create-discussion-post").validate({
			onfocusout: false,
			submitHandler: function(form,e) {
				e.preventDefault();

				if(app.getStats('post-editor').chars <= app.config.settings.content_char_min)
				{
					app.flashMessage(app.phrases.content_is_greater_then, 'warning');
					return false;
				}

				var dataString = new FormData();

				dataString.append('discussion_id', $('.post.first-post').data('discussion-id'));
				dataString.append('forum_id', $('.post.first-post').data('forum-id'));
				dataString.append('content', tinyMCE.get('post-editor').getContent());

				if ($('.app-post-create [name="discussion_attachment"]').val().length) {
					for (var i = 0; i < $('.app-post-create [name="discussion_attachment"]').get(0).files.length; ++i) {
						if ($('.app-post-create [name="discussion_attachment"]').get(0).files[i].size > app.config.settings.attachment_max_size) {
							$('.app-post-create .progress').addClass('d-none');
							app.flashMessage(app.phrases.attachment_max_size.replace('{2}', $('.app-post-create [name="discussion_attachment"]').get(0).files[i].name), 'warning');
							return false;
						}
						
						dataString.append('attachments[]', $('.app-post-create [name="discussion_attachment"]').get(0).files[i]);
					}

					dataString.append('is_attachment', true);
				}

				$('.app-post-create .progress').removeClass('d-none');

				app.post("post/create-post", dataString, false, false).done(function(response) {
					if(response.status === "ok") {
						$('.app-post-create .progress').addClass('d-none');

						$('.app-post-create .title-area').show();
						$('.app-post-create .app-writer-area').addClass('d-none');

						$('.app-order-discussion-post a[data-order="newest"]').click();

						if($('.no-post.d-block').length > 0) {
							$('.no-post').removeClass('d-block');
							$('.no-post').addClass('d-none');
						}

						if($('.app-order-discussion-post button').hasClass('disabled')) {
							$('.app-order-discussion-post button').removeClass('disabled');
							$('.app-order-discussion-post button').attr('disabled', false);
						}

						tinymce.get('post-editor').setContent('');
						app.removeEditorDraft();
					}
				}).fail(function(xhr, status, err) {
					console.log(status, err);
				});
			}
		});
	});
}
(window.jQuery, window, document);