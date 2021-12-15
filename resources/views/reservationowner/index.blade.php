@extends('layouts.app')



@section('content')

<style>
table {
  border-collpase: collapse;
  width:100%;
}

th, td{
  text-align:left;
  padding;8px;
}

tr;nth-child(even) {background-color: #f2f2f2; }

.nine h1 {
  text-align:center; font-size:50px; text-transform:uppercase; color:#222; letter-spacing:1px;
  font-family:"Playfair Display", serif; font-weight:400;
}
.nine h1 span {
  margin-top: 5px;
    font-size:15px; color:#444; word-spacing:1px; font-weight:normal; letter-spacing:2px;
    text-transform: uppercase; font-family:"Raleway", sans-serif; font-weight:500;

    display: grid;
    grid-template-columns: 1fr max-content 1fr;
    grid-template-rows: 27px 0;
    grid-gap: 20px;
    align-items: center;
}

.nine h1 span:after,.nine h1 span:before {
    content: " ";
    display: block;
    border-bottom: 1px solid #ccc;
    border-top: 1px solid #ccc;
    height: 5px;
  background-color:#f8f8f8;
}
 
</style>


<div class='container w3-white'>
<div class="row justify-content-center">

<div class="nine">
<h1><font color="#cdc06d">All the Reservations<span></span></font></h1>
</div>

<div style="overflow-x:auto;">
<table class="table table-hover w3-white">
  <thead>
  <tr>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Telephone</th>
      <th scope="col">People</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Green Pass</th>
      <th scope="col">Meat Menu</th>
      <th scope="col">Fish Menu</th>
      <th scope="col">Vegetarian Menu</th>
      <th scope="col">Vegan Menu</th>
      <th scope="col">Child Menu</th>
      <th scope="col">Request</th>
      <th scope="col">Event</th>

    </tr>

  </thead>
  <tbody id="filtro">
        <input type="text" class="form-control mb-3" id="myInput" placeholder="Filter for name, surname, date, time,....">         
        @foreach($reservations as $e)
     @if ( Auth::user()->id == $e->user_id || Auth::user()->role == 'yes') 
     <tr>      
      <th scope="row">{{$e->user->name  }}</th>
      <td>{{ $e->user->surname }}</td>
      <td>{{ $e->user->telephone_number }}</td>
      <td>{{ $e->people }}</td>
      <th>{{ date('d/m/Y' , strtotime($e->date)) }}</th>
      <td>{{ $e->time }}</td>
      <td>{{ $e->green_pass }}</td>
      <td>{{ $e->meat_menu }}</td>
      <td>{{ $e->fish_menu }}</td>
      <td>{{ $e->vegetarian_menu }}</td>
      <td>{{ $e->vegan_menu }}</td>
      <td>{{ $e->child_menu }}</td>
      <td>{{ $e->request }}</td>
      <td>{{ $e->event->typology}}</td>
      <td></td>
      <td></td>
    </tr> 
    @endif
   @endforeach
   </tbody>
</table>
</div> </div>

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
  </div>
</div>
</div>
@endsection