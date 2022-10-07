<?php

namespace App\Mvc\Pub;

use App\Mvc\Controller;
use App\Rule\Pub;

class Test extends Controller implements Pub
{
    public function container($option)
    {
        if ($this->request->getRequestMethod() == "GET")
        {
            $xml = new \App\Renderer\Response\Xml($this->request);
            $xml->init();

            $xml->serialize([
                'foo' => [
                    'attributes' => [
                        'bar' => 'foo'
                    ],
                    'content' => [
                        'ss' => [
                            'attributes' => [
                                'id' => 1,
                                'id2' => 2
                            ],
                            'content' => [
                                'sub' => [
                                    'content' => 'sub'
                                ],
                                'sssa' => [
                                    'content' => '&'
                                ]
                            ]
                        ]
                    ]
                ]
            ]);

            $xml->render();
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
        }
    }
}
