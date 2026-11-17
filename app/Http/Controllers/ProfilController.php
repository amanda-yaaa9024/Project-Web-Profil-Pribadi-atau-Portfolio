<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProfilController extends Controller
{
    public function index()
    {
        $data = [
            'nim' => '1.2610487',
            'nama_lengkap' => 'AULIA AMANDA ALAMSYAH',
            'nama_panggilan' => 'AULIA AMANDA ALAMSYAH',
            'tagline' => 'A technology enthusiast with a passion for gaming, music, and continuous learning.',
            'skills_language' => [
                ['name' => 'PYTHON', 'score' => 80],
                ['name' => 'JAVASCRIPT', 'score' => 42],
                ['name' => 'TYPESCRIPT', 'score' => 43],
                ['name' => 'JAVA', 'score' => 65],
                ['name' => 'C++', 'score' => 40],
                ['name' => 'SQL', 'score' => 45],
            ],
            'skills_framework' => [
                ['name' => 'REACT', 'score' => 30],
            ],
            'skills_tool' => [
                ['name' => 'GIT', 'score' => 34],
            ]
        ];

        return view('profil', $data);
    }

    // Fungsi untuk memproses kirim email
    public function sendContact(Request $request)
    {
        // Validasi inputan user
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ];

        // kirim email ke email pribadi
        Mail::raw("Pesan dari: {$details['name']} ({$details['email']})\n\nIsi Pesan:\n{$details['message']}", function ($message) use ($details) {
            $message->to('amandaaulia03034@gmail.com') // <-- GANTI DENGAN EMAIL KITA
                    ->subject('Pesan Baru dari Website Portofolio - ' . $details['name']);
        });

        return back()->with('success', 'Pesan berhasil terkirim ke email!');
    }
}