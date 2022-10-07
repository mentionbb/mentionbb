{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/editor/edit_buttons' %}

{% block title %}{{ app.sub.lang.string.admin.editor.buttons.edit.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminEditor', {}) }}?editorButtons">{{ app.sub.lang.string.admin.editor.buttons.title }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminEditor', {}) }}?buttonId={{ string.button.button_id }}">{{ string.button.toolbar }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="editor/edit_buttons">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center mb-3">
                    <div>
                        <h5 class="mb-0">{{ string.button.toolbar }}</h5>
                        <small class="text-muted">{{ string.button.alias }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminEditor', {}) }}?editorButtons" class="btn btn-app-discussion icon back">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div> 
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div id="userAccordion" class="w-100 rounded">
                        <form id="admin_buttons_edit" method="post">
                           <input name="button_id" type="hidden" value="{{ string.button.button_id }}" />
                           <input name="toolbar_id" type="hidden" value="{{ string.button.toolbar_id }}" />
                           <div class="form-group row flex-lg-row flex-column mx-auto">
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_tag" class="col-form-label">{{ app.sub.lang.string.admin.editor.forms.tag.title
                                        }}</label>
                                    <div>
                                        <input class="form-control" name="tag" id="static_tag" type="text"
                                            value="{{ string.button.tag }}" placeholder="{{ app.sub.lang.string.admin.editor.forms.tag.placeholder
                                            }}" spellcheck="false" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_replace_text" class="col-form-label">{{ app.sub.lang.string.admin.editor.forms.replace_text.title
                                        }}</label>
                                    <div>
                                        <textarea class="form-control" name="replace_text" id="static_replace_text" type="text"
                                            placeholder="{{ app.sub.lang.string.admin.editor.forms.replace_text.placeholder
                                            }}" spellcheck="false" required="required">{{ string.button.replace_text }}</textarea>
                                        <small id="help_replace_text" class="form-text text-muted">{{ app.sub.lang.string.admin.editor.forms.replace_text.help|raw
                                            }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_bbcode" class="col-form-label">{{ app.sub.lang.string.admin.editor.forms.bbcode.title
                                        }}</label>
                                    <div>
                                        <input class="form-control" name="bbcode" id="static_bbcode" type="text"
                                            value="{{ string.button.bbcode }}" placeholder="{{ app.sub.lang.string.admin.editor.forms.bbcode.placeholder
                                            }}" spellcheck="false" required="required">
                                        <small id="help_bbcode" class="form-text text-muted">{{ app.sub.lang.string.admin.editor.forms.bbcode.help|raw
                                            }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-2 mt-lg-0">
                                    <label for="static_is_active" class="col-form-label">{{ app.sub.lang.string.admin.editor.forms.is_active.title }}</label>
                                    <div class="checkbox switcher">
                                        <label for="help_is_active">
                                            <input name="is_active" type="checkbox" id="help_is_active" {{ string.button.is_active is same as('0') ? '' : 'checked="checked"' }}>
                                            <span><small></small></span>
                                            <small id="help_is_active_zip" class="text-muted">{{ app.sub.lang.string.admin.editor.forms.is_active.title }}</small>
                                            <small id="help_is_active" class="form-text text-muted">{{ app.sub.lang.string.admin.editor.forms.is_active.help|raw }}</small>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_toolbar_name" class="col-form-label">{{ app.sub.lang.string.admin.editor.forms.toolbar.name.title
                                        }}</label>
                                    <div>
                                        <input class="form-control" name="toolbar_name" id="static_toolbar_name" type="text"
                                            value="{{ string.button.toolbar }}" placeholder="{{ app.sub.lang.string.admin.editor.forms.toolbar.name.placeholder
                                            }}" spellcheck="false" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_toolbar_button" class="col-form-label">{{ app.sub.lang.string.admin.editor.forms.toolbar.button.title
                                        }}</label>
                                    <div>
                                        <input class="form-control" name="toolbar_button" id="static_toolbar_button" type="text"
                                            value="{{ string.button.button }}" placeholder="{{ app.sub.lang.string.admin.editor.forms.toolbar.button.placeholder
                                            }}" spellcheck="false" required="required">
                                        <small id="help_toolbar_button" class="form-text text-muted">{{ app.sub.lang.string.admin.editor.forms.toolbar.button.help
                                        }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_toolbar_icon" class="col-form-label">{{ app.sub.lang.string.admin.editor.forms.toolbar.icon.title
                                        }}</label>
                                    <div>
                                        <textarea class="form-control" name="toolbar_icon" id="static_toolbar_icon" type="text"
                                            placeholder="{{ app.sub.lang.string.admin.editor.forms.toolbar.icon.placeholder
                                            }}" spellcheck="false" required="required">{{ string.button.icon }}</textarea>
                                        <small id="help_toolbar_icon" class="form-text text-muted">{{ app.sub.lang.string.admin.editor.forms.toolbar.icon.help
                                            }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_toolbar_order_by" class="col-form-label">{{ app.sub.lang.string.admin.editor.forms.toolbar.order_by.title
                                        }}</label>
                                    <div>
                                        <input class="form-control" name="toolbar_order_by" id="static_toolbar_order_by" type="number"
                                            value="{{ string.button.order_by }}" placeholder="{{ app.sub.lang.string.admin.editor.forms.toolbar.order_by.placeholder
                                            }}" spellcheck="false" required="required" min="1">
                                        <small id="help_toolbar_order_by" class="form-text text-muted">{{ app.sub.lang.string.admin.editor.forms.toolbar.order_by.help
                                        }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="w-100 d-inline-block">
                                <div class="sticky-button shadow">
                                    <button type="submit" class="btn btn-app-discussion no-anim-ui icon send">{{
                                        app.sub.lang.string.container.buttons.update }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}