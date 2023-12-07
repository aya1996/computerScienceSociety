<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Traits\FileManagerTrait;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    use FileManagerTrait;

    public function index()
    {
        try
        {
            $contacts = Contact::get();
            return view('dashboard.contacts.index',compact('contacts'));
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');

        }
    }


    public function edit($id)
    {
        $contact = Contact::find($id);
        try
        {
            if(isset($contact))
            {
                return view('dashboard.contacts.edit',compact('contact'));
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');

        }
    }
    public function update(Request $request,$id)
    {
        $contact = Contact::find($id);
        try
        {
            if(isset($contact))
            {
                $contact->update([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'msg' => $request->msg,
                ]);
                return redirect()->route('contacts.index')->with('success' ,'تم التعديل بنجاح');
            }
            else
            {
                return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ ما فضلا المحاولة لاحقا');
        }
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        try
        {
            if(isset($contact))
            {
                $contact->delete();
                return back()->with('success' , 'تم الحذف بنجاح');
            }
        }
        catch(\Exception $ex)
        {
            return back()->with('failed' , 'هناك خطأ فضلا المحاولة لاحقا');

        }
    }

}
