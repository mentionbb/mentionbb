{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/censor_words' %}

{% block title %}{{ app.sub.lang.string.admin.censorwords.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminCensorWords', {}) }}">{{ app.sub.lang.string.admin.censorwords.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="api">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center mb-3">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.nativeapi.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.nativeapi.desc }}</small>
                    </div>
                </div> 
                <div>
                    <div class="censor-words-area w-100">
                        <div class="bg-dark rounded p-1 px-2 mb-3">
                            <span class="text-light">{{ app.sub.lang.string.admin.nativeapi.help }}</span>
                        </div>
					</div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}