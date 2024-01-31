<?php $this->setPageTitle('Unexpected Error | Code 1050'); ?>
<div class="message">
    <nav>
        <div>
            <?php foreach (array_reverse($exception->getAllPrevious(), true) as $index => $previousException) : ?>
                <span>
                    <?= $this->abbrClass($previousException->getClass()); ?>
                </span>
            <?php endforeach; ?>
            <span>
                <?= \App\Util\AccessableReflection::get($handler, 'abbrClass', [$exception->getClass()]); ?>
            </span>
        </div>
        <div>
            <span>
                HTTP <?= $statusCode; ?> <?= $statusText; ?>
            </span>
        </div>
    </nav>
    <hr>
    <?php
    $exceptionAsArray = $exception->toArray();
    $exceptionWithUserCode = [];
    $exceptionAsArrayCount = count($exceptionAsArray);
    $last = $exceptionAsArrayCount - 1;
    foreach ($exceptionAsArray as $i => $e)
    {
        foreach ($e['trace'] as $trace)
        {
            if ($trace['file'] && !str_contains($trace['file'], '/vendor/') && !str_contains($trace['file'], '/var/cache/') && $i < $last)
            {
                $exceptionWithUserCode[] = $i;
            }
        }
    }
    foreach ($exceptionAsArray as $i => $e) :
        $exceptionItem = $e;
        $index = $i + 1;
        $expand = in_array($i, $exceptionWithUserCode, true) || ([] === $exceptionWithUserCode && 0 === $i);
    ?>
        <div class="trace-wrapper">
            <?php
            $separator = strrpos($exceptionItem['class'], '\\');
            $separator = false === $separator ? 0 : $separator + 1;

            $namespace = substr($exceptionItem['class'], 0, $separator);
            $class = substr($exceptionItem['class'], $separator);
            ?>
            <?php if ('' === $class) : ?>
                <br>
            <?php else : ?>
                <div class="trace-class">
                    <?php if ('' !== $namespace)
                    { ?>
                        <span class="trace-namespace"><?= $namespace; ?></span>
                    <?php } ?>
                    <h3><?= $class; ?></h3>
                </div>
            <?php endif; ?>
            <?php if ($exceptionItem['message'] && $index > 1) : ?>
                <p class="break-long-words trace-message"><?= \App\Util\AccessableReflection::get($handle, 'escape', [$exceptionItem['message']]); ?></p>
            <?php endif; ?>
        </div>
    <?php
    endforeach;
    ?>
    <code class="selected">
        <?= $_message = sprintf('%s (%d %s)', $exceptionMessage, $statusCode, $statusText); ?>
    </code>
    <div id="trace-html-<?= $index; ?>" class="sf-toggle-content">
        <?php
        $isFirstUserCode = true;
        foreach ($exceptionItem['trace'] as $i => $trace) :
            $isVendorTrace = $trace['file'] && (str_contains($trace['file'], '/vendor/') || str_contains($trace['file'], '/var/cache/'));
            $displayCodeSnippet = $isFirstUserCode && !$isVendorTrace;
            if ($displayCodeSnippet) :
                $isFirstUserCode = false;
            endif;
        ?>
            <?php if ($i == 0) : ?>
                <div class="trace-line <?= $isVendorTrace ? 'trace-from-vendor' : ''; ?>">
                    <?= $this->render('trace', [
                        'handler' => $handler,
                        'prefix' => $index,
                        'i' => $i,
                        'trace' => $trace,
                        'style' => $isVendorTrace ? 'compact' : ($displayCodeSnippet ? 'expanded' : ''),
                        '_message' => str_replace('&quot;', "", sprintf('%s', $exceptionMessage))
                    ], 'array'); ?>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<div class="message button-container">
    <button onClick="window.location.reload();">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M463.5 224H472c13.3 0 24-10.7 24-24V72c0-9.7-5.8-18.5-14.8-22.2s-19.3-1.7-26.2 5.2L413.4 96.6c-87.6-86.5-228.7-86.2-315.8 1c-87.5 87.5-87.5 229.3 0 316.8s229.3 87.5 316.8 0c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0c-62.5 62.5-163.8 62.5-226.3 0s-62.5-163.8 0-226.3c62.2-62.2 162.7-62.5 225.3-1L327 183c-6.9 6.9-8.9 17.2-5.2 26.2s12.5 14.8 22.2 14.8H463.5z" />
        </svg>
        Reload
    </button>
</div>