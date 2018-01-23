<?php
/**
 * Created by PhpStorm.
 * User: DrekTop
 * Date: 23/01/2018
 * Time: 09:55 AM
 */

namespace Josebefree\Tuieditor;
use Illuminate\Support\Facades\Facade;


class TuieditorFecade extends Facade
{

    public static function getFacadeAccessor() {
        return TuieditorBuilder::class;
    }

}