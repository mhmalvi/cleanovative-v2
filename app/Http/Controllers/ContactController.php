<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEnquiryRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEnquiry(ContactEnquiryRequest $request)
    {
        try {
            $request->send();

            return response()->json(['message' => 'Successfully sent your enquiry'], 201);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 503);
        }
    }
}
