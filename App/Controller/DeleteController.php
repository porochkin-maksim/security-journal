<?php

namespace App\Controller;

use App\Model\ControllerResult;
class DeleteController extends AbstractController
{
    public function __invoke(): ControllerResult
    {

//        $sql = "DELETE FROM INC WHERE ID=?";
//        $result = db()->query($sql, $arg);
//
//
//        $query = $pdo->prepare($sql);
//        $query->execute([$get_id]);
        header('Location: '. $_SERVER['HTTP_REFERER']);
//
//
//        $sql = ("INSERT INTO `INC`(`ID`, `END`, `DEZ`, `TYP`, `DTF`, `SRC`, `CRT`, `TRG`, `DSC`, `EXC`, `MES`, `DTE`) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
//        $arg = request()->all();
//
//        $result = db()->query($sql, $arg);
//
//        var_dump($result);
//        die();
//        @$success = '<div class="alert alert-success alert-dismissible fade show" role="alert">
//  <strong>Данные успешно отправлены!</strong> Вы можете закрыть это сообщение. <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//    <span aria-hidden="true">&times;</span></button> </div>';

    }
}