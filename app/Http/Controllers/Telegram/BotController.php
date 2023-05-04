<?php

namespace App\Http\Controllers\Telegram;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Sysgram\Telegram\Bot;

class BotController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    */
    public function setWbhook($token)
    {
        $response = Http::get('https://api.telegram.org/bot' . $token . '/setwebhook', ['url' => route('telegram.index')]);
        dd($response);
        return response()->json($response);
    }

    public function index()
    {
        Bot::sendMessage(677949397, "This is bot worked with telegram webhook");
    }
}
