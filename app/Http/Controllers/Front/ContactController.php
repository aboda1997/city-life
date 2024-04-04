<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactUsRequest;
use App\Models\Contact;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    private $contact;
    private $contactUs;


    public function __construct(Contact $contact, ContactUs $contactUs)
    {

        $this->contact = $contact;
        $this->contactUs = $contactUs;
    }

    public function index()
    {
        try {

            $contacts = $this->contact->active()->get();

            return view('front.pages.contact', compact(
                'contacts',
            ));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error', __('message.something_wrong')]);
        }
    }

    public function create(ContactUsRequest $request)
    {
        try {
            $requested_data = $request->except('_token');
            $contact_us = $this->contactUs->create($requested_data);
            Mail::to(settings()->contact_email)->send(new \App\Mail\ContactUsMail($contact_us));
            return back()->with('status', __('message.created_successfully'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
