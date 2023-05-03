<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bot;
use Inertia\Inertia;

class BotController extends Controller
{
    public function index()
    {
        $bots = Bot::orderBy('id')->paginate(50);

        return Inertia::render('Bots', compact('bots'));
    }
}
