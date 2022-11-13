<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommercialBookingEnquiryRequest;
use Illuminate\Http\Request;

class CommercialBookingController extends Controller
{
    public function sendEnquiry(CommercialBookingEnquiryRequest $request)
    {
        try {
            $request->send();

            return response()->json(['message' => 'success'], 201);
        } catch (\Throwable $e) {
            return response()->json(['message' => $e->getMessage()], 503);
        }
    }
}
