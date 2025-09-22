<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Import Model Contact yang baru dibuat
use Illuminate\Support\Facades\Log; // Untuk logging

class LandingPageController extends Controller
{
    /**
     * Menampilkan landing page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('landing');
    }

    /**
     * Metode untuk menangani submit form kontak.
     * Ini akan menerima data dari AJAX dan menyimpannya ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function submitContactForm(Request $request)
    {
        // 1. Validasi data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
            // Pastikan Anda juga akan mengirim _token dari frontend jika menggunakan AJAX
            '_token' => 'required', // Tambahkan validasi CSRF token
        ]);

        try {
            // 2. Simpan data ke database menggunakan Model Contact
            Contact::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'message' => $validatedData['message'],
            ]);

            Log::info('Pesan kontak baru disimpan:', $validatedData);

            // 3. Beri respons sukses
            return response()->json(['message' => 'Pesan Anda berhasil terkirim!'], 200);

        } catch (\Exception $e) {
            // 4. Tangani jika ada error saat penyimpanan
            Log::error('Gagal menyimpan pesan kontak:', ['error' => $e->getMessage(), 'request' => $request->all()]);
            return response()->json(['message' => 'Terjadi kesalahan saat mengirim pesan. Silakan coba lagi.'], 500);
        }
    }
}