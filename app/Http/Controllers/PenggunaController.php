<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pengguna'] = Pengguna::paginate(10); // Ambil data pengguna dengan paginasi
        return view('pengguna_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pengguna_create'); // Tampilkan form untuk membuat pengguna baru
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|string|min:8',
            'no_hp' => 'nullable|string|max:15',
            'role' => 'required|in:admin,pelanggan',
            'alamat' => 'nullable|string',
        ]);

        // Buat pengguna baru
        Pengguna::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password untuk keamanan
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pengguna')->with('pesan', 'Data Pengguna berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['pengguna'] = Pengguna::findOrFail($id);
        return view('pengguna_show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['pengguna'] = Pengguna::findOrFail($id);
        return view('pengguna_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => "required|email|unique:pengguna,email,$id",
            'password' => 'nullable|string|min:8',
            'no_hp' => 'nullable|string|max:15',
            'role' => 'required|in:admin,pelanggan',
            'alamat' => 'nullable|string',
        ]);

        $pengguna = Pengguna::findOrFail($id);

        // Update pengguna
        $pengguna->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $pengguna->password,
            'no_hp' => $request->no_hp,
            'role' => $request->role,
            'alamat' => $request->alamat,
        ]);

        return redirect('/pengguna')->with('pesan', 'Data Pengguna berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pengguna = Pengguna::findOrFail($id);
        $pengguna->delete();
        return back()->with('pesan', 'Data Pengguna berhasil dihapus!');
    }

    public function laporan()
    {
        // Retrieve all users for the report
        $data['pengguna'] = Pengguna::all();

        // Return the 'pengguna_laporan' view and pass the data
        return view('pengguna_laporan', $data);
    }
}
