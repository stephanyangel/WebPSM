<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Ini mantra buat manggil Pak Pos

class ContactController extends Controller
{
    public function kirimSurat(Request $request)
    {
        // 1. Kita ketik dulu isi suratnya mau kayak gimana
        $isiSurat = "Ada pesan baru nih dari website!\n\n" .
                    "Nama: " . $request->first_name . " " . $request->last_name . "\n" .
                    "Email Klien: " . $request->email . "\n" .
                    "Pesan: " . $request->message;

        // 2. Perintah nyuruh Pak Pos terbang ngirim surat
        Mail::raw($isiSurat, function ($message) {
            $message->to('tephany.angel@gmail.com')
                    ->subject('Pesan Masuk dari Web PSM');
        });

        // 3. Balikin user ke halaman contact sambil bawa pesan sukses
        return back()->with('success', 'Thank you! Your message has been sent successfully.');
    }
}