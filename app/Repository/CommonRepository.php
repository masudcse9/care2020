<?php

namespace App\Repository;

use App\Interfaces\CommonInterface;
use App\Models\Settings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CommonRepository implements CommonInterface
{
    public function indexWithPagination(Model $model, $pagination)
    {
        $common = $model->where('status',1)->paginate($pagination);
        if(isset($common) && $common->total() != 0){
            return $common;
        }
        else {
            return response()->json(["message"=>'there is no data'],200);
        }
    }

    public function commonFind(Model $model, $id){
        $common = $model->find($id);
        if(isset($common) && $common != null){
            return $common;
        }
        else {
            return response()->json(["message"=>'data not found'],200);
        }
    }


    public function commonStore(Model $model,Request $request){
        try {
            $common = $model->firstOrCreate($request->all());
            return response()->json(["message"=>'Successfully Updated'],200);
        } catch (\Throwable $th) {
            return response()->json(["message"=>'something went wrong'],500);
        }
    }



    public function updateSettings(Model $model, $key, $value)
    {
        $settings = $model->firstOrNew(['key' =>  $key]);
        $settings->value = $value;
        $settings->save();

    }
}
