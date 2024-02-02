<?php

namespace App\Mvc\EventInterface;

class Container
{
    /** @var \App\Hook\Html $dom */
    public \App\Hook\Html $dom;

    /** @var \App\RouteCollection $routing */
    public \App\RouteCollection $routing;

    /** @var \App\Phrase $phrase */
    public \App\Phrase $phrase;

    /** @var object $settings */
    public object $settings;

    /** @var \App\Authentication\Auth $user */
    public \App\Authentication\Auth $user;

    /** @var \App\Repository\Request $request */
    public \App\Repository\Request $request;

    /** @var array $lang */
    public array $lang;

    /** @var \App\SubContainer\Language $language */
    public \App\SubContainer\Language $language;

    /** @var \Twig\Loader\FilesystemLoader $loader */
    public \Twig\Loader\FilesystemLoader $loader;

    /** @var \App\Template\Twig\Environment $template */
    public \App\Template\Twig\Environment $template;
}
