{% macro posts(item, string, tab) %}
	<div data-item-id="{{ item.post_id }}" data-shortcode-id="{{ app.sub.discussion.shortcode.toBase(item.shortcode) }}" data-owner-id="{{ item.user_id }}" data-post-time="{{ item.dateline }}" class="app-post bg-white shadow-sm rounded">
		<div class="post-layout border-0 mt-2 mb-4">
			<a href="{{ app.phrase.buildLink('shortcode', {'shortcode': app.sub.discussion.shortcode.toBase(item.shortcode)}) }}"></a>
			<div class="post-user d-flex flex-lg-column mb-lg-0 mb-2">
				{{ app.sub.user.link.setUser(item.user_id) }}
				{% autoescape 'html' %}
					{{ app.sub.user.link.getLinkWithProfilePicture(true, true)|raw }}
				{% endautoescape %}
				<div class="discussion-post-user">
					{{ app.sub.user.link.getLink()|raw }}
					{% if app.sub.user.link.isAdmin() %}
					    <span class="d-block">{{ app.sub.user.link.getUsertitle()|raw }}</span>
					{% else %}
					    <span class="d-block">{{ app.sub.user.link.getUsertitle()|striptags }}</span>
					{% endif %}
				</div>
				{{ app.sub.user.link.unsetUser() }}
			</div>
			<div class="post-content">
				<div class="d-block h-100 position-relative">
					<div class="d-flex">
						<div class="d-flex flex-column">
							{% set accountPosts_Content = app.sub.renderer.bbcode.ClearBBCode(item.content) %}
							{% if accountPosts_Content|length > 450 %}
								<p class="mt-1">{{ app.sub.editor.emoticons.Render(accountPosts_Content)|slice(0, 450)|raw }}...</p>
							{% else %}
								<p class="mt-1">{{ app.sub.editor.emoticons.Render(accountPosts_Content)|raw }}</p>
							{% endif %}
							<div>
								<p class="time text-muted font-weight-normal font-italic pr-4 mb-0 mt-1 mt-lg-0 ml-lg-auto">{{ app.timer.date.toHumanReadable(item.dateline) }}</p>
							</div>
						</div>
						<div class="discuss-info d-flex align-items-center ml-auto">
							{% if tab is same as('likes') %}
								<div class="app-reactions reaction-md">
									<div class="reaction {{ item.reaction }}"></div>
								</div>
							{% elseif tab is same as('bookmarks') %}
								<div title="{{ app.sub.lang.string.account.posts.buttons.remove_bookmark }}" class="remove-bookmark cursor-pointer h5 text-dark mb-0 mr-2" data-ui="account-remove-bookmark" data-post-id="{{ item.post_id }}">
									<i class="fas fa-times"></i>
								</div>
							{% endif %}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{% endmacro %}