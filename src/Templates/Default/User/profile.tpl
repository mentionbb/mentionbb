{% extends 'container.tpl' %}

{% block app_template_name 'profile' %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div>{{ app.sub.lang.string.profile.breadcrumb }}</div>
					<div>{{ string.user.username }}</div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	<aside class="col-sm-3 mb-4 pr-4">
		<div class="helpful-area mb-lg-5">
			{% if app.user.loggedIn() %}
                {% if not app.user.getActiveBan(app.visitor.user_id) %}
				    {% if not app.visitor.user_id is same as(string.user.user_id) %}
					    {% if string.profile.isUserHasFriendship(string.user.user_id, app.visitor.user_id, 0) %}
						    <button type="button" class="btn btn-app-discussion icon remove-friend mt-2" data-ui="remove-friend" data-text="{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}" data-complete-text="{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}">{{ app.sub.lang.string.discussion.posts.quick_menu.links.remove_from_list }}</button>
					    {% elseif string.profile.isUserHasFriendship(string.user.user_id, app.visitor.user_id, 1) %}
						    <button type="button" class="btn btn-app-discussion icon awaiting-friend mt-2" data-ui="remove-friend" data-text="{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}" data-complete-text="{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}">{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}</button>
					    {% else %}
						    <button type="button" class="btn btn-app-discussion icon add-friend mt-2" data-ui="add-as-friend" data-text="{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}" data-complete-text="{{ app.sub.lang.string.discussion.posts.quick_menu.links.request_send_friend }}">{{ app.sub.lang.string.discussion.posts.quick_menu.links.add_as_friend }}</button>
					    {% endif %}
				    {% else %}
					    <a href="{{ app.phrase.buildLink('account', {}) }}" class="btn btn-app-discussion icon gear mt-2">{{ app.sub.lang.string.container.usermenu.buttons.control_panel }}</a>
				    {% endif %}
                {% endif %}
			{% endif %}
		</div>
		<div class="card app-forums bg-white rounded shadow mb-4 mt-4 mt-lg-0">
			<div class="card-header">
				<h6 class="font-weight-bold">{{ app.sub.lang.string.profile.quick_menu.title }}</h6>
			</div>
			<article class="card-group-item">
				<div class="filter-content">
					<div class="list-group list-group-flush scrollable">
						<a href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts'}) }}" data-tab="posts" data-ui="profile-quick-tab" class="list-group-item active">{{ app.sub.lang.string.profile.quick_menu.posts }}<span class="float-right badge badge-dark round">{{ string.post.getUserPostCount(string.user.user_id) }}</span></a>
						<a href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'discussions'}) }}" data-tab="discussions" data-ui="profile-quick-tab" class="list-group-item">{{ app.sub.lang.string.profile.quick_menu.discussions }}<span class="float-right badge badge-dark round">{{ string.post.getUserDiscussionCount(string.user.user_id) }}</span></a>
					</div>
				</div>
			</article>
		</div>
		<div class="card app-forums bg-white rounded shadow mb-4 mt-4 mt-lg-0">
			<div class="card-header">
				<h6 class="font-weight-bold">{{ app.sub.lang.string.profile.quick_menu.friends }} ({{ string.profile.getUserFriendshipCount(string.user.user_id) }})</h6>
			</div>
			<article class="card-group-item">
				<div class="filter-content">
					<div class="list-group list-group-flush scrollable">
						{% for item in string.profile.getUserFriendships(string.user.user_id) %}
							{% if string.user.user_id is same as(item.user_id) %}
								{{ app.sub.user.link.setUser(item.sender_id) }}
								<a class="list-group-item post-user d-flex align-items-center p-3" href="{{ app.sub.user.link.getOnlyLink()|raw }}">
									{% autoescape 'html' %}
										{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
										<span class="ml-2">{{ app.sub.user.link.getName()|raw }}</span>
									{% endautoescape %}
								</a>
								{{ app.sub.user.link.unsetUser() }}
							{% elseif string.user.user_id is same as(item.sender_id) %}
								{{ app.sub.user.link.setUser(item.user_id) }}
								<a class="list-group-item post-user d-flex align-items-center p-3" href="{{ app.sub.user.link.getOnlyLink()|raw }}">
									{% autoescape 'html' %}
										{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
										<span class="ml-2">{{ app.sub.user.link.getName()|raw }}</span>
									{% endautoescape %}
								</a>
								{{ app.sub.user.link.unsetUser() }}
							{% endif %}
						{% endfor %}
					</div>
				</div>
			</article>
		</div>
	</aside>
	<aside class="col-sm-9">
		<div class="d-flex d-flex flex-column flex-lg-row">
			<div class="app-profile-info d-flex align-items-center" data-user-id="{{ string.user.user_id }}" data-username="{{ string.user.username }}" data-username-seo="{{ string.user.username|buildSeoLink }}">
				<div class="d-flex align-items-center">
					{{ app.sub.user.link.setUser(string.user.user_id) }}
					{% autoescape 'html' %}
						{{ app.sub.user.link.getProfilePicture(true, 'no-tooltip')|raw }}
						<div class="d-flex flex-column ml-3">
							<span class="username">{{ app.sub.user.link.getName()|raw }}</span>
							{% if app.sub.user.link.isAdmin() %}
								<span class="d-block">{{ app.sub.user.link.getUsertitle()|raw }}</span>
							{% else %}
								<span class="d-block">{{ app.sub.user.link.getUsertitle()|striptags }}</span>
							{% endif %}
							<span>{{ app.sub.lang.parse.Parse('profile.joining', app.timer.date.toHumanReadable(string.user.registration_date)) }}</span>
						</div>
					{% endautoescape %}
					{{ app.sub.user.unsetUser() }}
				</div>
			</div>
			<div hook-action="{Mention:App-domEvent-profileReactionBox}" class="app-reactions reaction-md d-flex ml-lg-auto mt-4 mt-lg-0">
				{% set profileTooltipReactionsByUserId = string.reaction.getReactionCountByUserId(string.user.user_id) %}
				<div class="reaction like d-flex flex-column align-items-center">
					<span>{{ profileTooltipReactionsByUserId.like|number_format }}</span>
				</div>
				<div class="reaction love d-flex flex-column align-items-center">
					<span>{{ profileTooltipReactionsByUserId.love|number_format }}</span>
				</div>
				<div class="reaction haha d-flex flex-column align-items-center">
					<span>{{ profileTooltipReactionsByUserId.haha|number_format }}</span>
				</div>
				<div class="reaction wow d-flex flex-column align-items-center">
					<span>{{ profileTooltipReactionsByUserId.wow|number_format }}</span>
				</div>
				<div class="reaction sad d-flex flex-column align-items-center">
					<span>{{ profileTooltipReactionsByUserId.sad|number_format }}</span>
				</div>
				<div class="reaction angry d-flex flex-column align-items-center">
					<span>{{ profileTooltipReactionsByUserId.angry|number_format }}</span>
				</div>
				<div class="reaction dislike d-flex flex-column align-items-center mr-0">
					<span>{{ profileTooltipReactionsByUserId.dislike|number_format }}</span>
				</div>
			</div>
		</div>
		<hr>
		{% if app.user.loggedIn() %}
			{% if not app.visitor.user_id is same as(string.user.user_id) %}
				<a href="{{ app.phrase.buildLink('messages', {'section': 'new', 'id': string.user.user_id}) }}" class="btn btn-app-discussion icon plus mr-3">{{ app.sub.lang.string.profile.buttons.message }}</a>
			{% endif %}
		{% endif %}
		<div class="app-order-profile-post dropdown mb-3">
			<button class="btn btn-app-dd no-anim-ui icon order-newest dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ app.sub.lang.string.container.order.new_message }}</button>
			<div class="dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn" aria-labelledby="dropdownMenuButton">
				<div class="title">
					<div>
						<span>{{ app.sub.lang.string.container.order.title }}</span>
					</div>
				</div>
				<div>
					<a class="notification quick-menu d-flex active" data-ui="order-profile-posts" data-order="newest" 
					data-href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'newest'}) }}" 
					data-toggle-href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'discussions', 'subtab': 'newest'}) }}" 
					href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'newest'}) }}">
						<div class="text ml-3">
							<span>{{ app.sub.lang.string.container.order.new_message }}</span>
						</div>
					</a>
					<a class="notification quick-menu d-flex" data-ui="order-profile-posts" data-order="top-likes" 
					data-href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'top-likes'}) }}" 
					data-toggle-href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'discussions', 'subtab': 'top-likes'}) }}" 
					href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'top-likes'}) }}">
						<div class="text ml-3">
							<span>{{ app.sub.lang.string.container.order.top_likes }}</span>
						</div>
					</a>
					<a class="notification quick-menu d-flex" data-ui="order-profile-posts" data-order="oldest" 
					data-href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'oldest'}) }}" 
					data-toggle-href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'discussions', 'subtab': 'oldest'}) }}" 
					href="{{ app.phrase.buildLink('profile', {'username': string.user.username, 'user_id': string.user.user_id, 'tab': 'posts', 'subtab': 'oldest'}) }}">
						<div class="text ml-3">
							<span>{{ app.sub.lang.string.container.order.oldest }}</span>
						</div>
					</a>
				</div>
			</div>
		</div>
		<div class="app-post-container animate slideIn">
			{% include 'profile_posts.tpl' %}
		</div>
		<div class="post-loader-spin"></div>
	</aside>
	{# This is includes meta definitions. #}
	<div hook-action="{Mention:App-domEvent-metacontents}" data-title="{{ string.user.username }}"
		data-meta-description="{{ string.user.username }}" data-og-description="{{ string.user.username }}"
		data-twitter-description="{{ string.user.username }}" data-og-title="{{ string.user.username }}"
		data-twitter-title="{{ string.user.username }}" class="d-none">
	</div>
{% endblock %}