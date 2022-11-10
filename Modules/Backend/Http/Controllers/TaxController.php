<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Tax;

class TaxController extends BaseController
{
    public function taxfaq()
    {
        $data = Tax::all();
        return view('backend::layouts.taxfaq',compact('data'));
    }
    public function create(Request $request)
    {
        $collection = collect(['question' => $request->question,'answer' => $request->answer,]);
        Tax::create($collection->all());
        return redirect()->back();
    }
    public function delete($id)
    {
        $data = Tax::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = Tax::find($id);
        return view('backend::layouts.edittaxfaq', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Tax::find($id);
        $data-> question = $request->question;
        $data-> answer   = $request->answer;
        $data->update();
        return redirect()->route('tax.faq');
    }
}
