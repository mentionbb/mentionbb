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
                'content' => 'noindex, noimageindex, nofollow, nosnippet'
            ]
        ],
        '{link_0}' => [
            'attributes' => [
                'rel' => 'icon',
                'type' => 'imageg/png',
                'href' => "{$app['public_dir']}/images/logo-favicon.png",
                'sizes' => '32x32'
            ]
        ]
    ]);
    ?>

    <style>
        @import url("<?php echo $app['public_dir']; ?>/themes/frontend/assets/font/nunito.css");

        html,
        body {
            height: 100%;
            margin: 0 auto;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: #0d1117;
            color: #b9b9b9;
            font-size: 1rem;
        }

        a {
            color: #79a2ce;
            text-decoration: underline;
        }

        a:hover,
        a:focus,
        a:active {
            color: #d0e7ff;
        }

        p {
            margin: 0;
        }

        p.line {
            margin-top: 1rem;
        }

        ul.list-style-none {
            list-style-type: none;
        }

        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top-color: currentcolor;
            border-top-style: none;
            border-top-width: 0px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        code {
            background-color: rgba(128, 128, 128, 0.24);
        }

        button {
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: center;
            outline: 0;
            background-color: transparent;
            padding: 10px 13px;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            border: 2px solid #575757;
            border-radius: 0;
            overflow: hidden;
            position: relative;
            vertical-align: middle;
            transition: none;
            color: #8e8e8e;
            fill: #8e8e8e;
            line-height: 1.5;
            cursor: pointer;
            transition: all .3s ease;
        }

        button:hover,
        button:active,
        button:focus {
            color: #aaa;
            fill: #aaa;
            border-color: #aaa;
        }

        svg {
            width: 1rem;
            height: 1rem;
            padding-right: 9px;
        }

        .text-light {
            color: #d0e7ff;
        }

        .text-red {
            color: #e18484;
        }

        .text-title {
            color: #14cad2;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .container img {
            width: 500px;
            height: 240px;
        }

        .container>.message {
            padding: 1rem .7rem;
            border-top: 5px solid #b02323;
            background-color: #111519;
            width: 50%;
        }

        .container>.message.button-container {
            display: flex;
            justify-content: flex-end;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
        }

        .container>.message .link {
            margin-top: 10px;
        }

        .container>.message .found {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .container>.message li .found, .container>.message .found.margin-0 {
            margin: 0;
        }

        .container>.message .found svg {
            fill: #5cb927;
        }

        .container>.message .found.not-found svg {
            fill: #d72d2d;
        }

        .container>.message .found.warning svg {
            fill: #b99b27;
        }

        .container>.copyright {
            display: flex;
            flex-direction: column;
            align-content: flex-start;
            margin-top: 1rem;
            width: 50%;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .container img {
                width: 275px;
                height: 150px;
            }

            .container>.message,
            .container>.copyright {
                width: 100%;
            }

            .container>.message.button-container {
                justify-content: center;
            }
        }
    </style>
</head>
<body class="app-runtimeError-container" data-template="<?php echo $this->getName(); ?>">
    <div class="container">
        <div>
            <img src="<?php echo $app['public_dir']; ?>/images/logo-nightmode.svg" />
        </div>
        <?php echo (!empty($content) ? $content : ''); ?>

        <div class="copyright">
            <p><?php echo date('Y', time()); ?> &copy; <a target="_blank" href="https://github.com/mentionbb">Mention Community BB</a></p>
        </div>
    </div>
</body>
</html>