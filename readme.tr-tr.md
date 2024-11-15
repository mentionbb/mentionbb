[![en](https://img.shields.io/badge/lang-en-blue)](https://github.com/mentionbb/mentionbb/blob/master/readme.md)
[![tr](https://img.shields.io/badge/dil-tr-red)](https://github.com/mentionbb/mentionbb/blob/master/readme.tr-tr.md)

# Yeni nesil forum sistemi

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

## MentionBB nedir?

<p align="center">
    <picture>
        <source media="(prefers-color-scheme: dark)"
            srcset="https://raw.githubusercontent.com/mentionbb/.github/main/screenshots/index-01-dark-2.jpg">
        <source media="(prefers-color-scheme: light)"
            srcset="https://raw.githubusercontent.com/mentionbb/.github/main/screenshots/index-02.jpg">
        <img alt="Mention Index" src="https://raw.githubusercontent.com/mentionbb/.github/main/screenshots/index-02.jpg"
            width="700px">
    </picture>
</p>

[Mention](https://mentionbb.com/community) gelişmiş bir topluluk/forum yazılımıdır. Klasik forum sistemleriyle yeni nesli birleştiren bir dengeye sahiptir. Bununla birlikte en gelişmiş ve güvenilir teknolojiler kullanılarak inşa edilmiş bir projedir.

- **Esnek ve hızlı.** Mention, gelişmiş algoritmalar kullanmasına rağmen önbellekleme teknolojileri sayesinde oldukça hafif bir yazılımdır. Öte yandan oldukça karmaşık ve daha önce görülmemiş bileşenler içeriyor.

- **Eklenti ve modüler.** Mention benzersiz bir eklenti sistemi kullanır. Hemen hemen her kısmına zorlanmadan eklenti ekleyebileceğiniz bir sistemi mevcuttur. Eklenti sistemi tıpkı jQuery'deki gibi HTML/CSS işaretçisi aracılığıyla çalışır. Ayrıca gelişmiş alt yapısı ve modüler yapısı ile projelerinizde asla zorluk yaşamayacaksınız. Portal mı istiyorsunuz? Ekleyebilirsiniz. Blog? Ekleyebilirsiniz. Eklentilerle hızlı büyüyen bir platforma sahipsiniz.

- **Çoklu dil!** Kesinlikle istediğiniz dile uyarlamanız için geliştirildi. Dil eklemek kolay ve basittir, dil dosyaları oldukça basittir ve bunları yönetici panelinden istediğiniz cümleye de dönüştürebilirsiniz.

- **Güzel bir tasarım ama istersen değiştirebilirsin.** Varsayılan tema çözünürlüğe göre değişen, esnek bir yapıdadır ve birçok yeni teknolojiyle oluşturulmuştur, ancak bu temayı özelleştirebilir veya tamamen değiştirebilirsiniz.

- **Gelişmiş şablon sistemi.** Mention, Twig 3 şablon motorunu kullanmaktadır. Bu motoru eklentilerde ve çeşitli her yerde kullanabilirsiniz. Yönetici panelinde şablonları düzenlemek için oldukça detaylı bir alan bulunmaktadır. Ayrıca sistem içinde hata sayfaları, kurulum gibi yerlerde kendi basit şablon motorumuzu kullandık.

Ve tabi ki çok daha fazlası sizi bekliyor!

## Durumu

MentionBB 3 yılı aşan bir yıldır geliştirilmeye devam ediliyor. GitHub'da gördüğünüz proje paralel ve gerçek zamanlı olarak geliştiriliyor. Hedefimiz tamamen yeni standartlara uygun, yeni nesil bir forum oluşturmaktır. Güncel haliyle sitenize yükleyip kullanabilirsiniz. Demo sitemiz ise sponsorlar sayesinde açık kalıyor.

## Kurulum

Bu kompleks yazılım sürekli geliştirildiğinden dolayı kurulum sihirbazı henüz hazır değil. Kurulumu elle yapmalısınız.

- Docker için kurulum: [mentionbb-dockerized](https://github.com/mentionbb/mentionbb-dockerized)
- Plesk panel için kurulum: [mentionbb-plesk-setup](https://github.com/mentionbb/mentionbb-plesk-setup)

## Gerekliler

- PHP 8.2+
- Composer
- Git (Opsiyonel)

## Gerekli PHP eklentileri

- Mbstring
- Iconv
- Curl
- Zip
- GD (Opsiyonel)


### Nginx sunucusu kullanıyorsanız aşağıdaki örnek yapılandırma dosyası işinize yarayacaktır.

```text
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
Server name veya yolları kendinize göre düzenlemelisiniz!

### Zip ile kurulum

[Buradan son sürümü indirin](https://github.com/mentionbb/mentionbb/releases/latest) ve Zip dosyası içerisinden çıkarın.

Bu aşamadan sonra composer update çekeceğiz.

```bash
composer update
```

#### Eğer Composer'e sahip değilseniz:

Composer kurulumu: [https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

Eğer Windows kullanıyorsanız: [https://getcomposer.org/doc/00-intro.md#installation-windows](https://getcomposer.org/doc/00-intro.md#installation-windows)

Yine de sorun yaşıyorum diyorsanız, hazır Vendor dosyasını `src` içine çıkarabilirsiniz.
[Vendor.zip](https://github.com/mentionbb/mentionbb/raw/master/vendor.zip)

Bundan sonra veritabanı ayarlarımızı yapalım.

- Boş bir veritabanı oluşturun ve ana dizinde bulunan "db.sql" dosyasını içe aktarın.

Şu sütunun değişmesini gerekiyor:
> settings > site_url

Bu sütuna site adresinizin tamamını yazın. Örnek: https://example.com

### Veri tabanı ayarları

```bash
php bin/console mention:install-db [--dbadapter DBADAPTER] [--user USER] [--password PASSWORD] [--dbname DBNAME] [--dbhost DBHOST]
```
*köşeli parantezler hariç.

Veya
Adını değiştirin:
> `.env.example` > `.env`

Bu dosya içine veritabanı ayarlarınızı yapabilirsiniz.

**Dosyayı sunucunuzda çalıştırmak istediğiniz veritabanı sürücüsüne göre ayarlamalısınız. Tüm talimatlar dosyada mevcuttur.**
**Varsayılan olarak pdo_mysql seçilidir ve bunu kullanmak için PDO eklentisinin yüklenmesi gerekir. Eğer PDO uzantısına sahip değilseniz sürücüyü mysqli olarak seçebilirsiniz.**

Bu aşamadan sonra siteniz açık ve kullanıma hazır olacaktır.

Varsayılan kullanıcıadı:şifre
> TestUser:123456.,

Admin panelde daha fazla ayar mevcuttur.

### Geliştirme modunu kapatın. (Tavsiye)

Bu ayarı kapatmanızı öneriyoruz, çünkü biz geliştirmeye yaparken şablonların veya bazı dosyaların yedeklenmesini bu şekilde istemiyoruz. Ancak son kullanıcı şablon değişikliği yaptığında bunların kolayca geri dönüştürülmesi ve karşılaştırılması gerekir. O yüzden bu ayarı kapatmanızı tavsiye ederiz.

> src/App/App.php

``` php
\App\App::$dev
```

``` php
public static $dev = [
    '_devMode' => false,
];
```

## Kullanılan altyapı (Framework)

Mention, Par2 adı verilen özel bir uygulama altyapısı kapsamında geliştirilmiştir. Daha önceki projelerimde de kullanmıştım ama bu çok daha gelişmiş bir versiyonudur.

Genel olarak Symfony Bileşenleri kullanılmaktadır.

## Bu projede genel olarak kullanılan üçüncü parti paketler şunlardır

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

Bunlar kullanılan ana paketlerdir. Mention'ı oluşturmak için daha pek çok üçüncü parti paket kullandık. Hepsine teşekkürü borç biliyoruz.

### Lisans

Mention açık kaynaklı bir projedir ve MIT lisansı altında dağıtılmaktadır. Daha fazla bilgi için: [lisans dosyası](https://github.com/mentionbb/mentionbb/blob/master/license.md). 
