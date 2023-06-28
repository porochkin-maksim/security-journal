<?php

namespace App\Controller;

use App\Model\ControllerResult;
use App\Model\INC;

class IndexController extends AbstractController
{
    public function __invoke(): ControllerResult
    {
        $result   = new ControllerResult();

        $dbResult = db()->query("SELECT * FROM `INC`");

        foreach ($dbResult as $item) {
            $result->incidents[] = new INC($item);
        }

        return $result;
    }
}