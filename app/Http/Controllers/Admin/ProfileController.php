<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('Admin.profile');
    }
    
    public function update(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email' =>  'required|string|email|max:255|unique:users,email,' . auth()->user()->id,
            'password' =>  'sometimes|nullable|string|min:6|confirmed',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone' => 'string|max:191',
            'position_title' => 'string|max:191',
        ]);
        auth()->user()->update($validate);
        
        return redirect()->route('admin.dashboard')
            ->with('success', 'Profile updated successfully');
    }
}
