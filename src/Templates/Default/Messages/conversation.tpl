<div class="app-box shadow rounded animate slideIn" data-message-id="{{ string.conversation.parent_id }}">
	<div class="bg-light-transparent border-bottom shadow-sm pl-4 pr-2 py-1">
		<div class="d-flex align-items-center">
			<div class="d-flex align-items-center">
				{% if string.conversation.sender_id is same as(app.visitor.user_id) %}
					{{ app.sub.user.link.setUser(string.conversation.user_id) }}
				{% else %}
					{{ app.sub.user.link.setUser(string.conversation.sender_id) }}
				{% endif %}
				{% autoescape 'html' %}
					<div class="post-user">
						{{ app.sub.user.link.getLinkWithProfilePicture()|raw }}
					</div>
				{% endautoescape %}
				<div class="d-flex flex-column ml-2">
					{% autoescape 'html' %}
						<span>{{ app.sub.user.link.getName()|raw }}</span>
						<small class="text-muted">{{ app.sub.lang.parse.Parse('messages.conversation.status.last_seen', app.timer.date.toHumanReadable(app.sub.user.link.getLastActivity())) }}</small>
					{% endautoescape %}
				</div>
				{{ app.sub.user.link.unsetUser() }}
			</div>
			<div class="app-post-manage d-flex align-items-center ml-auto">
				<div class="dropdown">
					<button class="btn btn-app-dd no-anim-ui icon gear dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
					<div class="dropdown-menu dropdown-menu-right custom-menu custom-menu-md shadow animate slideIn" aria-labelledby="dropdownMenuButton">
						<div class="title">
							<div>
								<span>{{ app.sub.lang.string.messages.conversation.options.title }}</span>
							</div>
						</div>
						<div>
							{% if not string.conversation.is_archived %}
								<a class="notification quick-menu d-flex" data-ui="conversation-archive" href="#">
									<div class="text ml-3">
										<span data-text="{{ app.sub.lang.string.messages.conversation.options.buttons.archive }}" data-toggle-text="{{ app.sub.lang.string.messages.conversation.options.buttons.remove_archive }}">{{ app.sub.lang.string.messages.conversation.options.buttons.archive }}</span>
									</div>
								</a>
							{% else %}
								<a class="notification quick-menu d-flex" data-ui="conversation-remove-archive" href="#">
									<div class="text ml-3">
										<span data-text="{{ app.sub.lang.string.messages.conversation.options.buttons.archive }}" data-toggle-text="{{ app.sub.lang.string.messages.conversation.options.buttons.remove_archive }}">{{ app.sub.lang.string.messages.conversation.options.buttons.remove_archive }}</span>
									</div>
								</a>
							{% endif  %}
							<a class="notification quick-menu d-flex" data-ui="conversation-remove" href="#">
								<div class="text ml-3">
									<span>{{ app.sub.lang.string.container.buttons.delete }}</span>
								</div>
							</a>
						</div>
					</div>
				</div>
				<button class="post-refresh ml-2" data-ui="conversation-refresher" aria-label="{{ app.sub.lang.string.container.buttons.refresh }}"></button>
			</div>
		</div>
	</div>
	<div class="border-bottom pl-4 pr-0 pt-0 pb-2">
		<div class="messages scrollable d-flex flex-column pl-3 pr-4 pt-2">
			<p class="info bg-dark text-center text-white mb-0">{{ app.timer.date.toHumanReadable(string.conversation.dateline) }}</p>
			{% for item in string.messages %}
				{% if item.sender_id is same as(app.visitor.user_id) %}
					<div class="me shadow mb-lg-3 mb-4 toggle-tooltip" data-time="{{ item.dateline }}" data-title="{{ app.timer.date.toHumanReadable(item.dateline) }}" data-placement="left">
						{% if item.is_seeing is same as(0) %}
							<div title="{{ app.sub.lang.string.messages.conversation.status.delivered }}"data-is-seeing="0"></div>
						{% else %}
							<div title="{{ app.sub.lang.string.messages.conversation.status.seen }}"data-is-seeing="1"></div>
						{% endif %}
						{% if item.sender_id is same as(app.visitor.user_id) %}
							{{ app.sub.user.link.setUser(item.sender_id) }}
						{% else %}
							{{ app.sub.user.link.setUser(item.user_id) }}
						{% endif %}
						<div class="user">
							{{ app.sub.user.link.getProfilePicture(false)|raw }}
						</div>
						{{ app.sub.user.link.unsetUser() }}
						{% autoescape 'html' %}
							<span>{{ item.text|raw }}</span>
						{% endautoescape %}
						<div class="anim-area">
							<div class="post-loader-spin d-none"></div>
						</div>
						<small class="text-muted">{{ app.timer.date.toHumanReadable(item.dateline) }}</small>
					</div>
				{% else %}
					<div class="them shadow mb-lg-3 mb-4 toggle-tooltip" data-time="{{ item.dateline }}" data-title="{{ app.timer.date.toHumanReadable(item.dateline) }}" data-placement="right">
						{% if item.sender_id is same as(app.visitor.user_id) %}
							{{ app.sub.user.link.setUser(item.user_id) }}
						{% else %}
							{{ app.sub.user.link.setUser(item.sender_id) }}
						{% endif %}
						<div class="user">
							{{ app.sub.user.link.getProfilePicture(false)|raw }}
						</div>
						{{ app.sub.user.link.unsetUser() }}
						{% autoescape 'html' %}
							<span>{{ item.text|raw }}</span>
						{% endautoescape %}
						<small class="text-muted">{{ app.timer.date.toHumanReadable(item.dateline) }}</small>
					</div>
				{% endif %}
			{% endfor %}
			<div class="me new-message shadow mb-lg-3 mb-4 animate slideIn d-none">
				<div title="{{ app.sub.lang.string.messages.conversation.status.delivered }}"></div>
				{{ app.sub.user.link.setUser(app.visitor.user_id) }}
				<div class="user">
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
	{% if not string.conversation.is_archived %}
		<form method="post" id="form-message-create">
			<div class="app-post app-post-create app-message-create bg-light-transparent pl-3 pr-3 pt-2 pb-2">
				<div class="hide-editor d-none">
					<div class="backdrop"></div>
					<div class="text d-flex justify-content-center align-items-center text-dark">{{ app.sub.lang.string.index.search.stop_search }}</div>
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
						{% if not app.user.getActiveBan(app.visitor.user_id) %}
							<div class="title-area d-flex mb-2">
							    <textarea class="expand scrollable w-100" style="max-height:inherit" rows="5" name="text" placeholder="{{ app.sub.lang.string.container.editor.placeholder.message }}"></textarea>
							    <button type="button" class="submit ml-2" aria-label="{{ app.sub.lang.string.container.buttons.submit }}"></button>
							</div>
						{% else %}
							<div class="text-dark">{{ app.sub.lang.string.container.visitor.ban_message }}</div>
						{% endif %}
					</div>
				</div>
			</div>
		</form>
	{% else %}
		<div class="bg-light-transparent text-center pl-3 pr-3 pt-2 pb-2">
			<span>{{ app.sub.lang.string.messages.conversation.archived_text }}</span>
		</div>
	{% endif %}
</div>