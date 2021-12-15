<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\User;

class ReservationOwnerController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('admin'); // 
    }


    public function index(User $user)
    {
        $user = User::all();
        $reservations = Reservation::all();
        return view('reservationowner.index', compact('reservations','user'));
        
    }
}
