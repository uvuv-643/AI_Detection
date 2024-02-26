<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class ApiService
{

    public function fetchMemberships() : Collection
    {
        $apiUrl = config('api.memberships');
        $apiResponse = Http::get($apiUrl);
        return collect(json_decode($apiResponse->body(), false));
    }

}
