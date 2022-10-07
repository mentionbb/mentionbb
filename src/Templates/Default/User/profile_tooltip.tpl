{{ app.sub.user.link.setUser(string.user.user_id) }}
<div class="app-profile-info d-flex align-items-center mt-2" data-user-id="{{ string.user.user_id }}" data-username="{{ string.user.username }}" data-username-seo="{{ string.user.username|buildSeoLink }}">
    <div class="d-flex align-items-center">
        {% autoescape 'html' %}
            {{ app.sub.user.link.getProfilePicture(true, 'no-tooltip')|raw }}
            <div class="d-flex flex-column ml-3">
                <span class="username">{{ app.sub.user.link.getName()|raw }}</span>
                {% if app.sub.user.link.isAdmin() %}
                    <span class="d-block">{{ app.sub.user.link.getUsertitle()|raw }}</span>
                {% else %}
                    <span class="d-block">{{ app.sub.user.link.getUsertitle()|striptags }}</span>
                {% endif %}
                <span>{{ app.sub.lang.parse.Parse('profile.joining', app.timer.date.toHumanReadable(string.user.registration_date)) }}</span>
                {% if app.visitor.user_id is not same as(app.sub.user.link.getId()) %}
                    {% if app.sub.user.link.getLastActivity() is not same as('0') %}
                        <small class="text-muted mt-2">{{ app.sub.lang.parse.Parse('profile.last_seen', app.timer.date.toHumanReadable(app.sub.user.link.getLastActivity())) }}</small>
                    {% else %}
                        <small class="text-muted mt-2">{{ app.sub.lang.string.profile.last_seen_never }}</small>
                    {% endif %}
                {% endif %}
            </div>
        {% endautoescape %}
    </div>
    {% if app.user.loggedIn() %}
        {% if app.visitor.is_admin %}
            <div class="d-flex align-self-start ml-auto">
                <a class="text-dark mr-2" title="{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.edit }}"
                    href="{{ app.phrase.buildLink('adminUsers', {}) }}?editUser={{ string.user.user_id }}">
                    <i class="fas fa-user-edit"></i>
                </a>
                <a class="text-dark mr-2" title="{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.flag }}"
                    href="{{ app.phrase.buildLink('adminUsers', {}) }}?flagUser={{ string.user.user_id }}">
                    <i class="fas fa-exclamation-triangle"></i>
                </a>
                <a class="text-dark" title="{{ app.sub.lang.string.discussion.posts.quick_menu.buttons.ban }}"
                    href="{{ app.phrase.buildLink('adminUsers', {}) }}?banUser={{ string.user.user_id }}">
                    <i class="fas fa-user-slash"></i>
                </a>
            </div>
        {% endif %}
    {% endif %}
</div>
<hr>
<div hook-action="{Mention:App-domEvent-profileReactionBox}" class="app-reactions reaction-md d-flex pb-1">
    <div class="reaction like d-flex flex-column align-items-center">
        <span>{{ string.reaction.getReactionCountByUserId('like', string.user.user_id)|number_format }}</span>
    </div>
    <div class="reaction love d-flex flex-column align-items-center">
        <span>{{ string.reaction.getReactionCountByUserId('love', string.user.user_id)|number_format }}</span>
    </div>
    <div class="reaction haha d-flex flex-column align-items-center">
        <span>{{ string.reaction.getReactionCountByUserId('haha', string.user.user_id)|number_format }}</span>
    </div>
    <div class="reaction wow d-flex flex-column align-items-center">
        <span>{{ string.reaction.getReactionCountByUserId('wow', string.user.user_id)|number_format }}</span>
    </div>
    <div class="reaction sad d-flex flex-column align-items-center">
        <span>{{ string.reaction.getReactionCountByUserId('sad', string.user.user_id)|number_format }}</span>
    </div>
    <div class="reaction angry d-flex flex-column align-items-center">
        <span>{{ string.reaction.getReactionCountByUserId('angry', string.user.user_id)|number_format }}</span>
    </div>
    <div class="reaction dislike d-flex flex-column align-items-center mr-0">
        <span>{{ string.reaction.getReactionCountByUserId('dislike', string.user.user_id)|number_format }}</span>
    </div>
</div>
<div class="d-flex align-items-center mt-3 mb-1">
    <a href="{{ app.sub.user.link.getOnlyLink() }}" class="btn btn-app-discussion no-anim-ui icon go mr-2 d-lg-none">{{ app.sub.lang.string.profile.buttons.go }}</a>
    {% if app.user.loggedIn() %}
		{% if not app.visitor.user_id is same as(string.user.user_id) %}
			<a href="{{ app.phrase.buildLink('messages', {'section': 'new', 'id': string.user.user_id}) }}" class="btn btn-app-discussion no-anim-ui icon plus mr-2">{{ app.sub.lang.string.profile.buttons.message }}</a>
		{% endif %}
	{% endif %}
</div>
{{ app.sub.user.unsetUser() }}