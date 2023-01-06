{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/theme/templates/editor' %}

{% block title %}{{ app.sub.lang.string.admin.theme.templates.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
    {% set originalContent = string.originalContent %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminTemplates', {}) }}">{{ app.sub.lang.string.admin.theme.templates.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	
	<aside class="col-sm-12">
		<div class="app-box shadow rounded" data-tab="theme.templates">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.theme.templates.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.theme.templates.desc }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminIndex', {}) }}" class="btn btn-app-discussion icon back">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                    <div class="align-self-start col-lg-12 col-sm-12 mb-3">
                        <div class="app-admin-template-selector js-AppAdmin_TemplateSelector position-relative row mx-auto" data-default="{{ string.name }}">
                            <div class="col-lg-3 col-sm-12 pr-lg-4">
                                <ul class="directory-list scrollable shadow-sm rounded-bottom">
                                    {% set templates = string.template.getTemplates() %}
                                    {% for item in templates|keys %}
                                        {% if not item is same as('_file') %}
                                            <li class="folder">
                                                <span class="folder-name text-dark">{{ item }}</span>
                                                <ul class="d-none">
                                                    {% for child in templates[item]|keys %}
                                                        {% if not child is same as('_file') %}
                                                            <li class="folder child">
                                                                <span class="folder-name text-dark">{{ child }}</span>
                                                                <ul class="d-none">
                                                                    {% for files in templates[item][child] %}
                                                                        {% if files is iterable %}
                                                                            <li>
                                                                                <span data-template="{{ files.name }}" data-path="{{ files.path }}">{{ files.name }}</span>
                                                                            </li>
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                </ul>
                                                            </li>
                                                        {% else %}
                                                            {% for files in templates[item]['_file'] %}
                                                                {% for file in files %}
                                                                    {% if file is iterable %}
                                                                        <li>
                                                                            <span data-template="{{ file.name }}" data-path="{{ file.path }}">{{ file.name }}</span>
                                                                        </li>
                                                                    {% endif %}
                                                                {% endfor %}
                                                            {% endfor %}
                                                        {% endif %}
                                                    {% endfor %}
                                                </ul>
                                            </li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </div>
                            <div class="col-lg-9 col-sm-12">
                                <div class="service-list-area w-100">
                                    <form id="admin_template_editor" method="post">
                                        <div id="servicesAccordion">
                                            <div class="app-template-editor app-service bg-white shadow-sm position-relative mb-3 rounded">
                                                <div class="app-post">
                                                    <div class="post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse">
                                                        <div class="post-icon">
                                                            <i class="fas fa-code"></i>
                                                        </div>
                                                        <div class="head-title d-flex flex-column ml-lg-0 ml-2 mr-auto">
                                                            <span class="font-weight-bold"></span>
                                                        </div>
                                                        <div class="mr-2 mr-lg-5 pr-lg-5 d-none">
                                                            <a href="#" class="text-dark h5" data-ui="app-show-originalContent"
                                                                title="{{ app.sub.lang.string.admin.addons.app.buttons.show_original_content }}">
                                                                <i class="far fa-eye"></i>
                                                            </a>
                                                            <a href="#" class="text-dark h5 d-none" data-ui="app-show-content"
                                                                title="{{ app.sub.lang.string.admin.addons.app.buttons.show_editor }}">
                                                                <i class="far fa-eye-slash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="scrollable">
                                                    <div id="editor"></div>
                                                    {% if originalContent %}
                                                        <div id="originalContent-editor"></div>
                                                    {% endif %}
                                                </div>
                                            </div>   
                                        </div>
                                        <div class="w-100 d-inline-block">
                                            <div class="sticky-button is-sticky shadow">
                                                <div class="progress d-none">
				                                    <div class="indeterminate"></div>
			                                    </div>
                                                <button type="submit" class="btn btn-app-discussion no-anim-ui icon send">{{ app.sub.lang.string.container.buttons.update }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div class="modal custom-modal animate slideIn" id="twig-syntax-exception" tabindex="-1"
        role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content shadow-lg rounded">
                <div class="modal-header justify-content-lg-center d-flex">
                    <span class="font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto">{{
                        app.sub.lang.string.admin.theme.templates.error.title }}</span>
                    <span class="close d-lg-none ml-auto" data-dismiss="modal"
                        aria-label="{{ app.sub.lang.string.container.buttons.close }}"></span>
                </div>
                <div class="modal-body">
                    <div class="big-icon error text-center mb-3"></div>
                    <p class="font-weight-normal text-center">{{ app.sub.lang.string.admin.theme.templates.error.text }}</p>
                    <div class="text-center">
                        <code class="error"></code>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}