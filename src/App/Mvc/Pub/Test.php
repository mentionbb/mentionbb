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
        }
        elseif ($this->request->getRequestMethod() == "POST")
        {
        }
    }
}
