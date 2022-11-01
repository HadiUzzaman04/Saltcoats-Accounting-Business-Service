<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Frontend\Entities\Contact;

class ContactusController extends BaseController
{
    public function contactus()
    {
        return view('layouts.page.contactus');
    }
    public function create(Request $request)
    {
        $collection = collect(['name' => $request->name,'email' => $request->email, 'subject' => $request->subject, 
        'phone' =>$request ->phone,'message' =>$request->message,]);
        Contact::create($collection->all());
        return redirect()->back();
    }
}
