<div class="step1c">
    <div class="app-install-serverReport">
        <?php
        $appRequirements = $string['server']->checkRequirement();
        if (!is_array($appRequirements)) :
        ?>
            <div class="alert alert-success" role="alert">
                <span>Your server meets the necessary criteria for MentionBB to operate stably.</span>
            </div>
        <?php else : ?>
            <div class="alert alert-warning" role="alert">
                <span>One or more PHP plugins/modules are missing on your server. In this case, Mention's operation may be interrupted or stop working.</span>
                <ul class="mb-0">
                    <?php foreach ($appRequirements as $requirementMessage) : ?>
                        <li>
                            <strong><?php echo $requirementMessage['error']; ?>:</strong>
                            <?php if ($requirementMessage['error'] == 'php') : ?>
                                Your server's PHP version: <?php echo $string['server']->getPHPVersion(); ?>, required PHP version: <?php echo $app->build->support_php_version; ?>
                            <?php else : ?>
                                <?php
                                $messages = [];
                                $messages['mbstring'] = "<a href=\"https://www.php.net/manual/tr/book.mbstring.php\">PHP mbstring</a> plugin is disabled or not loaded.";
                                $messages['zip'] = "Zip plugin is disabled, <a href=\"https://www.php.net/manual/tr/book.zip.php\">Zip</a> plugin is required for the system to export or import packages.";
                                $messages['curl'] = "Mention receives or sends information from some remote site. <a href=\"https://www.php.net/manual/tr/book.curl\">PHP Curl</a> plugin is a must.";
                                ?>
                                <span><?php echo $messages[$requirementMessage['error']]; ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php
        endif;
        ?>
        <div class="tableContainer scrollable">
            <table class="table table-bordered table-striped table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">Feature</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHP version:</td>
                        <td><?php echo $string['server']->getPHPVersion(); ?></td>
                    </tr>
                    <tr>
                        <td>MySQL version:</td>
                        <td><?php echo $string['server']->getServerVersion(); ?></td>
                    </tr>
                    <tr>
                        <td>memory_limit</td>
                        <td><?php echo $string['server']->getMemoryLimit(); ?></td>
                    </tr>
                    <tr>
                        <td>post_max_size</td>
                        <td><?php echo $string['server']->getPostMaxSize(); ?></td>
                    </tr>
                    <tr>
                        <td>upload_max_filesize</td>
                        <td><?php echo $string['server']->getUploadMaxFilesize(); ?></td>
                    </tr>
                    <tr>
                        <td>max_input_vars</td>
                        <td><?php echo $string['server']->getMaxInputVars(); ?></td>
                    </tr>
                    <tr>
                        <td>max_execution_time</td>
                        <td><?php echo $string['server']->getMaxExecutionTime(); ?></td>
                    </tr>
                    <tr>
                        <td>cURL version</td>
                        <td><?php echo $string['server']->getCurlVersion(); ?></td>
                    </tr>
                    <tr>
                        <td>GZip support</td>
                        <td>
                            <?php if ($string['server']->isSupportGZip()) :
                                echo '<span class="text-success">Yes</span>';
                            else :
                                echo '<span class="text-danger">No</span>';
                            endif;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Mbstring support</td>
                        <td>
                            <?php if ($string['server']->isMbstringEnabled()) :
                                echo '<span class="text-success">Yes</span>';
                            else :
                                echo '<span class="text-danger">No</span>';
                            endif;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>ZipArchive support</td>
                        <td>
                            <?php if ($string['server']->isZipEnabled()) :
                                echo '<span class="text-success">Yes</span>';
                            else :
                                echo '<span class="text-danger">No</span>';
                            endif;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>