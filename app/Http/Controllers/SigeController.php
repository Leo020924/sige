<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigeController extends Controller
{
    public function sms()
    {
        return view('sige.sms');
    }


    public function email()
    {
        return view('sige.email');
    }
    
    public function wa()
    {
        return view('sige.whatsapp');
    }
}
