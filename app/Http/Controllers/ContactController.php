<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Validasi dan simpan ke database atau kirim email di sini
        return back()->with('success', 'Thank you for your message!');
    }
}
