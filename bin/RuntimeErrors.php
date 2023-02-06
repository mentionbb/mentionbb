<?php

class RuntimeErrors
{
    public static function Show($type)
    {
        require_once(APPLICATION_SELF . '/Standalone/Templater.php');
        $templater = new Release\Standalone\Templater();
        $templater->setPath(APPLICATION_SELF . '/Standalone/Errors/Views');
        $templater->addGlobals([
            'app' => [
                'public_dir' => PUBLIC_DIR,
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

        return;
    }
}
