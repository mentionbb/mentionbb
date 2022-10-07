{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/list' %}

{% block title %}{{ app.sub.lang.string.admin.languages.list.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="languages">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="app-language-list pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.languages.list.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.languages.list.desc }}</small>
                    </div>
                </div>
                {% for item in app.sub.lang.parse.getLanguages() %}
                    <div class="app-language setting-group list bg-white text-dark shadow-sm position-relative rounded">
                        <div class="nested-items" data-language-id="{{ item.name }}">
                            <div class="mt-1 mx-2">
                                <span class="fi fi-{{ string.language.getFlag(item.id) }} --sm"></span>
                            </div>
                            <a class="title flex-fill d-flex flex-column justify-content-center mr-auto" href="{{ app.phrase.buildLink('adminLanguages', {}) }}?l={{ item.name }}">
                                <div class="h5"> {{ item.title }}</div>
                                <small class="d-none d-lg-block">{{ item.desc }}</small>
                            </a>
                            <div class="append-btn">
                                <div data-ui="language-switcher">
                                    <div class="checkbox switcher">
                                        <label title="{{ app.sub.lang.string.admin.languages.list.checkbox.title }}" class="toggle-tooltip mb-0">
                                            <input type="checkbox" value="1" {{ app.settings.default_language is same as(item.name) ? 'checked="checked"' : '' }}>
                                            <span class="mr-0"><small></small></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <a class="append-btn" href="{{ app.phrase.buildLink('adminLanguages', {}) }}?export={{ item.name }}" data-ui="admin-export-language">{{ app.sub.lang.string.container.buttons.export }}</a>
                            <a class="append-btn" href="#" data-ui="admin-remove-language">{{ app.sub.lang.string.container.buttons.remove }}</a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </aside>
{% endblock %}