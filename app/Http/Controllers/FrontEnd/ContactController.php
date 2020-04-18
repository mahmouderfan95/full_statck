<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\FrontEnd\Contact\Store;
use App\Contact;

class ContactController extends Controller
{
    /* page function */
    public function page($id){
        $contact = Contact::find($id);
        return view('frontEnd.contact.page',['contact'=> $contact]);
    }
    /* end of page function */
    /* function store message */
    public function store(Store $request){
        $contact_data = $request->all();
        $contact = Contact::create($contact_data);
        return redirect()->route('contact-page',$contact->id);
        // return dd($request->all());
    }
    /* end of store message */
}
