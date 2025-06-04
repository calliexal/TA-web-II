<div class="modal fade" id="addTransactionModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">Tambah</span>
                    <span class="fw-light">Transaksi</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('transaksi') }}" method="POST">
                    @csrf
                    <!-- Pilih Pengguna -->
                    <div class="form-group">
                        <label for="pengguna_id">Pengguna</label>
                        <select id="pengguna_id" class="form-control" name="pengguna_id" required>
                            <option value="" disabled selected>Pilih Pengguna</option>
                            @foreach ($list_pengguna as $p)
                                <option value="{{ $p->id }}">{{ $p->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Pilih Mobil -->
                    <div class="form-group">
                        <label for="mobil_id">Mobil</label>
                        <select id="mobil_id" class="form-control" name="mobil_id" required>
                            <option value="" disabled selected>Pilih Mobil</option>
                            @foreach ($list_mobil as $m)
                                <option value="{{ $m->id }}">{{ $m->nama_mobil }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- Tanggal Pemesanan -->
                    <div class="form-group">
                        <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
                        <input id="tanggal_pemesanan" class="form-control" type="date" name="tanggal_pemesanan" required>
                    </div>
                    <!-- Tanggal Mulai -->
                    <div class="form-group">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input id="tanggal_mulai" class="form-control" type="date" name="tanggal_mulai" required>
                    </div>
                    <!-- Tanggal Selesai -->
                    <div class="form-group">
                        <label for="tanggal_selesai">Tanggal Selesai</label>
                        <input id="tanggal_selesai" class="form-control" type="date" name="tanggal_selesai" required>
                    </div>
                    <!-- Status Pembayaran -->
                    <div class="form-group">
                        <label for="status_pembayaran">Status Pembayaran</label>
                        <select id="status_pembayaran" class="form-control" name="status_pembayaran" required>
                            <option value="pending">Pending</option>
                            <option value="lunas">Lunas</option>
                            <option value="batal">Batal</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
