{% macro posts(item, string) %}
	<div data-item-id="{{ item.post_id }}" data-shortcode-id="{{ app.sub.discussion.shortcode.toBase(item.shortcode) }}" data-owner-id="{{ item.user_id }}" data-post-time="{{ item.dateline }}" class="app-post bg-white shadow rounded">
		<div class="post-layout mt-2 mb-4">
			<a href="{{ app.phrase.buildLink('discussion', {'discussion_id': item.discussion_id, 'discussion_title': item.title, 'post_id': item.max_post_id}) }}"></a>
			<div class="post-user new-post d-flex flex-lg-column">
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
				{% if app.user.loggedIn() %}
					{% if (app.visitor.last_activity - (app.timer.date.addMinute(5) - app.timer.date.getTimestamp())) < item.dateline and app.visitor.user_id is not same as(item.user_id) %}
						<div class="new-post ml-auto mt-lg-auto mb-lg-1 ml-lg-0 d-inline-flex align-items-center">
							<span title="{{ app.sub.lang.string.index.posts.new_post.title }}" class="badge badge-dark round font-weight-bold">{{ app.sub.lang.string.index.posts.new_post.text }}</span>
						</div>
					{% endif %}
				{% else %}
					{% if ((app.timer.date.getTimestamp() - (app.timer.date.addHour(24) - app.timer.date.getTimestamp())) - item.dateline) < (app.timer.date.addHour(24) - app.timer.date.getTimestamp()) %}
						<div class="new-post ml-auto mt-lg-auto mb-lg-1 ml-lg-0 d-inline-flex align-items-center">
							<span title="{{ app.sub.lang.string.index.posts.new_post.title }}" class="badge badge-dark round font-weight-bold">{{ app.sub.lang.string.index.posts.new_post.text }}</span>
						</div>
					{% endif %}
				{% endif %}
			</div>
			<div class="post-content">
				<hr>
				<div class="d-block h-100 position-relative">
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
					{% set indexPosts_Content = app.sub.renderer.bbcode.ClearBBCode(item.content) %}
					{% if indexPosts_Content|length > 450 %}
						<p class="mt-1">{{ app.sub.editor.emoticons.Render(indexPosts_Content)|slice(0, 450)|raw }}...</p>
					{% else %}
						<p class="mt-1">{{ app.sub.editor.emoticons.Render(indexPosts_Content)|raw }}</p>
					{% endif %}
					<div class="d-flex flex-lg-row flex-column align-items-lg-end">
						{% if item.firstpost_id == item.post_id %}
							<p class="replied mb-0">
								<span class="d-block">{{ app.sub.lang.parse.Parse('index.posts.started_by', item.started_by_username, app.timer.date.toHumanReadable(item.discussion_dateline))|raw }}</span>
							</p>
						{% else %}
							<p class="replied mb-0">
								<span class="d-block">{{ app.sub.lang.parse.Parse('index.posts.started_by', item.started_by_username, app.timer.date.toHumanReadable(item.discussion_dateline))|raw }}</span>
								<span class="d-block">{{ app.sub.lang.parse.Parse('index.posts.replied_by', item.username, app.timer.date.toHumanReadable(item.post_dateline))|raw }}</span>
							</p>
						{% endif %}
						<p class="time text-muted font-italic pr-4 mb-0 mt-2 mt-lg-0 ml-lg-auto">{{ app.timer.date.toHumanReadable(item.post_dateline) }}</p>
					</div>
					<hr>
					<div class="discuss-info d-flex flex-column flex-lg-row mb-2">
						<div class="info d-flex">
							<span class="post-count">{{ item.comment_count|number_format|numberFormatShorter }}</span>
							<span class="view-count">{{ item.view_count|number_format|numberFormatShorter }}</span>
						</div>
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