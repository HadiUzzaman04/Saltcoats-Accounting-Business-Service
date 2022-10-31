<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends BaseController
{
   public function index()
   {
        return view('layouts.index');
   }
   public function accounting()
   {
      return view('layouts.page.accountingservice');
   }
   public function deck()
   {
      return view('layouts.page.deckservice');
   }
   public function accountingfaq()
   {
      return view('layouts.page.accountingfaq');
   }
   public function audit()
   {
      return view('layouts.page.auditservice');
   }
   public function rera()
   {
      return view('layouts.page.rera');
   }
   public function hoa()
   {
      return view('layouts.page.hoa');
   }
   public function ifrs()
   {
      return view('layouts.page.ifrs');
   }
   public function auditfaq()
   {
      return view('layouts.page.auditfaq');
   }
   public function corporatetax()
   {
      return view('layouts.page.corporatetax');
   }
   public function vatconsultant()
   {
      return view('layouts.page.vatconsultant');
   }
   public function taxfaq()
   {
      return view('layouts.page.taxfaq');
   }
   public function aboutus()
   {
      return view('layouts.page.aboutus');
   }
}
