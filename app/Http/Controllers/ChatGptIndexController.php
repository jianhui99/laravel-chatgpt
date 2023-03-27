<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class ChatGptIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(string $id = null) : Response
    {
        if($id) {
            $chat = Chat::findOrFail($id);
            return Inertia::render('Chat/ChatIndex', [
                'chat' => $chat,
            ]);
        }

        return Inertia::render('Chat/ChatIndex');
    }
}
