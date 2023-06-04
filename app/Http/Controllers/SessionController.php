<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function accessSessionData(Request $request) {
        if($request->session()->has('my_name'))
           echo $request->session()->get('name');
        else
           echo 'No data in the session';
     }
     public function storeSessionData(Request $request) {
        $request->session()->put('name','Virat Gandhi');
        echo "Data has been added to session";
     }
     public function deleteSessionData(Request $request) {
        $request->session()->forget('name');
        echo "Data has been removed from session.";
     }
}
