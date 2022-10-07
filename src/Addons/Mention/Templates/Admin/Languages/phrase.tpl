{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/sentences/phrase' %}

{% block title %}{{ app.sub.lang.string.admin.languages.phrase.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}?sentences">{{ app.sub.lang.string.admin.languages.sentences.title }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}">{{ string.phrase.language }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}?editPhrase/?f=[{{ string.phrase.file }}]&phrasePath={{ string.phrase.path }}&phrase=[{{ string.phrase.phrase }}]&language={{ string.phrase.language }}&defaultNav=sentences">{{ string.phrase.var }}</a></div>
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
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.languages.phrase.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.languages.phrase.desc }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminLanguages', {}) }}?sentences&path=[{{ string.phrase.file }}]" class="btn btn-app-discussion icon back">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                    <div class="service-list-area w-100">
                        <form id="admin_phrase_edit" method="post">
                            <div id="servicesAccordion">
                                <div class="app-phrase app-service bg-white shadow-sm position-relative mb-3 rounded" data-language="{{ string.phrase.language }}" data-phrase="{{ string.phrase.var }}">
                                    <div class="app-post">
                                        <div class="post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse">
                                            <div class="post-icon">
                                               <i class="far fa-edit"></i>
                                            </div>
                                            <div class="head-title d-flex flex-column ml-lg-0 ml-2 mr-auto">
                                                <span class="font-weight-bold">{{ string.phrase.var }}</span>
                                                <small>{{ string.phrase.file }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="p-2">
                                            <div class="form-group row mx-auto">
                                                <label for="static_variable" class="col-sm-4 col-form-label">{{ app.sub.lang.string.admin.languages.phrase.forms.variable.title }}</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" id="static_variable" type="text" placeholder="{{ app.sub.lang.string.admin.languages.phrase.forms.variable.title }}" aria-label="variable" value="{{ string.phrase.var }}" aria-describedby="help_variable" spellcheck="false" disabled>
                                                    <small id="help_variable" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.phrase.forms.variable.desc }}</small>
                                                </div>
                                            </div>
                                            <div class="form-group row mx-auto">
                                                <label for="static_phrase" class="col-sm-4 col-form-label">{{ app.sub.lang.string.admin.languages.phrase.forms.phrase.title }}</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" id="static_phrase" placeholder="{{ app.sub.lang.string.admin.languages.phrase.forms.phrase.title }}" spellcheck="false" rows="5" disabled>{{ string.phrase.text }}</textarea>
                                                    <small id="help_phrase" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.phrase.forms.phrase.desc }}</small>
                                                </div>
                                            </div>
                                            <div class="form-group row mx-auto">
                                                <label for="static_phrase" class="col-sm-4 col-form-label">{{ app.sub.lang.string.admin.languages.phrase.forms.modification.title }}</label>
                                                <div class="col-sm-8">
                                                    <textarea name="text" class="form-control" id="static_phrase" placeholder="{{ app.sub.lang.string.admin.languages.phrase.forms.modification.placeholder }}" spellcheck="false" rows="5">{{ string.modifiedText }}</textarea>
                                                    <small id="help_phrase" class="form-text text-muted">{{ app.sub.lang.string.admin.languages.phrase.forms.modification.desc }}</small>
                                                    <div class="help pt-4">
                                                        <div class="mb-2">
                                                            <i class="far fa-question-circle h4 mb-0"></i>
                                                        </div>
                                                        <small class="d-block">{{ app.sub.lang.string.admin.languages.phrase.forms.text|raw }}</small>
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