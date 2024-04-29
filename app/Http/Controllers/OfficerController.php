<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function index()
    {   
        $user = Auth::user();

       

        // Retrieve the department associated with the user
        $departmentName = $user->department;
        $appointment = Appointment::all();

        // Return the view with the department name
        return view('officer.index', compact('appointment','departmentName'));
        

    }
}
