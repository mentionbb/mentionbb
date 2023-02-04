<!DOCTYPE html>
<html dir="ltr">
<head>
    <title>Mention Error 1</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="robots" content="noindex, noimageindex, nofollow, nosnippet">

    <link rel="icon" type="image/png" href="<?php echo PUBLIC_DIR; ?>/images/logo-favicon.png" sizes="32x32">
    <style>
        @import url('<?php echo PUBLIC_DIR; ?>/themes/frontend/assets/font/nunito.css');

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

        p {
            margin: 0;
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
            background-color: rgba(0, 0, 0, 0.34);
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

        .container>.message .found svg {
            fill: #5cb927;
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
<body>
    <div class="container">
        <div>
            <img src="<?php echo PUBLIC_DIR; ?>/images/logo-nightmode.svg" />
        </div>
        <div class="message">
            <p>Error code: 1</p>
            <hr>
            <p class="text-light">If you see this page everything is fine. You just need to install the vendor file, there are two ways to do it.</p>
            <h4>Via composer:</h4>
            <ol>
                <li>Install the <a target="_blank" href="https://getcomposer.org/">Composer</a>.</li>
                <li>Then run the <code>composer update</code> command on root directory.</li>
            </ol>
            <hr>
            <h4>If you cannot install composer on hosting:</h4>
            <?php
            if (file_exists(INDEX_DIR . '/vendor.zip')) :
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
                <li>Then extract it and <code>move it to the src folder.</code></li>
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
        <div class="copyright">
            <p><?php echo date('Y', time()); ?> &copy; <a target="_blank" href="https://github.com/mentionbb">Mention Community BB</a></p>
        </div>
    </div>
</body>
</html>