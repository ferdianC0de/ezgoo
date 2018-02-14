<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

use App\Models\Plane;
use App\Models\PlaneSchedule;

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
          $total = [
            'baby' => $request->baby,
            'child'=> $request->child,
            'adult'=> $request->adult
          ];
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
            $seat = 'first_seat';
          }elseif($request->class == "Executive Class"){
            $seat = 'exec_seat';
          }
          //cek tipe
          if ($type == 'st'){
            $schedule = $model::findSchedule($request->from, $request->destination, $request->date, $seat, count($total));
            return view('booking.bookingSingle', compact('schedule', 'vehicle','type','total', 'seat'));
            // return $schedule;
          }elseif($type == 'rt'){
            $scheduleG = $model::findSchedule($request->from, $request->destination, $request->date, $seat, count($total));
            $scheduleB = $model::findSchedule($request->destination, $request->from, $request->dateB, $seat, count($total));
            return view('booking.bookingRound', compact('scheduleG', 'scheduleB', 'vehicle','type','total', 'seat'));
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
        $id = [$request->go,$request->back];
        $fareTotal = 0;
        $total = explode(',',$request->total);
        $totalCount = $total[0] + $total[1] + $total[2];
        $total = [
          'baby' => $total[0],
          'child'=> $total[1],
          'adult'=> $total[2]
        ];
        $seat = $request->seat;

        if ($vehicle == 'plane'){
          $model = $this->planeSchedule;
        }elseif($vehicle == 'train'){
          $model = $this->trainSchedule;
        }

        if (isset($id) && isset($seat)) {
          $schedule = $model::findWithPrice($id, $seat);
        }else{
          abort(404);
        }
        return view('booking.bookingFix', compact('schedule','vehicle', 'total', 'totalCount', 'seat', 'fareTotal'));
      }
      public function fixOrder(Request $request)
      {
        // if (Auth::check()) {
          $modelV = "";
          $modelF = "";
          $modelS = "";
          $vehicle = $request->vehicle;
          $type = $request->type;
          // $id = $request->id;
          $userId = Auth::user()->id;
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

          if (isset($request) && isset($userId)) {
            // $modelS::seatMath($total, $seat, $id);
            // Booking::roundTrip();
            $request->request->add(['id' => $userId]);
            return $request;
          }else{
            abort(404);
          }
        // }else{
        //   return 'Register dulu baru bisa pesen';
        // }
      }
      public function test()
      {
        return view('test.testTable');
      }
      public function testData(Datatables $datatables)
      {
        $query = Plane::select('*');
        return $datatables->eloquent($query)->make(true);
      }
      //Note
      //->make(true); selalu paling akhir
      //Nambah kolom
        //->addColumn('nama-kolom', function($bebas){
        // apapun yang mau ditampilin, nanti isinya tinggal return
        //})
      //Edit kolom
        //->editColumn('kolom-yang-diedit', function($bebas){
        //sama aja kaya nambah, cuma ini ngedit yg udah ada
        //})
      //Kalo mau nambahin kolom + html
        //->rawColumns(['action','lengthofcontract'])
}
