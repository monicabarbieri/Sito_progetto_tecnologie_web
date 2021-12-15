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

@if (Auth::user()->role == 'yes') 
<div class="nine">
  <h1><font color="#cdc06d">All Accounts<span></span></font></h1>
</div>
@else
<div class="nine">
  <h1><font color="#cdc06d">Your Account<span></span></font></h1>
</div>
@endif


<div style="overflow-x:auto;">
<table class="table table-hover w3-white">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Surname</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Telephone Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">SSN</th>
      <th scope="col">E-mail</th>
      <th scope="col">Password</th>


    </tr>

  </thead>
  <tbody id="filtro">
        <input type="text" class="form-control mb-3" id="myInput" placeholder="Filter for name, surname, date, gender, ssn,...">

       @foreach($users as $e)
       @if (Auth::user()->id == $e->id || Auth::user()->role == 'yes') 
    <tr>
      <th scope="row">{{$e->name }}</th>
      <td>{{ $e->role }}</td>
      <td>{{ $e->surname }}</td>
      <td>{{ $e->address }}</td>
      <td>{{ $e->gender }}</td>
      <td>{{ $e->telephone_number }}</td>
      <td>{{ date('d/m/Y' , strtotime($e->date_of_birth)) }}</td>
      <td>{{ $e->SSN }}</td>
      <td>{{ $e->email}}</td>
      <td>{{ $e->password }}</td>

      <td><a href="{{ URL::action('UserController@edit', $e)}}"class="btn btn-outline-primary btn-sm font-weight-bold">Modify</a></td>


    </tr>
    @endif
   @endforeach
  </tbody>
</table>
</div> 
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
  </div>
</div>
</div>
@endsection