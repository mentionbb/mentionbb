{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/route_filters' %}

{% block title %}{{ app.sub.lang.string.admin.routefilters.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminRouteFilters', {}) }}">{{ app.sub.lang.string.admin.routefilters.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="routeFilters">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center mb-3">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.routefilters.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.routefilters.desc }}</small>
                    </div>
					<div class="ml-auto mt-lg-0 mt-3">
                        <a href="{{ app.phrase.buildLink('adminRouteFilters', {}) }}?restore" class="btn btn-app-discussion icon restore">{{ app.sub.lang.string.container.buttons.restore }}</a>
                    </div>
                </div> 
                <div>
                    <div class="route-filters-area w-100">
                        <form id="route_filters_edit" method="post">
							<div class="bg-dark rounded p-1 px-2 mb-3">
								<span class="text-light">{{ app.sub.lang.string.admin.routefilters.help }}</span>
							</div>
							{% for item in string.routes.getPublicRoutes() %}
                                <div>
									<h6 class="font-weight-bold">{{ app.sub.lang.string.admin.routefilters.routes[item.name].name }}</h6>
									<div class="form-group row mx-auto">
                                        <label for="static_{{ item.name }}_path" class="col-sm-4 col-form-label">{{ app.sub.lang.string.admin.routefilters.form.path.title }}</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
												<div class="input-group-prepend d-none d-lg-block">
													<div class="input-group-text">{{ app.settings.site_url }}</div>
												</div>
												<input class="form-control" name="options[{{ item.name }}][path]" id="static_{{ item.name }}_path" type="text" placeholder="{{ app.sub.lang.string.admin.routefilters.form.path.desc }}" aria-label="{{ item.name }}" value="{{ item.path }}" aria-describedby="help_{{ item.name }}_path" spellcheck="false" required="required">
											</div>
                                        </div>
                                    </div>
									<div class="form-group row mx-auto">
                                        <label for="static_{{ item.name }}_controller" class="col-sm-4 col-form-label">{{ app.sub.lang.string.admin.routefilters.form.controller.title }}</label>
                                        <div class="col-sm-8">
											<div class="input-callback">
												<input class="form-control" name="options[{{ item.name }}][controller]" id="static_{{ item.name }}_controller" type="text" placeholder="{{ app.sub.lang.string.admin.routefilters.form.controller.desc }}" aria-label="{{ item.name }}" value="{{ item.controller }}" aria-describedby="help_{{ item.name }}_controller" spellcheck="false" required="required">
												<div class="js-ClickableDivs" data-text="{{ item.controller }}"></div>
											</div>
                                        </div>
                                    </div>
								</div>
                            {% endfor %}
							<div class="w-100 d-inline-block">
								<div class="sticky-button shadow">
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
    </aside>
{% endblock %}