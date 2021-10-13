<?php

 

namespace app;

use App\Repositories\Contracts\IBase;

/**
 * Interface ICompany2
 */
interface ICompany extends IBase
{
    /**
     * @return mixed
     */
    public function feature();

    /**
     * @param $request
     * @return mixed
     */
    public function feature2($request);

    /**
     * @param $request
     * @return mixed
     */
    public function feature3($request);

}