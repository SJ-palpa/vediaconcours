<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('home');
    }

    public function getParticipant()
    {
        return view('participant');
    }

    public function getEmploye()
    {
        return view('employe');
    }
}
