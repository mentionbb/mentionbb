<?php $this->setPageTitle('Runtime Error'); ?>
<div class="message">
    <p>Error code: 1</p>
    <hr>
    <p class="text-light">If you see this page everything is fine. You just need to install the vendor file, there are two ways to do it.</p>
    <h4 class="text-title">Via composer:</h4>
    <ol>
        <li>Open the command window and run the <code>php bin/console mention:composer update</code> command.</li>
    </ol>
    <h5>OR</h5>
    <ol>
        <li>Install the <a target="_blank" href="https://getcomposer.org/">Composer</a>.</li>
        <li>Then run the <code>composer update</code> command on root directory.</li>
    </ol>
    <hr>
    <h4 class="text-title">If you cannot install composer on hosting or composer problem:</h4>
    <?php
    if (file_exists("{$app['index_dir']}/vendor.zip'")) :
    ?>
        <div class="found">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path d="M256 512c141.4 0 256-114.6 256-256S397.4 0 256 0S0 114.6 0 256S114.6 512 256 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            <p>Found vendor.zip in root directory.</p>
        </div>
    <?php endif; ?>
    <ol>
        <li>If Vendor.zip is not in the directory, download the ready <a href="https://github.com/mentionbb/mentionbb/raw/master/vendor.zip">vendor.zip</a> file.</li>
        <li>Then extract it and <code>move it to the <b>src</b> folder.</code></li>
        <li><b>It should be moved as vendor folder!</b></li>
    </ol>
    <hr>
    <small>The reason why the vendor file is not included in the release as standard is that it contains important components that contain thousands of files and are constantly updated. Their update is not dependent on MentionBB.</small>
</div>
<div class="message button-container">
    <button onClick="window.location.reload();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z" />
        </svg>
        Reload
    </button>
</div>