<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Review;
use App\Event;
use App\Reservation;
use Log; 
use DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

     public function index()
     {
         $users = User::all();
         return view('users.index', compact('users'));
     }

     public function create()
     {
         $users = User::all();
 
         return view('users.create', compact('users'));
 
     }

     public function store(Request $request)
    {
        $input = $request->all();
        Log::info($input);
        $validatedData = $request->validate([
            'name'              => 'required',
            'surname'           => 'required',
            'address'           => 'required',
            'gender'            => 'required',
            'telephone_number'  => 'required|numeric|digits:10',
            'date_of_birth'     => 'required',
            'ssn'               => 'required|digits:16',
            'email'             => 'required',
            'password'          => 'required',
        ]);
        User::create($input);
        return redirect('/home'); // faccio il redirect all'url di base (delle prenotazioni)

    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $message="SSN must be of 16 characters!";
        $input = $request->all();

        if(strlen($input['SSN'])==16)
        {
            $user->name = $input['name'];
            $user->surname = $input['surname'];
            $user->address = $input['address'];
            $user->gender = $input['gender'];
            $user->telephone_number = $input['telephone_number'];
            $user->date_of_birth = $input['date_of_birth'];
            $user->SSN = $input['SSN'];
            $user->email = $input['email'];
            $user->password =Hash::make($input['password']);
            $user->save();
            return redirect('/users');
        }
        return redirect('/users/11/edit')->with('alert', $message);

    }



    public function destroy(User $user)
    {
        $user->delete();
        
        return redirect('/users');

    }

}
