{% extends '@ComponentBundle_Admin/container.tpl' %}

{% block app_template_name '@ComponentBundle/admin/languages/sentences' %}

{% block title %}{{ app.sub.lang.string.admin.languages.sentences.title }}{{ " - " }}{{ app.settings.site_title }}{% endblock %}

{% block content %}
	<div class="app-profile-sub-menu d-flex flex-column flex-lg-row align-items-lg-center w-100 mb-4">
		<div class="d-flex">
			<div class="app-title">
				<div class="app-breadcrumb d-flex">
					<div class="home"><a href="{{ app.phrase.buildLink('indexAction', {}) }}">{{ app.settings.site_title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminIndex', {}) }}">{{ app.sub.lang.string.admin.container.title }}</a></div>
					<div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}">{{ app.sub.lang.string.admin.languages.list.title }}</a></div>
                    <div><a href="{{ app.phrase.buildLink('adminLanguages', {}) }}?sentences">{{ app.sub.lang.string.admin.languages.sentences.title }}</a></div>
				</div>
			</div>
		</div>
		<div class="ml-lg-auto">
			{% include 'usermenu_member.tpl' %}
		</div>
	</div>
	
	<aside class="col-sm-12">
		<div class="app-box shadow rounded" data-tab="languages">
			<div class="progress d-none">
				<div class="indeterminate"></div>
			</div>
			<div class="pl-4 pr-4 pt-3 pb-3">
				<div class="d-lg-flex align-items-lg-center">
                    <div>
                        <h5 class="mb-0">{{ app.sub.lang.string.admin.languages.sentences.title }}</h5>
                        <small class="text-muted">{{ app.sub.lang.string.admin.languages.sentences.desc }}</small>
                    </div>
                </div>  
                <div class="d-flex flex-column align-items-center justify-content-center mt-3">
                    <div class="align-self-start col-lg-12 col-sm-12 mb-3">
                        <div class="app-admin-language-selector js-AppAdmin_LanguagesSentence position-relative row mx-auto" data-default="{{ string.name }}">
                            <div class="col-lg-3 col-sm-12">
                                <ul class="directory-list scrollable shadow-sm rounded-bottom mr-lg-3">
									{% set languages = string.language.getAllLanguageFiles() %}
									{% for item in languages|keys %}
									    <li class="folder">
										    <span class="folder-name text-dark">{{ string.language.filenameTranslator(item, app.sub.lang.string) }}</span>
										    <ul class="d-none">
											    {% for child in languages[item]|keys %}
												    {% if languages[item][child] is iterable %}
												        <li class="folder child">
													        <span class="folder-name text-dark">{{ string.language.filenameTranslator(child, app.sub.lang.string) }}</span>
													        <ul class="d-none">
														        {% for files in languages[item][child] %}
																    <li>
																	    <span data-language="{{ item }}" data-file="{{ child|basename }}" data-path="{{ files }}">{{ string.language.filenameTranslator('files.' ~ files|basename(true), app.sub.lang.string) }}</span>
																    </li>
														        {% endfor %}
													        </ul>
												        </li>
													{% else %}
														<li>
															<span data-language="{{ item }}" data-file="__null" data-path="{{ languages[item][child] }}">{{ string.language.filenameTranslator('files.' ~ child|basename(true), app.sub.lang.string) }}</span>
														</li>
													{% endif %}
												{% endfor %}
											</ul>
										</li>
									{% endfor %}
								</ul>
							</div>
							<div class="js-AppAdmin_LanguagesSentence_List col-lg-9 col-sm-12" data-default="{{ app.sub.lang.default.path }}/Container.yaml">
								<div class="app-phrase-search d-flex flex-lg-row flex-column align-items-lg-center w-100 mb-3">
									<div class="app-admin-search js-AppAdmin_QuickSearchLanguage_Phrases search-container position-relative">
										<div class="input-group has-feedback has-clear">
											<div class="input-group-prepend">
												<span class="input-group-text">{{ app.sub.lang.string.admin.languages.search.label }}</span>
											</div>
											<input class="form-control" type="text"
												placeholder="{{ app.sub.lang.string.admin.languages.search.placeholder }}"
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
							</div>
                       </div>
					</div>
                </div>
            </div>
        </div>
    </aside>
{% endblock %}