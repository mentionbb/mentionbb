{% macro messages(item) %}
	{% set last = app.string.messages.getLastMessage(item.parent_id) %}
	{% if last.sender_id is same as(app.visitor.user_id) %}
		{% set seen = '1' %}
	{% else %}
		{% set seen = last.is_seeing %}
	{% endif %}
	<a data-is-seeing="{{ seen }}" class="notification message d-flex" href="{{ app.phrase.buildLink('messages', {'section': 'conversation', 'id': last.parent_id}) }}">
		{% if last.sender_id is same as(app.visitor.user_id) %}
			{{ app.sub.user.link.setUser(last.user_id) }}
			<div class="user-image">
				{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
			</div>
			<div class="text ml-3">
				{% if item.parent_id is same as('0') %}
					<span class="font-weight-bold">{{ item.title }}</span>
				{% else %}
					<span class="font-weight-bold">{{ item.title }}</span>
				{% endif %}
				<span class="sender" data-is-seeing="{{ last.is_seeing }}">{{ app.sub.user.link.getName()|raw }}</span>
				<span class="date">{{ app.timer.date.toHumanReadable(last.dateline) }}</span>
			</div>
			{{ app.sub.user.link.unsetUser() }}
	    {% else %}
	    	{{ app.sub.user.link.setUser(last.sender_id) }}
			<div class="user-image">
				{{ app.sub.user.link.getProfilePicture(false, 'no-tooltip')|raw }}
			</div>
			<div class="text ml-3">
				{% if item.parent_id is same as('0') %}
					<span class="font-weight-bold">{{ item.title }}</span>
				{% else %}
					<span>{{ app.sub.lang.parse.Parse('container.message.reply', item.title)|raw }}</span>
				{% endif %}
				<span class="sender">{{ app.sub.user.link.getName()|raw }}</span>
				<span class="date">{{ app.timer.date.toHumanReadable(last.dateline) }}</span>
			</div>
			{{ app.sub.user.link.unsetUser() }}
	    {% endif %}
	</a>
{% endmacro %}