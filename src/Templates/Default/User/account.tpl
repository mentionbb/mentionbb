{% extends 'container.tpl' %}

{% block app_template_name 'account' %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div>{{ app.sub.lang.string.account.settings }}</div>
					<div class="tab">{{ app.sub.lang.string.account.title }}</div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	<aside class="col-sm-3 mb-4 pr-4">
		<div class="card app-forums bg-white rounded shadow mb-4">
			<div class="card-header">
				<h6 class="font-weight-bold">{{ app.sub.lang.string.account.tab.title }}</h6>
			</div>
			<article class="card-group-item">
				<div class="filter-content">
					<div class="list-group list-group-flush">
						<a href="#" data-tab="settings" data-ui="account-tab-item" class="list-group-item active">{{ app.sub.lang.string.account.tab.account }}</a>
						<a href="#" data-tab="security" data-ui="account-tab-item" class="list-group-item">{{ app.sub.lang.string.account.tab.security }}</a>
						<a href="#" data-tab="two-step-verification" data-ui="account-tab-item" class="list-group-item">{{ app.sub.lang.string.account.tab.twofa }}</a>
						<a href="#" data-tab="privacy" data-ui="account-tab-item" class="list-group-item">{{ app.sub.lang.string.account.tab.privacy }}</a>
						<div class="card-header border-top">
							<h6 class="font-weight-bold m-0">{{ app.sub.lang.string.account.tab.my }}</h6>
						</div>
						<a href="#" data-tab="subscriptions" data-ui="account-tab-item" class="list-group-item">{{ app.sub.lang.string.account.tab.subscriptions }}</a>
						<a href="#" data-tab="reactions" data-ui="account-tab-item" class="list-group-item">{{ app.sub.lang.string.account.tab.reactions }}</a>
						<a href="#" data-tab="bookmarks" data-ui="account-tab-item" class="list-group-item">{{ app.sub.lang.string.account.tab.bookmarks }}</a>
						<a href="#" data-tab="friend-list" data-ui="account-tab-item" class="list-group-item">{{ app.sub.lang.string.account.tab.friendships }}</a>
						<div class="card-header border-top">
							<h6 class="font-weight-bold m-0">{{ app.sub.lang.string.account.tab.other }}</h6>
						</div>
						<a href="#" data-tab="about" data-ui="account-tab-item" class="list-group-item">{{ app.sub.lang.string.account.tab.about }}</a>
					</div>
				</div>
			</article>
		</div>
	</aside>
	<aside class="col-sm-9">
		<div class="app-tab-container">
			<div class="tab-content settings">
				<div class="app-box shadow rounded animate slideIn">
					<div class="progress d-none">
						<div class="indeterminate"></div>
					</div>
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.account_details.title }}</h5>
						<form id="acs_settings" method="post" enctype="multipart/form-data">
							<div class="profile-picture text-center mb-3">
								<input type="file" name="acs_profile_picture" id="acs_profile_picture" class="d-none" accept="{{ app.phrase.getPPImageTypes() }}" />
								{{ app.sub.user.link.setUser(app.visitor.user_id) }}
								{% autoescape 'html' %}
									<label class="mb-0" for="acs_profile_picture">{{ app.sub.user.link.getProfilePicture(false)|raw }}</label>
								{% endautoescape %}
								{{ app.sub.user.unsetUser() }}
								<small class="d-block text-muted font-italic mt-3 mb-0">{{ app.sub.lang.parse.Parse('account.account_details.profile_picture_size', app.settings.profile_photo_max_size)|raw }}</small>
								<p class="text-muted mt-1">{{ app.sub.lang.string.account.account_details.profile_picture_text }}</p>
							</div>
							<div class="profile-picture-ready d-flex align-items-lg-center justify-content-lg-center mt-4 mb-4" data-ui="profile-picture-quick-preview">
								<div class="default d-none" data-src="{{ app.public_dir }}/uploads/profile_picture/{{ app.visitor.profile_picture }}"></div>
								<div data-name="donatello">
									<img src="{{ app.public_dir }}/images/avatars/donatello.svg" />
								</div>
								<div data-name="boy">
									<img src="{{ app.public_dir }}/images/avatars/boy.svg" />
								</div>
								<div data-name="woman">
									<img src="{{ app.public_dir }}/images/avatars/woman.svg" />
								</div>
								<div data-name="influencer">
									<img src="{{ app.public_dir }}/images/avatars/influencer.svg" />
								</div>
								<div data-name="woman_1">
									<img src="{{ app.public_dir }}/images/avatars/woman_1.svg" />
								</div>
								<div data-name="snowman">
									<img src="{{ app.public_dir }}/images/avatars/snowman.svg" />
								</div>
								<div data-name="cool">
									<img src="{{ app.public_dir }}/images/avatars/cool.svg" />
								</div>
								<div data-name="big_eyes">
									<img src="{{ app.public_dir }}/images/avatars/big_eyes.svg" />
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">{{ app.sub.lang.string.account.account_details.username }}</label>
								<input type="text" class="form-control" id="username" aria-describedby="emailHelp" value="{{ app.visitor.username }}" disabled>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">{{ app.sub.lang.string.account.account_details.usertitle }}</label>
								<input name="acs_usertitle" type="text" class="form-control" id="acs_usertitle" aria-describedby="emailHelp" value="{{ app.visitor.usertitle }}">
								{% if app.visitor.is_admin %}
									<small id="emailHelp" class="form-text text-muted">{{ app.sub.lang.string.account.account_details.usertitle_text_admin }}</small>
								{% else %}
									<small id="emailHelp" class="form-text text-muted">{{ app.sub.lang.string.account.account_details.usertitle_text }}</small>
								{% endif %}
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">{{ app.sub.lang.string.account.account_details.mail }}</label>
								<input name="acs_mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Posta" value="{{ app.visitor.mail }}" required="required">
								<small id="emailHelp" class="form-text text-muted">{{ app.sub.lang.string.account.account_details.mail_text }}</small>
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-app-discussion icon send">{{ app.sub.lang.string.container.buttons.update }}</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-content security">
				<div class="app-box shadow rounded animate slideIn">
					<div class="progress d-none">
						<div class="indeterminate"></div>
					</div>
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.security.password.title }}</h5>
						<form id="acs_password" method="post">
							<div class="form-row">
								<div class="col">
									<label for="exampleInputEmail1">{{ app.sub.lang.string.account.security.password.password }}</label>
									<input name="password" type="password" class="form-control" id="password" aria-describedby="passHelp" required="required">
								</div>
								<div class="col">
									<label for="exampleInputEmail1">{{ app.sub.lang.string.account.security.password.re_password }}</label>
									<input name="re-password" type="password" class="form-control" id="re-password" aria-describedby="passHelp" required="required">
								</div>
							</div>
							<div class="form-group mt-3">
								<label for="exampleInputEmail1">{{ app.sub.lang.string.account.security.password.now_password }}</label>
								<input name="acs_old_password" type="password" class="form-control" placeholder="{{ app.sub.lang.string.account.security.password.now_password }}" required="required">
								<small id="emailHelp" class="form-text text-muted">{{ app.sub.lang.string.account.security.password.now_password_text }}</small>
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-app-discussion icon send">{{ app.sub.lang.string.container.buttons.approve }}</button>
							</div>
							<div class="mt-3">
								<small class="font-weight-bold">{{ app.sub.lang.string.account.security.password.text }}</small>
							</div>
							<div class="form-error mt-2">
								<span class="text-danger font-weight-bold"></span>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-content two-step-verification">
				<div class="app-box shadow rounded animate slideIn">
					<div class="progress d-none">
						<div class="indeterminate"></div>
					</div>
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.tab.twofa }}</h5>
						<form id="acs_two_step_verification" method="post">
							<div class="mb-3">
								<small class="font-weight-bold">{{ app.sub.lang.string.account.twofa.text }}</small>
							</div>
							{% if not app.visitor.use_twofa %}
								<div class="form-check mb-1">
									<input class="form-check-input" type="radio" name="acs_2fa" id="acs_2fa_off" value="0" checked="checked">
									<label class="form-check-label" for="acs_2fa_off">{{ app.sub.lang.string.account.twofa.i_dont_use_twofa }}</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="acs_2fa" id="acs_2fa_on" value="1">
									<label class="form-check-label" for="acs_2fa_on">{{ app.sub.lang.string.account.twofa.i_use_twofa }}</label>
								</div>
								<div class="2fa_container d-none">
									<div class="qr-code">
										<img src="{{ string.two_fa.getQRCode() }}" />
									</div>
									<div class="form-row mt-3">
										<div class="col-6">
											<label>{{ app.sub.lang.string.account.twofa.secret_key }}</label>
											<input type="text" class="form-control" value="{{ string.two_fa.getSecret() }}" disabled>
										</div>
										<div class="col-6">
											<label>{{ app.sub.lang.string.account.twofa.code }}</label>
											<input name="acs_twofa_code" type="number" class="form-control" placeholder="######" required="required" max="999999">
										</div>
									</div>
									<div class="mt-3">
										<small id="2faHelp" class="form-text text-muted">{{ app.sub.lang.string.account.twofa.caution }}</small>
										<small id="2faHelp1" class="form-text font-weight-bold text-danger">{{ app.sub.lang.string.account.twofa.secret_key_text }}</small>
									</div>
									<div class="mt-3">
										<button type="submit" class="btn btn-app-discussion icon send">{{ app.sub.lang.string.container.buttons.setup }}</button>
									</div>
									<div class="form-error mt-3">
										<span class="text-danger font-weight-bold"></span>
									</div>
								</div>
							{% else %}
								<div class="form-check mb-1">
									<input class="form-check-input" type="radio" name="acs_2fa" id="acs_2fa_off" value="0">
									<label class="form-check-label" for="acs_2fa_off">{{ app.sub.lang.string.account.twofa.i_dont_use_twofa }}</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="acs_2fa" id="acs_2fa_on" value="1" checked="checked">
									<label class="form-check-label" for="acs_2fa_on">{{ app.sub.lang.string.account.twofa.i_use_twofa }}</label>
								</div>
								<div class="2fa_use_container">
									<div class="bg-success text-white rounded p-2">
										<i class="fas fa-lock pr-2"></i>
										<span>{{ app.sub.lang.string.account.twofa.is_active }}</span>
									</div>
								</div>
								<div class="mt-3">
									<button type="submit" class="btn btn-app-discussion icon send">{{ app.sub.lang.string.container.buttons.close }}</button>
								</div>
							{% endif %}
						</form>
					</div>
				</div>
			</div>
			<div class="tab-content privacy">
				<div class="app-box shadow rounded animate slideIn">
					<div class="progress d-none">
						<div class="indeterminate"></div>
					</div>
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.tab.privacy }}</h5>
						<form id="acs_privacy" method="post">
							<div class="form-check">
								<input name="acs_update_mails" type="checkbox" class="form-check-input" id="acs_update_mails" checked="checked">
								<label class="form-check-label" for="acs_update_mails">{{ app.sub.lang.string.account.privacy.send_mail }}</label>
							</div>
							<div class="form-check">
								<input name="acs_notify_as_mail" type="checkbox" class="form-check-input" id="acs_notify_as_mail" checked="checked">
								<label class="form-check-label" for="acs_notify_as_mail">{{ app.sub.lang.string.account.privacy.send_mail_for_notifications }}</label>
							</div>
							<div class="mt-3">
								<button type="submit" class="btn btn-app-discussion icon send">{{ app.sub.lang.string.container.buttons.update }}</button>
							</div>
							<div class="form-error mt-2">
								<span class="text-danger font-weight-bold"></span>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-content subscriptions">
				<div class="app-box shadow rounded animate slideIn">
					<div class="progress d-none">
						<div class="indeterminate"></div>
					</div>
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.tab.subscriptions }}</h5>
						<p>{{ app.sub.lang.string.account.subscriptions.discussion.title }}</p>
						<div class="subscriptions-area">
							{% for item in string.discussion.getUserSubscriptions(app.visitor.user_id) %}
								<div class="app-post mb-3" data-discussion-id="{{ item.discussion_id }}">
									<div class="post-layout d-flex align-items-center border-0 p-1">
										<div class="post-user">
											{{ app.sub.user.link.setUser(item.user_id) }}
											{% autoescape 'html' %}
												{{ app.sub.user.link.getProfilePicture(false)|raw }}
											{% endautoescape %}
											{{ app.sub.user.link.unsetUser() }}
										</div>
										<div class="title ml-lg-0 ml-2">
											<a class="text-dark font-weight-bold" href="{{ app.phrase.buildLink('discussion', {'discussion_id': item.discussion_id, 'discussion_title': item.title}) }}">{{ item.title }}</a>
										</div>
										<div title="{{ app.sub.lang.string.container.buttons.subscribe_remove }}" class="remove-subscribe cursor-pointer h5 mb-0 ml-auto" data-ui="account-remove-subscribe">
											<i class="fas fa-times"></i>
										</div>
									</div>
								</div>
							{% endfor %}
						</div>
					</div>
				</div>
			</div>
			<div class="tab-content reactions">
				<div class="app-box shadow rounded animate slideIn">
					<div class="progress d-none">
						<div class="indeterminate"></div>
					</div>
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.tab.reactions }}</h5>
						{% include 'account_likes_posts.tpl' %}
						<div class="post-loader-spin"></div>
					</div>
				</div>
			</div>
			<div class="tab-content bookmarks">
				<div class="app-box shadow rounded animate slideIn">
					<div class="progress d-none">
						<div class="indeterminate"></div>
					</div>
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.tab.bookmarks }}</h5>
						{% include 'account_bookmarks_posts.tpl' %}
						<div class="post-loader-spin"></div>
					</div>
				</div>
			</div>
			<div class="tab-content friend-list">
				<div class="app-box shadow rounded animate slideIn">
					<div class="progress d-none">
						<div class="indeterminate"></div>
					</div>
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.tab.friendships }}</h5>
						{% for item in string.profile.getUserFriendships(app.visitor.user_id) %}
							{% if app.visitor.user_id is same as(item.user_id) %}
								{{ app.sub.user.link.setUser(item.sender_id) }}
								<div class="app-post app-friendships mb-3" data-user-id="{{ item.sender_id }}">
									<div class="post-layout d-lg-flex d-flex align-items-center border-0 p-1">
										{% autoescape 'html' %}
											<div class="post-user">
												{{ app.sub.user.link.getProfilePicture(false)|raw }}
											</div>
											<a class="text-dark font-weight-bold ml-lg-0 ml-2 mr-auto" href="{{ app.sub.user.link.getOnlyLink()|raw }}">{{ app.sub.user.link.getName()|raw }}</a>
										{% endautoescape %}
										<div title="{{ app.sub.lang.string.discussion.posts.quick_menu.links.remove_from_list }}" class="remove-friendship cursor-pointer h5 mb-0" data-ui="account-remove-friendship">
											<i class="fas fa-times"></i>
										</div>
									</div>
								</div>
								{{ app.sub.user.link.unsetUser() }}
							{% elseif app.visitor.user_id is same as(item.sender_id) %}
								{{ app.sub.user.link.setUser(item.user_id) }}
								<div class="app-post app-friendships mb-3" data-user-id="{{ item.user_id }}">
									<div class="post-layout align-items-center border-0 p-1">
										{% autoescape 'html' %}
											<div class="post-user">
												{{ app.sub.user.link.getProfilePicture(false)|raw }}
											</div>
											<a class="text-dark font-weight-bold mr-auto" href="{{ app.sub.user.link.getOnlyLink()|raw }}">{{ app.sub.user.link.getName()|raw }}</a>
										{% endautoescape %}
										<div title="{{ app.sub.lang.string.discussion.posts.quick_menu.links.remove_from_list }}" class="remove-friendship cursor-pointer h5 mb-0" data-ui="account-remove-friendship">
											<i class="fas fa-times"></i>
										</div>
									</div>
								</div>
								{{ app.sub.user.link.unsetUser() }}
							{% endif %}
						{% endfor %}
					</div>
				</div>
			</div>
			<div class="tab-content about">
				<div class="app-box shadow rounded animate slideIn">
					<div class="pl-4 pr-4 pt-3 pb-3">
						<h5 class="mb-3">{{ app.sub.lang.string.account.tab.about }}</h5>
						<div class="d-flex flex-column justify-content-center align-items-center copyright">
							<div class="logo text-center mb-3">
								{% include 'logo.tpl' %}
							</div>
							<p class="mb-0">Software by Mention </p>
							<span>© {{ app.timer.date.getYear }} ParantezTech.</span>
							<div class="version mt-4">{{ app.build.code }}</div>
							<div class="version">Build {{ app.build.id }}</div>
							<div class="text-center mt-4">
								<a target="_blank" href="https://www.r10.net/members/90047-scarecrow.html">https://www.r10.net/members/90047-scarecrow.html</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>
	{# This is includes meta definitions. #}
	<div hook-action="{Mention:App-domEvent-metacontents}" data-title="{{ app.sub.lang.string.account.title }}"
		data-meta-description="{{ app.settings.meta_description }}"
		data-og-description="{{ app.settings.meta_description }}"
		data-twitter-description="{{ app.settings.meta_description }}" data-og-title="{{ app.settings.site_title }}"
		data-twitter-title="{{ app.settings.site_title }}" class="d-none">
	</div>
{% endblock %}