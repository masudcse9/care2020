<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MobileViewController extends Controller
{
    public function index()
    {
        return view('backend.scheduling.mobile_view.index');
    }
}
