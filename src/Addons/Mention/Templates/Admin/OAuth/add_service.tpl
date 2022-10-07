{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/oauth_services' %}

{% block title %}{{ app.sub.lang.string.admin.oauth.new.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminOAuthServices', {}) }}">{{ app.sub.lang.string.admin.oauth.title }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminOAuthServices', {}) }}?newService">{{ app.sub.lang.string.admin.oauth.new.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="oauth">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.oauth.new.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.oauth.new.desc }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminOAuthServices', {}) }}" class="btn btn-app-discussion icon back">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div>  
                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                    <div class="service-list-area w-100">
                        <form id="admin_services_new" method="post">
                            <div id="servicesAccordion">
                                <div class="app-service bg-white shadow-sm position-relative mb-3 rounded">
                                    <div class="app-post">
                                        <div class="post-layout d-flex align-items-center border-top-0 px-2 p-1">
                                            <div class="post-icon new">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="title ml-lg-0 ml-2 mr-auto">
                                                <span class="font-weight-bold">{{ app.sub.lang.string.admin.oauth.new.title }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="p-2">
                                            <div class="bg-dark rounded p-1 px-2">
                                                <span class="text-light">{{ app.sub.lang.string.admin.oauth.new.info }}</span>
                                            </div>
                                            <div class="form-group row flex-lg-row flex-column mx-auto pt-2">
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_name" class="col-form-label">{{ app.sub.lang.string.admin.oauth.forms.name.title }}</label>
                                                    <div>
                                                        <input class="form-control" name="options[name]" id="static_name" type="text" aria-label="{{ app.sub.lang.string.admin.oauth.forms.name.desc }}" aria-describedby="help_name" spellcheck="false" required="required">
                                                        <small id="help_name" class="form-text text-muted">{{ app.sub.lang.string.admin.oauth.forms.name.desc|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="static_title" class="col-form-label">{{ app.sub.lang.string.admin.oauth.forms.title.title }}</label>
                                                    <div>
                                                        <input class="form-control" name="options[title]" id="static_title" type="text" placeholder="{{ app.sub.lang.string.admin.oauth.forms.title.desc }}" aria-label="{{ app.sub.lang.string.admin.oauth.forms.title.desc }}" aria-describedby="help_titl" spellcheck="false" required="required">
                                                        <small id="help_title" class="form-text text-muted">{{ app.sub.lang.string.admin.oauth.forms.title.desc }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_sitekey" class="col-form-label">{{ app.sub.lang.string.admin.oauth.forms.site_key.title }}</label>
                                                    <div>
                                                        <input class="form-control" name="options[site_key]" id="static_sitekey" type="text" placeholder="{{ app.sub.lang.string.admin.oauth.forms.site_key.desc }}" aria-label="{{ app.sub.lang.string.admin.oauth.forms.site_key.desc }}" aria-describedby="help_sitekey" spellcheck="false">
                                                        <small id="help_sitekey" class="form-text text-muted">{{ app.sub.lang.string.admin.oauth.forms.site_key.desc }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12">
                                                    <label for="static_secretkey" class="col-form-label">{{ app.sub.lang.string.admin.oauth.forms.secret_key.title }}</label>
                                                    <div>
                                                        <input class="form-control" name="options[secret_key]" id="static_secretkey" type="text" placeholder="{{ app.sub.lang.string.admin.oauth.forms.secret_key.desc }}" aria-label="{{ app.sub.lang.string.admin.oauth.forms.secret_key.desc }}" aria-describedby="help_secretkey" spellcheck="false">
                                                        <small id="help_secretkey" class="form-text text-muted">{{ app.sub.lang.string.admin.oauth.forms.secret_key.desc }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row flex-lg-row flex-column mx-auto">
                                                <div class="col-lg-6 col-sm-12 pr-lg-5">
                                                    <label for="static_callback" class="col-form-label">{{ app.sub.lang.string.admin.oauth.forms.callback.title }}</label>
                                                    <div>
                                                        <input class="form-control" name="options[callback]" id="static_callback" type="text" placeholder="{{ app.sub.lang.string.admin.oauth.forms.callback.placeholder }}" aria-label="{{ app.sub.lang.string.admin.oauth.forms.callback.placeholder }}" aria-describedby="help_callback" spellcheck="false" required="required">
                                                        <small id="help_callback" class="form-text text-muted">{{ app.sub.lang.string.admin.oauth.forms.callback.desc|raw }}</small>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-sm-12 mt-2 mt-lg-0">
                                                    <label for="static_is_active" class="col-form-label">{{ app.sub.lang.string.admin.oauth.forms.is_active.title }}</label>
                                                    <div class="checkbox switcher">
                                                        <label for="help_is_active">
                                                            <input type="checkbox" name="options[is_active]" id="help_is_active" value="1" checked="checked">
                                                            <span><small></small></span>
                                                            <small id="help_is_active" class="text-muted">{{ app.sub.lang.string.admin.oauth.forms.is_active.desc }}</small>
                                                            <small id="help_is_active" class="form-text text-muted">{{ app.sub.lang.string.admin.oauth.forms.is_active.extra_desc }}</small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-app-discussion no-anim-ui icon plus">{{ app.sub.lang.string.container.buttons.save }}</button>
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