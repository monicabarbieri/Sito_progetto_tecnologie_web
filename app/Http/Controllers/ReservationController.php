<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Event;
use App\User;
use Illuminate\Http\Request;
use Log; 
use DB;

class ReservationController extends Controller
{
    public function __construct()
    {
        $this->middleware('client'); // 
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $user = User::all();

        $reservations = Reservation::all();
        return view('reservations.index', compact('reservations','user'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $this->middleware('user');
        $events = Event::all(); //questo si prende tutte le reservation 
        return view('reservations.create', compact('events'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all(); // prendo i dati e li salvo nella variabile input
        

        Log::info($input); // poi scrivo il contenuto della variabile nel file di log


                //validazione dei dati
            $validationData = $request->validate([
                'user_id' => 'required',
                'people' => 'required|numeric|max:10',
                'date' => 'required',
                'time' => 'required',
                'green_pass' => 'required',
                'meat_menu',
                'fish_menu',
                'vegetarian_menu',
                'vegan_menu',
                'child_menu',
                'request' => 'nullable',
                'event_id' => 'nullable',
            ]);
            


        Reservation::create($input);

        return redirect('/reservation'); // faccio il redirect all'url di base (delle prenotazioni)

    }

                /**
             * Configure the validator instance.
             *
             * @param  \Illuminate\Validation\Validator  $validator
             * @return void
             */
            
    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        $events = Event::all();        
        return view('reservations.edit', compact('reservation','events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {


        
        $input = $request->all();

        // $expanse-> update($input); // procede all'aggiornamento massivo di tutti gli attributi presenti nell'array $input

        $reservation->people = $input['people'];

        $reservation->date = $input['date'];

        $reservation->time = $input['time'];

        $reservation->green_pass = $input['green_pass'];

        $reservation->meat_menu = $input['meat_menu'];

        $reservation->fish_menu = $input['fish_menu'];

        $reservation->vegetarian_menu = $input['vegetarian_menu'];

        $reservation->vegan_menu = $input['vegan_menu'];

        $reservation->child_menu = $input['child_menu'];

        $reservation->request = $input['request'];

        $reservation->event_id = $input['event_id'];

        $reservation->save();

        return redirect('/reservation');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        
        return redirect('/reservation');

    }
}
