<?php

namespace App\Repositories;

use App\Interfaces\PointsInterface;

class IssueCommentEvent implements PointsInterface
{
    public function getPoints() :int
    {
        return 4 ;
    }
}
