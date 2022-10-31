<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Controllers\BaseController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ContactusController extends BaseController
{
    public function contactus()
    {
        return view('layouts.page.contactus');
    }
}
