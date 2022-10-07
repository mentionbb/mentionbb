{% extends 'container.tpl' %}

{% block app_template_name 'contact' %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div>{{ app.sub.lang.string.pages.breadcrumb.pages }}</div>
					<div>{{ app.sub.lang.string.pages.breadcrumb.help }}</div>
					<div>{{ app.sub.lang.string.pages.breadcrumb.contact }}</div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	<aside class="col-sm-12">
		<div class="app-box shadow rounded animate slideIn">
			<div class="pl-4 pr-4 pt-3 pb-3">
				<h5 class="mb-3">{{ app.sub.lang.string.pages.contact.title }}</h5>
				<form id="help_contact" method="post">
					<div class="d-flex flex-column align-items-lg-center">
						<div class="w-50">
							<div class="form-group">
								<label for="your_name">{{ app.sub.lang.string.pages.contact.form.name }}</label>
								{% if app.user.loggedIn() %}
								    <input type="text" name="your_name" class="form-control" id="your_name" value="{{ app.visitor.username }}" required="required">
								{% else %}
									<input type="text" name="your_name" class="form-control" id="your_name" required="required">
								{% endif %}
							</div>
							<div class="form-group">
								<label for="your_mail">{{ app.sub.lang.string.pages.contact.form.mail }}</label>
								{% if app.user.loggedIn() %}
								    <input type="email" name="mail" class="form-control" id="your_mail" value="{{ app.visitor.mail }}" required="required">
								{% else %}
									<input type="email" name="mail" class="form-control" id="your_mail" required="required">
								{% endif %}
								<small>{{ app.sub.lang.string.pages.contact.form.mail_text }}</small>
							</div>
							<div class="form-group">
								<label for="title">{{ app.sub.lang.string.pages.contact.form.title }}</label>
								<input type="text" name="title" class="form-control" id="title" required="required">
							</div>
							<div class="form-group">
								<label for="text">{{ app.sub.lang.string.pages.contact.form.message }}</label>
								<textarea class="form-control" name="text" id="text" rows="3" required="required"></textarea>
							</div>
							<div>
								<button type="submit" class="btn btn-app-discussion icon send">{{ app.sub.lang.string.container.buttons.submit }}</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</aside>
	{# This is includes meta definitions. #}
	<div hook-action="{Mention:App-domEvent-metacontents}" data-title="{{ app.sub.lang.string.pages.contact.title }}"
		data-meta-description="{{ app.sub.lang.string.pages.contact.title }}"
		data-og-description="{{ app.sub.lang.string.pages.contact.title }}"
		data-twitter-description="{{ app.sub.lang.string.pages.contact.title }}"
		data-og-title="{{ app.sub.lang.string.pages.contact.title }}"
		data-twitter-title="{{ app.sub.lang.string.pages.contact.title }}" class="d-none">
	</div>
{% endblock %}