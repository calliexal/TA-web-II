<div class="modal fade" id="editTransactionModal" tabindex="-1" aria-labelledby="editTransactionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editTransactionModalLabel">Edit Transaksi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editTransactionForm" action="" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Pilih Pengguna -->
                    <div class="form-group mb-3">
                        <label for="pengguna_id">Pengguna</label>
                        <select id="pengguna_id" class="form-control" name="pengguna_id" required>
                            @foreach ($list_pengguna as $pengguna)
                                <option value="{{ $pengguna->id }}">{{ $pengguna->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Pilih Mobil -->
                    <div class="form-group mb-3">
                        <label for="mobil_id">Mobil</label>
                        <select id="mobil_id" class="form-control" name="mobil_id" required>
                            @foreach ($list_mobil as $mobil)
                                <option value="{{ $mobil->id }}">{{ $mobil->nama_mobil }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Tanggal Pemesanan -->
                    <div class="form-group mb-3">
                        <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
                    </div>

                    <!-- Tanggal Mulai -->
                    <div class="form-group mb-3">
                        <label for="tanggal_mulai">Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
                    </div>

                    <!-- Tanggal Selesai -->
                    <div class="form-group mb-3">
                        <label for="tanggal_selesai">Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
                    </div>

                    <!-- Total Harga -->
                    <div class="form-group mb-3">
                        <label for="total_harga">Total Harga</label>
                        <input type="number" class="form-control" id="total_harga" name="total_harga" step="0.01" required>
                    </div>

                    <!-- Status Pembayaran -->
                    <div class="form-group mb-3">
                        <label for="status_pembayaran">Status Pembayaran</label>
                        <select id="status_pembayaran" class="form-control" name="status_pembayaran" required>
                            <option value="pending">Pending</option>
                            <option value="lunas">Lunas</option>
                            <option value="batal">Batal</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
