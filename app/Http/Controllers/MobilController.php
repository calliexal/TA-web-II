<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::paginate(5);
        return view('mobil_index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'plat_nomor' => 'required|unique:mobil,plat_nomor|max:20',
            'bahan_bakar' => 'required|string|max:50',
            'harga_sewa' => 'required|numeric|min:0',
            'status' => 'required|in:ready,not_ready',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        try {
            $mobil = new Mobil($validated);

            if ($request->hasFile('gambar')) {
                $fileName = time() . '_' . $request->file('gambar')->getClientOriginalName();
                $path = $request->file('gambar')->storeAs('gambar_mobil', $fileName, 'public');
                $mobil->gambar = $path;
            }

            $mobil->save();

            return redirect('/mobil')->with('pesan', 'Data mobil berhasil disimpan!');
        } catch (\Exception $e) {
            return back()->withErrors('Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mobil = Mobil::findOrFail($id);
        return view('mobil_edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'merk' => 'required|string|max:255',
            'plat_nomor' => 'required|unique:mobil,plat_nomor,' . $id . '|max:20',
            'bahan_bakar' => 'required|string|max:50',
            'harga_sewa' => 'required|numeric|min:0',
            'status' => 'required|in:ready,not_ready',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        try {
            $mobil = Mobil::findOrFail($id);
            $mobil->fill($validated);

            if ($request->hasFile('gambar')) {
                if ($mobil->gambar && Storage::disk('public')->exists($mobil->gambar)) {
                    Storage::disk('public')->delete($mobil->gambar);
                }
                $fileName = time() . '_' . $request->file('gambar')->getClientOriginalName();
                $path = $request->file('gambar')->storeAs('gambar_mobil', $fileName, 'public');
                $mobil->gambar = $path;
            }

            $mobil->save();

            return redirect('/mobil')->with('pesan', 'Data mobil berhasil diupdate!');
        } catch (\Exception $e) {
            return back()->withErrors('Terjadi kesalahan saat mengupdate data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $mobil = Mobil::findOrFail($id);

            if ($mobil->gambar && Storage::disk('public')->exists($mobil->gambar)) {
                Storage::disk('public')->delete($mobil->gambar);
            }

            $mobil->delete();

            return back()->with('pesan', 'Data mobil berhasil dihapus!');
        } catch (\Exception $e) {
            return back()->withErrors('Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
        }
    }

    /**
     * Generate laporan.
     */
    public function laporan()
    {
        $data['mobil'] = Mobil::all();
        return view('mobil_laporan', $data);
    }
}
