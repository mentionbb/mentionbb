<?php $this->setPageTitle('Runtime Error | Code 20'); ?>
<div class="message">
    <p>Error code: 20</p>
    <p>Error name: unsupported_php_version</p>
    <hr>
    <p class="text-red">Your PHP version (<?php echo \PHP_VERSION; ?>) is not supported by MentionBB. Please upgrade your PHP version to <?php echo \App\App::$_supportPhpVersion; ?>.</p>
    <p class="line">If you don't know how to do this, contact your hosting/server provider.</p>
</div>