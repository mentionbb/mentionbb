{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/index' %}

{% block title %}{{ app.sub.lang.string.admin.container.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.index.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	{% include '@ComponentBundle_Admin/Layout/sidebar.tpl' %}
	
	<aside class="col-sm-9">
		<div class="app-box shadow rounded" data-tab="introduction">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<h5 class="mb-3">{{ app.sub.lang.string.admin.index.title }}</h5>
				<h6>{{ app.settings.site_title }}</h6>
				<hr>
				{% if string.isExistNewErrorLog %}
				    <div class="alert alert-warning" role="alert">
					    <span class="font-weight-bold">{{ app.sub.lang.parse.parse('admin.index.logs.text', app.phrase.buildLink('adminLogs', {}))|raw }}</span>
				    </div>
				{% endif %}
				<div class="d-flex flex-column align-items-center justify-content-center">
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
					<h6 class="align-self-start">{{ app.sub.lang.string.admin.index.stats.title }}</h6>
					<div class="app-stats app-admin-global-width mt-3">
						<canvas id="appMention_Chart"></canvas>
					</div>
					<div class="app-admin-mini-stats d-flex flex-lg-row flex-column align-items-lg-center justify-content-lg-center mt-4 mb-4 w-100">
						<div class="bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3">
							<div class="d-flex align-items-center">
								<span class="icon discussions"></span>
								<div>
									<h6>{{ app.sub.lang.string.index.stats.discussion_count }}</h6>
									<h5 class="font-weight-bold">{{ string.discussion.postCount()|number_format|numberFormatShorter }}</h5>
								</div>
							</div>
						</div>
						<div class="bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3">
							<div class="d-flex align-items-center">
								<span class="icon posts"></span>
								<div>
									<h6>{{ app.sub.lang.string.index.stats.total_posts }}</h6>
									<h5 class="font-weight-bold">{{ string.post.getForumPostCount()|number_format|numberFormatShorter }}</h5>
								</div>
							</div>
						</div>
						<div class="bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0 mr-lg-3">
							<div class="d-flex align-items-center">
								<span class="icon users"></span>
								<div>
									<h6>{{ app.sub.lang.string.index.stats.user_count }}</h6>
									<h5 class="font-weight-bold">{{ string.stats.getUserCount()|number_format|numberFormatShorter }}</h5>
								</div>
							</div>
						</div>
						<div class="bg-white text-dark shadow rounded px-lg-3 py-2 px-2 mt-2 mt-lg-0">
							<div class="d-flex align-items-center">
								<span class="icon last-user"></span>
								<div>
									<h6>{{ app.sub.lang.string.index.stats.last_registered_user }}</h6>
									{% set lastRegisterUser = string.stats.getLastRegistered() %}
									{{ app.sub.user.link.setUser(lastRegisterUser.user_id) }}
									<span>
										{% autoescape false %}
											<a class="text-dark font-weight-bold" href="{{ app.sub.user.link.getOnlyLink() }}">{{ app.sub.user.link.getName() }}</a>
										{% endautoescape %}
									</span>
									{{ app.sub.user.link.unsetUser() }}
								</div>
							</div>
						</div>
					</div>
					<h6 class="align-self-start">{{ app.sub.lang.string.admin.index.server_environment.title }}</h6>
					<div class="app-admin-server-environment-report app-admin-global-width mt-3">
						{% set appRequirements = string.server.checkRequirement() %}
						{% if appRequirements is not iterable %}
						    <div class="alert alert-success" role="alert">
								<span>{{ app.sub.lang.string.admin.index.check_requirements.text.success }}</span>
							</div>
						{% else %}
						    <div class="alert alert-warning" role="alert">
								<span>{{ app.sub.lang.string.admin.index.check_requirements.text.fail }}</span>
								<ul class="mb-0">
									{% for requirementMessage in appRequirements %}
									    <li>
											<strong>{{ requirementMessage.error }}:</strong>
											{% if requirementMessage.error is same as('php') %}
											    <span>{{ app.sub.lang.parse.parse('admin.index.check_requirements.error.php', string.server.getPHPVersion(), app.build.support_php_version)|raw }}</span>
											{% else %}
											    <span>{{ app.sub.lang.string.admin.index.check_requirements.error[requirementMessage.error]|raw }}</span>
											{% endif %}
										</li>
									{% endfor %}
								</ul>
							</div>
						{% endif %}
						<table class="table table-bordered table-striped table-responsive-sm">
							<thead>
								<tr>
								    <th scope="col">{{ app.sub.lang.string.admin.index.server_environment.table.head.feature }}</th>
								    <th scope="col">{{ app.sub.lang.string.admin.index.server_environment.table.head.value }}</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.php_version }}</td>
									<td>
										<a href="{{ app.phrase.buildLink('adminCommonBundle', {}) }}?phpInfo" target="_blank">{{ string.server.getPHPVersion() }}</a>
									</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.mysql_version }}</td>
									<td>{{ string.server.getMySQLVersion() }}</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.memory_limit }}</td>
									<td>{{ string.server.getMemoryLimit() }}</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.post_max_size }}</td>
									<td>{{ string.server.getPostMaxSize() }}</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.upload_max_filesize }}</td>
									<td>{{ string.server.getUploadMaxFilesize() }}</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.max_input_vars }}</td>
									<td>{{ string.server.getMaxInputVars() }}</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.max_execution_time }}</td>
									<td>{{ string.server.getMaxExecutionTime() }}</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.curl_version }}</td>
									<td>{{ string.server.getCurlVersion() }}</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.support_gzip }}</td>
									<td>
										{% if string.server.isSupportGZip() %}
										    {{ app.sub.lang.string.container.generic.yes }}
										{% else %}
										    {{ app.sub.lang.string.container.generic.no }}
										{% endif %}
									</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.support_mbstring }}</td>
									<td>
										{% if string.server.isMbstringEnabled() %}
										    {{ app.sub.lang.string.container.generic.yes }}
										{% else %}
										    {{ app.sub.lang.string.container.generic.no }}
										{% endif %}
									</td>
								</tr>
								<tr>
									<td>{{ app.sub.lang.string.admin.index.server_environment.table.rows.support_zip }}</td>
									<td>
										{% if string.server.isZipEnabled() %}
										    {{ app.sub.lang.string.container.generic.yes }}
										{% else %}
										    {{ app.sub.lang.string.container.generic.no }}
										{% endif %}
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</aside>
{% endblock %}