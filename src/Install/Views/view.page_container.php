<?php echo $this->getDoctype(); ?>
<html dir="ltr">
<head>
    <?php
    echo $this->setHead([
        'title' => [
            'content' => $this->getPageTitle()
        ],
        '{meta_0}' => [
            'attributes' => [
                'http-equiv' => 'Content-Type',
                'content' => 'text/html; charset=utf-8'
            ]
        ],
        '{meta_1}' => [
            'attributes' => [
                'http-equiv' => 'X-UA-Compatible',
                'content' => 'IE=Edge'
            ]
        ],
        '{meta_2}' => [
            'attributes' => [
                'name' => 'viewport',
                'content' => 'user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1'
            ]
        ],
        '{meta_3}' => [
            'attributes' => [
                'name' => 'robots',
                'content' => 'noindex, nofollow'
            ]
        ],
        '{meta_4}' => [
            'attributes' => [
                'name' => 'generator',
                'content' => 'Mention ' . \App\App::versionNaming() . ', Build: ' . \App\App::$build['versionId'] . '',
            ]
        ],
        '{link_0}' => [
            'attributes' => [
                'rel' => 'stylesheet',
                'href' => "{$app->public_dir}/vendor/vendor.css?v=1644274312"
            ]
        ],
        '{link_1}' => [
            'attributes' => [
                'rel' => 'stylesheet',
                'href' => "{$app->public_dir}/vendor/install/style.css?v=" . time()
            ]
        ]
    ]);
    ?>
</head>

<body class="app-install-container app-night-mode" data-template="<?php echo $this->getName(); ?>">
    <?php echo (!empty($content) ? $content : ''); ?>


    <?php
    echo $this->setHead([
        '{script_0}' => [
            'attributes' => [
                'type' => 'text/javascript',
                'src' => "{$app->public_dir}/vendor/vendor.js?v=" . time()
            ],
            'content' => ''
        ],
        '{script_1}' => [
            'attributes' => [
                'type' => 'text/javascript',
                'src' => (new \App\SubContainer\Theme\Compile())->makeJs('vendor', 'install')
            ],
            'content' => ''
        ]
    ]);
    ?>

    <script>
        jQuery.extend(true, app, {
            config: {
                settings: {
                    public_dir: "<?php echo $app->public_dir; ?>",
                    ajax_path: "<?php echo $app->ajax_path; ?>",
                }
            },
            phrase: {
                default_title: "<?php echo $this->getPageTitle(); ?>"
            },
            visitor: {
                csrf: "<?php echo $app->csrf_token; ?>"
            }
        });
    </script>
</body>
</html>