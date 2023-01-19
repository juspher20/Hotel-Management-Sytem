<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employee::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Employee::create([
        'hotel_name' => $request->hotel_name,
        'department_name' => $request->department_name,
        'department_id'=> $request->department_id,
        'full_name' => $request->full_name,
        'age' => $request->age,
        'address' => $request->address,
        'email' => $request->email,
        'password' => $request->password,
        'contact_number' => $request->contact_number,
        'role' => $request->role,
        'salary' => $request->salary,
        'status' => $request->status,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employee::findorFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        Employee::find($id)->update([
            'hotel_name' => $request->hotel_name,
            'department_name' => $request->department_name,
            'full_name' => $request->full_name,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $request->password,
            'contact_number' => $request->contact_number,
            'role' => $request->role,
            'salary' => $request->salary,
            'status' => $request->status,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Employee::find($id)->delete();
    }

}
