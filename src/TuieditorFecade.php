<?php
/**
 * Created by PhpStorm.
 * User: DrekTop
 * Date: 23/01/2018
 * Time: 09:55 AM
 */

namespace Josebefree\Tuieditor;


class TuieditorFecade extends Fecade
{

    public function getAccessor() {
        return TuieditorBuilder::class;
    }

}