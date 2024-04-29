<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Officer;
use App\Models\User;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        
        return view('business.index', ['departments' => $departments]);
        
        
    }
    public function create()
    {
        
        return view('business.add');
    }
    public function storeDepartment(Request $request)
    {
        $Department = Department::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            
            
        ]);
        return redirect()->route('business.dashboard')->with('success', 'Department user created successfully.');
    }
    public function edit($id)
    {
        $Department = Department::findOrFail($id);
    
        return view('business.edit', compact('Department'));
    }
    
    public function update(Request $request, $id)
    {
        $Department = Department::findOrFail($id);
        $Department->update($request->all());
       
        return redirect()->route('business.dashboard');
    }
    public function delete(Department $department)
    {
        $department->delete();
        return redirect()->route('business.dashboard');
        
    }
    //officer
    public function officerindex()
    {
        $officer = User::where('usertype', 'officer')->get(['id','name', 'email','department']);
        $department = Department::all();
        return view('business.officerindex', compact('department','officer'));
        
        
    }
    public function officercreate()
    {
        $department = Department::all();
        
        return view('business.officeradd', compact('department'));
    }
    public function storeOfficer(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'department_id' => 'required|exists:departments,id',
        ]);

        $departmentId = $validatedData['department_id'];
        $department = Department::findOrFail($departmentId);


        $officer = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'usertype' => 'officer', 
            'department' => $department->name, 
            
            
        ]);
        $department = Department::findOrFail($validatedData['department_id']);
        $department->update(['officer' => $officer->name]);
        return redirect()->route('business.dashboard')->with('success', 'Department user created successfully.');
    }
    public function officeredit($id)
    {
        $Officer = User::findOrFail($id);
    
        return view('business.officeredit', compact('Officer'));
    }
    
    public function officerupdate(Request $request, $id)
    {
        $officer = User::findOrFail($id);
        $officer->update($request->all());
       
        return redirect()->route('business.dashboard');
    }
    public function officerdelete(User $officer)
    {
        $officer->delete();
        return redirect()->route('officer.dashboard');
        
    }
    
}
