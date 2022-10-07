{% if app.user.loggedIn() %}
	<div class="app-account-area d-flex">
		<div class="dropdown">
			<button class="btn btn-app-account no-anim-ui icon messages pr-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-id="usermenuMessages">
				{% set message_count = app.string.messages.getMessageCount(app.visitor.user_id) %}
				<span class="message-count">{{ message_count }}</span>
			</button>
			<div class="dropdown-menu message-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0" aria-labelledby="dropdownMenuButton">
				<div class="title">
					<div>
						<span>{{ app.sub.lang.string.container.message.title }}</span>
					</div>
					<div>
						<a title="{{ app.sub.lang.string.container.buttons.refresh }}" href="#" data-ui="message-refresher">
							<i class="fas fa-sync-alt"></i>
						</a>
						<a title="{{ app.sub.lang.string.container.message.buttons.mark_read }}" href="#" data-ui="markread-messages">
							<i class="fas fa-check-square"></i>
						</a>
					</div>
					<div>
						<a title="{{ app.sub.lang.string.container.message.buttons.new }}" href="{{ app.phrase.buildLink('messages', {'section': 'new'}) }}" data-ui="quick-message-sender">
							<i class="fas fa-plus"></i>
						</a>
					</div>
				</div>
				<div class="scrollable">
					{% include 'usermenu_messages.tpl' %}
					<div class="post-loader-spin"></div>
				</div>
				<div class="extra-button pt-2 pb-2 text-center">
					<a class="text-dark font-weight-bold" href="{{ app.phrase.buildLink('messages', {}) }}">{{ app.sub.lang.string.container.buttons.show_all }}</a>
				</div>
			</div>
		</div>
		<div class="dropdown ml-2 mr-2">
			<button class="btn btn-app-account no-anim-ui icon notification pr-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-id="usermenuNotifications">
				{% set notify_count = app.string.notification.getNotificationCount(app.visitor.user_id) %}
				<span class="notify-count">{{ notify_count }}</span>
			</button>
			<div class="dropdown-menu notification-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0" aria-labelledby="dropdownMenuButton">
				<div class="title">
					<div>
						<span>{{ app.sub.lang.string.container.notification.title }}</span>
					</div>
					<div>
						<a title="{{ app.sub.lang.string.container.buttons.refresh }}" href="#" data-ui="notification-refresher">
							<i class="fas fa-sync-alt"></i>
						</a>
					</div>
					<div>
						<a title="{{ app.sub.lang.string.container.notification.buttons.settings }}" href="{{ app.phrase.buildLink('account', {'page': 'privacy'}) }}">
							<i class="fas fa-cog"></i>
						</a>
					</div>
				</div>
				<div class="scrollable">
					{% include 'usermenu_notification.tpl' %}
					<div class="post-loader-spin"></div>
				</div>
				<div class="extra-button pt-2 pb-2 text-center">
					<a class="text-dark font-weight-bold" href="#">{{ app.sub.lang.string.container.buttons.show_all }}</a>
				</div>
			</div>
		</div>
		<div class="dropdown">
			<button class="btn btn-app-account no-anim-ui dropdown-toggle ml-1 pr-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-id="usermenuQuickmenu">
				<span>{{ app.visitor.username }}</span>
				{{ app.sub.user.link.setUser(app.visitor.user_id) }}
				{% autoescape 'html' %}
					{{ app.sub.user.link.getProfilePicture(false)|raw }}
				{% endautoescape %}
				{{ app.sub.user.link.unsetUser }}
			</button>
			<div class="dropdown-menu dropdown-menu-right custom-menu animate fadeIn shadow p-0" aria-labelledby="dropdownMenuButton">
				<div class="title shadow-dark">
					<div>
						<span>{{ app.sub.lang.string.container.quick_menu }}</span>
					</div>
					<div>
						<a title="{{ app.sub.lang.string.container.usermenu.buttons.control_panel }}" href="{{ app.phrase.buildLink('account', {}) }}">
							<i class="fas fa-cog"></i>
						</a>
						<a title="{{ app.sub.lang.string.container.usermenu.buttons.password }}" href="{{ app.phrase.buildLink('account', {'page': 'security'}) }}">
							<i class="fas fa-key"></i>
						</a>
						<a title="{{ app.sub.lang.string.container.usermenu.buttons.two_step_verification }}" href="{{ app.phrase.buildLink('account', {'page': 'two-step-verification'}) }}">
							<i class="fas fa-user-check"></i>
						</a>
						<a title="{{ app.sub.lang.string.container.usermenu.buttons.profile_picture }}" href="{{ app.phrase.buildLink('account', {}) }}">
							<i class="fas fa-user-circle"></i>
						</a>
					</div>
				</div>
				<div class="scrollable">
					{% if app.visitor.is_admin %}
						<a class="notification bg-admin quick-menu d-flex" href="{{ app.phrase.buildLink('adminIndex', {}) }}">
							<div class="text ml-3">
								<span class="icon admin">{{ app.sub.lang.string.container.usermenu.links.admin }}</span>
							</div>
						</a>
					{% endif %}
					<div class="notification bg-dark quick-menu d-flex">
						<div class="text ml-3">
							<span class="icon night">{{ app.sub.lang.string.container.usermenu.links.night_mode }}</span>
							<label class="app-theme-mode switch mr-3 mb-0">
								<input type="checkbox">
								<span class="slider"></span>
							</label>
						</div>
					</div>
					<a class="notification quick-menu d-flex" href="{{ app.phrase.buildLink('profile', {'username': app.visitor.username, 'user_id': app.visitor.user_id}) }}">
						<div class="text ml-3">
							<span class="icon user">{{ app.sub.lang.string.container.usermenu.links.profile }}</span>
						</div>
					</a>
					<a class="notification quick-menu d-flex" href="{{ app.phrase.buildLink('account', {'page': 'bookmarks'}) }}">
						<div class="text ml-3">
							<span class="icon bookmark">{{ app.sub.lang.string.container.usermenu.links.bookmarks }}</span>
						</div>
					</a>
					<a class="notification quick-menu d-flex" href="{{ app.phrase.buildLink('profile', {'username': app.visitor.username, 'user_id': app.visitor.user_id, 'tab': 'posts'}) }}">
						<div class="text ml-3">
							<span class="icon post">{{ app.sub.lang.string.container.usermenu.links.posts }}</span>
						</div>
					</a>
					<a class="notification quick-menu d-flex" href="#" data-ui="sign-out-confirmation">
						<div class="text ml-3">
							<span class="icon sign-out">{{ app.sub.lang.string.container.usermenu.links.sign_out }}</span>
						</div>
					</a>
				</div>
				<div class="extra-button pt-2 pb-2 text-center"></div>
			</div>
		</div>
	</div>
{% else %}
	<div class="app-account-area d-flex">
		<div class="dropdown">
			<button class="btn btn-app-account no-anim-ui dropdown-toggle ml-1 pr-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<span>{{ app.sub.lang.string.container.usermenu.guest.title }}</span>
				<img class="rounded-circle" src="{{ app.public_dir }}/uploads/profile_picture/default.svg" />
			</button>
			<div class="dropdown-menu dropdown-menu-right custom-menu animate slideIn shadow p-0" aria-labelledby="dropdownMenuButton">
				<div class="title shadow-dark">
					<div>
						<span>{{ app.sub.lang.string.container.quick_menu }}</span>
					</div>
				</div>
				<div class="scrollable">
					<div class="notification bg-dark quick-menu d-flex">
						<div class="text ml-3">
							<span class="icon night">{{ app.sub.lang.string.container.usermenu.links.night_mode }}</span>
							<label class="app-theme-mode switch mr-3 mb-0">
								<input type="checkbox">
								<span class="slider"></span>
							</label>
						</div>
					</div>
					<a class="notification quick-menu d-flex" data-ui="login-attempt" href="#">
						<div class="text ml-3">
							<span class="icon sign-in">{{ app.sub.lang.string.container.buttons.sign_in }}</span>
						</div>
					</a>
					<a class="notification quick-menu d-flex" data-ui="register-attempt" href="#">
						<div class="text ml-3">
							<span class="icon register">{{ app.sub.lang.string.container.buttons.register }}</span>
						</div>
					</a>
				</div>
				<div class="extra-button pt-2 pb-2 text-center"></div>
			</div>
		</div>
	</div>
{% endif %}