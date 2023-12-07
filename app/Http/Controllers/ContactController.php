<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\Contact\SendMessage;

class ContactController extends Controller
{

    public function index()
    {
        return view('site.contacts.index');
    }


    public function store(SendMessage $request)
    {
        try
        {
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->phone = $request->phone;
            $contact->msg = $request->msg;
            $contact->email = $request->email;
            $contact->save();
            return back()->with('success' , 'تم الإرسال بنجاح');
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'حدثت مشكلة  ما فضلا المراجعة');
        }
    }
}
