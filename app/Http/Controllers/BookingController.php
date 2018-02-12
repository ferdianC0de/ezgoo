<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;
use App\Models\PlaneSchedule;
use Auth;

class BookingController extends Controller
{
      private $planeSchedule, $trainSchedule;

      public function __construct()
      {
        $this->plane = "App\Models\Plane";
        $this->planeFare = "App\Models\PlaneFare";
        $this->planeSchedule = "App\Models\PlaneSchedule";
        $this->train = "App\Models\Train";
        $this->trainFare = "App\Models\TrainFare";
        $this->trainSchedule = "App\Models\TrainSchedule";
      }

      public function search(Request $request)
      {
        if ($request->baby <= $request->adult){
          $total = $request->child + $request->adult;
          $vehicle = $request->vehicle;
          $type = $request->type;
          $seat  = "";
          $model = "";
          //cek kendaraan
          if ($vehicle == 'plane'){
            $model = $this->planeSchedule;
          }elseif($vehicle == 'train'){
            $model = $this->trainSchedule;
          }
          //cek kursi
          if ($request->class == "Ekonomi") {
            $seat = 'eco_seat';
          }elseif($request->class == "Bisnis") {
            $seat = 'bus_seat';
          }elseif($request->class == "First Class"){
            $seat = 'first_class';
          }elseif($request->class == "Executive Class"){
            $seat = 'exec_class';
          }
          //cek tipe
          if ($type == 'st'){
            $schedule = $model::findSchedule($request->from, $request->destination, $request->date, $seat, $total);
            return view('test.testSingle', compact('schedule', 'vehicle','type','total', 'seat'));
            // return $schedule;
          }elseif($type == 'rt'){
            $scheduleG = $model::findSchedule($request->from, $request->destination, $request->date, $seat, $total);
            $scheduleB = $model::findSchedule($request->destination, $request->from, $request->dateB, $seat, $total);
            return view('test.testRound', compact('scheduleG', 'scheduleB', 'vehicle','type','total', 'seat'));
            // return $scheduleG;
          }else{
            abort(404);
          }
        }else{
          return 'Bayi gabole lebih dari dewasa';
        }
      }
      public function order(Request $request)
      {
        $model = "";
        $vehicle = $request->vehicle;
        $type = $request->type;
        $id = [$request->go,$request->back];
        $fareTotal = 0;
        $total = $request->total;
        $seat = $request->seat;

        if ($vehicle == 'plane'){
          $model = $this->planeSchedule;
        }elseif($vehicle == 'train'){
          $model = $this->trainSchedule;
        }

        if (isset($request->type) && isset($id) && isset($seat)) {
          $schedule = $model::findWithPrice($id, $seat);
        }else{
          abort(404);
        }
        return view('test.fix', compact('schedule','vehicle', 'type', 'total','seat', 'fareTotal'));
      }
      public function fixOrder(Request $request)
      {
        // if (Auth::check()) {
        $modelV = "";
        $modelF = "";
        $modelS = "";
        $vehicle = $request->vehicle;
        $type = $request->type;
        $id = $request->id;
        //$userId = Auth::user()->id;
        $total = $request->total;
        $seat = $request->seat;

        if ($vehicle == 'plane'){
          $modelV = $this->plane;
          $modelF = $this->planeFare;
          $modelS = $this->planeSchedule;
        }elseif($vehicle == 'train'){
          $modelV = $this->train;
          $modelF = $this->trainFare;
          $modelS = $this->trainSchedule;
        }

        if (isset($request->type) && isset($id)) {
          $math = $modelS::seatMath($total, $seat, $id);
          return $math;
        }else{
          abort(404);
        }
        // }else{
        //   return 'Register dulu baru bisa pesen';
        // }
      }
      public function test()
      {
          for ($i=1; $i < 5; $i++) {
            foreach (range('A','Z') as $key) {
              echo "$key + $i<br>";
            }
          }
      }
}
