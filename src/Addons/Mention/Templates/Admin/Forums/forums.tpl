{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/forums' %}

{% block title %}{{ app.sub.lang.string.admin.forums.list.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminForums', {}) }}">{{ app.sub.lang.string.admin.forums.list.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="forumList">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center mb-3">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.forums.list.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.forums.list.desc }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminForums', {}) }}?addNode" class="btn btn-app-discussion icon plus">{{ app.sub.lang.string.container.buttons.new }}</a>
                    </div>
                </div> 
                <hr>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div class="d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3">
                        <div class="app-admin-search js-AppAdmin_QuickSearchForums search-container position-relative">
                            <div class="input-group has-feedback has-clear">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">{{ app.sub.lang.string.admin.forums.list.search.label }}</span>
                                </div>
                                <input class="form-control" type="text"
                                    placeholder="{{ app.sub.lang.string.admin.forums.list.search.placeholder }}"
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
                    <div id="nodeAccordion" class="js-forum-sortable-group w-100 rounded">
                    {% for item in app.string.forum.getForumList() %}
                        <div class="setting-group list bg-white text-dark shadow-sm position-relative rounded">
                            <div class="nested-items" data-forum-id="{{ item.forum_id }}" data-order="{{ item.forum_order }}">
                                <span class="icon"></span>
                                <a class="title d-flex flex-column justify-content-center mr-auto w-100 collapsed" href="#">
                                    <div class="h5">{{ item.title }}</div>
                                    <small class="d-none d-lg-block">{{ item.forum_description }}</small>
                                </a>
                                <a class="append-btn" href="#" data-ui="admin-remove-node">{{ app.sub.lang.string.container.buttons.delete }}</a>
                            </div>
                            {% for sub in app.string.forum.getForumList(item.forum_id) %}
                                <div class="nested-items sub" data-forum-id="{{ sub.forum_id }}" data-parent-id="{{ sub.parent_id }}" data-order="{{ sub.forum_order }}">
                                    <span class="icon sub"></span>
                                    <span class="icon"></span>
                                    <a class="title d-flex flex-column justify-content-center mr-auto w-100 collapsed" href="#">
                                        <div class="h5">{{ sub.title }}</div>
                                        <small class="d-none d-lg-block">{{ sub.forum_description }}</small>
                                    </a>
                                    <a class="append-btn" href="#" data-ui="admin-remove-node">{{ app.sub.lang.string.container.buttons.delete }}</a>
                                </div>
                            {% endfor %}
                        </div>
                    {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}