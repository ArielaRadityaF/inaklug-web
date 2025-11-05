<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HubungiKamiController extends Controller
{
    public function kirimPesan(Request $request)
    {
        // 🔹 Validasi input + reCAPTCHA
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        // 🔹 Kirim email
        $data = [
            'nama' => $request->name,
            'email' => $request->email,
            'pesan' => $request->message,
        ];

        Mail::send('emails.hubungikami', $data, function ($message) use ($data) {
            $message->to('arielaraditya@gmail.com') 
                    ->subject('Pesan Baru dari Form Hubungi Kami');
        });

        // 🔹 Redirect kembali dengan pesan sukses
        return back()->with('success', 'Pesan kamu berhasil dikirim!');
    }
}
