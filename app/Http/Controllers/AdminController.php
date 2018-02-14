<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;
Use App\Models\Customer;
Use App\Models\Booking;
Use App\Models\Passenger;
Use App\Models\DetailBooking;
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

    public function bookingData()
    {
        $booking = Booking::all();
        return view('admin.bookingData', compact('booking'));
    }

    public function plane()
    {
        return view('admin/plane');
    }

    public function pprice()
    {
        return view('admin/pprice');
    }

    public function train()
    {
        return view('admin/train');
    }

    public function tprice()
    {
        return view('admin/tprice');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $crud = request()->validate([
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);
        $data = request()->validate([
            'plane_name' => 'required',
            'eco_seat' => 'required',
            'bus_seat' => 'required',
        ]);
        Customer::create($crud);
        Plane::create($data);
        return redirect('admin');
    }

    public function pcreate(Request $request)
    {
        $data = request()->validate([
            'plane_name' => 'required',
            'eco_seat' => 'required',
            'bus_seat' => 'required',
        ]);
        Plane::create($data);
        return redirect('admin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
 







