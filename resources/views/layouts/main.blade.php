<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>SewaMobilKu</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="{{asset('lite/assets/img/kaiadmin/logo_rental.ico')}}"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="{{asset('lite/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["{{ asset('lite/assets/css/fonts.min.css') }}"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('lite/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lite/assets/css/plugins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('lite/assets/css/kaiadmin.min.css')}}" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('lite/assets/css/demo.css') }}" />
  </head>
  <body>
    @yield('content')
    <!--   Core JS Files   -->
    <script src="{{ asset('lite/assets/js/core/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('lite/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('lite/assets/js/core/bootstrap.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('lite/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- Chart JS -->
    <script src="{{ asset('lite/assets/js/plugin/chart.js/chart.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('lite/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('lite/assets/js/plugin/chart-circle/circles.min.js') }}assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="{{ asset('lite/assets/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('lite/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('lite/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('lite/assets/js/plugin/jsvectormap/world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('lite/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{ asset('lite/assets/js/kaiadmin.min.js') }}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{ asset('lite/assets/js/setting-demo.js') }}"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Menangani klik tombol Edit
          const editButtons = document.querySelectorAll('.btn-edit');
    
          editButtons.forEach(button => {
              button.addEventListener('click', function() {
                  const id = this.getAttribute('data-id');
                  const nama = this.getAttribute('data-nama');
                  const merk = this.getAttribute('data-merk');
                  const plat = this.getAttribute('data-plat');
                  const bahan = this.getAttribute('data-bahan');
                  const harga = this.getAttribute('data-harga');
                  const status = this.getAttribute('data-status');
                  const url = this.getAttribute('data-url');
    
                  // Isi form dengan data yang dipilih
                  document.getElementById('edit_nama_mobil').value = nama;
                  document.getElementById('edit_merk').value = merk;
                  document.getElementById('edit_plat_nomor').value = plat;
                  document.getElementById('edit_bahan_bakar').value = bahan;
                  document.getElementById('edit_harga_sewa').value = harga;
                  document.getElementById('edit_status').value = status;
    
                  // Ubah URL action form menjadi URL untuk update
                  const form = document.getElementById('editForm');
                  form.action = url; // Set action menjadi URL yang sesuai
              });
          });
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Menangani klik tombol Edit
          const editButtons = document.querySelectorAll('.btn-edit');
          
          editButtons.forEach(button => {
              button.addEventListener('click', function() {
                  const id = this.getAttribute('data-id');
                  const nama = this.getAttribute('data-nama');
                  const email = this.getAttribute('data-email');
                  const noHp = this.getAttribute('data-no-hp');
                  const role = this.getAttribute('data-role');
                  const alamat = this.getAttribute('data-alamat');
                  const url = this.getAttribute('data-url');
                  
                  // Isi form dengan data yang dipilih
                  document.getElementById('edit_name').value = nama;
                  document.getElementById('edit_email').value = email;
                  document.getElementById('edit_no_hp').value = noHp;
                  document.getElementById('edit_role').value = role;
                  document.getElementById('edit_alamat').value = alamat;
                  
                  // Ubah URL action form menjadi URL untuk update
                  const form = document.getElementById('editForm');
                  form.action = url; // Set action menjadi URL yang sesuai
              });
          });
      });
    </script>  
    <script>
      document.addEventListener('DOMContentLoaded', () => {
        const editButtons = document.querySelectorAll('.btn-edit');
          const editForm = document.getElementById('editTransactionForm');

          editButtons.forEach(button => {
              button.addEventListener('click', () => {
                  // Ambil data dari atribut tombol
                  const id = button.getAttribute('data-id');
                  const penggunaId = button.getAttribute('data-pengguna-id');
                  const mobilId = button.getAttribute('data-mobil-id');
                  const tanggalPemesanan = button.getAttribute('data-tanggal-pemesanan');
                  const tanggalMulai = button.getAttribute('data-tanggal-mulai');
                  const tanggalSelesai = button.getAttribute('data-tanggal-selesai');
                  const totalHarga = button.getAttribute('data-total-harga');
                  const statusPembayaran = button.getAttribute('data-status-pembayaran');
                  const url = button.getAttribute('data-url');

                  // Isi data ke form
                  editForm.action = url;
                  document.getElementById('pengguna_id').value = penggunaId;
                  document.getElementById('mobil_id').value = mobilId;
                  document.getElementById('tanggal_pemesanan').value = tanggalPemesanan;
                  document.getElementById('tanggal_mulai').value = tanggalMulai;
                  document.getElementById('tanggal_selesai').value = tanggalSelesai;
                  document.getElementById('total_harga').value = totalHarga;
                  document.getElementById('status_pembayaran').value = statusPembayaran;
              });
          });
      });
    </script>
  </body>
</html>
