<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showView(): View
    {
        return view('admin.newPage3');
    }
}
