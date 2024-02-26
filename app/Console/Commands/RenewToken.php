<?php

namespace App\Console\Commands;

use App\Models\APIToken;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class RenewToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:renew-token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Renew application token for detection';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::post('https://id.copyleaks.com/v3/account/login/api', [
            'email' => config('api.detection.token.email'),
            'key' => config('api.detection.token.key'),
        ]);
        $responseData = json_decode($response->body(), false);
        $token = $responseData->access_token;
        APIToken::query()->create([
            'token' => $token
        ]);
    }
}
