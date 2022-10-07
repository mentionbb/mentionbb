<div class="modal custom-modal animate slideIn" id="post-report" data-post-id="{{ string.post_id }}" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content shadow-lg rounded">
      <div class="modal-header justify-content-lg-center d-flex">
        <span class="font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto">{{ app.sub.lang.string.discussion.posts.report.title }}</span>
        <span class="close d-lg-none ml-auto" data-dismiss="modal" aria-label="{{ app.sub.lang.string.container.buttons.close }}"></span>
      </div>
      <div class="modal-body">
        <div class="big-icon flag text-center mb-3"></div>
        <p class="font-weight-normal text-center">{{ app.sub.lang.string.discussion.posts.report.text }}</p>
        <div class="js-ClickableDivs mt-2" data-ui="quick-reporting">
          <div class="bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-2">Uygunsuz içerik.</div>
          <div class="bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-2">Yanlış veya eksik bilgi.</div>
          <div class="bg-white shadow-sm rounded pl-3 pr-3 pb-2 pt-2 mb-3">Küfür, hakaret veya cinsel içerikli mesaj.</div>
        </div>
        <form method="post">
          <div class="form-group">
            <textarea name="report-text" placeholder="{{ app.sub.lang.string.discussion.posts.report.placeholder.content }}"></textarea>
          </div>
          <button type="submit" class="btn btn-app-complete icon no-anim-ui" data-complete-text="{{ app.sub.lang.string.discussion.posts.report.success }}">{{ app.sub.lang.string.container.buttons.approve }}</button>
        </form>
        <div class="error-message mt-4 text-danger d-none">
          <span></span>
        </div>
      </div>
    </div>
  </div>
</div>