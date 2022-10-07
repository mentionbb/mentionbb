<div class="modal custom-modal animate slideIn" id="move-discussion" data-discussion-id="{{ string.discussion.discussion_id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content shadow-lg rounded">
      <div class="modal-header justify-content-lg-center d-flex">
        <span class="font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto">{{ app.sub.lang.string.discussion.moderation.move.title }}</span>
        <span class="close d-lg-none ml-auto" data-dismiss="modal" aria-label="{{ app.sub.lang.string.container.buttons.close }}"></span>
      </div>
      <div class="modal-body">
        <div class="big-icon move text-center mb-3"></div>
        <form method="post">
          <div class="form-group">
            <div>
              <select class="selectpicker ml-lg-auto w-100" data-live-search="true" title="{{ app.sub.lang.string.container.editor.placeholder.forum }}" name="forum">
                {% for item in app.string.forum.getForumList() %}
                  <option value="{{ item.forum_id }}">{{ item.title }}</option>
                  {% for sub in app.string.forum.getForumList(item.forum_id) %}
                    <option value="{{ sub.forum_id }}">-- {{ sub.title }}</option>
                  {% endfor %}
                {% endfor %}
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-app-complete icon no-anim-ui" data-complete-text="{{ app.sub.lang.string.discussion.posts.edit.success }}">{{ app.sub.lang.string.container.buttons.approve }}</button>
        </form>
        <div class="error-message mt-4 text-danger d-none">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</div>