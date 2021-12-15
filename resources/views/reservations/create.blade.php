@extends('layouts.app')

@section('content')



<div class="container">
<div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
            <div class="row justify-content-center w3-purple">
<h1> Insert your Reservation </h1>
 <!--
@if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
-->
</div>

    <form action="{{ URL::action('ReservationController@store') }}" method="POST">
        {{ csrf_field() }}

        <div class="row justify-content-center ">

        <div class="form-group ">
            <label class="font-weight-bold row justify-content-center" for="people">People</label>
            <input type="number" class="form-control " min="1" max="10" name="people" >
            <small class="form-text text-muted">How many people?</small>

            @error('people')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        &nbsp;
        &nbsp;

        <div class="form-group">
          <label class="font-weight-bold row justify-content-center" for="date">Data</label>
          <input type="date" class="form-control" name="date" >
          <small class="form-text text-muted">&nbsp Enter a date</small>

          @error('date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
        </div>
        </div>

        <label class="font-weight-bold row justify-content-center" for="time">Time</label>

        <div class="row justify-content-center ">
        <break>
         
          <select class="form-select " aria-label="Default select example" type="time" name="time" for="time">
          <option selected  disabled="true">Pranzo</option>
          <option value="12:00">12:00</option>
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
          <option selected  disabled="true">Aperitivo</option>
          <option value="18:00">18:00</option>
          <option value="18:15">18:15</option>
          <option value="18:30">18:30</option>
          <option value="18:45">18:45</option>
          <option value="19:00">19:00</option>
          <option value="19:15">19:15</option>
          <option value="19:30">19:30</option>
          <option selected  disabled="true">Cena</option>
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
        
        @error('time')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
<br>

<div class="form-group">
  <label class="font-weight-bold" for="green_pass">Green pass?</label>
    <select class="custom-select" name="green_pass" required>
      <option value="Yes">Yes</option>
      <option value="No">No</option>
    </select>
    <small class="form-text text-muted">Select if you have a green pass</small>
  </div>

  @error('green_pass')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

  <br>
  

  
<label class="font-weight-bold row justify-content-center" for="integer">Meat</label>
          
          <select class="form-select " aria-label="Default select example" type="integer" name="meat_menu" for="meat_menu">
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
          
          <select class="form-select" aria-label="Default select example" type="integer" name="fish_menu" for="fish_menu">
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
          
          <select class="form-select" aria-label="Default select example" type="integer" name="vegetarian_menu" for="vegetarian_menu">
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
         
          <select class="form-select" aria-label="Default select example" type="integer" name="vegan_menu" for="vegan_menu">
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
          
          <select class="form-select" aria-label="Default select example" type="integer" name="child_menu" for="child_menu">
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
            <input type="text" class="form-control" name="request" >
            <small class="form-text text-muted">Do you have any request?</small>

            </div>
            </div>

<div class="form-group">
  <label for="">What event do you choose?</label>
  <select class="form-control" name="event_id">
    @foreach ($events as $event)
    <option value="{{ $event->id }}">{{ $event->typology}}</option>
   
    @endforeach 

    @error('event_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
  </select>
</div>


  <!-- se c'e la chiave esterna -->

  <input type="hidden" name="user_id" value="{{  Auth::user()->id }}" />

        <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-5">
  <button type="save" class="btn w3-purple">Save</button>

<a href="{{ URL::action('ReservationController@create') }}" class="btn btn-secondary">Back</a>
</div>     
</div>     

    </form>    
</div>
</div>
</div>
</div>




@endsection
