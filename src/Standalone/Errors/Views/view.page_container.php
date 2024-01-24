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
        ],
        '{link_1}' => [
            'attributes' => [
                'rel' => 'stylesheet',
                'href' => "{$app['public_dir']}/themes/frontend/assets/rootschema.css"
            ]
        ]
    ]);
    ?>

    <style>
        :root {
            --trace-selected-background: #F7E5A1;
            --tree-active-background: #F7E5A1;
            --border: 1px solid #e0e0e0;
            --background-error: var(--color-error);
            --highlight-comment: #969896;
            --highlight-default: #222222;
            --highlight-keyword: #a71d5d;
            --highlight-string: #183691;
            --base-0: #fff;
            --base-1: #f5f5f5;
            --base-2: #e0e0e0;
            --base-3: #ccc;
            --base-4: #666;
            --base-5: #444;
            --base-6: #222;
            --color-error: #b0413e;
        }

        .app-night-mode {
            --trace-selected-background: #71663acc;
            --border: 1px solid #666;
            --background-error: #b0413e;
            --highlight-comment: #dedede;
            --highlight-default: var(--base-6);
            --highlight-keyword: #ff413c;
            --highlight-string: #70a6fd;
            --base-0: #1e1e1e;
            --base-1: #444;
            --base-2: #666;
            --base-3: #666;
            --base-4: #666;
            --base-5: #e0e0e0;
            --base-6: #f5f5f5;
            --color-error: #d43934;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            margin: 0 auto;
        }

        body {
            font-family: var(--mention-primary-font-family);
            background-color: var(--mention-doc-bg-color);
            color: var(--mention-doc-text-color);
            font-size: 1rem;
        }

        a {
            color: var(--mention-link-color);
            text-decoration: none;
        }

        a:hover,
        a:active,
        a:focus {
            color: var(--mention-link-hover-color);
            text-decoration: underline;
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
            border-top: 1px solid var(--mention-light-border-color);
        }

        code {
            background-color: rgba(128, 128, 128, 0.24);
        }

        code.selected {
            background-color: var(--trace-selected-background);
            color: var(--highlight-default);
        }

        button {
            display: flex;
            align-content: center;
            align-items: center;
            justify-content: center;
            outline: 0;
            color: var(--mention-button-text-color);
            fill: var(--mention-button-text-color);
            border: 2px solid var(--mention-button-border-color);
            padding: 10px 13px;
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            background-color: var(--mention-button-bg-color);
            border-radius: 0;
            overflow: hidden;
            position: relative;
            vertical-align: middle;
            transition: none;
            line-height: 1.5;
            cursor: pointer;
            transition: all .3s ease;
        }

        button:hover,
        button:active,
        button:focus {
            color: #aaa;
            fill: #aaa;
            color: var(--mention-button-hover-text-color);
            fill: var(--mention-button-hover-text-color);
            border-color: var(--mention-button-hover-border-color);
        }

        svg {
            width: 2rem;
            height: 1rem;
            padding-right: 9px;
        }

        .text-light {
            color: var(--mention-text-dark-color);
        }

        .text-red {
            color: #e18484;
        }

        .text-title {
            color: var(--mention-link-color);
        }

        .container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .container>div {
            width: 60%;
        }

        .container>.logo {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            font-size: 15px;
        }

        .container>.logo>div {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container>.logo>div:last-child {
            margin-left: auto;
        }

        .container>.logo>div:last-child>svg {
            width: 35px;
            height: 35px;
        }

        .container>.logo>div div:last-child::before {
            content: "|";
            padding: 1rem;
        }

        .container>.logo svg {
            fill: var(--mention-install-svg-color);
            width: 165px;
            height: 168px;
            padding-right: 0;
        }

        .container>.message {
            padding: 1rem .7rem;
            border-top: 5px solid #b02323;
            background-color: var(--mention-box-bg-color);
        }

        .container>.message.button-container {
            display: flex;
            justify-content: flex-end;
            border-top: 1px solid var(--mention-light-border-color);
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

        .container>.message li .found,
        .container>.message .found.margin-0 {
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
            align-content: flex-start;
            margin-top: 1rem;
        }

        .container>.copyright div:last-child {
            margin-left: auto;
        }

        nav {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }

        nav>div:not(:first-child) {
            padding-left: 7px;
        }

        nav>div:last-child {
            font-weight: 700;
        }

        nav>div:not(:last-child):after {
            content: "";
            mask: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMjAgNTEyIj48IS0tIUZvbnQgQXdlc29tZSBGcmVlIDYuNS4xIGJ5IEBmb250YXdlc29tZSAtIGh0dHBzOi8vZm9udGF3ZXNvbWUuY29tIExpY2Vuc2UgLSBodHRwczovL2ZvbnRhd2Vzb21lLmNvbS9saWNlbnNlL2ZyZWUgQ29weXJpZ2h0IDIwMjQgRm9udGljb25zLCBJbmMuLS0+PHBhdGggZD0iTTMxMC42IDIzMy40YzEyLjUgMTIuNSAxMi41IDMyLjggMCA0NS4zbC0xOTIgMTkyYy0xMi41IDEyLjUtMzIuOCAxMi41LTQ1LjMgMHMtMTIuNS0zMi44IDAtNDUuM0wyNDIuNyAyNTYgNzMuNCA4Ni42Yy0xMi41LTEyLjUtMTIuNS0zMi44IDAtNDUuM3MzMi44LTEyLjUgNDUuMyAwbDE5MiAxOTJ6Ii8+PC9zdmc+") no-repeat 50% 50%add;
            mask-size: auto;
            background-repeat: no-repeat;
            display: inline-block;
            background-color: var(--mention-doc-text-color);
            mask-size: cover;
            width: 10px;
            height: 10px;
        }

        .trace-wrapper .trace-class {
            padding-bottom: 1rem;
        }

        .trace-wrapper .trace-class h3 {
            margin: 0 auto;
        }

        /** Begin Symfony trace css codes. */
        .trace-line {
            font: 14px/1.5 Consolas, Monaco, Menlo, "Ubuntu Mono", "Liberation Mono", monospace;
            position: relative;
            padding-top: 1rem;
            padding-bottom: 8px;
        }

        .trace-line+.trace-line {
            border-top: var(--border);
        }

        .trace-line a {
            color: var(--base-6);
        }

        .trace-line .icon {
            opacity: .4;
            position: absolute;
            left: 10px;
        }

        .trace-line .icon svg {
            fill: var(--base-5);
            height: 16px;
            width: 16px;
        }

        .trace-line .icon.icon-copy {
            left: auto;
            top: auto;
            padding-left: 5px;
            display: none
        }

        .trace-line:hover .icon.icon-copy:not(.hidden) {
            display: inline-block
        }

        .trace-line-header {
            padding-left: 10px;
            padding-right: 10px;
        }

        .trace-file-path,
        .trace-file-path a {
            color: var(--base-6);
            font-size: 15px;
        }

        .trace-type {
            padding: 0 2px;
        }

        .trace-method {
            color: var(--color-error);
            font-weight: bold;
        }

        .trace-arguments {
            color: #777;
            font-weight: normal;
            padding-left: 2px;
        }

        .trace-code {
            background: var(--base-0);
            margin: 10px 10px 2px 10px;
            padding: 10px;
            overflow-x: auto;
            white-space: nowrap;
        }

        .trace-code ol {
            margin: 0;
            float: left;
        }

        .trace-code li {
            color: #969896;
            margin: 0;
            padding-left: 10px;
            float: left;
            width: 100%;
        }

        .trace-code li+li {
            margin-top: 5px;
        }

        .trace-code li.selected {
            background: var(--trace-selected-background);
            margin-top: 2px;
        }

        .trace-code li code {
            background-color: transparent;
            color: var(--base-6);
            white-space: nowrap;
        }

        .trace-as-text .stacktrace {
            line-height: 1.8;
            margin: 0 0 15px;
            white-space: pre-wrap;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .container>.logo {
                flex-direction: column;
                align-items: center;
                justify-content: center;
                margin-bottom: 2rem;
            }

            .container>.logo>div {
                flex-direction: column;
            }

            .container>.logo>div:last-child {
                margin-top: 2rem;
                margin-left: 0;
            }

            .container>.logo>div div:last-child::before {
                display: none;
            }

            .container>.logo svg {
                width: 150px;
                height: 90px;
            }

            .container>.message,
            .container>.copyright {
                width: 100%;
            }

            .container>.message.button-container {
                justify-content: center;
            }

            .container>.copyright {
                flex-direction: column;
                align-content: center;
                justify-content: center;
                text-align: center;
            }

            .container>.copyright>div:last-child {
                margin-top: 1rem;
                margin-left: 0;
            }

            nav>div:not(:last-child) {
                display: none;
            }
        }
    </style>
</head>

<body class="app-runtimeError-container app-night-mode" data-template="<?php echo $this->getName(); ?>">
    <div class="container">
        <div class="logo">
            <div>
                <div>
                    <!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                    <svg version="1.1" id="katman_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1479 416.9" style="enable-background:new 0 0 1479 416.9;" xml:space="preserve">
                        <g>
                            <path class="st0" d="M469.9,235.1c-0.4-19.3,4.2-39.5,17.1-54.3c7.5-8.6,18.1-15.2,28.9-18.6c1.5-0.5,3.4-0.9,5.4-1.1
		C500.5,82.4,397.2,15.9,283,2.8C148.6-12.5,14.8,56.8,3.8,153c-9,79.1,82.6,156.5,188.5,189.9c2.8,0.9,5.5,1.7,8.3,2.5
		c0.4,0.2,44.2,20.8,35.6,67.3c0,0,157.3-22.3,227.1-95.3h0c8.7-6.8,16.5-14.4,23.6-22.9C475.8,277.1,470.3,255.6,469.9,235.1
		 M412.7,322.9H361l-0.3-149.8l-55.3,126.8h-38.2l-55.3-126.8v149.8h-52.3V92.1h64.2l62.6,137.3l62.6-137.3h63.9V322.9z" />
                            <path class="st0" d="M618.2,249.8H485.8c5.9,27,26.7,43.8,54.3,43.8c19.1,0,36.6-7.2,49.4-20.4l20.1,21.4
		c-17.1,18.8-42.1,29.6-72.4,29.6c-54,0-89.6-35.9-89.6-88.6c0-53,36.6-88.9,88.6-89.2C597.8,146.4,622.8,186.6,618.2,249.8
		 M585.3,222.2c-1.3-28.3-20.1-45.4-48.7-45.4c-27.7,0-47.1,17.5-51.4,45.4H585.3z" />
                            <path class="st0" d="M825.3,214v109h-37.9v-98.5c0-26.3-15.8-42.5-42.1-42.5c-29,0.3-47.1,20.4-49.7,47.7v93.2h-37.9V147.8h37.9
		v33.6c12.5-24.4,34.9-34.9,64.5-34.9C800.9,146.4,825.3,172.1,825.3,214" />
                            <path class="st0" d="M975.1,311.7c-13.8,8.2-28.3,12.8-43.1,12.8c-26.3,0-49.1-15.1-49.1-51v-90.9h-24.7v-28.3h24.7v-48.1h37.5
		v48.1h51.7v28.3h-51.7v84c0,18.1,6.9,23.7,18.8,23.7c7.9,0,16.1-2.6,26.3-7.6L975.1,311.7z" />
                            <path class="st0" d="M1050.9,97.7c0,13.2-9.6,22.7-22.1,22.7c-12.5,0-22.1-9.5-22.1-22.7c0-13.5,9.5-23,22.1-23
		C1041.3,74.7,1050.9,84.2,1050.9,97.7 M1010,147.8h37.5v175.2H1010V147.8z" />
                            <path class="st0" d="M1269.8,235.4c0,52.7-37.2,88.9-91.2,88.9c-54.3,0-91.5-36.2-91.5-88.9c0-53,37.2-88.9,91.5-88.9
		C1232.6,146.4,1269.8,182.3,1269.8,235.4 M1125,235.7c0,33.9,22.1,57,53.7,57c31.3,0,53.3-23.1,53.3-57c0-33.6-22.1-56.6-53.3-56.6
		C1147,179,1125,202.1,1125,235.7" />
                            <path class="st0" d="M1477,214v109h-37.9v-98.5c0-26.3-15.8-42.5-42.2-42.5c-29,0.3-47.1,20.4-49.7,47.7v93.2h-37.9V147.8h37.9
		v33.6c12.5-24.4,34.9-34.9,64.5-34.9C1452.6,146.4,1477,172.1,1477,214" />
                        </g>
                    </svg>
                </div>
                <?php if ($this->getName() == 'view.exception') : ?>
                    <div>Unexpected Error</div>
                <?php else : ?>
                    <div>Runtime Error</div>
                <?php endif; ?>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                </svg>
            </div>
        </div>
        <?php echo (!empty($content) ? $content : ''); ?>

        <div class="copyright">
            <div>
                <div>
                    <small>&copy; <?php echo date('Y', time()); ?> <a target="_blank" href="https://mentionbb.com/community">MentionBB</a></small>
                </div>
                <div>
                    <small>
                        <a target="_blank" href="https://github.com/mentionbb">@Github</a>
                    </small>
                </div>
            </div>
            <div>
                <?php if ($this->getName() == 'view.exception') : ?>
                    <small>Powered by <a target="_blank" href="https://github.com/symfony/error-handler">Symfony/ErrorHandler</a>, customized for MentionBB.</small>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>