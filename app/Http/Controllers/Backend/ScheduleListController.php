<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleListController extends Controller
{
    public function index()
    {
        return view('backend.scheduling.scheduling_list.index');
    }
}
