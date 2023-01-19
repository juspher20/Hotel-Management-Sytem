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
        $employees = Employee::all();
        return response()->json([
            'status' => true,
            'message' => 'Employee retrieved successfully',
            'data' => $employees
        ], 201);
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

        $data = $request->validate([
            'hotel_name' => 'required|string|min:5|max:15',
            'department_name' => 'required|string|min:5|max:20',
            'department_id' => 'required|integer',
            'full_name' => 'required|string|min:5|max:50',
            'age' => 'required|integer',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:50',
            'contact_number' => 'required|integer',
            'role' => 'required',
            'salary' => 'required',
            'status' => 'required|string',
        ]);

        $employees = Employee::create($data);

        return response()->json([
            'status' => true,
            'message' => 'Employee created successfully',
            'data' => $employees
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = Employee::find($id);
        if ($employees) {
            return response()->json([
                'status' => true,
                'message' => 'Employee found successfully',
                'data' => $employees
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Employee not found',
                'data' => null
            ], 404);
        }

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

        $data = $request->validate([
            'hotel_name' => 'required|string|min:5|max:15',
            'department_name' => 'required|string|min:5|max:20',
            'department_id' => 'required|integer',
            'full_name' => 'required|string|min:5|max:50',
            'age' => 'required|integer',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|max:50',
            'contact_number' => 'required|integer',
            'role' => 'required',
            'salary' => 'required',
            'status' => 'required|string',
        ]);

        $employees = Employee::find($id);

        if ($employees) {
            $employees->update($data);
            return response()->json([
                'status' => true,
                'message' => 'Successfully Updated',
                'data' => $employees
            ], 201);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Employee not found',
                'data' => null
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employees = Employee::find($id);

        if ($employees) {
            $employees->delete();
            return response()->json([
                'status' => true,
                'message' => 'Employee deleted successfully',
                'data' => null
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Employee not found',
                'data' => null
            ], 404);
        }
    }

}
