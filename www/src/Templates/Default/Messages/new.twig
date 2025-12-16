{% if not app.user.getActiveBan(app.visitor.user_id) %}
	<div class="app-box shadow rounded animate slideIn">
		<form method="post" id="form-conversation-create">
			<div class="bg-light-transparent border-bottom shadow-sm pl-4 pr-4 pt-3 pb-3">
				<div class="form-group row ml-2 mr-2">
					<label for="username" class="col-sm-2 col-form-label">{{ app.sub.lang.string.messages.new.form.username }}</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="username" name="username" autocomplete="off" placeholder="{{ app.sub.lang.string.messages.new.form.username_placeholder }}" value="{{ string.target_user }}">
						<div class="user-results rounded shadow d-none">
							<div class="title">{{ app.sub.lang.string.messages.new.form.username_result }}</div>
							<div class="scrollable"></div>
							<div class="post-loader-spin"></div>
						</div>
					</div>
				</div>
				<div class="form-group row ml-2 mr-2 mb-0">
					<label for="title" class="col-sm-2 col-form-label">{{ app.sub.lang.string.messages.new.form.title }}</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="title" name="title" placeholder="{{ app.sub.lang.string.messages.new.form.title_placeholder }}">
					</div>
				</div>
			</div>
			<div class="border-bottom pl-4 pr-0 pt-0 pb-0">
				<div class="messages scrollable d-flex flex-column pl-3 pr-4 pt-2">
					<p class="info bg-dark text-center text-white mb-0 d-none">{{ app.sub.lang.string.messages.conversation.just_before }}</p>
					<div class="me new-message shadow mb-lg-3 mb-4 animate slideIn d-none">
						{{ app.sub.user.link.setUser(app.visitor.user_id) }}
						<div title="{{ app.sub.lang.string.messages.conversation.status.delivered }}" class="user">
							{% autoescape 'html' %}
								{{ app.sub.user.link.getProfilePicture(false)|raw }}
							{% endautoescape %}
						</div>
						{{ app.sub.user.link.unsetUser() }}
						<span></span>
						<div class="anim-area">
							<div class="post-loader-spin d-block"></div>
						</div>
						<small class="text-muted">{{ app.sub.lang.string.messages.conversation.just_before }}</small>
					</div>
				</div>
			</div>
			<div class="app-post app-post-create app-message-create bg-light-transparent pl-3 pr-3 pt-2 pb-2">
				<div class="hide-editor d-none">
					<div class="backdrop"></div>
					<div class="text d-flex justify-content-center align-items-center text-dark">{{ app.sub.lang.string.string.index.search.stop_search }}</div>
				</div>
				<div class="post-layout border-top-0 p-0">
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
						<div class="title-area d-flex mb-2">
							<textarea class="expand scrollable w-100" style="max-height:inherit" rows="5" name="text" placeholder="{{ app.sub.lang.string.container.editor.placeholder.message }}"></textarea>
							<button type="button" class="submit ml-2" aria-label="{{ app.sub.lang.string.container.buttons.submit }}"></button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
{% else %}
	<div class="app-box shadow rounded animate slideIn p-3">
		<div class="text-dark">{{ app.sub.lang.string.container.visitor.ban_message }}</div>
	</div>
{% endif %}