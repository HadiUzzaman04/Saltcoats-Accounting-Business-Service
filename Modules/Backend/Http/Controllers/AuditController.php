<?php

namespace Modules\Backend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Backend\Entities\Audit;
use PhpParser\Node\Expr\FuncCall;

class AuditController extends BaseController
{
   public function auditfaq()
   {
        $data = Audit::all();
        return view('backend::layouts.auditfaq',compact('data'));
   }
   public function create(Request $request)
   {
        $collection = collect(['question' => $request->question,'answer' => $request->answer,]);
        Audit::create($collection->all());
        return redirect()->back();
   }
   public function delete($id)
   {
        $data = Audit::find($id)->delete();
        return redirect()->back();
   }
   public function edit($id)
   {
        $data = Audit::find($id);
        return view('backend::layouts.editauditfaq',compact('data'));
   }
   public function update(Request $request, $id)
   {
     $data = Audit::find($id);
     $data-> question = $request->question;
     $data-> answer   = $request->answer;
     $data->update();
     return redirect()->route('audit.faq');
   }
}
