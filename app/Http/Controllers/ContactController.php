<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Simpan ke database
        Contact::create($validated);

        return redirect()->route('contact.show')->with('success', 'Pesan berhasil dikirim!');
    }
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('contact-list', compact('contacts'));
    }
}
