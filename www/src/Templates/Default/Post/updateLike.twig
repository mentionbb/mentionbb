{% set like_count = string.post.getPostLikeCount(item.post_id) %}
{% if like_count > 0 %}
	<div class="post-likes order-1 mt-4">
		{% for item in string.post.getPostLikes(item.post_id) %}
			{{ app.sub.user.link.setUser(item.user_id) }}
			{% autoescape 'html' %}
				<a class="reaction {{ item.reaction }} user-tooltip-link" href="{{ app.sub.user.link.getOnlyLink() }}" data-user-id="{{ app.sub.user.link.getId() }}">{{ app.sub.user.link.getName() }}</a>
				{% if like_count == 2 and loop.index == 1 %} 
					{{ app.sub.lang.string.container.generic.and }} 
				    {% elseif like_count < 3 and not loop.last %}
				    {% if loop.index == 2 %} {{ app.sub.lang.string.container.generic.and }}{% else %}, {% endif %}
				    {% elseif like_count >= 3 %}
					{% if loop.last %} {{ app.sub.lang.string.container.generic.and }}{% else %}, {% endif %}
				{% endif %}
			{% endautoescape %}
			{{ app.sub.user.link.unsetUser() }}
		{% endfor %}
		{% if like_count >= 3 %}
			<div class="dropdown d-inline-block">
				<a class="dropdown-toggle" role="button" id="dropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ app.sub.lang.parse.Parse('discussion.posts.likes.more', (like_count - 2)) }}</a>
				<div class="dropdown-menu dropdown-menu-right custom-menu custom-menu-xs post-likes-menu animate slideIn shadow p-0" aria-labelledby="dropdownMenuButton">
					<div class="title text-center">
						<div>
							<span>{{ app.sub.lang.string.discussion.posts.likes.title }}</span>
						</div>
					</div>
					<div class="scrollable">							        	
						{% for item in string.post.getPostLikes(item.post_id, false) %}
							{{ app.sub.user.link.setUser(item.user_id) }}
							<a class="notification d-flex align-items-center justify-content-center" href="{{ app.sub.user.link.getOnlyLink()|raw }}">
								{% autoescape 'html' %}
									<div class="user-image">
										{{ app.sub.user.link.getProfilePicture(false)|raw }}
									</div>
									<div class="text ml-3">
										<span>{{ app.sub.user.link.getName()|raw }}</span>
									</div>
									<span class="reaction {{ item.reaction }} ml-auto"></span>
								{% endautoescape %}
							</a>
							{{ app.sub.user.link.unsetUser() }}
						{% endfor %} 
					</div>
				</div>
			</div>
		{% endif %}
		{{ app.sub.lang.string.discussion.posts.likes.reaction_this }}
	</div>
{% endif %}