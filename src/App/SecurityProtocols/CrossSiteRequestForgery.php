<?php

namespace App\SecurityProtocols;

class CrossSiteRequestForgery
{
    public $request;

    private $staticKey = '4p8aKdKCeamARF6fjFDEZo';

    public function __construct()
    {
        $this->request = new \App\Repository\Request();
    }

    public function getEncodedToken()
    {
        return \App\Repository\Crypto::encryptionStaticIv(
            \json_encode($this->getTokenArray()),
            $this->staticKey
        );
    }

    public function getTokenData($token)
    {
        return \App\Repository\Crypto::decryption($token, $this->staticKey);
    }

    /**
     * validateToken
     *
     * @param  mixed $token
     * @return void
     * 
     * Mention provides a different CSRF protection to improve security.
     * The data sent in the X-CSRF header base includes the time and some browser information such as IP, device info.
     * When this data is resolved, if the information does not match or the browser has been inactive for more than 30 minutes, it will give a security warning.
     * 
     */
    public function validateToken($token)
    {
        if (is_bool($token))
        {
            return false;
        }

        $csrfTokenData = \json_decode($this->getTokenData($token), true);

        if (is_array($csrfTokenData))
        {
            if ($this->request->getRemoteAddr() !== $csrfTokenData['ip'])
            {
                return false;
            }

            if (($csrfTokenData['time'] + 1800) <= \App\Entity\DateTime::getTimeStamp())
            {
                return false;
            }

            if ($csrfTokenData['user-agent'] !== $this->request->getUserAgent())
            {
                return false;
            }

            return true;
        }

        return false;
    }

    protected function getTokenArray()
    {
        return [
            'ip' => $this->request->getRemoteAddr(),
            'time' => \App\Entity\DateTime::getTimeStamp(),
            'token' => \App\Repository\CookieEncrypt::getInstance()->defineAuthToken(),
            'user-agent' => $this->request->getUserAgent()
        ];
    }
}
