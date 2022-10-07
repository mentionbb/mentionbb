<?php $this->setPageTitle('Yükleyici'); ?>
<div class="app-page-content container my-5 row">
    <aside class="app-install-area col-sm-12">
        <?php echo $this->render('logo'); ?>
        <div class="app-install-block animate slideIn mt-lg-4">
            <div class="app-install position-relative bg-light shadow rounded">
                <div class="layout">
                    <div class="progress d-none">
                        <div class="indeterminate"></div>
                    </div>
                    <div class="steps js-AppInstall-Steps">
                        <div class="step1a">
                            <p>Kuruluma hoşgeldiniz, başlangıç için hazırsınız. Bir sonraki aşamada sunucu/hosting altyapınızın uygunluğunu test edeceğiz. Hazırsanız başlayalım.</p>
                        </div>
                    </div>
                    <hr>
                    <button class="btn btn-app btn-install-next" data-step="1a">
                        <i class="fas fa-check-circle mr-1"></i>
                        <span>Kurulumu Başlat</span>
                    </button>
                </div>
            </div>
            <?php echo $this->render('copyright'); ?>
        </div>
    </aside>
</div>