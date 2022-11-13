<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeNewsletterRequest;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subNewsletter(SubscribeNewsletterRequest $request)
    {
        try {
            $request->subscribe();
            return response()->json(['message' => "Successfully subscribed to the newsletter!"], 201);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 503);
        }
    }
}
