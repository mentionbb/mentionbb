{% macro editor(id, title = false) %}
	{% if app.user.loggedIn() %}
		{% if not app.user.getActiveBan(app.visitor.user_id) %}
		   <form method="post" id="{{ id }}" enctype="multipart/form-data">
			   <div class="app-post app-post-create position-relative bg-light shadow rounded">
				   <div class="hide-editor d-none">
					   <div class="backdrop d-flex align-items-center justify-content-center">{{ app.sub.lang.string.index.search.stop_search }}</div>
				   </div>
				   <div class="post-layout mt-2 mb-4">
					   <div class="progress d-none">
						   <div class="indeterminate"></div>
					   </div>
					   <div class="post-user">
						   {{ app.sub.user.link.setUser(app.visitor.user_id) }}
						   {% autoescape 'html' %}
							   {{ app.sub.user.link.getProfilePicture(false)|raw }}
						   {% endautoescape %}
						   {{ app.sub.user.unsetUser() }}
					   </div>
					   <div class="post-content pt-1">
						   {% if title %}
							   <div class="title-area d-flex flex-lg-row flex-column mb-2">
								   <textarea data-ui="show-editor" rows="1" wrap="soft" name="post-title" placeholder="{{ app.sub.lang.string.container.editor.placeholder.title }}" data-single-line="true"></textarea>
								   <select class="selectpicker ml-lg-auto pt-2 pt-lg-0" data-live-search="true" title="{{ app.sub.lang.string.container.editor.placeholder.forum }}" name="forum">
									   {% for item in app.string.forum.getForumList() %}
										   <option value="{{ item.forum_id }}">{{ item.title }}</option>
										   {% for sub in app.string.forum.getForumList(item.forum_id) %}
											   <option data-content="<span class='sub'>{{ sub.title }}</span" value="{{ sub.forum_id }}">{{ sub.title }}</option>
										   {% endfor %}
									   {% endfor %}
								   </select>
							   </div>
						   {% else %}
							   <div class="title-area in-discussion d-flex mb-2">
								   <textarea class="w-100" rows="1" wrap="soft" name="post-title" placeholder="{{ app.sub.lang.string.container.editor.placeholder.write }}" data-ui="show-editor" data-single-line="true"></textarea>
							   </div>
						   {% endif %}
						   <div class="app-writer-area animate slideIn d-none">
							   <textarea class="w-100" id="post-editor" name="content"></textarea>
							   <div class="mt-3">
								   <div class="js-appExpandNodes rounded shadow-sm mb-3 d-none">
									   <a data-toggle="collapse" href="#appCollapsePost_Options" role="button" aria-expanded="true"
										       aria-controls="appCollapsePost_Options">{{ app.sub.lang.string.container.editor.next.text }}</a>
								   </div>
								   <div class="collapse show" id="appCollapsePost_Options">
									   <div class="pl-0 pr-0 pt-0">
										   {% if title %}
										       {% if app.user.loggedIn() and app.visitor.is_admin %}
												   <div class="d-lg-flex">
													   <div class="form-check">
														   <input class="form-check-input mt-1" type="checkbox" id="is_pinned" name="is_pinned">
														   <label class="form-check-label" for="is_pinned">{{
															   app.sub.lang.string.container.editor.next.admin_options.pinned }}</label>
													   </div>
													   <div class="form-check ml-lg-4">
														   <input class="form-check-input mt-1" type="checkbox" id="is_locked" name="is_locked">
														   <label class="form-check-label" for="is_locked">{{
															   app.sub.lang.string.container.editor.next.admin_options.locked }}</label>
													   </div>
												    </div>
											   {% endif %}
										   {% endif %}
										   <div class="form-group">
											   <div class="row ml-auto mr-auto">
												   <label for="postAttachment" class="col-sm-2 col-form-label">{{ app.sub.lang.string.container.editor.next.attachment.title }}</label>
												   <div class="custom-file h-auto col-sm-10">
													   <input type="file" class="custom-file-input" id="discussionAttachment" multiple="multiple" name="discussion_attachment" accept="{{ app.sub.editor.attachments.getAllowedExtensionsForInput() }}">
													   <label class="custom-file-label shadow-sm" for="discussionAttachment" data-text="{{ app.sub.lang.string.container.buttons.browse }}">{{ app.sub.lang.string.container.buttons.select_file }}</label>
													   <small id="discussionAttachment_Size" class="form-text text-muted mt-lg-1 mt-2">{{ app.sub.lang.parse.Parse('container.editor.next.attachment.max_size_text', app.settings.attachment_max_size)|raw }}</small>
												   </div>
											   </div>
										   </div>
									   </div>
								   </div>
							   </div>
							   <div class="d-flex align-items-center pt-3">
								   <p class="font-italic mb-0">{{ app.sub.lang.parse.Parse('container.editor.shared_by', app.visitor.username)|raw }}</p>
								   <div class="ml-auto">
									   <button type="submit" class="btn btn-app-discussion icon send">{{ app.sub.lang.string.container.buttons.submit }}</button>
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>
		   </form>
		{% else %}
		   <div class="text-center text-dark mb-3">{{ app.sub.lang.string.container.visitor.ban_message }}</div>
		{% endif %}
	{% else %}
		<div class="app-post app-post-create guest bg-light shadow rounded">
			<div class="post-layout mt-2 mb-4">
				<div class="progress d-none">
					<div class="indeterminate"></div>
				</div>
				<div class="post-user">
					<div class="guest-avatar"></div>
				</div>
				<div class="post-content pt-1">
					<div class="title-area mb-0">
						<textarea data-ui="login-attempt" class="w-100" rows="1" wrap="soft" name="post-title" placeholder="{{ app.sub.lang.string.container.editor.placeholder.new_post }}" maxlength="45" minlength="10" data-single-line="true"></textarea>
					</div>
				</div>
			</div>
		</div>
	{% endif %}
{% endmacro %}