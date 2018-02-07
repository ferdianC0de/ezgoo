<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
      private $planeSchedule, $trainSchedule;

      public function __construct()
      {
        $this->planeSchedule = "App\Models\PlaneSchedule";
        $this->trainSchedule = "App\Models\TrainSchedule";
      }

      public function search()
      {
        $coba = $this->trainSchedule;
        return $coba::all();
      }
      public function order()
      {
        # code...
      }
      public function fixOrder()
      {
        # code...
      }
}
