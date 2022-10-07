{% if app.settings.site_logo is empty %}
	<span>{Mention}</span>
{% else %}
	{% if not app.cookie.night_mode is defined %}
		<img title="{{ app.settings.site_title }}" alt="{{ app.settings.site_title }}" src="{{ app.public_dir }}/images/{{ app.settings.site_logo }}" />
	{% else %}
		<img title="{{ app.settings.site_title }}" alt="{{ app.settings.site_title }}" src="{{ app.public_dir }}/images/{{ app.settings.site_logo_night }}" />
	{% endif %}
{% endif %}