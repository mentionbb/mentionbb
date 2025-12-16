{% if app.string.attachments.getAttachmentsByPostId(item.post_id) %}
    <hr>
	<div class="attachment-container mt-3">    
        <p>{{ app.sub.lang.string.discussion.posts.attachments.text }}</p>
        <div class="post-attachments d-flex flex-lg-row flex-wrap">
            {% for attachment in app.string.attachments.getAttachmentsByPostId(item.post_id) %}
                {% set mime = app.string.attachments.getMime(attachment.filename) %}
                <div class="attachment d-flex align-items-center text-center shadow rounded mr-3 mb-3" data-attachment-id="{{ attachment.attach_id }}" data-owner-id="{{ attachment.user_id }}" data-mime-type="{{ mime.mime_type }}">
                    <div class="attachment-icon">
                        {% if mime.icon is same as('') %}
                            <i class="far fa-file-alt"></i>
                        {% else %}
                            <i class="{{ mime.icon }}"></i>
                        {% endif %}
                    </div>
                    <div class="text-left ml-2">
                        <span class="font-weight-bold mt-0 mb-0">
                            <a title="{{ attachment.filename }}" target="_blank" class="no-tooltip text-dark" href="{{ app.phrase.buildLink('attachment', {'section': attachment.filename, 'show': attachment.attach_id}) }}">
                                {{ attachment.filename }}
                            </a>
                        </span>
                        <small class="text-muted d-block">{{ app.string.attachments.getAttachmentSize(attachment.attach_id)|formatBytes }}</small>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
{% endif %}