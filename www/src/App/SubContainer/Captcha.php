<?php

namespace App\SubContainer;

use App\Phrase;
use App\Repository\Request;

use ReCaptcha\ReCaptcha as GoogleReCaptcha;

use Symfony\Component\HttpClient\Psr18Client;
use Turnstile\Error\Code;
use Turnstile\Turnstile;

class Captcha
{
    public static function isValid($post)
    {
        $settings = Phrase::getSettings();
        $request = (new Request());

        if ($settings->recaptcha_using == 'google')
        {
            if ($request->getServerName() == 'localhost')
            {
                $hostname = 'testkey.google.com';
            }
            else
            {
                $hostname = $request->getServerName();
            }

            $recaptcha = new GoogleReCaptcha($settings->gr_secret_key);
            $resp = $recaptcha->setExpectedHostname($hostname)->verify(
                $post->get('g-recaptcha-response'),
                $request->getRemoteAddr()
            );

            if ($resp->isSuccess())
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else if ($settings->recaptcha_using == 'cloudflare_turnstile')
        {
            if (is_null($post->get('cf-turnstile-response')))
            {
                return false;
            }
            
            $turnstile = new Turnstile(
                client: new Psr18Client(),
                secretKey: $settings->gr_secret_key,
            );

            $response = $turnstile->verify(
                $post->get('cf-turnstile-response'),
                $_SERVER['REMOTE_ADDR'],
            );

            if ($response->success)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else if ($settings->recaptcha_using == 'none')
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
