{% import 'macro.profile_posts.tpl' as macros %}

{% if string.pagination is defined %}
	{% set page_id = string.current_page %}
	{% set wherePage = string.pagination.where %}
{% else %}
	{% set page_id = 1 %}
	{% set wherePage = 0 %}
{% endif %}

{{ string.post.setUserId(string.user.user_id) }}

{% if string.groupItems is defined %}
	{% set groupItems = string.groupItems %}
	{% if string.groupItems %}
		{% set is_firstpost = true %}
	{% else %}
		{% set is_firstpost = false %}
	{% endif %}		
{% else %}
	{% set groupItems = false %}
	{% set is_firstpost = false %}
{% endif %}

{% if is_firstpost %}
    {{ string.post.isDiscussion() }}
{% endif %}

{% for item in string.post.getPostList(wherePage, app.settings.per_page, string.order, null, string.user.user_id, groupItems, is_firstpost, null) %}
	{{ macros.posts(item, string, is_firstpost) }}
{% else %}
	{% if not string.keyword is defined %}
	    {% if app.user.loggedIn() %}
		    <div class="no-post d-block">
			    <span>{{ app.sub.lang.string.container.no_post.none }}</span>
		    </div>
	    {% else %}
		    <div class="no-post d-block">
			    <span>{{ app.sub.lang.string.container.no_post.none }}</span>
		    </div>
	    {% endif %}
	{% else %}
		<div class="no-post d-block">
			<span>{{ app.sub.lang.string.container.search.no_results }}</span>
		</div>
    {% endif %}
{% endfor %}
{% if page_id == string.post.getLastPage() or string.post.getLastPage() == 0 %}
{% else %}
	<div class="text-center">
		<button type="button" class="btn btn-app-load-more mb-3" data-current-page="{{ page_id }}" data-next-id="{{ app.sub.post.pagination.encodePageData(app.settings.per_page, (page_id + 1)) }}" data-ui="load-more-profile-posts">{{ app.sub.lang.string.container.buttons.more }}</button>
	</div>
{% endif %}
{{ string.post.unsetUserId() }}