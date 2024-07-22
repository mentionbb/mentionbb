<div class="app-copyright app-version mt-3 px-2">
    <div class="d-flex flex-lg-row flex-column justify-content-lg-start justify-content-center align-items-lg-start align-items-center small">
        <div>
            <div>
                <?php echo $app->resource->common->getVersionText() ?>
            </div>
            <div><?php echo $app->resource->common->getInstallerVersionText() ?></div>
        </div>
        <div class="ml-lg-auto mt-lg-0 mt-3">
            <div><?php echo $app->resource->common->getCopyrightText() ?></div>
        </div>
    </div>
    <div class="d-flex flex-column justify-content-lg-start justify-content-center align-items-lg-start align-items-center small mt-3">
        <?php foreach ($app->resource->common->getLinks() as $link) : ?>
            <div>
                <?php echo $link; ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>