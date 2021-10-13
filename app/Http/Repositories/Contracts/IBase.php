<?php

namespace App\Repositories\Contracts;
/**
 * Interface IBase Created By: Ahmed Mohamed
 */
interface IBase
{
     /**
     * @return mixed
     */
    public function base_feature();

    /**
     * @param $request
     * @return mixed
     */
    public function base_feature2($request);

    /**
     * @param $request
     * @return mixed
     */
    public function base_feature3($request);
}
