<p align="center">
    <picture>
        <source media="(prefers-color-scheme: dark)"
            srcset="https://github.com/par274/mentionbb/blob/master/public/images/logo-nightmode.svg">
        <source media="(prefers-color-scheme: light)"
            srcset="https://github.com/par274/mentionbb/blob/master/public/images/logo-nightmode.svg#gh-dark-mode-only">
        <img alt="Mention logo" src="https://github.com/par274/mentionbb/blob/master/public/images/logo.svg"
            width="500px">
    </picture>
</p>

# A classic forum system with next-gen.
[Mention](https://mentionbb.com/community) is an advanced forum community software. It is based on the balance between the classic forum software and the new generation ones. In this context, it has made it essential to add revolutionary innovations with developing technologies.
- **Flexible and fast.** Despite using advanced algorithms, Mention is a very lightweight software thanks to its caching technologies. On the other hand, it contains highly complex and previously unseen components.

- **Addons and modular support.** Mention uses a unique plugin system. There is a system where you can add an add-on to almost every part of it without difficulty. Plugin system works via HTML/CSS marker. In addition, with its advanced infrastructure and modular structure, you will never have any difficulties in your projects. Want a Portal? You can add. Blog? You can add.

- **Languages!** It was developed for you to adapt it to absolutely any language you want. Adding language is easy and simple, language files are very simple and you can also convert them to any sentence from the admin panel.

- **It's a nice theme but you can change it.** The default theme is responsive and built with many new technologies, but you can customize this theme or replace it completely.

- **Advanced template system.** Mention uses an improved Twig 3.0 engine. You can use this engine in plugins and various everywhere. There is quite a detailed area for editing templates in the admin panel.

And much much more.

# Install

You have to do this manually as the Installer isn't ready yet.

## Requirements
- PHP 7.4+
- Composer
- Git (Optional)

### Via Zip

[Download the latest files](https://github.com/par274/mentionbb/releases/latest) and extract them from the Zip file.

### Via Git

```
git clone https://github.com/par274/mentionbb
```

After this step, we need to perform a composer update.
```
composer update
```

After that, you need to set the database.

- Create an empty database and import the "db.sql" file located in the main directory.

The column you need to change is:
> settings > site_url

Enter the full address of your site in this column.

Open:
> src/App/Config/db.yaml

Make your database settings in this file.

After that, your site will be up and running.

Default user:pass
> Test User:123456.,

Admin Panel for more settings.

### Disabled Developer Mode

We recommend that you turn this setting off. Because with template changes, your files are backed up, but not when Dev Mode is on.

``` php
\App\App::$dev
```

``` php
public static $dev = [
	'_devMode' => false,
    ...
];
```

# Framework

Mention has been developed under an custom application framework called Par2. I have also used it in my previous projects, but this is a much improved version.

In general, Symfony Components are used.

# Packages used in this project
- [Symfony/Routing](https://symfony.com/doc/5.4/create_framework/routing.html)
- [Symfony/HttpFoundation](https://symfony.com/doc/5.4/components/http_foundation.html)
- [Symfony/Yaml](https://symfony.com/doc/5.4/components/yaml.html)
- [Doctrine/Dbal](https://www.doctrine-project.org/projects/dbal/current.html)
- [Twig/Twig](https://twig.symfony.com/)
- [Masterminds/Html5](https://github.com/Masterminds/html5-php)
- [Symfony/Serializer](https://symfony.com/doc/5.4/components/serializer.html)
- [Symfony/DomCrawler](https://symfony.com/doc/5.4/components/dom_crawler.html)
- [Nesbot/Carbon](https://carbon.nesbot.com/)
- [Laminas/Escaper](https://docs.laminas.dev/laminas-escaper/)
- [Guzzle/Guzzle](https://github.com/guzzle/guzzle)
- [Bootstrap 4](https://getbootstrap.com/docs/4.6/getting-started/introduction/)
- [Font Awesome 6](https://fontawesome.com/)
- [TinyMCE 5](https://www.tiny.cloud/)
- [Monaco Editor](https://microsoft.github.io/monaco-editor/)
- [jQuery](https://jquery.com/)

These are the main packages that have been used. We used a lot of things to create Mention. Thank you for all.

# License

Mention is a open-source project and licensed under the MIT License(MIT). Please read the [license file](https://github.com/par274/mentionbb/blob/master/license.md).
