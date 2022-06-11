<?php

namespace App\Repositories;

use App\Interfaces\PointsInterface;

class PushEvent implements PointsInterface
{
    public function getPoints() :int
    {
        return 10 ;
    }
}
