<?php

namespace App\Repositories;

use App\Interfaces\PointsInterface;

class PullRequestEvent implements PointsInterface
{
    public function getPoints() :int
    {
        return 5 ;
    }
}
