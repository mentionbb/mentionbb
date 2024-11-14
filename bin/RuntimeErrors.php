<?php

namespace Binaries;

class RuntimeErrors
{
    public static function Show($type, array $customParams = [])
    {
        if (!file_exists(APPLICATION_SELF . '/vendor/autoload.php'))
        {
            require_once(APPLICATION_SELF . '/App/Template/Simple.php');
            require_once(APPLICATION_SELF . '/App/SubContainer/AppSub.php');
        }

        $templater = new \App\Template\Simple();
        $templater->setPath(APPLICATION_SELF . '/App/Errors/Views');
        $templater->addGlobals([
            'app' => [
                'public_dir' => \App\SubContainer\AppSub::getPublicDir(),
                'index_dir' => INDEX_DIR
            ]
        ]);

        if ($type == 'vendor')
        {
            echo $templater->render(
                '{page_container:vendor}',
                [],
                'array'
            );
        }
        else if ($type == 'env_not_found')
        {
            echo $templater->render(
                '{page_container:env_not_found}',
                [],
                'array'
            );
        }
        else if ($type == 'unsupported_php_version')
        {
            echo $templater->render(
                '{page_container:unsupported_php_version}',
                [],
                'array'
            );
        }
        else if ($type == 'php_extensions_not_found')
        {
            echo $templater->render(
                '{page_container:php_extensions_not_found}',
                [
                    'string' => [
                        'server' => new \App\SubContainer\ServerEnvironment()
                    ]
                ],
                'array'
            );
        }
        else if ($type == 'exception')
        {
            echo $templater->render('{page_container:exception}', $customParams, 'array');
        }

        return;
    }
}
