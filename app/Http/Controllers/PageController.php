<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginProses(Request $request)
    {
        $username = $request->input('username');
        session(['username' => $username]);
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $username = session('username');
        return view('dashboard', compact('username'));
    }

    public function profile()
    {
        $username = session('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        $username = session('username');
        $inventaris = [
            // Plushie
            ['nama' => 'mofusand Chubby Shark Meow Plush (Sakura Pink)', 'kategori' => 'Plushie', 'stok' => 12, 'harga' => 438000],
            ['nama' => 'MERCI STRAWBERRY Basket Plush (Pink Strawberry)', 'kategori' => 'Plushie', 'stok' => 8, 'harga' => 422000],
            ['nama' => 'mofusand MERCI STRAWBERRY Plush (Blue Strawberry)', 'kategori' => 'Plushie', 'stok' => 5, 'harga' => 422000],
            ['nama' => 'mofusand COFFEE AND DONUTS Plush (White Chocolate Cruller)', 'kategori' => 'Plushie', 'stok' => 7, 'harga' => 422000],
            // Keychain
            ['nama' => 'mofusand Mofumofu Bakery Bread Bag Meow Mascot', 'kategori' => 'Keychain', 'stok' => 20, 'harga' => 341000],
            ['nama' => 'mofusand Mofumofu Bakery Chocolate Cornet Meow Mascot', 'kategori' => 'Keychain', 'stok' => 15, 'harga' => 341000],
            ['nama' => 'mofusand x Sanrio Characters Plump & Fluffy Mascot Pompurin', 'kategori' => 'Keychain', 'stok' => 18, 'harga' => 325000],
            ['nama' => 'mofusand Mofumofu Bakery Baker Cat Mascot (Gray & White)', 'kategori' => 'Keychain', 'stok' => 10, 'harga' => 341000],
        ];
        return view('pengelolaan', compact('username', 'inventaris'));
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}
