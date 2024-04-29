<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $businessUsers = User::where('usertype', 'business')->get(['id','name', 'email']);
        $totalBusinessUsers = User::where('usertype', 'business')->count();
        return view('admin.index',compact('businessUsers', 'totalBusinessUsers'));
    }
    public function create()
    {
        
        return view('admin.add');
    }
    public function storeBusinessUser(Request $request)
    {
        $businessUser = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'usertype' => 'business', 
            
        ]);
        return redirect()->route('admin.dashboard')->with('success', 'Business user created successfully.');
    }
    public function edit($id)
{
    $businessUsers = User::findOrFail($id);

    return view('admin.edit', compact('businessUsers'));
}

public function update(Request $request, $id)
{
    $businessUsers = User::findOrFail($id);
    $businessUsers->update($request->all());
   
    return redirect()->route('admin.dashboard');
}
public function delete(user $business)
{
    $business->delete();
    return redirect()->route('admin.dashboard');
    
}
    
}
