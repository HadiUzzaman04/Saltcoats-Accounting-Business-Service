<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Service;

class ServiceController extends BaseController
{
    public function service()
    {
        $data = Service::all();
        return view('backend::layouts.service', compact('data'));
    }
    public function create(Request $request)
    {
        $collection = collect(['name' =>$request->name,'details' =>$request->details]);
        Service::create($collection->all());
        return redirect()->back();
    }
    public function delete($id)
    {
        $data = Service::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = Service::find($id);
        return view('backend::layouts.editservice', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Service::find($id);
        $data->name    = $request->name;
        $data->details = $request->details;
        $data->update();
        return redirect()->route('admin.service');
    }
    public function view($id)
    {
        $data = Service::find($id);
        return view('backend::layouts.viewservice', compact('data'));
    }
}
