<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;
Use App\Models\Customer;
Use App\Models\Booking;
Use App\Models\Passenger;
Use App\Models\DetailBooking;
Use App\Models\PlaneSchedule;
Use App\Models\TrainSchedule;
Use App\Models\PlaneFare;
Use App\User;
Use App\Models\Airport;
Use App\Models\TrainStation;
Use App\Models\Train;
Use App\Models\TrainFare;
use Illuminate\Support\Facades\Input;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/index');
    }
    public function showUsers()
    {
      $users = User::all();
      return view('admin.users', compact('users'));
    }

    public function bookingData()
    {
        $booking = Booking::all();
        return view('admin.bookingData', compact('booking'));
    }

    public function listPlane()
    {
      $plane = Plane::with('planefare')->get();
      return view('admin/plane/listPlane',compact('plane'));
    }

    public function airport()
    {
      $airport = Airport::all();
      return view('admin/plane/airport', compact('airport'));
    }

    public function planeSchedule()
    {
      $planeSchedule =  PlaneSchedule::with('airport','plane')->get();
      return view('admin/plane/planeSchedule', compact('planeSchedule'));
    }

    public function station()
    {
      $station = TrainStation::all();
      return view('admin/train/station', compact('station'));
    }

    public function listTrain()
    {
      $train = Train::with('trainfare')->get();
      return view('admin/train/listTrain',compact('train'));
    }

    public function trainSchedule()
    {
      $trainSchedule = TrainSchedule::with('station','train')->get();
      return view('admin/train/trainSchedule',compact('trainSchedule'));
    }

    public function cPlaneschedule()
    {
      $plane = Plane::select("plane_name","id")->get();
      $airport = Airport::select("airport_name","id")->get();
      return view('admin/plane/cplaneSchedule',compact('plane','airport'));

    }

    public function cTrainschedule()
    {
      $train = Train::select("train_name","id")->get();
      $station = TrainStation::select("station_name","id")->get();
      return view('admin/train/cTrainschedule',compact('train','station'));

    }

    public function planeAjax($id)
    {
      $plane = DB::table("planes")->where("id",$id)->get();
      return response()->json($plane);
    }

    public function airportAjax($id)
    {
      $airport = DB::table("airports")->where("id",$id)->get();
      return response()->json($airport);
    }

    public function trainAjax($id)
    {
      $train = DB::table("train_fares")->where("train_id",$id)->get();
      return response()->json($train);
    }

    public function stationAjax($id)
    {
      $station = DB::table("train_stations")->where("id",$id)->get();
      return response()->json($station);
    }

    public function destinationAjax($id)
    {
      $destination = DB::table("airports")->where("id",$id)->get();
      return response()->json($destination);
    }


    public function detailPlaneschedule($id)
    {
      $detail = PlaneSchedule::where('id',$id)->with('Plane')->get();
      return view('admin/plane/dPlaneschedule', compact('detail'));
    }

    public function detailTrainschedule($id)
    {
      $detail = TrainSchedule::where('id',$id)->with('Train')->get();
      return view('admin/train/dTrainschedule', compact('detail'));
    }


    public function pcreateAirport(Request $request)
    {
      $data = $request->validate([
        'airport_name' => 'required',
        'code' => 'required',
        'city' => 'required'
      ]);
      Airport::create($data);
      return redirect('admin/plane/airport')->with('alert-success','Berhasil Menambahkan Data!');
    }


    public function pcreatePlane(Request $request)
    {
        $plane = new Plane();
        $plane->plane_name  = $request->plane_name;
        $plane->eco_seat    = $request->eco_seat;
        $plane->bus_seat    = $request->bus_seat;
        $plane->first_seat  = $request->first_seat;
        $plane->save();

        $planeFare = new PlaneFare();
        $planeFare->plane_id = $plane->id;
        $planeFare->eco_seat = $request->eco_seatfare;
        $planeFare->bus_seat = $request->bus_seatfare;
        $planeFare->first_seat = $request->first_seatfare;
        $planeFare->save();

        return redirect('admin/plane/listPlane')->with('alert-success','Berhasil Menambah Data!');
    }

    public function pcreateStation(Request $request)
    {
      $data = $this->validate($request, [
          'station_name' => 'required',
          'code' => 'required',
          'city' => 'required'
      ]);
      TrainStation::create($data);
      return redirect('admin/train/station')->with('success','Berhasil');
    }

    public function pcreateTrain(Request $request)
    {
      $train = new Train();
      $train->train_name  = $request->train_name;
      $train->eco_seat    = $request->eco_seat;
      $train->bus_seat    = $request->bus_seat;
      $train->exec_seat  = $request->exec_seat;
      $train->save();

      $trainfare = new TrainFare();
      $trainfare->train_id = $train->id;
      $trainfare->eco_seat = $request->eco_seatfare;
      $trainfare->bus_seat = $request->bus_seatfare;
      $trainfare->exec_seat = $request->exec_seatfare;
      $trainfare->save();

      return redirect('admin/train/listTrain');
    }

    public function pcreatePlaneschedule(Request $request)
    {
      $destination = Airport::find($request->destination);
      $planeschedule = new PlaneSchedule();
      $planeschedule->plane_id          = $request->plane_id;
      $planeschedule->airport_id        = $request->airport_id;
      $planeschedule->from              = $request->from;
      $planeschedule->destination       = $destination->airport_name;
      $planeschedule->from_code         = $request->from_code;
      $planeschedule->destination_code  = $request->destination_code;
      $planeschedule->eco_seat          = $request->eco_seat;
      $planeschedule->bus_seat          = $request->bus_seat;
      $planeschedule->first_seat        = $request->first_seat;
      $planeschedule->boarding_time     = $request->boarding_time;
      $planeschedule->duration          = $request->duration;
      $planeschedule->gate              = $request->gate;
      $planeschedule->save();
      return redirect('admin/plane/planeSchedule')->with('alert-success','Berhasil Menambah Data!');
    }

    public function pcreateTrainschedule(Request $request)
    {
      $destination = TrainStation::find($request->destination);
      $planeschedule = new TrainSchedule();
      $planeschedule->train_id          = $request->train_id;
      $planeschedule->station_id        = $request->station_id;
      $planeschedule->from              = $request->from;
      $planeschedule->destination       = $destination->station_name;
      $planeschedule->from_code         = $request->from_code;
      $planeschedule->destination_code  = $request->destination_code;
      $planeschedule->eco_seat          = $request->eco_seat;
      $planeschedule->bus_seat          = $request->bus_seat;
      $planeschedule->exec_seat         = $request->exec_seat;
      $planeschedule->boarding_time     = $request->boarding_time;
      $planeschedule->duration          = $request->duration;
      $planeschedule->platform          = $request->platform;
      $planeschedule->save();
      return redirect('admin/train/trainSchedule')->with('alert-success','Berhasil Menambah Data!');
    }



    public function editAirport($id)
    {
      $data = Airport::where('id',$id)->get();
      return view('admin/plane/eAirport', compact('data'));
    }

    public function editlistPlane($id)
    {
      $data = Plane::where('id',$id)->with('planefare')->get();
      return view('admin/plane/eListplane', compact('data'));
    }

    public function editPlaneschedule($id)
    {
      $planeschedule = PlaneSchedule::where('id',$id)->with('Plane')->get();
      $plane = Plane::select("plane_name","id")->get();
      $airport = Airport::select("airport_name","id")->get();
      return view('admin/plane/ePlaneschedule',compact('planeschedule','plane','airport'));
    }

    public function editTrainschedule($id)
    {
      $trainschedule = TrainSchedule::where('id',$id)->with('Train')->get();
      $train = Train::select("train_name","id")->get();
      $station = TrainStation::select("station_name","id")->get();
      return view('admin/train/eTrainschedule',compact('trainschedule','train','station'));
    }

    public function editStation($id)
    {
      $data = TrainStation::where('id',$id)->get();
      return view('admin/train/eStation', compact('data'));
    }

    public function editTrain($id)
    {
      $data = Train::where('id',$id)->with('trainfare')->get();
      return view('admin/train/eListtrain', compact('data'));
    }

    //update

    public function updateAirport(Request $request, $id)
    {
      $data = $this->validate($request, [
        'airport_name' => 'required',
        'code' => 'required',
        'city' => 'required'
      ]);
      Airport::find($id)->update($data);
      return redirect('admin/plane/airport')->with('alert-success','Data berhasil diubah!');
    }

    public function updatelistPlane(Request $request, $id)
    {
      $plane = Plane::findOrFail($id);
      $plane->plane_name  = $request->plane_name;
      $plane->eco_seat    = $request->eco_seat;
      $plane->bus_seat    = $request->bus_seat;
      $plane->first_seat  = $request->first_seat;
      $plane->save();

      $planefare = PlaneFare::findOrFail($request->id);
      $planefare->eco_seat    = $request->eco_seatfare;
      $planefare->bus_seat    = $request->bus_seatfare;
      $planefare->first_seat  = $request->first_seatfare;
      $planefare->save();

      return redirect('admin/plane/listPlane')->with('alert-success','Data berhasil diubah!');
    }

    public function updatePlaneschedule(Request $request, $id)
    {
      $destination = Airport::find($request->destination);
      $planeschedule = PlaneSchedule::findorFail($id);
      $planeschedule->plane_id          = $request->plane_id;
      $planeschedule->airport_id        = $request->airport_id;
      $planeschedule->from              = $request->from;
      $planeschedule->destination       = $destination->airport_name;
      $planeschedule->from_code         = $request->from_code;
      $planeschedule->destination_code  = $request->destination_code;
      $planeschedule->eco_seat          = $request->eco_seat;
      $planeschedule->bus_seat          = $request->bus_seat;
      $planeschedule->first_seat        = $request->first_seat;
      $planeschedule->boarding_time     = $request->boarding_time;
      $planeschedule->duration          = $request->duration;
      $planeschedule->gate              = $request->gate;
      return redirect('admin/plane/planeSchedule')->with('alert-success','Berhasil Mengubah Data!');

    }

    public function updateStation(Request $request, $id)
    {
      $data = $this->validate($request, [
          'station_name' => 'required',
          'code' => 'required',
          'city' => 'required'
        ]);
        TrainStation::find($id)->update($data);
        return redirect('admin/train/station')->with('success','Berhasil diubah');
    }

    public function updateTrain(Request $request, $id)
    {
      $train = Train::findOrFail($id);
      $train->train_name  = $request->train_name;
      $train->eco_seat    = $request->eco_seat;
      $train->bus_seat    = $request->bus_seat;
      $train->exec_seat   = $request->exec_seat;
      $train->save();

      $trainfare = TrainFare::findOrFail($request->id);
      $trainfare->eco_seat    = $request->eco_seatfare;
      $trainfare->bus_seat    = $request->bus_seatfare;
      $trainfare->exec_seat  = $request->exec_seatfare;
      $trainfare->save();

      return redirect('admin/train/listTrain')->with('alert-success','Data berhasil diubah!');
    }


    // destroy

    public function destroyAP($id)
    {
      $data = Airport::where('id',$id)->first();
      $data->delete();
      return redirect('admin/plane/airport')->with('alert-success','Data berhasi dihapus!');
    }

    public function destroyPS($id)
    {
      $data = PlaneSchedule::where('id',$id)->first();
      $data->delete();
      return redirect('admin/plane/planeSchedule')->with('alert-success','Data berhasi dihapus!');
    }

    public function destroyPlane($id)
    {
      $data = Plane::where('id',$id)->first();
      $data->delete();
      return redirect('admin/plane/listPlane')->with('alert-success','Data berhasi dihapus!');
    }

    public function destroyStation($id)
    {
      $data = TrainStation::where('id',$id)->first();
      $data->delete();
      return redirect('admin/train/station')->with('alert-success','Data berhasi dihapus!');
    }

    public function destroyTrain($id)
    {
      $data = Train::where('id',$id)->first();
      $data->delete();
      return redirect('admin/train/listTrain')->with('alert-success','Data berhasi dihapus!');
    }

    public function destroyTS($id)
    {
      $data = TrainSchedule::where('id',$id)->first();
      $data->delete();
      return redirect('admin/train/trainSchedule')->with('alert-success','Data berhasi dihapus!');
    }




    public function dbookingData($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('admin/bookingdata');
    }

    public function ebookingData($id)
    {
        $booking = Booking::find($id);
        $detail  = DetailBooking::where('booking_id', $id)->get();
        foreach($detail as $pass){
        $passengers = Passenger::where('detail_booking_id', $pass->id)->get();}
        return view('admin.ebookingData',compact('booking','detail','pass'));


    }

    public function ubookingData(Request $request,$id)
    {

        $data = $this->validate($request,[
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);
        Customer::find($id)->update($data);
        return redirect('admin/bookingdata');
    }
}
