<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Pengguna;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['transaksi'] = Transaksi::with(['pengguna', 'mobil'])->paginate(10);
        $data['list_pengguna'] = Pengguna::all(); // Ambil semua data pengguna
        $data['list_mobil'] = Mobil::all(); // Ambil semua data mobil
        return view('transaksi_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['mobil'] = Mobil::where('status', 'ready')->get(); // Mobil dengan status 'ready'
        $data['pengguna'] = Pengguna::all(); // Semua pengguna
        return view('transaksi_create', $data); // Kirim data ke view
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pengguna_id' => 'required|exists:pengguna,id',
            'mobil_id' => 'required|exists:mobil,id',
            'tanggal_pemesanan' => 'required|date',
            'tanggal_mulai' => 'required|date|after_or_equal:tanggal_pemesanan',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai',
            'status_pembayaran' => 'required|in:pending,lunas,batal',
        ]);

        $transaksi = new Transaksi();
        $transaksi->pengguna_id = $request->pengguna_id;
        $transaksi->mobil_id = $request->mobil_id;
        $transaksi->tanggal_pemesanan = $request->tanggal_pemesanan;
        $transaksi->tanggal_mulai = $request->tanggal_mulai;
        $transaksi->tanggal_selesai = $request->tanggal_selesai;

        // Hitung total harga berdasarkan durasi peminjaman
        $mobil = Mobil::find($request->mobil_id);
        $durasi = (strtotime($request->tanggal_selesai) - strtotime($request->tanggal_mulai)) / 86400; // Hitung hari
        $transaksi->total_harga = $durasi * $mobil->harga_sewa;

        $transaksi->status_pembayaran = $request->status_pembayaran;
        $transaksi->save();

        // Update status mobil menjadi 'not_ready'
        $mobil->status = 'not_ready';
        $mobil->save();

        return redirect('/transaksi')->with('pesan', 'Transaksi berhasil disimpan!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['transaksi'] = Transaksi::findOrFail($id);
        $data['mobil'] = Mobil::where('status', 'ready')->get(); // Hanya mobil dengan status 'ready'
        $data['pengguna'] = Pengguna::all();
        return view('transaksi_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'pengguna_id' => 'required|exists:pengguna,id',
            'mobil_id' => 'required|exists:mobil,id',
            'tanggal_pemesanan' => 'required|date',
            'tanggal_mulai' => 'required|date|after_or_equal:tanggal_pemesanan',
            'tanggal_selesai' => 'required|date|after:tanggal_mulai',
            'status_pembayaran' => 'required|in:pending,lunas,batal',
        ]);

        $transaksi = Transaksi::findOrFail($id);

        // Kembalikan status mobil lama menjadi 'ready' jika mobil diubah
        if ($transaksi->mobil_id != $request->mobil_id) {
            $mobilLama = Mobil::find($transaksi->mobil_id);
            $mobilLama->status = 'ready';
            $mobilLama->save();
        }

        $transaksi->pengguna_id = $request->pengguna_id;
        $transaksi->mobil_id = $request->mobil_id;
        $transaksi->tanggal_pemesanan = $request->tanggal_pemesanan;
        $transaksi->tanggal_mulai = $request->tanggal_mulai;
        $transaksi->tanggal_selesai = $request->tanggal_selesai;

        // Hitung ulang total harga
        $mobil = Mobil::find($request->mobil_id);
        $durasi = (strtotime($request->tanggal_selesai) - strtotime($request->tanggal_mulai)) / 86400;
        $transaksi->total_harga = $durasi * $mobil->harga_sewa;

        $transaksi->status_pembayaran = $request->status_pembayaran;
        $transaksi->save();

        // Update status mobil baru menjadi 'not_ready'
        $mobil->status = 'not_ready';
        $mobil->save();

        return redirect('/transaksi')->with('pesan', 'Transaksi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        // Kembalikan status mobil menjadi 'ready' setelah transaksi dihapus
        $mobil = Mobil::find($transaksi->mobil_id);
        $mobil->status = 'ready';
        $mobil->save();

        $transaksi->delete();
        return redirect('/transaksi')->with('pesan', 'Transaksi berhasil dihapus!');
    }
    public function laporan()
    {
        // Retrieve all users for the report
        $data['transaksi'] = Transaksi::all();

        // Return the 'pengguna_laporan' view and pass the data
        return view('transaksi_laporan', $data);
    }
}
