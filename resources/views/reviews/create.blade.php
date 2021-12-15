@extends('layouts.app')

@section('content')



<div class="container">
<div class="row justify-content-center">
        <div class="col-lg-9">
            <div class="card">
            <div class="row justify-content-center w3-purple">
<h1> Insert your Review </h1>
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

    <form action="{{ URL::action('ReviewController@store') }}" method="POST">
        {{ csrf_field() }}



        <div class="row justify-content-center ">
        <div class="form-group">
            <label class="font-weight-bold" for="comment">Comment</label>
            <textarea type="text" class="form-control" name="comment" id="exampleFormControlTextarea1" rows=" 3" ></textarea>
            <small class="form-text text-muted">Leave a comment</small>

            </div>
            </div>
            @error('comment')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
  </select>


  <!-- se c'e la chiave esterna -->
  <input type="hidden" name="user_id" value="{{  Auth::user()->id }}" />
 




        <div class="form-group row mb-0">
  <div class="col-md-6 offset-md-5">
  <button type="save" class="btn w3-purple" onclick="return confirm('Confirm the changes?')" >Save</button>

  <a href="{{ URL::action('ReviewController@index') }}" class="btn btn-secondary" onclick="return confirm('Changes not confermed, Do you want to go back?') ">Back</a>

<div><br></div>
</div>   </div>  

    </form>    
</div>
</div>
</div>
</div>




@endsection
