<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }
    public function Articulos()
    {
        return view('Articulos');
    }

    public function Pago()
    {
        return view('pago');
    }

    public function Entrega()
    {
        return view('entrega');
    }

}

