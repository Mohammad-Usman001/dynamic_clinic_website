<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()    {
        $contactCount = ContactMessage::count();
        // dd($contactCount);
        $blogCount = Blog::count();
        
        $recentContacts = ContactMessage::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
            
        $recentBlogs = Blog::orderBy('created_at', 'desc')
            ->take(5)
            ->get();
            
        return view('admin.dashboard', compact(
            'contactCount',
            'blogCount',
            'recentContacts',
            'recentBlogs'
        ));
    }
    public function profile()
    {
        $admin = Auth::user();
        return view('admin.profile', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }

    public function updatePassword(Request $request)
    {
        try {
            $request->validate([
                'current_password' => ['required', 'string'],
                'new_password' => ['required', 'string', 'confirmed'],
            ]);

            $user = Auth::user();
            if (!Hash::check($request->current_password, $user->password)) {
                return back()->withErrors(['current_password' => 'The current password is incorrect.']);
            }

            $user->update(['password' => Hash::make($request->new_password)]);

            return redirect()->route('profile.edit')->with('success', 'Password changed successfully!');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred while changing the password.']);
}
}
}
