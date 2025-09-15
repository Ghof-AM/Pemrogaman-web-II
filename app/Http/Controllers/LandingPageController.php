<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Menampilkan landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Controller ini hanya bertugas menampilkan view.
        // Tidak ada logika bisnis Model karena kita mengabaikannya.
        return view('landing');
    }

    // /**
    //  * Contoh metode untuk menangani submit form (opsional, jika ingin AJAX ke Laravel)
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function submitContactForm(Request $request)
    // {
    //     // Ini adalah contoh bagaimana controller Laravel bisa menerima data
    //     // jika Anda memutuskan untuk mengirim form via AJAX ke backend Laravel.
    //     // Untuk saat ini, kita akan fokus pada penanganan di JavaScript saja.

    //     // Validasi data (opsional)
    //     // $request->validate([
    //     //     'name' => 'required|string|max:255',
    //     //     'email' => 'required|email|max:255',
    //     //     'message' => 'nullable|string',
    //     // ]);

    //     // Lakukan sesuatu dengan data (misalnya, kirim email, simpan ke log)
    //     \Log::info('Form contact submitted:', $request->all());

    //     return response()->json(['message' => 'Pesan Anda berhasil terkirim!']);
    }
