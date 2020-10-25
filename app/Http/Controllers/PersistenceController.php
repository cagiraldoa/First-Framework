<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PersistenceController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store()
    {


        $user_ = User::find(auth()->user()->id);



        $milimeters = $user_->milimeters;
        $centimeters = $user_->centimeters;
        $decimeters = $user_->decimeters;
        $meters = $user_->meters;
        $decameters = $user_->decameters;
        $hectometers = $user_->hectometers;
        $kilometers = $user_->kilometers;


        return view('persistence', compact('milimeters', 'centimeters', 'decimeters', 'meters', 'decameters', 'hectometers', 'kilometers'));
    }
}
