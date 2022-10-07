{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/new' %}

{% block title %}{{ app.sub.lang.string.admin.languages.new.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}?new">{{ app.sub.lang.string.admin.languages.new.title }}</a></div>
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
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.languages.new.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.languages.new.desc }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminLanguages', {}) }}" class="btn btn-app-discussion icon back">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                    <div class="service-list-area w-100">
                        <form id="admin_languages_new" method="post">
                            <div id="servicesAccordion">
                                <div class="app-language-new app-service bg-white shadow-sm position-relative mb-3 rounded" data-name="{{ string.language.name }}">
                                    <div class="app-post">
                                        <div class="post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse">
                                            <div class="post-icon">
                                                <i class="fas fa-language"></i>
                                            </div>
                                            <div class="head-title d-flex flex-column ml-lg-0 ml-2 mr-auto">
                                                <span class="font-weight-bold">{{ app.sub.lang.string.admin.languages.new.head.title }}</span>
                                            </div>
                                            <div class="mr-lg-5 mr-1">
                                                <div class="app-post-manage">
                                                    <div class="app-newLanguage-selectMain dropdown d-block">
                                                        <button class="btn btn-app-dd no-anim-ui dropdown-toggle p-2" type="button" data-toggle="dropdown"
                                                            aria-haspopup="true" aria-expanded="false">{{ app.sub.lang.string.admin.languages.new.dropdown.title }}</button>
                                                        <div class="dropdown-menu dropdown-menu-right custom-menu custom-menu-md shadow animate slideIn">
                                                            <div class="title">
                                                                <div>
                                                                    <span>{{ app.sub.lang.string.container.buttons.select }}</span>
                                                                </div>
                                                            </div>
                                                            {% for item in app.sub.lang.parse.getLanguages() %}
                                                                <a class="notification quick-menu d-flex" data-language="{{ item.name }}" href="#">
                                                                    <div class="text ml-2">
                                                                        <i class="fi fi-{{ string.language.getFlag(item.id) }} --xs mr-1"></i>
                                                                        <span>{{ item.title }}</span>
                                                                    </div>
                                                                </a>
                                                            {% endfor %}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="p-2">
                                            <div class="bg-dark rounded p-1 px-2 mb-3 mt-2">
                                                <span class="text-light">{{ app.sub.lang.string.admin.languages.new.help|raw }}</span>
                                            </div>
                                            <div class="js-AppAdmin_SelectedMainLanguageMessage d-none">
                                                <span>{{ app.sub.lang.string.admin.languages.new.main_language_text|raw }}</span>
                                            </div>
                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_id" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.id.title }}</label>
                                                    <div>
                                                        <input name="options[id]" class="form-control" id="static_id" type="text" aria-describedby="help_id" spellcheck="false" required="required">
                                                        <small id="help_id" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.id.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_name_{{ string.language.name }}" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.name.title }}</label>
                                                    <div>
                                                        <input name="options[name]" class="form-control" id="static_name" type="text" spellcheck="false" required="required">
                                                        <small id="help_name_{{ string.language.name }}" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.name.desc }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_title_{{ string.language.title }}" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.title.title }}</label>
                                                    <div>
                                                        <input name="options[title]" class="form-control" id="static_title" type="text" aria-describedby="help_title" spellcheck="false" required="required">
                                                        <small id="help_title" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.title.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_desc" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.desc.title }}</label>
                                                    <div>
                                                        <input name="options[desc]" class="form-control" id="static_desc" type="text" aria-describedby="help_desc" spellcheck="false" required="required">
                                                        <small id="help_desc" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.desc.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_dir" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.dir.title }}</label>
                                                    <div>
                                                        <input name="options[dir]" class="form-control" id="static_dir" type="text" aria-describedby="help_dir" spellcheck="false" required="required">
                                                        <small id="help_dir" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.dir.desc }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_zone" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.zone.title }}</label>
                                                    <div>
                                                        <select name="options[zone]" class="custom-select custom-select-sm">
                                                            {% for zone in app.timer.date.getAllTimezones() %}
                                                                <option value="{{ zone }}">{{ zone }}</option>
                                                            {% endfor %}
                                                        </select>
                                                        <small id="help_zone" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.zone.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_format" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.format.title }}</label>
                                                    <div>
                                                        <input name="options[format]" class="form-control" id="static_format" type="text" aria-describedby="help_format" spellcheck="false" required="required">
                                                        <small id="help_format" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.format.desc|raw }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_date_format" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.date_format.title }}</label>
                                                    <div>
                                                        <input name="options[date_format]" class="form-control" id="static_date_format" type="text" aria-describedby="help_date_format" spellcheck="false" required="required">
                                                        <small id="help_date_format_{{ string.language.timer.id }}" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.date_format.desc|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_date_format_simple" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.date_format_simple.title }}</label>
                                                    <div>
                                                        <input name="options[date_format_simple]" class="form-control" id="static_date_format_simple" type="text" aria-describedby="help_date_format_simple" spellcheck="false" required="required">
                                                        <small id="help_date_format_simple" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.date_format_simple.desc|raw }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_year_format" class="col-form-label">{{ app.sub.lang.string.admin.languages.forms.year_format.title }}</label>
                                                    <div>
                                                        <input name="options[year_format]" class="form-control" id="static_year_format" type="text" aria-describedby="help_year_format" spellcheck="false" required="required">
                                                        <small id="help_year_format" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.forms.year_format.desc|raw }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-app-discussion no-anim-ui icon pen">{{ app.sub.lang.string.container.buttons.update }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}