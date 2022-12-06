<?php

namespace App\Interfaces;

interface CommonInterface
{
    public function indexWithPagination($model, $pagination);

    public function updateSettings($key, $value);
}
