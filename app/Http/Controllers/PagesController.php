<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function homepage()
    {
        //return view('pages/homepage');
        $users = User::all();
        return view('pages/homepage')->with('users', $users);
    }

    public function about(){
        return view('pages/about');
    }
    public function create(){
        return view('layouts.user.create-user');
    }

    public function store(Request $request){
        //dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt($request->password),
        ]);
        return redirect()->route('homepage');
    }
    
   public function edit($id){

    $user = User::find($id);
    //dd($user);
    return view('pages/edit')->with('user',$user);
    
   
   }

   public function destroy($id){

    User::find($id)->delete();
    return redirect()->back();

   }

   
    
}
