<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthenticateController extends Controller
{
    //
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $employee = Employee::where('email', $validatedData['email'])->first();

        if ($employee && Hash::check($validatedData['password'], $employee->password)) {
            $token = $employee->createToken('api', ['create']);

            return [
                'token' => $token->plainTextToken
            ];
        } else {
            return [
                'errors' => 'Invalid Credentials'
            ];
        }
    }
}
