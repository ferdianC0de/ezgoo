<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plane;
Use App\Models\Customer;

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

    public function data_pemesan()
    {
        $customer = Customer::all();
        return view('admin/data_pemesan', compact('customer'));
    }

    public function pesawat()
    {
        return view('admin/pesawat');
    }

    public function kereta_api()
    {
        return view('admin/kereta_api');
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
        Customer::create($crud);
        return redirect('admin/index');
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

    public function destroy_data_pemesan($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect('admin/data_pemesan');
    }

    public function edit_data_pemesan($id)
    {
        $data = Customer::find($id);
        return view('admin.e_data_pemesan', compact('data'));
    }

    public function update_data_pemesan(Request $request,$id)
    {

        $data = $this->validate($request,[
            'title' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required'
        ]);
        Customer::find($id)->update($data);
        return redirect('admin/data_pemesan');
    }
}
    