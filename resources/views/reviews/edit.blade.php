@extends('layouts.app')

@section('content')

  
<div class="container">
<div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
            <div class="row justify-content-center w3-purple">
<h1> Modify your Review </h1>
</div>

    <form action="  {{ URL::action('ReviewController@update', $review)}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}

        <div class="row justify-content-center ">
        <div class="form-group">
            <label class="font-weight-bold row justify-content-center" for="comment">Comment</label>
            <textarea type="text" class="form-control" name="comment" id="exampleFormControlTextarea1" rows=" 3" value="{{ $review->comment}}"></textarea>
            <small class="form-text text-muted">Leave a comment</small>
            </div>
            </div>






        <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-4">
  <button type="save" class="btn w3-purple" onclick="return confirm('Confirm the changes?')" >Update</button>

 

  <a href="{{ URL::action('ReviewController@destroy', $review) }}" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')" >Delete</a> 
   <!-- creo una nuova rotta per sovrascivere quella precedente per l'eleminazione -->

 

  <a href="{{ URL::action('ReviewController@index') }}" class="btn btn-secondary" onclick="return confirm('Changes not confermed, Do you want to go back?') ">Back</a>
<div>
    <br>
</div>
   
   
</div> 
</div>     

    </form>    
</div>
</div>
</div>
</div>




@endsection
