<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index', [
            'mode' => 'dark'
        ]);
    }

    public function shop_service()
    {
        return view('main.shop_service', [
            'mode' => 'light'
        ]);
    }

    public function home_service()
    {
        return view('main.home_service', [
            'mode' => 'dark'
        ]);
    }

    public function glasses()
    {
        return view('main.home', [
            'mode' => 'dark'
        ]);
    }

    public function lenses()
    {
        return view('main.home', [
            'mode' => 'dark'
        ]);
    }

    public function about()
    {
        return view('main.home', [
            'mode' => 'dark'
        ]);
    }
}
