<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\NotifyMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends Controller
{
    use InsertTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);

        return view('Admin.contact.index', compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * $contacts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = new Contact();
        return view('Admin.contact.create', compact('contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {

        $contact = Contact::create($request->validated());

        if($request->has('emails')){
            $this->insertEmails($request->emails, $contact->id);
        }
        if($request->has('phones')){
            $this->insertPhones($request->phones, $contact->id);
        }
        if(getSetting("enable_email_notification") == 1 && isset($requestData['assigned_user_id'])) {
            $this->mailer->sendAssignContactEmail("Contact assigned to you", User::find($requestData['assigned_user_id']), $contact);
        }
        Mail::to('receiver-email-id')->send(new NotifyMail());

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('Admin.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('Admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Contact $contact
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request, Contact $contact)
    {

        $contact->update($request->validated());

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id)->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully');
    }
}
