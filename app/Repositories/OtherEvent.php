<?php

namespace App\Repositories;

use App\Interfaces\PointsInterface;

class OtherEvent implements PointsInterface
{
    public function getPoints() :int
    {
        return 1 ;
    }
}
