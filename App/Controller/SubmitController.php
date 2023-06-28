<?php

namespace App\Controller;

use App\Model\ControllerResult;
class SubmitController extends AbstractController
{
    public function __invoke(): ControllerResult
    {
        $result   = new ControllerResult();

        $sql = ("INSERT INTO `INC`(`ID`, `END`, `DEZ`, `TYP`, `DTF`, `SRC`, `CRT`, `TRG`, `DSC`, `EXC`, `MES`, `DTE`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
        $arg = request()->all();

        $dbResult = db()->query($sql, $arg);
        if ($dbResult) {
            $result->success = 'Данные успешно отправлены!';
        } else {
            $result->error   = 'Данные не отправлены!';
        }

        return $result;
    }
}