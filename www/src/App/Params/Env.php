<?php

namespace App\Params;

/** 
 * @method string getDbconfigAdapter() Get database adapter.
 * @method string getDbconfigUser() Get database user.
 * @method string getDbconfigUserPassword() Get database user password.
 * @method string getDbconfigHost() Get database host.
 * @method string getDbconfigPort() Get database port.
 * @method string getDbconfigDbname() Get database name.
 * 
 * @method string getCacheAdapter() Get cache adapter name.
 * @method string getCacheDefaultLifetime() Get cache default lifetime.
 * @method string getCacheApcuVersion() Get cache APCU version.
 * @method string getCacheArrayStoreSerialized() Get cache Array store serialized.
 * @method string getCacheArrayMaxItems() Get cache Array max items.
 * @method string getCacheMemcachedUrl() Get cache Memcached url.
 * @method string getCacheRedisUrl() Get cache Redis url.
 * 
 * @method int isEnableLegacyDomFilter() Is enable/disable legacy dom filter.
 * @method int getSuperadminId() Get super admin user id.
 * @method int isDisableAllAddons() Is disable all addons on MentionBB.
 * @method int isEnableBetaUpdates() Is enable beta updates.
 * @method int isDisableExternalLinkPreview() Is external link render status.
 * @method int isEnableConvertWebp() Is enable/disable all images convert to Webp.
 */
class Env
{
    protected $env = [];

    private $excludeParams = [
        "GITHUB_TOKEN",
        "HOSTNAME",
        "PHP_INI_DIR",
        "HOME",
        "PHP_LDFLAGS",
        "PHP_CFLAGS",
        "GITHUB_USER",
        "PHP_VERSION",
        "GPG_KEYS",
        "PHP_CPPFLAGS",
        "PHP_ASC_URL",
        "PHP_URL",
        "PATH",
        "PHPIZE_DEPS",
        "PWD",
        "PHP_SHA256",
        "USER",
        "HTTP_PRIORITY",
        "HTTP_COOKIE",
        "HTTP_SEC_FETCH_USER",
        "HTTP_SEC_FETCH_SITE",
        "HTTP_SEC_FETCH_MODE",
        "HTTP_SEC_FETCH_DEST",
        "HTTP_UPGRADE_INSECURE_REQUESTS",
        "HTTP_ACCEPT_ENCODING",
        "HTTP_ACCEPT_LANGUAGE",
        "HTTP_ACCEPT",
        "HTTP_USER_AGENT",
        "HTTP_CONNECTION",
        "HTTP_X_FORWARDED_PROTO",
        "HTTP_X_FORWARDED_FOR",
        "HTTP_X_REAL_IP",
        "HTTP_HOST",
        "SCRIPT_FILENAME",
        "REDIRECT_STATUS",
        "SERVER_NAME",
        "SERVER_PORT",
        "SERVER_ADDR",
        "REMOTE_PORT",
        "REMOTE_ADDR",
        "SERVER_SOFTWARE",
        "GATEWAY_INTERFACE",
        "REQUEST_SCHEME",
        "SERVER_PROTOCOL",
        "DOCUMENT_ROOT",
        "DOCUMENT_URI",
        "REQUEST_URI",
        "SCRIPT_NAME",
        "CONTENT_LENGTH",
        "CONTENT_TYPE",
        "REQUEST_METHOD",
        "QUERY_STRING",
        "FCGI_ROLE",
        "PHP_SELF",
        "REQUEST_TIME_FLOAT",
        "REQUEST_TIME",
        "argv",
        "argc"
    ];

    public function __construct()
    {
        $this->env = $this->buildEnvironmentParams();
    }

    protected function buildEnvironmentParams()
    {
        foreach ($_ENV as $key => $param)
        {
            if (!in_array($key, $this->excludeParams))
            {
                $params[$key] = $param;
            }
        }

        return $params;
    }

    private function methodToEnvArray($method)
    {
        $method = \preg_split('/(?=[A-Z])/', $method);
        $method = \implode('_', $method);

        $method = \ltrim($method, 'get_');
        $method = \ltrim($method, 'is_');

        $method = \strtoupper($method);

        return $method;
    }
        
    public function __call($method, $arguments)
    {
        $method = $this->methodToEnvArray($method);

        if (isset($this->env[$method]))
        {
            return $this->env[$method];
        }

        return '';
    }
}
