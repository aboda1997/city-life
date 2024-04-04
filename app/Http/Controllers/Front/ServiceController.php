<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $service;
    private $contact;

    public function __construct(Service $service, Contact $contact)
    {
        $this->service = $service;
        $this->contact = $contact;
    }

    public function index()
    {
        try {
            $services = $this->service->active()->latest('id')->paginate(6);
            $contacts = $this->contact->active()->get();

            return view('front.services.index', compact(
                'services',
                'contacts'
            ));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error', __('message.something_wrong')]);
        }
    }

    public function show(Service $service)
    {
        $contacts = $this->contact->active()->get();

        return view('front.services.show', compact(
            'service',
            'contacts',
        ));
    }
}
