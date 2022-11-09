<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Frontend\Entities\Contact;

class BackendController extends BaseController
{
   public function contactus()
   {
      $data = Contact::all();
      return view('backend::layouts.contactus', compact('data'));
   }
   public function delete($id)
   {
       $data = Contact::find($id)->delete();
       return redirect()->back();
   }
}
