<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function comprendre()
    {
        return view('comprendre');
    }

    public function comparatif()
    {
        return view('comparatif');
    }

    public function calendrier()
    {
        return view('calendrier');
    }

    public function amortissement()
    {
        return view('amortissement');
    }

    public function microFoncier()
    {
        return view('micro-foncier');
    }

    public function deficitFoncier()
    {
        return view('deficit-foncier');
    }

    public function eligibilite()
    {
        return view('eligibilite');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact()
    {
        return view('contact');
    }

    public function simulateur()
    {
        return view('simulateur');
    }
}
