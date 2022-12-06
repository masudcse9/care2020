<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

interface CommonInterface
{
    public function indexWithPagination(Model $model, $pagination);

    public function updateSettings($key, $value);

    public function commonFind(Model $model, $id);

    public function commonStore(Model $model,Request $request);
}
