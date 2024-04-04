<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $page;
    private $contact;

    public function __construct(Page $page, Contact $contact)
    {
        $this->page = $page;
        $this->contact = $contact;
    }

    public function index()
    {
        try {
            $about_us = $this->page->where('identifier', 'about_us')->first();

            $vision = $this->page->where('identifier', 'vision')->first();
            $message = $this->page->where('identifier', 'message')->first();
            $goals = $this->page->where('identifier', 'goals')->first();
            $contacts = $this->contact->active()->get();

            return view('front.pages.about', compact(
                'about_us',
                'vision',
                'message',
                'goals',
                'contacts'
            ));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error', __('message.something_wrong')]);
        }
    }
}
