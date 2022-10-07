{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/editor/buttons' %}

{% block title %}{{ app.sub.lang.string.admin.editor.buttons.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminEditor', {}) }}?editorButtons">{{ app.sub.lang.string.admin.editor.buttons.title }}</a></div>
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
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.editor.buttons.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.editor.buttons.desc }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminEditor', {}) }}?addButton" class="btn btn-app-discussion icon plus">{{ app.sub.lang.string.admin.editor.buttons.add }}</a>
                    </div>
                </div>  
                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                    <div class="service-list-area list-tab-area w-100">
                        <div>
                            <div id="servicesAccordion">
                                <div class="app-addon app-service bg-white shadow-sm position-relative mb-3 rounded">
                                    <div class="app-post">
                                        <div class="post-layout d-flex align-items-center border-top-0 px-2 p-1 collapse" data-toggle="collapse" data-target="#adminAddons_install"
                                            aria-expanded="true" aria-controls="adminAddons_install">
                                            <div class="post-icon">
                                                <i class="fas fa-spell-check"></i>
                                            </div>
                                            <div class="head-title with-tabs d-flex flex-column ml-lg-0 ml-2 mr-auto">
                                                <ul class="nav nav-tabs" id="editorTab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" id="toolbars-tab" data-toggle="tab" href="#toolbars" role="tab" aria-controls="toolbars" aria-selected="true">
                                                            <i class="fas fa-italic mr-2"></i>
                                                            {{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.title }}
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="profile-buttons" data-toggle="tab" href="#buttons" role="tab" aria-controls="buttons" aria-selected="false">
                                                            <i class="fas fa-bars mr-2"></i>
                                                            {{ app.sub.lang.string.admin.editor.buttons.head.tabs.buttons.title }}
                                                        </a>
                                                    </li>                                                
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="tab-content p-2">
                                            <div class="tab-pane fade show active" id="toolbars" role="tabpanel" aria-labelledby="toolbars-tab">
                                                <div class="form-group row mx-auto">
                                                    <label class="col-sm-4 col-form-label">{{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.editor.title }}</label>
                                                    <div class="col-sm-8">
                                                        <div class="fake-editor-container">
                                                            <div id="js-AppAdmin_DraggableItems" class="fake-editor active-toolbars">
                                                                {% set toolbars = app.sub.editor.buttons.getToolbarsWithOptions() %}
                                                                <div class="parent">
                                                                    {% for item in toolbars|keys %}
                                                                        {% for toolbar in toolbars[item] %}
                                                                            {% if toolbar.name is same as ('sizeselect') %}
                                                                            {% elseif toolbar.name is same as ('forecolor') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd-with">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('backcolor') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd-with">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('table') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd-with">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('formatselect') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <span>{{ app.sub.lang.string.editor.Paragraph }}</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('fontselect') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <span>{{ app.sub.lang.string.editor['System Font'] }}</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('fontsizeselect') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <span>12pt</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% else %}
                                                                                <div class="dropdown" data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}">
                                                                                    <button type="button" data-toggle="dropdown"
                                                                                    aria-haspopup="true" aria-expanded="false">{{ toolbar.icon|raw }}</button>
                                                                                </div>
                                                                            {% endif %}
                                                                            <div class="dropdown-menu dropdown-menu-right custom-menu custom-menu-lg shadow animate slideIn d-none">
                                                                                <div class="progress d-none">
                                                                                    <div class="indeterminate"></div>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <div>
                                                                                        <span>{{ app.sub.lang.parse.Parse('admin.editor.toolbars.dropdown.title', toolbar.name|title) }}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <form method="post">
                                                                                        <div id="toolbar-settings" class="form pt-3 pb-2 px-2">
                                                                                            <div class="h3 text-dark d-flex align-items-center justify-content-center mb-3">
                                                                                                {{ toolbar.icon|raw }}
                                                                                            </div>
                                                                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                                                                <div class="col-lg-6 col-sm-12 pr-2">
                                                                                                    <label class="col-form-label" for="toolbar_toolbar_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.toolbar.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[toolbar]" type="text" class="form-control"
                                                                                                            id="toolbar_toolbar_{{ toolbar.id }}" value="{{ toolbar.name }}"
                                                                                                            placeholder="{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.toolbar.placeholder }}">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-6 col-sm-12">
                                                                                                    <label class="col-form-label" for="toolbar_alias_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[alias]" type="text" class="form-control" id="toolbar_alias_{{ toolbar.id }}"
                                                                                                            value="{{ toolbar.alias }}"
                                                                                                            placeholder="{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.placeholder }}">
                                                                                                        <small class="form-text text-muted">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                                                                <div class="col-lg-6 col-sm-12 pr-2">
                                                                                                    <label class="col-form-label" for="toolbar_button_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[button]" type="text" class="form-control" id="toolbar_button_{{ toolbar.id }}"
                                                                                                            value="{{ toolbar.button }}"
                                                                                                            placeholder="{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.placeholder }}">
                                                                                                        <small class="form-text text-muted">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-6 col-sm-12">
                                                                                                    <label class="col-form-label" for="toolbar_order_by_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.order_by.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[order_by]" type="number" class="form-control"
                                                                                                            id="toolbar_order_by_{{ toolbar.id }}" value="{{ toolbar.order_by }}" min="1">
                                                                                                        <small class="form-text text-muted">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.order_by.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                                                                <div class="col-lg-12 col-sm-12 pr-2">
                                                                                                    <label class="col-form-label" for="toolbar_icon_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[icon]" type="text" class="form-control" id="toolbar_icon_{{ toolbar.id }}"
                                                                                                            value="{{ toolbar.icon }}"
                                                                                                            placeholder="{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.placeholder }}">
                                                                                                        <small class="form-text text-muted">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.help|raw }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button type="submit" class="btn btn-app-discussion no-anim-ui icon plus">{{
                                                                                                app.sub.lang.string.container.buttons.update }}</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        {% endfor %}
                                                                    {% endfor %}     
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <small>{{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.editor.help|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row mx-auto">
                                                    <label class="col-sm-4 col-form-label">{{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.nonactive.title }}</label>
                                                    <div class="col-sm-8">
                                                        <div class="fake-editor-container">
                                                            <div id="js-AppAdmin_DraggableItems" class="fake-editor nonactive-toolbars">
                                                                <div class="parent">
                                                                    <div class="dropdown non-draggable group-line" data-parent="0">
                                                                        <button>
                                                                            <i class="fas fa-slash"></i>
                                                                        </button>
                                                                    </div>
                                                                    {% set toolbars = app.sub.editor.buttons.getToolbarsWithOptions(false) %}
                                                                    {% for item in toolbars|keys %}
                                                                        {% for toolbar in toolbars[item] %}
                                                                            {% if toolbar.name is same as ('sizeselect') %}
                                                                            {% elseif toolbar.name is same as ('forecolor') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd-with">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('backcolor') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd-with">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('table') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd-with">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        {{ toolbar.icon|raw }}
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('formatselect') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <span>{{ app.sub.lang.string.editor.Paragraph }}</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('fontselect') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <span>{{ app.sub.lang.string.editor['System Font'] }}</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% elseif toolbar.name is same as ('fontsizeselect') %}
                                                                                <div data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}" class="dropdown dd">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <span>12pt</span>
                                                                                    </button>
                                                                                </div>
                                                                            {% else %}
                                                                                <div class="dropdown" data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}">
                                                                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ toolbar.icon|raw }}</button>
                                                                                </div>
                                                                            {% endif %}
                                                                            <div class="dropdown-menu dropdown-menu-right custom-menu custom-menu-lg shadow animate slideIn d-none">
                                                                                <div class="progress d-none">
                                                                                    <div class="indeterminate"></div>
                                                                                </div>
                                                                                <div class="title">
                                                                                    <div>
                                                                                        <span>{{ app.sub.lang.parse.Parse('admin.editor.toolbars.dropdown.title', toolbar.name|title) }}</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    <form method="post">
                                                                                        <div id="toolbar-settings" class="form pt-3 pb-2 px-2">
                                                                                            <div class="h3 text-dark d-flex align-items-center justify-content-center mb-3">
                                                                                                {{ toolbar.icon|raw }}
                                                                                            </div>
                                                                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                                                                <div class="col-lg-6 col-sm-12 pr-2">
                                                                                                    <label class="col-form-label" for="toolbar_toolbar_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.toolbar.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[toolbar]" type="text" class="form-control"
                                                                                                            id="toolbar_toolbar_{{ toolbar.id }}" value="{{ toolbar.name }}"
                                                                                                            placeholder="{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.toolbar.placeholder }}">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-6 col-sm-12">
                                                                                                    <label class="col-form-label" for="toolbar_alias_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[alias]" type="text" class="form-control" id="toolbar_alias_{{ toolbar.id }}"
                                                                                                            value="{{ toolbar.alias }}"
                                                                                                            placeholder="{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.placeholder }}">
                                                                                                        <small class="form-text text-muted">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.alias.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                                                                <div class="col-lg-6 col-sm-12 pr-2">
                                                                                                    <label class="col-form-label" for="toolbar_button_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[button]" type="text" class="form-control" id="toolbar_button_{{ toolbar.id }}"
                                                                                                            value="{{ toolbar.button }}"
                                                                                                            placeholder="{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.placeholder }}">
                                                                                                        <small class="form-text text-muted">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.button.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-6 col-sm-12">
                                                                                                    <label class="col-form-label" for="toolbar_order_by_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.order_by.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[order_by]" type="number" class="form-control"
                                                                                                            id="toolbar_order_by_{{ toolbar.id }}" value="{{ toolbar.order_by }}" min="1">
                                                                                                        <small class="form-text text-muted">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.order_by.help }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                                                                <div class="col-lg-12 col-sm-12 pr-2">
                                                                                                    <label class="col-form-label" for="toolbar_icon_{{ toolbar.id }}">{{
                                                                                                        app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.title }}</label>
                                                                                                    <div>
                                                                                                        <input name="options[icon]" type="text" class="form-control" id="toolbar_icon_{{ toolbar.id }}"
                                                                                                            value="{{ toolbar.icon }}"
                                                                                                            placeholder="{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.placeholder }}">
                                                                                                        <small class="form-text text-muted">{{ app.sub.lang.string.admin.editor.toolbars.dropdown.form.icon.help|raw }}</small>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button type="submit" class="btn btn-app-discussion no-anim-ui icon plus">{{
                                                                                                app.sub.lang.string.container.buttons.update }}</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        {% endfor %}
                                                                    {% endfor %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <small>{{ app.sub.lang.string.admin.editor.buttons.head.tabs.toolbars.nonactive.help }}</small>
                                                    </div>
                                                    <div class="help pt-4">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <i class="far fa-question-circle h4 mb-0"></i>
                                                            <div class="ml-3">{{ app.sub.lang.string.admin.editor.toolbars.help }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button data-ui="save-order" type="submit" class="btn btn-app-discussion no-anim-ui icon plus">{{ app.sub.lang.string.container.buttons.save }}</button>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="buttons" role="tabpanel" aria-labelledby="buttons-tab">
                                                <div class="form-group row mx-auto">
                                                    <label class="col-sm-4 col-form-label">{{ app.sub.lang.string.admin.editor.buttons.head.tabs.buttons.title }}</label>
                                                    <div class="col-sm-8">
                                                        <div class="fake-editor-container">
                                                            <div id="js-AppAdmin_DraggableItems" class="fake-editor buttons">
                                                                <div class="parent">
                                                                    <div class="dropdown non-draggable group-line" data-parent="0">
                                                                        <button>
                                                                            <i class="fas fa-slash"></i>
                                                                        </button>
                                                                    </div>
                                                                    {% set toolbars = app.sub.editor.buttons.getButtonList(false) %}
                                                                    {% for item in toolbars|keys %}
                                                                        {% for toolbar in toolbars[item] %}
                                                                            <div class="dropdown" data-id="{{ toolbar.id }}" data-parent="{{ toolbar.button }}">
                                                                                <a class="text-dark" href="{{ app.phrase.buildLink('adminEditor', {}) }}?buttonId={{ toolbar.button_id }}&defaultNav=editor_buttons">{{ toolbar.icon|raw }}</a>
                                                                            </div>
                                                                        {% endfor %}
                                                                    {% endfor %}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}