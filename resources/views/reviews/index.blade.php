@extends('layouts.app')



@section('content')

<style>

</style>
<div class='container w3-purple'>
<div class="row justify-content-center">

  <h1 >Reviews</h1>
  </div>


<table class="table table-hover w3-white">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>      
      <th scope="col">Comment</th>
      @if (Auth::check() && Auth::user()->role == "no") 
      <th scope="col">  Azioni</th>
      @endif

    </tr>

  </thead>
  <tbody id="filtro">
        <input type="text" class="form-control mb-3" id="myInput" placeholder="Filter for name, surname, comment">       
        
        @foreach($reviews as $e)
    <tr>
      <th scope="row">{{ $e->user->name }}</th>
      <td>{{ $e->user->surname }}</td> 
      <td>{{ $e->comment }}</td>
      @if (Auth::check() && Auth::user()->role == "no" && Auth::user()->id == $e->user_id) 
      <td><a href="{{ URL::action('ReviewController@edit', $e)}}"class="btn btn-outline-primary btn-sm font-weight-bold">Modify</a></td>
      @else 
      <td></td>
      @endif

    </tr>
   @endforeach
  </tbody>
</table>
</div>

<br>


<script type="application/javascript">
   $(document).ready(function(){
      $("#add-class-btn").on("keyup",function () {
         //$('[data-toggle="popover"]').popover()
      });
      
      $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#filtro tr").filter(function() {
         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
   });
});
</script>
      
    @if (Auth::check() && Auth::user()->role == "no") 
      <div class="row justify-content-center">
<button class="btn w3-purple">
    <a href="{{ URL::action('ReviewController@create') }}" >  
     Add review
  </button> 
    @endif

</div>
@endsection