<?php

namespace App\Http\Controllers;

use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ResponseGitHubController extends Controller
{
    use ApiResponses;

    /**
     * Get user score based on the events on repositories.
     *
     * @param  string  $userName
     * @return \Illuminate\Http\JsonResponse
     */
    public function getUserPoints($userName)
    {
        $githubResponse = Http::get("https://api.github.com/users/{$userName}/events/public");

        if (!$githubResponse->ok())
            return $this->failure($githubResponse->json($key = null)['message'], $githubResponse->status());

        $userGitHubEvents = $githubResponse->json($key = null);

        $score = 0;

        foreach ($userGitHubEvents as  $event) {

            $nameSpace = '\App\\Repositories\\' . $event['type'];

            if (!class_exists($nameSpace))
                $nameSpace = '\App\\Repositories\\OtherEvent';

            $points = new $nameSpace;

            $pointsByType =  $points->getPoints();

            $data[] = [
                'type' => $event['type'],
                'repository' => Str::replace($userName . '/', '', $event['repo']['name']),
                'date' => $event['created_at'],
                'points' =>  $pointsByType,
            ];

            $score += $pointsByType;
        }
        return $this->success(['data' => $data, 'score' => $score]);
    }
}
