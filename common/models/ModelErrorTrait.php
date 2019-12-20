<?php

namespace common\models;

trait ModelErrorTrait
{
    public function getOneError()
    {
        return reset($this->getFirstErrors());
    }
}