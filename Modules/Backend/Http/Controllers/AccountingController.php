<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Accounting;
use Symfony\Component\Console\Question\Question;

class AccountingController extends BaseController
{
    public function accountingfaq()
    {
        $data = Accounting::all();
        return view('backend::layouts.accountingfaq', compact('data'));
    }
    public function create(Request $request)
    {
        $collection = collect(['question'=> $request->question,'answer'=> $request->answer,]);
        Accounting::create($collection->all());
        return redirect()->back();
    }
    public function delete($id)
    {
        $data = Accounting::find($id)->delete();
        return redirect()->back();
    }
    public function edit($id)
    {
        $data = Accounting::find($id);
        return view('backend::layouts.editaccountingfaq', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = Accounting::find($id);
        $data-> question = $request->question;
        $data-> answer   = $request->answer;
        $data->update();
        return redirect()->route('accounting.faq');

    }
}
