{% import 'macro.index_posts.tpl' as macros %}

{% if string.pagination is defined %}
	{% set page_id = string.current_page %}
	{% set wherePage = string.pagination.where %}
{% else %}
	{% set page_id = 1 %}
	{% set wherePage = 0 %}
{% endif %}

{{ string.post.setForumId(string.forum_id) }}

{% if string.keyword is defined %}
	<div data-search="true">
	    <h5 class="mb-4">{{ app.sub.lang.string.index.search.results }}</h5>
    </div>
{% endif %}

{% if app.cookie.collapse_node_pinned is not defined %}
	{% set pinned_is_expanded = 'expanded' %}
{% else %}
    {% set pinned_link_expanded = 'expanded' %}		
{% endif %}

{% if app.cookie.collapse_node_all is not defined %}
	{% set all_is_expanded = 'expanded' %}
{% else %}
    {% set all_link_expanded = 'expanded' %}		
{% endif %}

{% if string.pagination is not defined %}
	{% if string.discussion.isAnySticky(string.forum_id) %}
		<div class="js-appExpandNodes rounded shadow-sm mb-3" data-ui="expand-node" data-target="pinned">
			<a class="{{ pinned_link_expanded }}" href="#" role="button">{{ app.sub.lang.string.index.posts.pinned }}</a>
		</div>
		<div class="appNodeContainer pinned {{ pinned_is_expanded }}">
			{% for item in string.post.getPostList(wherePage, app.settings.per_page, string.order, string.keyword, null, true, false, true) %}
				{{ macros.posts(item, string) }}
			{% endfor %}
			<hr>
		</div>
	{% endif %}
{% endif %}
{% if string.pagination is not defined %}
<div class="js-appExpandNodes rounded shadow-sm mt-2 mt-lg-0 mb-3" data-ui="expand-node" data-target="all">
	<a class="{{ all_link_expanded }}" href="#" role="button">{{ app.sub.lang.string.index.posts.newest }}</a>
</div>
<div class="appNodeContainer all {{ all_is_expanded }}">
{% endif %}
	{% for item in string.post.getPostList(wherePage, app.settings.per_page, string.order, string.keyword, null, true, false, false) %}
		{{ macros.posts(item, string) }}
	{% else %}
		{% if not string.keyword is defined %}
			{% if app.user.loggedIn() %}
				<div class="no-post d-block">
					<span>{{ app.sub.lang.string.container.no_post.none }}</span>
					<p data-ui="show-editor">{{ app.sub.lang.string.container.no_post.new }}</p>
				</div>
			{% else %}
				<div class="no-post d-block">
					<span>{{ app.sub.lang.string.container.no_post.none }}</span>
					<p data-ui="login-attempt">{{ app.sub.lang.string.container.no_post.new }}</p>
				</div>
			{% endif %}
		{% else %}
			<div class="no-post d-block">
				<span>{{ app.sub.lang.string.container.search.no_results }}</span>
			</div>
		{% endif %}
	{% endfor %}
	{% if (page_id - 1) == string.post.getLastPage() %}
	{% else %}
		<div class="app-more-button text-center">
			<button type="button" class="btn btn-app-load-more mb-3" data-current-page="{{ page_id }}" data-next-id="{{ app.sub.post.pagination.encodePageData(app.settings.per_page, (page_id + 1)) }}" data-ui="load-more-posts">{{ app.sub.lang.string.container.buttons.more }}</button>
		</div>
	{% endif %}
	{{ string.post.unsetForumId() }}
{% if string.pagination is not defined %}
</div>
{% endif %}