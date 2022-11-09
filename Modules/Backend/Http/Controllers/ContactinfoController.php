<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Footer;

class ContactinfoController extends BaseController
{
    public function contactinfo()
    {
        $data =Footer ::all();
        return view('backend::layouts.contactinfo', compact('data'));
    }
    public function create(Request $request)
    {
        $collection = collect(['address' => $request->address,'phone' => $request->phone,
        'email' => $request->email,]);
        Footer::create($collection->all());
        return redirect()->back();
    }
    public function delete($id)
    {
        $data = Footer::find($id)->delete();
        return redirect()->back();
    }
    public function editcontactinfo($id)
    {
        $data = Footer::find($id);
        return view('backend::layouts.editcontactinfo',compact('data'));
    }
    public function updatecontactinfo(Request $request,$id)
    {
        $data = Footer::find($id);
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->update();
        return redirect()->route('contactinfo');
    }
}
