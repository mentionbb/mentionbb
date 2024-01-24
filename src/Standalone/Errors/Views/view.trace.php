<div class="trace-line-header break-long-words">
    <?php if ('compact' !== $style && $trace['function']) : ?>
        <span class="trace-class"><?= \App\Util\AccessableReflection::get($handler, 'abbrClass', [$trace['class']]); ?></span>
        <?php if ($trace['type']) : ?>
            <span class="trace-type">
                <?= $trace['type']; ?>
            </span>
        <?php endif; ?>
        <span class="trace-method">
            <?= $trace['function']; ?>
        </span>
        <?php if (isset($trace['args'])) : ?>
            <span class="trace-arguments">(<?= \App\Util\AccessableReflection::get($handler, 'formatArgs', [$trace['args']]); ?>)</span>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($trace['file']) : ?>
        <?php
        $lineNumber = $trace['line'] ?: 1;
        $fileLink = \App\Util\AccessableReflection::get($handler, 'fileLinkFormat')->format($trace['file'], $lineNumber);
        $filePath = strtr(strip_tags(\App\Util\AccessableReflection::get($handler, 'formatFile', [$trace['file'], $lineNumber])), [' at line ' . $lineNumber => '']);
        $filePathParts = explode(\DIRECTORY_SEPARATOR, $filePath);
        ?>
        <span class="block trace-file-path">
            in
            <a href="<?= $fileLink; ?>">
                <?= implode(\DIRECTORY_SEPARATOR, array_slice($filePathParts, 0, -1)) . \DIRECTORY_SEPARATOR; ?><strong><?= end($filePathParts); ?></strong>
            </a>
            <?php if ('compact' === $style && $trace['function']) : ?>
                <span class="trace-type"><?= $trace['type']; ?></span>
                <span class="trace-method"><?= $trace['function']; ?></span>
            <?php endif; ?>
            (line <?= $lineNumber; ?>)
        </span>
        <?php
        //Logger
        $data = [
            'message' => $_message,
            'error' => implode(\DIRECTORY_SEPARATOR, array_slice($filePathParts, 0, -1)) . \DIRECTORY_SEPARATOR . end($filePathParts) . " on line " . $lineNumber
        ];
        \App\Logger::doLogAdv($data);
        ?>
    <?php endif; ?>
</div>
<?php if ($trace['file']) : ?>
    <div id="trace-html-<?= $prefix . '-' . $i; ?>" class="trace-code sf-toggle-content">
        <?= strtr(\App\Util\AccessableReflection::get($handler, 'fileExcerpt', [$trace['file'], $trace['line'], 5]), [
            '#DD0000' => 'var(--highlight-string)',
            '#007700' => 'var(--highlight-keyword)',
            '#0000BB' => 'var(--highlight-default)',
            '#FF8000' => 'var(--highlight-comment)',
        ]); ?>
    </div>
<?php endif; ?>