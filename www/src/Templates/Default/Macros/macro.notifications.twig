{% macro notifications(item) %}
	{% if not item.post_id is same as('0') or not item.discussion_id is same as('0') %}
		{% if item.tab|match('/reaction-([a-z]+)/') %}
			<a data-is-seeing="{{ item.is_seeing }}" class="notification d-flex" href="{{ app.phrase.buildLink('shortcode', {'shortcode': app.sub.discussion.shortcode.toBase(item.shortcode)}) }}">
		{% elseif item.tab is same as('reply-discussion') %}
			<a data-is-seeing="{{ item.is_seeing }}" class="notification d-flex" href="{{ app.phrase.buildLink('discussion', {'discussion_id': item.discussion_id, 'discussion_title': item.title}) }}">
		{% elseif item.tab is same as('tagged-user') %}
			<a data-is-seeing="{{ item.is_seeing }}" class="notification d-flex" href="{{ app.phrase.buildLink('discussion', {'discussion_id': item.discussion_id, 'discussion_title': item.title}) }}">
		{% elseif item.tab is same as('quote-post') %}
			<a data-is-seeing="{{ item.is_seeing }}" class="notification d-flex" href="{{ app.phrase.buildLink('shortcode', {'shortcode': app.sub.discussion.shortcode.toBase(item.shortcode)}) }}">
		{% elseif item.tab is same as('subscribe') %}
			<a data-is-seeing="{{ item.is_seeing }}" class="notification d-flex" href="{{ app.phrase.buildLink('discussion', {'discussion_id': item.discussion_id, 'discussion_title': item.title}) }}">
		{% elseif item.tab is same as('friendship-request') %}
			<div data-is-seeing="{{ item.is_seeing }}" class="notification d-flex">
		{% endif %}
		<div class="user-image">
			{{ app.sub.user.link.setUser(item.sender_user_id) }}
			{% autoescape 'html' %}
				{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
			{% endautoescape %}
			{{ app.sub.user.link.unsetUser() }}
		</div>
		<div class="text ml-3">
			{% if item.tab|match('/reaction-([a-z]+)/') %}
				{% set reaction = item.tab|match('/reaction-([a-z]+)/') %}
				 {{ app.sub.lang.parse.Parse('container.notification.text.reaction', item.sender_username, reaction.1)|raw }}
			{% elseif item.tab is same as('reply-discussion') %}
				<span>{{ app.sub.lang.parse.Parse('container.notification.text.reply', item.sender_username)|raw }}</span>
			{% elseif item.tab is same as('tagged-user') %}
				<span>{{ app.sub.lang.parse.Parse('container.notification.text.tagged', item.sender_username)|raw }}</span>
			{% elseif item.tab is same as('quote-post') %}
				<span>{{ app.sub.lang.parse.Parse('container.notification.text.replied', item.sender_username)|raw }}</span>
			{% elseif item.tab is same as('subscribe') %}
				<span>{{ app.sub.lang.parse.Parse('container.notification.text.subscribe', item.sender_username)|raw }}</span>
			{% elseif item.tab is same as('friendship-request') %}
				<span>{{ app.sub.lang.parse.Parse('container.notification.text.friendship_request', item.sender_username)|raw }}</span>
				<div class="d-flex justify-content-end friendship-request-buttons mt-2" data-sender-id="{{ item.sender_id }}">
					<button class="approve btn btn-sm">{{ app.sub.lang.string.container.buttons.approve }}</button>
					<button class="remove btn btn-sm">{{ app.sub.lang.string.container.buttons.cancel }}</button>
					<span class="approved-friendship-request font-weight-bold">{{ app.sub.lang.string.container.notification.friendship_request.text.approved }}</span>
					<span class="removed-friendship-request font-weight-bold">{{ app.sub.lang.string.container.notification.friendship_request.text.removed }}</span>
				</div>
			{% endif %}
		</div>
		{% if item.tab is same as('friendship-request') %}
		    </div>
	    {% else %}
	        </a>
	    {% endif %}
	{% endif %}
{% endmacro %}