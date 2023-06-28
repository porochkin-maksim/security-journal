<?php

namespace App;

use App\Model\ControllerResult;
use App\Model\INC;

class ViewHelper
{
    public ControllerResult $result;

    public function __construct(ControllerResult $result)
    {
        $this->result = $result;
    }

    /** @return INC[] */
    public function incidents(): array
    {
        return $this->result->incidents;
    }

    public function message(): string
    {
        if ($this->result->error) {
            $message = $this->result->error;
            return "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>$message</strong> Вы можете закрыть это сообщение. <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span></button> </div>";
        } elseif ($this->result->success) {
            $message = $this->result->success;
            return "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    <strong>$message</strong> Вы можете закрыть это сообщение. <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>&times;</span></button> </div>";
        }
        return '';
    }
}