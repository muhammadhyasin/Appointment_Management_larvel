<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class RuserController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('ruser.index', compact('department'));
    }
    public function create($name)
    {
    $department = Department::where('name', $name)->firstOrFail();
    $officers = $department->officer;
    return view('ruser.add', compact('officers'));
    }
    public function storeAppointment(Request $request)
    {
        $Appointment = Appointment::create([
            'phone' => $request->input('phone'),
            'officer' => $request->input('officer'),
            'date_time' => $request->input('date-time'),
            'purpose' => $request->input('purpose'),
            
            
        ]);
        return redirect()->route('ruser.dashboard')->with('success', 'Department user created successfully.');
    }
    public function Appindex()
    {
        $appointment = Appointment::all();
        return view('ruser.appindex', compact('appointment'));
    }
}
