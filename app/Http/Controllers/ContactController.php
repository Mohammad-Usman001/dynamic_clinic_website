<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Store data or send email
        $data = $request->only('name', 'email', 'message');
        
        ContactMessage::create($data);


        // Redirect with success message
        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }
    
    public function index(){
        $contacts = ContactMessage::all();
        // dd($contacts);
        return view('admin.contacts',compact('contacts'));
    }
    public function bulkDelete(Request $request)
    {
        $contactIds = $request->input('selected_contacts');
    
        if ($contactIds) {
            ContactMessage::whereIn('id', $contactIds)->delete();
            return redirect()->route('contacts.index')->with('success', 'Selected contacts have been deleted.');
        }
    
        return redirect()->route('contacts.index')->with('error', 'No contacts selected for deletion.');
    }
    
    public function destroy($id)
    {
        // dd($id);
        $contacts = ContactMessage::findOrFail($id);
        $contacts->delete();
        return redirect()->route('contacts.index')->with('success', 'contacts deleted successfully!');
    }
}
