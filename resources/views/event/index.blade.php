@extends('layouts.app')



@section('content')


<div class='container w3-purple'>
<div class="row justify-content-center">

  <h1 > All the Events</h1>
  </div>

  <div class="row">
      <div class="col-md-10">
          <div class="form-group">
              <label for="typology">New Event</label>
              <input type="text" class="form-control" name="typology" id="typology">
              <small class="form-text text-dark">Insert your Event</small>
          </div>
      </div>
        <div class="col-md-2">
          <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

                <a href="" id= "add-class-btn" class="btn btn-primary float-md-right mb-2" style="margin-top: 30px;">Add</a>
        </div>
  </div>



<table class="table table-hover w3-white">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Typology</th>

    </tr>

  </thead>
  <tbody>
       @foreach($events as $c)
    <tr>
      <td>{{ $c->id }}</td>
      <td>{{ $c->typology }}</td>
    <!--  <td><a href=""class="btn btn-outline-danger">Elimina</a></td> -->
    </tr>
   @endforeach
  </tbody>
</table>
</div>

<script type="text/javascript">

  $('document').ready(function(){
    $('#add-class-btn').bind('click', function(){

      var typology =  $('#typology').val();
      var _token =  $('#_token').val();

      if (typology.length > 0) {
        console.log('ciao');

        $.ajax({
            url: "/event",
            type: "POST",
            dataType: "json",
            data: {'typology': typology, '_token': _token},
              success: function(data){
              console.log(data);
              if(data.status === 'ok') {
                console.log('Hey');
              }
              },
            error: function(response, stato) {
              console.log(stato);
            }
          }); 
        }
    }); 
  }); 
</script>

@endsection
