<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageDashboardController extends Controller
{
    public function indexDashboard()
    {
        return view('backend.pages.indexDashboard');
    }
}
