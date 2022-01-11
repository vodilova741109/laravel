<?php

namespace App\Http\Controllers;

use App\Models\Phonebook;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function index(){
        // $users = Phonebook::all();
        // $users = Phonebook::orderBy('name') -> get();
         $users = Phonebook::orderBy('name') -> paginate(10);
        // dd($users);
        return view('home', compact('users'));
    }

    public function search(Request $request){
        
         $s = $request->s;
        dd($s);
        // return view('home', compact('users'));
    }
}
