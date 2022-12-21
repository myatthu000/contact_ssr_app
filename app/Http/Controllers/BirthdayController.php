<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BirthdayController extends Controller
{
    public function index()
    {
        $contacts = \request()->user()->contacts()->fromBirthday()->get();
//        return $contacts;
        return view('contact.birthday')->with('contacts',$contacts);
    }
}
