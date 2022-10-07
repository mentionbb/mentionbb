{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/edit_user' %}

{% block title %}{{ app.sub.lang.string.admin.users.edit.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminUsers', {}) }}">{{ app.sub.lang.string.admin.users.title }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ string.user.user_id }}">{{ string.user.username }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="users">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center mb-3">
                    <div>
                        <h5 class="mb-0">{{ string.user.username }}</h5>
                        <small class="text-muted">{{ app.sub.lang.parse.Parse('admin.users.edit.desc', string.user.username) }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminUsers', {}) }}" class="btn btn-app-discussion icon back">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div> 
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div id="userAccordion" class="w-100 rounded">
                        <form id="admin_users_edit" method="post">
                            <input name="user_id" type="hidden" value="{{ string.user.user_id }}" />
                            <div class="profile-picture text-center mb-3 mt-2"
                                data-default="{{ app.public_dir }}/uploads/profile_picture/default.svg">
                                <input type="file" name="profile_picture" id="profile_picture" class="d-none"
                                    accept="{{ app.phrase.getPPImageTypes() }}" />
                                {{ app.sub.user.link.setUser(string.user.user_id) }}
                                {% autoescape 'html' %}
                                <label class="mb-0" for="profile_picture">{{ app.sub.user.link.getProfilePicture(false)|raw }}</label>
                                {% endautoescape %}
                                {{ app.sub.user.unsetUser() }}
                                <small class="d-block text-muted font-italic mt-3 mb-0">{{
                                    app.sub.lang.parse.Parse('account.account_details.profile_picture_size',
                                    app.settings.profile_photo_max_size)|raw }}</small>
                                <a href="#" class="mt-1" data-ui="remove-pp">{{
                                    app.sub.lang.string.admin.users.edit.profile_picture.remove }}</a>
                            </div>
                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_name" class="col-form-label">{{ app.sub.lang.string.admin.users.forms.name.title
                                        }}</label>
                                    <div>
                                        <input class="form-control" name="username" id="static_name" type="text"
                                            value="{{ string.user.username }}"
                                            placeholder="{{ app.sub.lang.string.admin.users.forms.name.desc }}"
                                            aria-label="{{ app.sub.lang.string.admin.users.forms.password.desc }}"
                                            aria-describedby="help_name" spellcheck="false" required="required">
                                        <small id="help_name" class="form-text text-muted">{{
                                            app.sub.lang.string.admin.users.forms.name.desc }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_password" class="col-form-label">{{
                                        app.sub.lang.string.admin.users.forms.password.title }}</label>
                                    <div>
                                        <input class="form-control" name="password" id="static_password" type="password"
                                            placeholder="{{ app.sub.lang.string.admin.users.forms.password.desc }}"
                                            aria-label="{{ app.sub.lang.string.admin.users.forms.password.desc }}"
                                            aria-describedby="help_password" spellcheck="false">
                                        <small id="help_password" class="form-text text-muted">{{
                                            app.sub.lang.string.admin.users.forms.password.text }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                    <label for="static_mail" class="col-form-label">{{ app.sub.lang.string.admin.users.forms.mail.title
                                        }}</label>
                                    <div>
                                        <input class="form-control" name="mail" id="static_mail" type="mail"
                                            value="{{ string.user.mail }}"
                                            placeholder="{{ app.sub.lang.string.admin.users.forms.mail.desc }}"
                                            aria-label="{{ app.sub.lang.string.admin.users.forms.mail.desc }}"
                                            aria-describedby="help_mail" spellcheck="false" required="required">
                                        <small id="help_mail" class="form-text text-muted">{{
                                            app.sub.lang.string.admin.users.forms.mail.text }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 pr-lg-5"></div>
                                <div class="col-lg-6 col-sm-12 pr-lg-5 mt-4">
                                    <label for="static_title" class="col-form-label">{{
                                        app.sub.lang.string.admin.users.forms.title.title }}</label>
                                    <div>
                                        <input class="form-control" name="title" id="static_title" type="text"
                                            value="{{ string.user.usertitle }}"
                                            placeholder="{{ app.sub.lang.string.admin.users.forms.title.desc }}"
                                            aria-label="{{ app.sub.lang.string.admin.users.forms.title.desc }}"
                                            aria-describedby="help_title" spellcheck="false">
                                        <small id="help_title" class="form-text text-muted">{{
                                            app.sub.lang.string.admin.users.forms.title.text }}</small>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 mt-4">
                                    <label for="static_role" class="col-form-label">{{ app.sub.lang.string.admin.users.forms.role.title
                                        }}</label>
                                    <div>
                                        <select class="selectpicker ml-lg-auto pt-2 pt-lg-0" data-live-search="true"
                                            title="{{ app.sub.lang.string.container.buttons.select }}" name="role" required="required">
                                            <option value="0" {{ string.user.is_admin is same as("0") ? 'selected' : '' }}>{{
                                                app.sub.lang.string.admin.users.forms.role.select.registered }}</option>
                                            <option value="1" {{ string.user.is_admin is same as("1") ? 'selected' : '' }}>{{
                                                app.sub.lang.string.admin.users.forms.role.select.admin }}</option>
                                        </select>
                                        <small id="help_role" class="form-text text-muted">{{
                                            app.sub.lang.string.admin.users.forms.role.text }}</small>
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