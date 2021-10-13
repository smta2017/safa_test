<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\IBase;

/**
 * Class BaseRepository Created By: Ahmed Mohamed
 */
abstract class Company2  extends BaseRepository implements  IBase
{
    /**
     * @return mixed
     */
    public function base_feature(){
        return "x";
    }

    /**
     * @param $request
     * @return mixed
     */
    public function base_feature2($request){
        return "x";
    }

    /**
     * @param $request
     * @return mixed
     */
    public function base_feature3($request){
        return "x";
    }
}
