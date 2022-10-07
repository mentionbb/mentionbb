{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/sentences/search' %}

{% block title %}{{ app.sub.lang.string.admin.languages.sentences.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}?searchSentences">{{ app.sub.lang.string.admin.languages.sentences.search.title }}</a></div>
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
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.languages.sentences.search.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.languages.sentences.search.desc }}</small>
                    </div>
                </div>  
                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3">
                        <div class="app-adv-search app-admin-search js-AppAdmin_QuickSearchSentences position-relative w-100">
                            <div class="input-group has-feedback has-clear">
                                <div class="input-group-prepend">
                                    <div class="app-post-manage d-flex">
                                        <div class="app-searchSentences-selectLanguages dropdown d-block">
                                            <button class="btn btn-app-dd no-anim-ui dropdown-toggle px-2 py-0" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <i class="fi fi-{{ string.language.getFlag(app.sub.lang.default.id) }} --xs mr-1"></i>
                                                {{ app.sub.lang.default.title }}
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn">
                                                <div class="title">
                                                    <div>
                                                        <span>{{ app.sub.lang.string.container.buttons.select }}</span>
                                                    </div>
                                                </div>
                                                <div class="scrollable">
                                                    <a class="notification quick-menu d-flex" data-language="__default" href="#">
                                                        <div class="text ml-2">
                                                           <span class="icon language">{{ app.sub.lang.string.admin.languages.sentences.search.dropdown.languages.all }}</span>
                                                        </div>
                                                    </a>
                                                    {% for item in app.sub.lang.parse.getLanguages() %}
                                                        <a class="notification quick-menu d-flex {{ app.settings.default_language is same as(item.name) ? 'active' : '' }}" data-language="{{ item.name }}" data-flag="{{ string.language.getFlag(item.id) }}" href="#">
                                                            <div class="text ml-2">
                                                                <i class="fi fi-{{ string.language.getFlag(item.id) }} --xs mr-1"></i>
                                                                <span>{{ item.title }}</span>
                                                            </div>
                                                        </a>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="app-searchSentences-selectAddon dropdown d-block">
                                            <button class="btn btn-app-dd icon addons no-anim-ui dropdown-toggle px-2 py-0" type="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">{{
                                                app.sub.lang.string.admin.languages.sentences.search.dropdown.addons.all }}
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-left custom-menu custom-menu-md shadow animate slideIn">
                                                <div class="title">
                                                    <div>
                                                        <span>{{ app.sub.lang.string.container.buttons.select }}</span>
                                                    </div>
                                                </div>
                                                <div class="scrollable">
                                                    <a class="notification quick-menu d-flex active" data-addon="__default" href="#">
                                                        <div class="text ml-2">
                                                           <span class="icon addons">{{ app.sub.lang.string.admin.languages.sentences.search.dropdown.addons.all }}</span>
                                                        </div>
                                                    </a>
                                                    {% for item in string.language.addonList %}
                                                        <a class="notification quick-menu d-flex" data-addon="{{ item }}" href="#">
                                                            <div class="text ml-2">
                                                                <span class="icon puzzle">{{ item }}</span>
                                                            </div>
                                                        </a>
                                                    {% endfor %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control" type="text"
                                    placeholder="{{ app.sub.lang.string.admin.languages.sentences.search.placeholder }}"
                                    aria-label="{{ app.sub.lang.string.container.buttons.search }}">
                                <span title="{{ app.sub.lang.string.container.buttons.clear }}"
                                    class="form-control-clear fas fa-times form-control-feedback d-none"></span>
                                <div class="input-group-append">
                                    <div class="app-post-manage d-flex">
                                        <button class="btn btn-app-dd icon search no-anim-ui px-2 py-0" type="button">
                                            {{ app.sub.lang.string.container.buttons.search }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="app-sentenceList search-results w-100"></div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}