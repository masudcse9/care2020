<?php

namespace App\Repository;

use App\Interfaces\CommonInterface;
use App\Models\Settings;

class CommonRepository implements CommonInterface
{
    public function indexWithPagination($model = null, $pagination)
    {
        $common = $model->where('status',1)->get();
        if(isset($common) && $common->total() != 0){
            return $common;
        }
        else {
            return 'there is no data';
        }
    }


    public function updateSettings($key, $value)
    {
        $settings = Settings::firstOrNew(['key' =>  $key]);
        $settings->value = $value;
        $settings->save();

    }
}
