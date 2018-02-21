@extends('layouts.app')

@section('content')

<div class="container">
  <h1><b>E-Ticket</b></h1>
  <h4>Departure Flight - Wednesday,21 Feb 2018</h4>
</div>

<div class="container">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4><b>Passanger Details</b></h4>
    </div>
  <div class="panel-body">
    <table class="table table-striped">
      <thead>
        <tr>
          <th><center>BOOKING CODE</center></th>
          <th>TITTLE</th>
          <th>PASSANGER NAME</th>
          <th>TICKET TYPE</th>
        </tr>
      <tbody>
        <tr>
          <td><center><h3>WUREVT-007</h3></center></td>
          <td>Nona</td>
          <td>Inge Arfatikka</td>
          <td>Dewasa</td>
        </tr>
          </tbody>
        </thead>
      </table>
      </div>
    </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="col-md-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4><b>Itinerary Details</b></h4>
      </div>

      <div class="panel-body">
      <table class="table table-striped">
        <thead>
        <tr>
          <th><center>PLANE</center></th>
          <th><center>GATE</center></th>
          <th><center>DEPARTURE</center></th>
          <th><center>ARRIVAL</center></th>
        </tr>
      </thead>
        <tr>
          <td><center><img src="images/garuda2.png" alt="..."></center>
          <h5 class="card-title"><center><b>GARUDA INDONESIA BOEING 737</b></center></h5></td>
          <td><b>A1</b></td>
          <td>
            <h5 class="card-title"><b>SOEKARNO HATTA (CGK) JAKARTA</b></h5>
            <p class="card-text">Wednesday, 21 FEB 2018</p>
            <p class="card-text">17:00 WIB</p>
          </td>

        <td>
          <h5 class="card-title"><b>NGURAH RAI (DPS) BALI</b></h5>
          <p class="card-text">Wednesday, 21 FEB 2018</p>
          <p class="card-text">22:00 WITA</p>
        </td>
        </tr>
      </table>
      </div>
    </div>
  </div>
</div>

@endsection
