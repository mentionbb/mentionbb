<?php
if (file_exists(INDEX_DIR . '/license.md'))
{
    $licenseFile = file_get_contents(INDEX_DIR . '/license.md');
    $licenseOutput = htmlentities($licenseFile);
    $licenseOutput = preg_replace_callback('#\b(([\w-]+://?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|/)))#si', function ($matches)
    {
        return "<a target=\"_blank\" href=\"{$matches[0]}\">{$matches[0]}</a>";
    }, $licenseOutput);
    $licenseOutput = nl2br($licenseOutput);
}
else
{
    $licenseOutput = "license.md file has been deleted. Please read the license information in the link and after that you can continue the installation. <br /><br /> <a target=\"_blank\" href=\"https://raw.githubusercontent.com/mentionbb/mentionbb/master/license.md\">https://raw.githubusercontent.com/mentionbb/mentionbb/master/license.md</a>";
}
?>
<div class="step1b">
    <div class="app-install-licenseAgreement">
        <p>Please read and accept the license agreement.</p>
        <div class="license-output scrollable"><?= $licenseOutput; ?></div>
    </div>
</div>