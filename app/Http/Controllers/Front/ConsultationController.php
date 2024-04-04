<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ConsultationRequest;
use App\Models\Consultation;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ConsultationController extends Controller
{
    private $contact;
    private $consultation;
    private $service;


    public function __construct(Contact $contact, Consultation $consultation, Service $service)
    {
        $this->contact = $contact;
        $this->consultation = $consultation;
        $this->service = $service;
    }

    public function index()
    {
        try {
            $contacts = $this->contact->active()->get();
            $services = $this->service->active()->get();
            return view('front.pages.consultations', compact('contacts', 'services'));
        } catch (\Exception $e) {
            return redirect()->back()->with(['error', __('message.something_wrong')]);
        }
    }

    public function store(ConsultationRequest $request)
    {
        try {
            if (!$request->has('facility_have_financial'))
                $request->request->add(['facility_have_financial' => 0]);
            else
                $request->request->add(['facility_have_financial' => 1]);

            $requested_data = $request->except('_token');
            $consultation_request = $this->consultation->create($requested_data);
            Mail::to(settings()->contact_email)->send(new \App\Mail\ConsultationRequestMail($consultation_request));
            return back()->with('status', __('message.created_successfully'));
        } catch (\Exception $e) {
            return $e->getMessage();
            return redirect()->back()->with(['error' => __('message.something_wrong')]);
        }
    }
}
