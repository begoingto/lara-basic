<?php
namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function lession()
    {
        return view('lession');
    }

    public function sharing()
    {
        return view('sharing');
    }

    public function researching()
    {
        return view('researching');
    }

    public function forum()
    {
        return view('forum');
    }

    public function about()
    {
        return view('about');
    }
}
