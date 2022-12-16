<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContractUpdateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny',Contact::class);
        $contacts = Contact::query()->latest()->get();
        return view('contact.home')->with('contacts',$contacts);
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(ContactStoreRequest $request)
    {
        $this->authorize('create',Contact::class);
        $contact = Contact::query()->create([
            "user_id" => auth()->user()->id,
            "name" => $request->name,
            "email" => $request->email,
            "birthday" => $request->birthday,
            "company" => $request->company,
            "description" => $request->description,

        ]);

        return view('dashboard',$contact);
    }

    public function show(Contact $contact)
    {
        $this->authorize('view',$contact);
        return view('contact.detail')->with('contact',$contact);
    }

    public function edit(Contact $contact)
    {
        return view('contact.edit',compact('contact'));
    }

    public function update(ContractUpdateRequest $request,$contact)
    {
        $this->authorize('update',$contact);
        $contact = Contact::query()->findOrFail($contact);
        $contact->updateOrFail($request->only(['name','user_id','company','birthday','description']));
        return redirect()->route('contact.show',$contact)->with(['status','Update successfully!']);
    }

    public function destroy(Contact $contact)
    {
        $this->authorize('delete',$contact);
        $contact->delete();
        return redirect()->route("contact.index")->with("status","Successfully deleted");
    }

}
