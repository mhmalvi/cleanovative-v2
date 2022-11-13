<?php

namespace App\Http\Requests;

use App\Mail\NewsletterSubscribedMail;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class SubscribeNewsletterRequest extends MailRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'name' => 'required',
        ];
    }

    public function subscribe()
    {
        Subscriber::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        Mail::to($this->to)->send(new NewsletterSubscribedMail($this->all()));
    }
}
