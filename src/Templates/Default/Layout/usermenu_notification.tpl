{% for item in app.string.notification.getNotificationByUserId(app.visitor.user_id) %}
	{% import 'macro.notifications.tpl' as macros %}
	{{ macros.notifications(item) }}
{% else %}
	<div class="notification no-records">
		<div class="text text-center">
			<span class="font-weight-normal">{{ app.sub.lang.string.container.notification.none }}</span>
		</div>
	</div>
{% endfor %}