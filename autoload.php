<?php

use App\Controller;
use App\Db;
use App\Model\ControllerResult;
use App\Request;
use App\ViewHelper;

try {
    spl_autoload_register(function ($class_name) {
        @require_once $class_name . '.php';
    });

    function request(): Request
    {
        return Request::init();
    }

    function db(): Db
    {
        static $db;

        if (!isset($db)) {
            $env = parse_ini_file('.env');
            $db = new Db($env);
        }
        return $db;
    }

    $result = new ControllerResult();

    try {
        $controller = match (true) {
            request()->hasSubmit() => new Controller\SubmitController(),
            request()->hasDeleteSubmit() => new Controller\DeleteController(),
            default => new Controller\IndexController(),
        };

        if ($controller) {
            $result = $controller();
        }

    } catch (\Exception|\Throwable $e) {
        $result->error = $e->getMessage();
    }

    $view = new ViewHelper($result);
} catch (\Exception|\Throwable $e) {
    var_dump($e);
    die();
}