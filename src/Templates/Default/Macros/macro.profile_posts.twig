{% macro posts(item, string, is_firstpost) %}
	<div data-item-id="{{ item.post_id }}" data-shortcode-id="{{ app.sub.discussion.shortcode.toBase(item.shortcode) }}" data-owner-id="{{ item.user_id }}" data-post-time="{{ item.dateline }}" class="app-post bg-white shadow rounded">
		<div class="post-layout mt-2 mb-4">
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
					{% if is_firstpost %}
						{% if item.is_sticky %}
							<span title="{{ app.sub.lang.string.container.posts.pinned }}" class="icon pinned"></span>
						{% endif %}
						{% if not item.is_open %}
							<span title="{{ app.sub.lang.string.container.posts.locked }}" class="icon locked"></span>
						{% endif %}

						<span class="discussion-title font-weight-bold text-dark">{{ app.string.render.title.Render(item.title) }}</span>
						<div class="float-right">
							<span class="forum rounded">{{ item.forum_title }}</span>
						</div>
						{% set profilePosts_Content = app.sub.renderer.bbcode.ClearBBCode(item.content) %}
						{% if profilePosts_Content|length > 450 %}
							<p class="mt-1">{{ app.sub.editor.emoticons.Render(profilePosts_Content)|slice(0, 450)|raw }}...</p>
						{% else %}
							<p class="mt-1">{{ app.sub.editor.emoticons.Render(profilePosts_Content)|raw }}</p>
						{% endif %}
						<div class="d-flex flex-lg-row flex-column">
							<p class="replied mb-0">
								<span class="d-block">{{ app.sub.lang.parse.Parse('index.posts.started_by', item.started_by_username, app.timer.date.toHumanReadable(item.discussion_dateline))|raw }}</span>
							</p>
							<p class="time text-muted font-italic pr-4 mb-0 mt-2 mt-lg-0 ml-lg-auto">{{ app.timer.date.toHumanReadable(item.post_dateline) }}</p>
						</div>
						<hr>
					{% else %}
						{% set profilePosts_Content = app.sub.renderer.bbcode.ClearBBCode(item.content) %}
						{% if profilePosts_Content|length > 450 %}
							<p class="mt-1">{{ app.sub.editor.emoticons.Render(profilePosts_Content)|slice(0, 450)|raw }}...</p>
						{% else %}
							<p class="mt-1">{{ app.sub.editor.emoticons.Render(profilePosts_Content)|raw }}</p>
						{% endif %}
					{% endif %}
					<div class="discuss-info d-flex flex-column flex-lg-row align-items-lg-center mb-2">
						{% if is_firstpost %}
							<div class="info d-flex">
								<span class="post-count">{{ item.comment_count|number_format|numberFormatShorter }}</span>
								<span class="view-count">{{ item.view_count|number_format|numberFormatShorter }}</span>
							</div>
						{% else %}
							<div>
								<p class="time text-muted font-weight-normal font-italic pr-4 mb-0 mt-1 mt-lg-0 ml-lg-auto">{{ app.timer.date.toHumanReadable(item.post_dateline) }}</p>
							</div>
						{% endif %}
						<div class="app-reactions reaction-sm d-flex ml-lg-auto mt-4 mt-lg-0">
							<div class="reaction like d-flex align-items-center">
								<span>{{ string.reaction.getReactionCountByPostId('like', item.post_id)|number_format }}</span>
							</div>
							<div class="reaction love d-flex align-items-center">
								<span>{{ string.reaction.getReactionCountByPostId('love', item.post_id)|number_format }}</span>
							</div>
							<div class="reaction haha d-flex align-items-center">
								<span>{{ string.reaction.getReactionCountByPostId('haha', item.post_id)|number_format }}</span>
							</div>
							<div class="reaction wow d-flex align-items-center">
								<span>{{ string.reaction.getReactionCountByPostId('wow', item.post_id)|number_format }}</span>
							</div>
							<div class="reaction sad d-flex align-items-center">
								<span>{{ string.reaction.getReactionCountByPostId('sad', item.post_id)|number_format }}</span>
							</div>
							<div class="reaction angry d-flex align-items-center">
								<span>{{ string.reaction.getReactionCountByPostId('angry', item.post_id)|number_format }}</span>
							</div>
							<div class="reaction dislike d-flex align-items-center">
								<span>{{ string.reaction.getReactionCountByPostId('dislike', item.post_id)|number_format }}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
{% endmacro %}