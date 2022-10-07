{% for item in app.string.messages.getMessagesByUserId(app.visitor.user_id, 0) %}
	{% import 'macro.messages.tpl' as macros %}
	{{ macros.messages(item) }}
{% else %}
	<div class="notification no-records">
		<div class="text text-center">
			<span class="font-weight-normal">{{ app.sub.lang.string.container.message.none }}</span>
		</div>
	</div>
{% endfor %}