<?php
/**
 * Created by PhpStorm.
 * User: eddy
 * Date: 2016/10/17
 * Time: 11:47
 */

namespace iBrand\EC\Open\Backend\Store\Facades;

use Illuminate\Support\Facades\Facade;

class RefundService extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'RefundService';
//        parent::getFacadeAccessor(); // TODO: Change the autogenerated stub
    }
}