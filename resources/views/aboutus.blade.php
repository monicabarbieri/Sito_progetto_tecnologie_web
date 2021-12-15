



@extends('layouts.app')



@section('content')

<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #a65bd7;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: #a48afc;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

<div class="container">
<div class="about-section">
  <h1>Patty Restaurant</h1>
  <br>
  <div class="row justify-content-center"> <font color="#D0D0D0">Refined and elegant location. We offer our client different menus that can be selected from the website. We have as well a very wide and good selection of italian and foreign wines. We have been active since 2003. Our restaurant has 150 seats divided into indoor and outdoor dining-room. </font></div>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row justify-content-center">
    
  <div class="column ">
    <div class="card">
      <img src="team3.jpg" alt="Jane" style="width:100%">
      <div class="row justify-content-center">
      <div>
        <h2>&nbsp &nbsp &nbsp Paolo Rossi</h2>
       
        <p class="title">Owner</p>
        <FONT SIZE="2">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Age : 54 <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Businessman <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Italian <br> &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp From Emilia-Romagna</FONT>
        <p style="text-decoration: none"><em><br><font color=#cdc06d>&nbsp &nbsp &nbsp &nbsp "I'll wait for you in my restaurant"</font></em></p>
        <br>
        </div>
        <p><button class="button ">paolo.rossi@gmail.com</button></p>
        
      </div>
    </div>
  </div>

  <div class="column ">
    <div class="card">
      <img src="team2.jpg" alt="Jane" style="width:100%">
      <div class="row justify-content-center">
      <div>
        <h2> Michele Giorgi</h2>
       
        <p class="title">Chef</p>
        <FONT SIZE="2">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Age: 45<br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Michelin-Star Chef <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Italian <br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp From Abruzzo</FONT>
        <p style="text-decoration: none"><em><br><font color=#cdc06d>"Cooking is the ultimate giving"</font></em></p>
        <br>
        </div>
        <p><button class="button ">michele.giorgi@gmail.com</button></p>
        
      </div>
      
    </div>

  </div>
  

  <div class="container">
    <div class="row justify-content-center">
      <h1 style="text-decoration: none"><strong><font color=#76d723>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp The Map  </font></strong></h1>
      <break></break>
      <h5>
        &nbsp &nbsp &nbsp &nbsp Click into for the itinerary!
      </h5>
      <h1 class="glyphicon glyphicon-arrow-down" aria-hidden="true"></h1>


  <a href="https://www.google.it/maps/preview">
    <img src="foto-sfuocate.jpg" alt="mappa">
    </a>
  </div> </div>
 

</div> 

</div>

@endsection