<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use Log;

class EventController extends Controller
{
        //da aggiungere a tutti i controller che non possono essere raggiunti dal cliente
    public function __construct()
    {
        $this->middleware('admin'); // 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('event.index',compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $event = new Event();
        $event->typology = $input['typology']; 
        $event->save();

        return json_encode(['status' => 'ok']);  //sto preparando un json

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        // Sposto tutte le spese della categoria nella categoria 1 ("Altro")
		  $reservations = DB::table('reservations')
          ->where('event_id', '=', $id)
          ->update(array('event_id' => 1));
			
		  $event = Event::find($id);
		  $event->delete();
		
      return json_encode(['status' => 'ok', 'message' => 'Event deleted']);
    }
}
