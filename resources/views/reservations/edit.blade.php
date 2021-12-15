@extends('layouts.app')

@section('content')

  
<div class="container">
<div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
            <div class="row justify-content-center w3-purple">
<h1> Modify your Reservation </h1>
</div>

    <form action="  {{ URL::action('ReservationController@update', $reservation)}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}


<div class="row justify-content-center ">


        <div class="form-group ">
            <label class="font-weight-bold row justify-content-center" for="people">People</label>
            <input type="number" class="form-control " min="1" max="10" name="people"value="{{ $reservation->people}}" >
            <small class="form-text text-muted">How many people?</small>
        </div>
        &nbsp;
        &nbsp;
        <div class="form-group">
          <label class="font-weight-bold row justify-content-center" for="date">Data</label>
          <input type="date" class="form-control" name="date" value="{{ $reservation->date}}">
          <small class="form-text text-muted">&nbsp Enter a date</small>
        </div>
        
        </div>

        <label class="font-weight-bold row justify-content-center" for="time">Time</label>

<div class="row justify-content-center ">
<break>

          <select class="form-select" type="time" name="time"  for="time">
          <option value="{{ $reservation->time}}">{{ $reservation->time}}</option>
  <option value="12:15">12:15</option>
  <option value="12:30">12:30</option>
  <option value="12:45">12:45</option>
  <option value="13:00">13:00</option>
  <option value="13:15">13:15</option>
  <option value="13:30">13:30</option>
  <option value="13:45">13:45</option>
  <option value="14:00">14:00</option>
  <option value="14:15">14:15</option>
  <option value="14:30">14:30</option>
  <option value="14:45">14:45</option>
  <option value="18:00">18:00</option>
  <option value="18:15">18:15</option>
  <option value="18:30">18:30</option>
  <option value="18:45">18:45</option>
  <option value="19:00">19:00</option>
  <option value="19:15">19:15</option>
  <option value="19:30">19:30</option>
  <option value="19:45">19:45</option>
  <option value="20:00">20:00</option>
  <option value="20:15">20:15</option>
  <option value="20:30">20:30</option>
  <option value="20:45">20:45</option>
  <option value="21:00">21:00</option>
  <option value="21:15">21:15</option>
  <option value="21:30">21:30</option>
  <option value="21:45">21:45</option>
  <option value="22:00">22:00</option>
        </select>    
<small class="form-text text-muted">Select a time</small>

<br>
<div class="form-group">
  <label class="font-weight-bold" for="green_pass">Green pass?</label>
    <select class="custom-select" name="green_pass" value="{{ $reservation->green_pass}}" required>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    <small class="form-text text-muted">Select if you have a green pass</small>
  </div>


  <br>
<label class="font-weight-bold row justify-content-center" for="integer">Meat</label>
          
          <select class="form-select " aria-label="Default select example" type="integer" name="meat_menu" value="{{ $reservation->meat_menu}}" for="meat_menu">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>  
        <small class="form-text text-muted">How many Meat Menu?</small>
      <br>
        <label class="font-weight-bold row justify-content-center" for="integer">Fish</label>
          
          <select class="form-select" aria-label="Default select example" type="integer" name="fish_menu" value="{{ $reservation->fish_menu}}" for="fish_menu">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>  
        <small class="form-text text-muted">How many Fish Menu?</small>
<br>
        <label class="font-weight-bold row justify-content-center" for="integer">Vegetarian</label>
          
          <select class="form-select" aria-label="Default select example" type="integer" name="vegetarian_menu" value="{{ $reservation->vegetarian_menu}}" for="vegetarian_menu">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>  
        <small class="form-text text-muted">How many Vegetarian Menu?</small>

       <br>

        <label class="font-weight-bold row justify-content-center" for="integer">Vegan</label>
         
          <select class="form-select" aria-label="Default select example" type="integer" name="vegan_menu" value="{{ $reservation->vegan_menu}}" for="vegan_menu">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>  
        <small class="form-text text-muted">How many Vegan menu?</small>
<br>
        <label class="font-weight-bold row justify-content-center" for="integer">Child</label>
          
          <select class="form-select" aria-label="Default select example" type="integer" name="child_menu" value="{{ $reservation->child_menu}}" for="child_menu">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>  
        <small class="form-text text-muted">How many Child Menu?</small>
<br>
        </div>  

        <div class="row justify-content-center ">
        <div class="form-group">
            <label class="font-weight-bold" for="request">Requests</label>
            <input type="text" class="form-control" name="request" value="{{ $reservation->request}}" >
            <small class="form-text text-muted">Do you have any request?</small>
            </div>
            </div>
   

            <div class="form-group">
  <label for="">What event do you choose?</label>
  <select class="form-control" name="event_id" value="{{ $reservation->event_id}}" >
    @foreach ($events as $event)
    <option value="{{ $event->id }}">{{ $event->typology}}</option>
   
    @endforeach 
  </select>
</div>

        <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <button type="save" class="btn w3-purple" onclick="return confirm('Confirm the changes?')" >Update</button>

 

  <a href="{{ URL::action('ReservationController@destroy', $reservation) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')" >Delete</a> 
   <!-- creo una nuova rotta per sovrascivere quella precedente per l'eleminazione -->

 

  <a href="{{ URL::action('ReservationController@index') }}" class="btn btn-secondary" onclick="return confirm('Changes not confermed, Do you want to go back?') ">Back</a>


</div>     
</div>     

    </form>    
</div>
</div>
</div>
</div>
</div>




@endsection
