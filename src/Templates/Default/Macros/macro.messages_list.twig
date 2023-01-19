{% macro messages(item, is_archived) %}
	{% for item in app.string.messages.getMessagesByUserId(app.visitor.user_id, is_archived, 0) %}
		{% set last = app.string.messages.getLastMessage(item.parent_id) %}
	    {% if last.sender_id is same as(app.visitor.user_id) %}
		    {% set seen = '1' %}
	    {% else %}
		    {% set seen = last.is_seeing %}
	    {% endif %}
		<a class="list-group-item post-user conversation-list align-items-center p-3" href="{{ app.phrase.buildLink('messages', {'section': 'conversation', 'id': last.parent_id}) }}" data-title="{{ item.title }}" data-conversation-id="{{ last.parent_id }}" data-is-seeing="{{ seen }}" data-ui="show-conversation">
			{% if last.sender_id is same as(app.visitor.user_id) %}
				{{ app.sub.user.link.setUser(last.user_id) }}
				{% autoescape 'html' %}
					{{ app.sub.user.link.getProfilePicture()|raw }}
					<div class="d-flex flex-column ml-3">
						<span>{{ app.sub.user.link.getName()|raw }}</span>
						<span data-is-seeing="{{ last.is_seeing }}">{{ item.title }}</span>
					</div>
				{% endautoescape %}
				{{ app.sub.user.link.unsetUser() }}
			{% else %}
				{{ app.sub.user.link.setUser(last.sender_id) }}
				{% autoescape 'html' %}
					{{ app.sub.user.link.getProfilePicture()|raw }}
					<div class="d-flex flex-column ml-3">
						<span>{{ app.sub.user.link.getName()|raw }}</span>
						<span>{{ item.title }}</span>
					</div>
				{% endautoescape %}
				{{ app.sub.user.link.unsetUser() }}
			{% endif %}
		</a>
	{% endfor %}
{% endmacro %}