# A classic forum system with next-gen

<p align="center">
    <picture>
        <source media="(prefers-color-scheme: dark)"
            srcset="https://raw.githubusercontent.com/mentionbb/mentionbb/master/public/ui/images/logo-nightmode.svg">
        <source media="(prefers-color-scheme: light)"
            srcset="https://raw.githubusercontent.com/mentionbb/mentionbb/master/public/ui/images/logo.svg">
        <img alt="Mention logo" src="https://raw.githubusercontent.com/mentionbb/mentionbb/master/public/ui/images/logo.svg"
            width="500px">
    </picture>
</p>

<p align="center">
    <img alt="license" src="https://img.shields.io/github/license/mentionbb/mentionbb" />
    <img alt="repoSize" src="https://img.shields.io/github/repo-size/mentionbb/mentionbb" />
    <img alt="commityActivity" src="https://img.shields.io/github/commit-activity/w/mentionbb/mentionbb" />
</p>

## MentionBB?

[Mention](https://mentionbb.com/community) is an advanced forum community software. It is based on the balance between the classic forum software and the new generation ones. In this context, it has made it essential to add revolutionary innovations with developing technologies.

- **Flexible and fast.** Despite using advanced algorithms, Mention is a very lightweight software thanks to its caching technologies. On the other hand, it contains highly complex and previously unseen components.

- **Addons and modular support.** Mention uses a unique plugin system. There is a system where you can add an add-on to almost every part of it without difficulty. Plugin system works via HTML/CSS marker. In addition, with its advanced infrastructure and modular structure, you will never have any difficulties in your projects. Want a Portal? You can add. Blog? You can add.

- **Languages!** It was developed for you to adapt it to absolutely any language you want. Adding language is easy and simple, language files are very simple and you can also convert them to any sentence from the admin panel.

- **It's a nice theme but you can change it.** The default theme is responsive and built with many new technologies, but you can customize this theme or replace it completely.

- **Advanced template system.** Mention uses an improved Twig 3.0 engine. You can use this engine in plugins and various everywhere. There is quite a detailed area for editing templates in the admin panel.

And much much more.

## Status

MentionBB has been in active development for over 3 years. The project you see on GitHub is developed in parallel and in real-time. Goal is to create a new generation forum that complies with completely new standards. You can install and use it on your site in its current status.

## Install

You have to do this manually as the Installer isn't ready yet.

## Requirements

- PHP 8.2+
- Composer
- Git (Optional)

## Requirements PHP Extensions

- Mbstring
- Iconv
- Curl
- Zip
- GD (Optional)

If you are on Docker: [mentionbb-dockerized](https://github.com/mentionbb/mentionbb-dockerized)

### If you are using Nginx server, the sample config file below will be helpful

```
server {
    listen 80;
    server_name example.com;
    root /var/www/public;

    location / {
        try_files $uri /index.php$is_args$args;
    }

    location ~ ^/index\.php(/|$) {
        if ($request_method = 'OPTIONS') {
            add_header 'Access-Control-Allow-Origin' '*' always;
            add_header 'Access-Control-Allow-Methods' 'GET, POST, DELETE, OPTIONS' always;
            add_header 'Access-Control-Allow-Headers' 'Authorization,DNT,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type,Range' always;
            add_header 'Access-Control-Max-Age' 1728000 always;
            add_header 'Content-Type' 'text/plain; charset=utf-8' always;
            add_header 'Content-Length' 0 always;
            return 204;
        }
        add_header 'Access-Control-Allow-Origin' '*' always;
        add_header 'Access-Control-Allow-Methods' 'GET, POST, DELETE, OPTIONS' always;
        add_header 'Access-Control-Allow-Headers' 'Authorization,DNT,User-Agent,X-Requested-With,If-Modified-Since,Cache-Control,Content-Type,Range' always;
        add_header 'Access-Control-Expose-Headers' 'Content-Length,Content-Range' always;
        
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
        fastcgi_split_path_info ^(.+\.php)(/.*)$;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        fastcgi_param DOCUMENT_ROOT $realpath_root;
        internal;
    }
    location ~ \.php$ {
        return 404;
    }
    location = /favicon.ico {
        log_not_found off;
        access_log off;
    }
 
    include /var/www/.nginx.conf;

    error_log /dev/stdout info;
    access_log /var/log/nginx/project_access.log;
}
```

You need to edit the paths and server name!

### Install Via Zip

[Download the latest files](https://github.com/mentionbb/mentionbb/releases/latest) and extract them from the Zip file.

After this step, we need to perform a composer update.

```bash
composer update
```

For Composer installation: [https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

If you have Windows on local: [https://getcomposer.org/doc/00-intro.md#installation-windows](https://getcomposer.org/doc/00-intro.md#installation-windows)

If you cannot install, download the ready vendor file then extract and move it to the `src` folder.
[Vendor.zip](https://github.com/mentionbb/mentionbb/raw/master/vendor.zip)

After that, you need to set the database.

- Create an empty database and import the "db.sql" file located in the main directory.

The column you need to change is:
> settings > site_url

Enter the full address of your site in this column.

Open:
> src/DbConfig.php

Make your database settings in this file.

**You should set the file according to the database driver you want to run on your server. All instructions are in the file.**
**By default, pdo_mysql is selected, and the PDO plugin must be installed to use it.**

After that, your site will be up and running.

Default user:pass
> TestUser:123456.,

Admin Panel for more settings.

### Disabled Developer Mode

We recommend that you turn this setting off. Because with template changes, your files are backed up, but not when Dev Mode is on.

``` php
\App\App::$dev
```

``` php
public static $dev = [
    '_devMode' => false,
];
```

## Framework

Mention has been developed under an custom application framework called Par2. I have also used it in my previous projects, but this is a much improved version.

In general, Symfony Components are used.

## Packages used in this project

- [Symfony/Routing](https://symfony.com/doc/current/create_framework/routing.html)
- [Symfony/HttpFoundation](https://symfony.com/doc/current/components/http_foundation.html)
- [Symfony/Yaml](https://symfony.com/doc/current/components/yaml.html)
- [Doctrine/Dbal](https://www.doctrine-project.org/projects/dbal/current.html)
- [Twig/Twig](https://twig.symfony.com/)
- [Masterminds/Html5](https://github.com/Masterminds/html5-php)
- [Symfony/Serializer](https://symfony.com/doc/current/components/serializer.html)
- [Symfony/DomCrawler](https://symfony.com/doc/current/components/dom_crawler.html)
- [Nesbot/Carbon](https://carbon.nesbot.com/)
- [Laminas/Escaper](https://docs.laminas.dev/laminas-escaper/)
- [Guzzle/Guzzle](https://github.com/guzzle/guzzle)
- [Bootstrap 4](https://getbootstrap.com/docs/4.6/getting-started/introduction/)
- [Font Awesome 6](https://fontawesome.com/)
- [TinyMCE 5](https://www.tiny.cloud/)
- [Monaco Editor](https://microsoft.github.io/monaco-editor/)
- [jQuery](https://jquery.com/)

These are the main packages that have been used. We used a lot of things to create Mention. Thank you for all.

### License

Mention is a open-source project and licensed under the MIT License(MIT). Please read the [license file](https://github.com/mentionbb/mentionbb/blob/master/license.md).
