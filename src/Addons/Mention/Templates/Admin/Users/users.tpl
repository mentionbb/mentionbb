{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/users' %}

{% block title %}{{ app.sub.lang.string.admin.users.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminUsers', {}) }}">{{ app.sub.lang.string.admin.users.title }}</a></div>
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
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.users.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.users.desc }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminUsers', {}) }}?addUser" class="btn btn-app-discussion icon plus">{{ app.sub.lang.string.container.buttons.new }}</a>
                    </div>
                </div> 
                <hr>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="app-admin-user-search search-container position-relative mb-3">
						<div class="input-group has-feedback has-clear">
							<div class="input-group-prepend">
								<span class="input-group-text">{{ app.sub.lang.string.admin.index.quick_search.label }}</span>
							</div>
							<input class="form-control" type="text" placeholder="{{ app.sub.lang.string.admin.index.quick_search.placeholder }}"
								aria-label="{{ app.sub.lang.string.container.buttons.search }}">
							<i class="fas fa-search"></i>
							<span title="{{ app.sub.lang.string.container.buttons.clear }}"
								class="form-control-clear fas fa-times form-control-feedback d-none"></span>
						</div>
						<div class="search-results shadow d-none">
							<span></span>
							<div class="load-area bg-white pt-5 pb-5 d-block">
								<div class="post-loader-spin d-block"></div>
							</div>
						</div>
					</div>
                </div>
                <h6 class="align-self-start">{{ app.sub.lang.string.admin.users.last.title }}</h6>
                {% for item in string.users.getLastFiveUsers() %}
                    <div class="setting-group list bg-white text-dark shadow-sm position-relative rounded">
                        <div class="nested-items" data-user-id="{{ item.user_id }}" data-registration="{{ item.registration_date }}">
                            {{ app.sub.user.link.setUser(item.user_id) }}
				            {% autoescape 'html' %}
					            {{ app.sub.user.link.getProfilePicture(true, true)|raw }}
				            {% endautoescape %}
                            <a target="_blank" class="title d-flex flex-column justify-content-center mr-auto w-100" href="{{ app.sub.user.link.getOnlyLink() }}">
                                <div class="h5"> {{ app.sub.user.link.getName() }}</div>
                                <small class="d-none d-lg-block">{{ app.sub.lang.parse.Parse('admin.users.last.user.registration_date', app.timer.date.toHumanReadable(item.registration_date))|raw }}</small>
                            </a>
                            <a class="append-btn" href="{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ item.user_id }}">{{ app.sub.lang.string.container.buttons.edit }}</a>
                            <a class="append-btn" href="{{ app.phrase.buildLink('adminUsers', {}) }}?banUser={{ item.user_id }}">{{ app.sub.lang.string.admin.users.last.user.buttons.ban }}</a>
                            <a class="append-btn" href="#" data-ui="admin-remove-user">{{ app.sub.lang.string.container.buttons.remove }}</a>
                            {{ app.sub.user.link.unsetUser() }}
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </aside>
{% endblock %}