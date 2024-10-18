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

        return view('admin.newPage3', compact('data'));
    }

    public function home()
    {
        $datas = [
            'value' => 5,
            'cities' => ['New York', 'California', 'Chicago'],
            'names' => ['a', 'b', 'c', 'd', 'e', 'f'],
            'indice' => 1,
        ];

        return view('home', $datas);
    }

    public function login()
    {
        return view('admin.newPage3');
    }

    public function submitForm(): void
    {
        echo "Form submitted";
    }
}
