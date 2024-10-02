<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index(){

        $users = User::where('age', '>', 17)->ordeRBy('age', 'desc')->limit(3)->get();
        

        // (count($users) <= 0) ? $users = null: $users ;
        return view('users.index', compact('users'));
    }

    public function create(){
        // $user = new User();

        // $user->name = 'Jorgenis';
        // $user->age = '120';
        // $user->address = 'Piantini';
        // $user->email = 'Jorgenis@example.com';
        // $user->password = 'Jorgendis';

        // $user->save();


        User::create([
            
            'name' => 'Jor',
            'age' => 18,
            'address' => 'Nsaco',
            'email' => 'Jdor@example.com',
            'password' => '444477a'
        ]);


        // return view('users.create', compact('user'));
        return redirect()->route('user.index');

    }
}
