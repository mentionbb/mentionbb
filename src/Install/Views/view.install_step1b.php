<div class="step1b">
    <div class="app-install-serverReport">
        <?php
        $appRequirements = $string['server']->checkRequirement();
        if (!is_array($appRequirements)) :
        ?>
            <div class="alert alert-success" role="alert">
                <span>Sunucunuz Mention'un stabil bir şekilde çalışması için gerekli kriterleri sağlamaktadır.</span>
            </div>
        <?php else : ?>
            <div class="alert alert-warning" role="alert">
                <span>Sunucunuzda bir veya birden fazla modül eksik. Bu durumda Mention'un çalışması sekteye uğrayabilir veya çalışmayı durdurabilir.</span>
                <ul class="mb-0">
                    <?php foreach ($appRequirements as $requirementMessage) : ?>
                        <li>
                            <strong><?php echo $requirementMessage['error']; ?>:</strong>
                            <?php if ($requirementMessage['error'] == 'php') : ?>
                                Sunucunuzun PHP versiyonu: <?php echo $string['server']->getPHPVersion(); ?>, gereken PHP versiyonu: <?php echo $app->build->support_php_version; ?>
                            <?php else : ?>
                                <?php
                                $messages = [];
                                $messages['mbstring'] = "<a href=\"https://www.php.net/manual/tr/book.mbstring.php\">PHP mbstring</a> eklentisi kapalı veya yüklenmemiş.";
                                $messages['zip'] = "Zip eklentisi kapalı, sistemin paketleri dışa veya içeriye aktarabilmesi için <a href=\"https://www.php.net/manual/tr/book.zip.php\">Zip</a> eklentisi gerekiyor.";
                                $messages['curl'] = "Mention, bazı uzak sitelerden bilgi alır veya gönderir. <a href=\"https://www.php.net/manual/tr/book.curl\">PHP Curl</a> eklentisi şarttır.";
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
                        <th scope="col">Özellik</th>
                        <th scope="col">Değer</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PHP sürümü:</td>
                        <td><?php echo $string['server']->getPHPVersion(); ?></td>
                    </tr>
                    <tr>
                        <td>MySQL sürümü:</td>
                        <td><?php echo $string['server']->getMySQLVersion(); ?></td>
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
                        <td>cURL versiyonu</td>
                        <td><?php echo $string['server']->getCurlVersion(); ?></td>
                    </tr>
                    <tr>
                        <td>GZip desteği</td>
                        <td>
                            <?php if ($string['server']->isSupportGZip()) :
                                echo '<span class="text-success">Evet</span>';
                            else :
                                echo '<span class="text-danger">Hayır</span>';
                            endif;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Mbstring desteği</td>
                        <td>
                            <?php if ($string['server']->isMbstringEnabled()) :
                                echo '<span class="text-success">Evet</span>';
                            else :
                                echo '<span class="text-danger">Hayır</span>';
                            endif;
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>ZipArchive desteği</td>
                        <td>
                            <?php if ($string['server']->isZipEnabled()) :
                                echo '<span class="text-success">Evet</span>';
                            else :
                                echo '<span class="text-danger">Hayır</span>';
                            endif;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>