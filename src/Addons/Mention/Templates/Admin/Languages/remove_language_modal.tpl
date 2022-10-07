<div class="modal custom-modal animate slideIn" id="language-delete" data-language-id="{{ string.language }}" tabindex="-1"
    role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content shadow-lg rounded">
            <div class="modal-header justify-content-lg-center d-flex">
                <span class="font-weight-bold h5 mb-0 ml-lg-auto mr-lg-auto">{{
                    app.sub.lang.string.admin.languages.remove.title }}</span>
                <span class="close d-lg-none ml-auto" data-dismiss="modal"
                    aria-label="{{ app.sub.lang.string.container.buttons.close }}"></span>
            </div>
            <div class="modal-body">
                <div class="big-icon confirmation text-center mb-3"></div>
                <p class="font-weight-normal text-center">{{ app.sub.lang.string.admin.languages.remove.desc }}</p>
                <form method="post">
                    <button type="submit" class="btn btn-app-complete icon no-anim-ui"
                        data-complete-text="{{ app.sub.lang.string.admin.languages.remove.success }}">{{
                        app.sub.lang.string.container.buttons.approve }}</button>
                </form>
            </div>
        </div>
    </div>
</div>