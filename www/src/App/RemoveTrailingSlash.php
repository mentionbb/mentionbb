<?php

namespace App;

class RemoveTrailingSlash
{
    public static function removeTrailingSlash(\App\Repository\Request $request)
    {
        $pathInfo = $request->getPathInfo();
        $requestUri = $request->getRequestUri();

        if (substr($requestUri, -1) == '/' && $pathInfo != '/')
        {
            $url = str_replace($pathInfo, rtrim($pathInfo, ' /'), $requestUri);

            $request->redirect($url, false);
        }
    }
}
