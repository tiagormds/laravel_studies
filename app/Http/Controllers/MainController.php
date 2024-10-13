<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showView(): View
    {
        //método 1
        $data = [
            'name'=>'Tiago Rafael',
            'telefone'=>'82999374434',
        ];

        return view('admin.newPage3', compact('data', 'value'));
    }

    public function home()
    {
        $value = 200;

        return view('home', compact('value'));
    }
}
