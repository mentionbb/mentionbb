{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/add_forums' %}

{% block title %}{{ app.sub.lang.string.admin.forums.new.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminForums', {}) }}">{{ app.sub.lang.string.admin.forums.list.title }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminForums', {}) }}">{{ app.sub.lang.string.admin.forums.new.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="forumNew">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center mb-3">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.forums.new.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.forums.new.desc }}</small>
                    </div>
                    <div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminForums', {}) }}" class="btn btn-app-discussion icon back">{{ app.sub.lang.string.container.buttons.back }}</a>
                    </div>
                </div> 
                <hr>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div id="nodeAccordion" class="w-100 rounded">
                        <div class="setting-group list new-forum bg-white text-dark shadow-sm position-relative rounded">
                            <div class="bg-light d-flex align-items-center p-2 px-0">
                                <span class="icon"></span>
                                <div class="title ml-lg-0 ml-2 mr-auto">
                                    <span class="font-weight-bold">{{ app.sub.lang.string.admin.forums.new.title }}</span>
                                </div>
                            </div>
                            <form id="admin_forums_new" method="post">
                                <div class="p-2 border-bottom">
                                    <div class="form-group row flex-lg-row flex-column mx-auto">
                                        <div class="col-lg-6 col-sm-6">
                                            <label for="static_title" class="col-form-label">{{ app.sub.lang.string.admin.forums.forms.parent.title }}</label>
                                            <div>
                                                <select class="selectpicker ml-lg-auto pt-2 pt-lg-0" data-live-search="true" title="{{ app.sub.lang.string.container.buttons.select }}" name="forum_parent" required="required">
                                                    <option value="0" {{ string.forum.parent_id is same as('0') ? 'selected' : '' }}>{{ app.sub.lang.string.admin.forums.forms.parent.no_parent }}</option>
                                                    {% for forum in app.string.forum.getForumList() %}
                                                        {% if forum.forum_id is not same as(string.forum.forum_id) %}
                                                            <option value="{{ forum.forum_id }}" {{ string.forum.parent_id is same as(forum.forum_id) ? 'selected' : '' }}>{{ forum.title }}</option>
                                                        {% endif %}
                                                    {% endfor %}
                                                </select>
                                                <small id="help_title" class="form-text text-muted">{{ app.sub.lang.string.admin.forums.forms.parent.desc }}</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <label for="static_order" class="col-form-label">{{ app.sub.lang.string.admin.forums.forms.order.title }}</label>
                                            <div>
                                                <input class="form-control" name="forum_order" id="static_order" type="number" placeholder="{{ app.sub.lang.string.admin.forums.forms.order.desc }}" aria-label="{{ app.sub.lang.string.admin.forums.forms.order.desc }}" aria-describedby="help_order" spellcheck="false" min="1" step="1" value="1" pattern="\d*" required="required">
                                                <small id="help_order" class="form-text text-muted">{{ app.sub.lang.string.admin.forums.forms.order.desc }}</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 pr-lg-5">
                                            <label for="static_name" class="col-form-label">{{ app.sub.lang.string.admin.forums.forms.name.title }}</label>
                                            <div>
                                                <input class="form-control" name="forum_title" id="static_name" type="text" placeholder="{{ app.sub.lang.string.admin.forums.forms.name.desc }}" aria-label="{{ app.sub.lang.string.admin.forums.forms.title.desc }}" aria-describedby="help_name" spellcheck="false" required="required">
                                                <small id="help_name" class="form-text text-muted">{{ app.sub.lang.string.admin.forums.forms.name.desc|raw }}</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12">
                                            <label for="static_title" class="col-form-label">{{ app.sub.lang.string.admin.forums.forms.description.title }}</label>
                                            <div>
                                                <input class="form-control" name="forum_description" id="static_title" type="text" placeholder="{{ app.sub.lang.string.admin.forums.forms.description.desc }}" aria-label="{{ app.sub.lang.string.admin.forums.forms.title.desc }}" aria-describedby="help_title" spellcheck="false" required="required">
                                                <small id="help_title" class="form-text text-muted">{{ app.sub.lang.string.admin.forums.forms.description.desc }}</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-app-discussion no-anim-ui icon plus">{{ app.sub.lang.string.container.buttons.save }}</button>
                                    </div>
                                </div>
                            </form>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}