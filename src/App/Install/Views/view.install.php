<?php $this->setPageTitle('Installer'); ?>
<div class="app-page-content container my-5 row">
    <aside class="app-install-area col-sm-12">
        <?php echo $this->render('logo'); ?>
        <div class="app-install-block animate slideIn mt-lg-4">
            <div class="app-install position-relative bg-light shadow rounded">
                <div class="layout">
                    <div class="progress install-progress rounded-0">
                        <div class="progress-bar" role="progressbar" style="width: 1%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                    <div class="progress d-none">
                        <div class="indeterminate"></div>
                    </div>
                    <div class="steps js-AppInstall-Steps">
                        <div class="step1a">
                            <p>Welcome to the installation, you are ready to get started. In the next stage, we will test the suitability of your server/hosting infrastructure. If you're ready, let's start.</p>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-app btn-install-next" data-step="1a">
                        <i class="fas fa-check-circle mr-1"></i>
                        <span>Start Setup</span>
                    </button>
                </div>
            </div>
            <?php echo $this->render('copyright'); ?>
        </div>
    </aside>
</div>