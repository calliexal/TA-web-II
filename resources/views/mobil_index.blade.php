@extends('layouts.main')
@section('content')
<div class="wrapper">
  <!-- Sidebar -->
  <div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{ url('/home', []) }}" class="logo">
          <img
            src="{{ asset('lite/assets/img/kaiadmin/rental_mobil2.svg') }}"
            alt="navbar brand"
            class="navbar-brand"
            height="65"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Home</h4>
          </li>
          <li class="nav-item">
            <a href="{{ url('/home', []) }}" >
              <i class="fas fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Menu</h4>
          </li>
          <li class="nav-item active">
            <a href="{{ url('mobil', []) }}" >
              <i class="fas fa-car"></i>
              <p>Mobil</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('pengguna', []) }}" >
              <i class="fas fa-users"></i>
              <p>Pengguna</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('transaksi', []) }}" >
              <i class="fas fa-shopping-cart"></i>
              <p>Transaksi</p>
            </a>
          </li>
          <li class="nav-section">
            <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
            </span>
            <h4 class="text-section">Pengaturan</h4>
          </li>
          <li class="nav-item">
            <a data-bs-toggle="collapse" href="#Setting">
                <i class="fas fa-cogs"></i>  
                <p>Setting</p>
            </a>
          </li>
          <li class="nav-item">
              <a data-bs-toggle="collapse" href="#Tentang Kami">
                  <i class="fas fa-info-circle"></i>  
                  <p>Tentang Kami</p>
              </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- End Sidebar -->

  <div class="main-panel">
    <div class="main-header">
      <div class="main-header-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
          <a href="index.html" class="logo">
            <img
              src="{{ asset('lite/assets/img/kaiadmin/logo_light.svg') }}"
              alt="navbar brand"
              class="navbar-brand"
              height="20"
            />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
        <!-- End Logo Header -->
      </div>
      <!-- Navbar Header -->
      <nav
        class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
      >
        <div class="container-fluid">
          <nav
            class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
          >
            <div class="input-group">
              <div class="input-group-prepend">
                <button type="submit" class="btn btn-search pe-1">
                  <i class="fa fa-search search-icon"></i>
                </button>
              </div>
              <input
                type="text"
                placeholder="Search ..."
                class="form-control"
              />
            </div>
          </nav>

          <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
            <li
              class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
            >
              <a
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                href="#"
                role="button"
                aria-expanded="false"
                aria-haspopup="true"
              >
                <i class="fa fa-search"></i>
              </a>
              <ul class="dropdown-menu dropdown-search animated fadeIn">
                <form class="navbar-left navbar-form nav-search">
                  <div class="input-group">
                    <input
                      type="text"
                      placeholder="Search ..."
                      class="form-control"
                    />
                  </div>
                </form>
              </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="messageDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="fa fa-envelope"></i>
              </a>
              <ul
                class="dropdown-menu messages-notif-box animated fadeIn"
                aria-labelledby="messageDropdown"
              >
                <li>
                  <div
                    class="dropdown-title d-flex justify-content-between align-items-center"
                  >
                    Messages
                    <a href="#" class="small">Mark all as read</a>
                  </div>
                </li>
                <li>
                  <div class="message-notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/jm_denis.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jimmy Denis</span>
                          <span class="block"> How are you ? </span>
                          <span class="time">5 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/chadengle.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="subject">Chad</span>
                          <span class="block"> Ok, Thanks ! </span>
                          <span class="time">12 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/mlane.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="subject">Jhon Doe</span>
                          <span class="block">
                            Ready for the meeting today...
                          </span>
                          <span class="time">12 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/talha.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="subject">Talha</span>
                          <span class="block"> Hi, Apa Kabar ? </span>
                          <span class="time">17 minutes ago</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);"
                    >See all messages<i class="fa fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="notifDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="fa fa-bell"></i>
                <span class="notification">4</span>
              </a>
              <ul
                class="dropdown-menu notif-box animated fadeIn"
                aria-labelledby="notifDropdown"
              >
                <li>
                  <div class="dropdown-title">
                    You have 4 new notification
                  </div>
                </li>
                <li>
                  <div class="notif-scroll scrollbar-outer">
                    <div class="notif-center">
                      <a href="#">
                        <div class="notif-icon notif-primary">
                          <i class="fa fa-user-plus"></i>
                        </div>
                        <div class="notif-content">
                          <span class="block"> New user registered </span>
                          <span class="time">5 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-success">
                          <i class="fa fa-comment"></i>
                        </div>
                        <div class="notif-content">
                          <span class="block">
                            Rahmad commented on Admin
                          </span>
                          <span class="time">12 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-img">
                          <img
                            src="{{ asset('lite/assets/img/profile2.jpg') }}"
                            alt="Img Profile"
                          />
                        </div>
                        <div class="notif-content">
                          <span class="block">
                            Reza send messages to you
                          </span>
                          <span class="time">12 minutes ago</span>
                        </div>
                      </a>
                      <a href="#">
                        <div class="notif-icon notif-danger">
                          <i class="fa fa-heart"></i>
                        </div>
                        <div class="notif-content">
                          <span class="block"> Farrah liked Admin </span>
                          <span class="time">17 minutes ago</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li>
                  <a class="see-all" href="javascript:void(0);"
                    >See all notifications<i class="fa fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item topbar-icon dropdown hidden-caret">
              <a
                class="nav-link"
                data-bs-toggle="dropdown"
                href="#"
                aria-expanded="false"
              >
                <i class="fas fa-layer-group"></i>
              </a>
              <div class="dropdown-menu quick-actions animated fadeIn">
                <div class="quick-actions-header">
                  <span class="title mb-1">Quick Actions</span>
                  <span class="subtitle op-7">Shortcuts</span>
                </div>
                <div class="quick-actions-scroll scrollbar-outer">
                  <div class="quick-actions-items">
                    <div class="row m-0">
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-danger rounded-circle">
                            <i class="far fa-calendar-alt"></i>
                          </div>
                          <span class="text">Calendar</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div
                            class="avatar-item bg-warning rounded-circle"
                          >
                            <i class="fas fa-map"></i>
                          </div>
                          <span class="text">Maps</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div class="avatar-item bg-info rounded-circle">
                            <i class="fas fa-file-excel"></i>
                          </div>
                          <span class="text">Reports</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div
                            class="avatar-item bg-success rounded-circle"
                          >
                            <i class="fas fa-envelope"></i>
                          </div>
                          <span class="text">Emails</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div
                            class="avatar-item bg-primary rounded-circle"
                          >
                            <i class="fas fa-file-invoice-dollar"></i>
                          </div>
                          <span class="text">Invoice</span>
                        </div>
                      </a>
                      <a class="col-6 col-md-4 p-0" href="#">
                        <div class="quick-actions-item">
                          <div
                            class="avatar-item bg-secondary rounded-circle"
                          >
                            <i class="fas fa-credit-card"></i>
                          </div>
                          <span class="text">Payments</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item topbar-user dropdown hidden-caret">
              <a
                  class="dropdown-toggle profile-pic"
                  data-bs-toggle="dropdown"
                  href="#"
                  aria-expanded="false"
              >
                  <div class="avatar-sm">
                      <img
                          src="{{ asset('lite/assets/img/profillayanan.jpg') }}"
                          alt="..."
                          class="avatar-img rounded-circle"
                      />
                  </div>
                  <span class="profile-username">
                      <span class="op-7">Hi,</span>
                      <span class="fw-bold">{{ Auth::user()->name }}</span>
                  </span>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                  <div class="dropdown-user-scroll scrollbar-outer">
                      <li>
                          <div class="user-box">
                              <div class="avatar-lg">
                                  <img
                                      src="{{ asset('lite/assets/img/profillayanan.jpg') }}"
                                      alt="image profile"
                                      class="avatar-img rounded"
                                  />
                              </div>
                              <div class="u-text">
                                  <span class="fw-bold d-block">{{ Auth::user()->name }}</span>
                                  <small class="text-muted">{{ Auth::user()->email }}</small>
                              </div>
                          </div>
                      </li>
                      <li>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">My Profile</a>
                          <a class="dropdown-item" href="#">My Balance</a>
                          <a class="dropdown-item" href="#">Inbox</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Account Setting</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </li>
                  </div>
              </ul>
            </li>  
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Daftar Mobil</h3>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                        <i class="fa fa-plus"></i> Tambah Mobil
                    </button>
                    <a href="{{ url('mobil/laporan/cetak', []) }}" class="btn btn-outline-primary btn-round">
                        <i class="fa fa-file"></i> Laporan
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <!-- Modal Tambah Mobil -->
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold">Tambah</span>
                                            <span class="fw-light">Mobil</span>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="nama_mobil">Nama Mobil</label>
                                                    <input id="nama_mobil" class="form-control" type="text" name="nama_mobil" value="{{ old('nama_mobil') }}">
                                                    <span class="text-danger">{{ $errors->first('nama_mobil') }}</span>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="merk">Merk</label>
                                                    <input id="merk" class="form-control" type="text" name="merk" value="{{ old('merk') }}">
                                                    <span class="text-danger">{{ $errors->first('merk') }}</span>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="plat_nomor">Plat Nomor</label>
                                                    <input id="plat_nomor" class="form-control" type="text" name="plat_nomor" value="{{ old('plat_nomor') }}">
                                                    <span class="text-danger">{{ $errors->first('plat_nomor') }}</span>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="bahan_bakar">Bahan Bakar</label>
                                                    <input id="bahan_bakar" class="form-control" type="text" name="bahan_bakar" value="{{ old('bahan_bakar') }}">
                                                    <span class="text-danger">{{ $errors->first('bahan_bakar') }}</span>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="harga_sewa">Harga Sewa</label>
                                                    <input id="harga_sewa" class="form-control" type="number" step="0.01" name="harga_sewa" value="{{ old('harga_sewa') }}">
                                                    <span class="text-danger">{{ $errors->first('harga_sewa') }}</span>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select id="status" class="form-control" name="status">
                                                        <option value="ready" @selected('ready' == old('status'))>Ready</option>
                                                        <option value="not_ready" @selected('not_ready' == old('status'))>Not Ready</option>
                                                    </select>
                                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                                </div>
    
                                                <div class="form-group">
                                                    <label for="gambar">Gambar Mobil</label>
                                                    <input id="gambar" class="form-control" type="file" name="gambar">
                                                    <span class="text-danger">{{ $errors->first('gambar') }}</span>
                                                </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                       <!-- Modal Edit Mobil -->
                        <div class="modal fade" id="editRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <form id="editForm" action="" method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="modal-header border-0">
                                            <h5 class="modal-title">
                                                <span class="fw-mediumbold">Edit</span>
                                                <span class="fw-light">Mobil</span>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group mb-3">
                                                <label for="edit_nama_mobil">Nama Mobil</label>
                                                <input id="edit_nama_mobil" class="form-control" type="text" name="nama_mobil">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="edit_merk">Merk</label>
                                                <input id="edit_merk" class="form-control" type="text" name="merk">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="edit_plat_nomor">Plat Nomor</label>
                                                <input id="edit_plat_nomor" class="form-control" type="text" name="plat_nomor">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="edit_bahan_bakar">Bahan Bakar</label>
                                                <input id="edit_bahan_bakar" class="form-control" type="text" name="bahan_bakar">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="edit_harga_sewa">Harga Sewa</label>
                                                <input id="edit_harga_sewa" class="form-control" type="number" step="0.01" name="harga_sewa">
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="edit_status">Status</label>
                                                <select id="edit_status" class="form-control" name="status">
                                                    <option value="ready">Ready</option>
                                                    <option value="not_ready">Not Ready</option>
                                                </select>
                                            </div>

                                            <!-- Edit Gambar Mobil -->
                                            <div class="form-group mb-3">
                                                <label for="edit_gambar">Gambar Mobil</label>
                                                <input id="edit_gambar" class="form-control" type="file" name="gambar">
                                                <span class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</span>
                                            </div>

                                            <!-- Display current image if available -->
                                            <div class="form-group">
                                                <label>Current Image</label>
                                                <div id="current-image">
                                                    <!-- Image will be inserted dynamically -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Tabel Data -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Gambar</th>
                                        <th>Nama Mobil</th>
                                        <th>Merk</th>
                                        <th>Plat Nomor</th>
                                        <th>Bahan Bakar</th>
                                        <th>Harga Sewa</th>
                                        <th>Status</th>
                                        <th>Created</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mobil as $m)
                                        <tr>
                                            <td>{{ $m->id }}</td>
                                            <<td>
                                                @if($m->gambar)
                                                    <img src="{{ asset('storage/'.$m->gambar) }}" alt="Gambar Mobil" class="img-thumbnail" style="width: 100px;">
                                                @else
                                                    <span>No Image</span>
                                                @endif
                                            </td>
                                            <td>{{ $m->nama_mobil }}</td>
                                            <td>{{ $m->merk }}</td>
                                            <td>{{ $m->plat_nomor }}</td>
                                            <td>{{ $m->bahan_bakar }}</td>
                                            <td>Rp {{ number_format($m->harga_sewa, 2, ',', '.') }}</td>
                                            <td>
                                                <span class="badge {{ $m->status == 'ready' ? 'bg-success' : 'bg-danger' }}">
                                                    {{ ucfirst($m->status) }}
                                                </span>
                                            </td>
                                            <td>{{ $m->created_at }}</td>
                                            <td>
                                                <div class="d-flex justify-content-start align-items-center gap-2">
                                                    <!-- Tombol Edit -->
                                                    <a href="#" class="btn btn-sm btn-warning btn-edit"
                                                       data-id="{{ $m->id }}"
                                                       data-nama="{{ $m->nama_mobil }}"
                                                       data-merk="{{ $m->merk }}"
                                                       data-plat="{{ $m->plat_nomor }}"
                                                       data-bahan="{{ $m->bahan_bakar }}"
                                                       data-harga="{{ $m->harga_sewa }}"
                                                       data-status="{{ $m->status }}"
                                                       data-url="{{ url('mobil/' . $m->id) }}"
                                                       data-bs-toggle="modal"
                                                       data-bs-target="#editRowModal">
                                                       <i class="fa fa-edit"></i> Edit
                                                    </a>
      
                                                    <!-- Tombol Hapus -->
                                                    <form action="{{ url('mobil/' . $m->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fa fa-trash"></i> Hapus
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- Pagination -->
                        <div class="card-footer d-flex justify-content-center">
                            {{ $mobil->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  
    <footer class="footer">
      <div class="container-fluid d-flex justify-content-between">
        <nav class="pull-left">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="http://www.themekita.com">
                ThemeKita
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Help </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"> Licenses </a>
            </li>
          </ul>
        </nav>
        <div class="copyright">
          2024, made with <i class="fa fa-heart heart text-danger"></i> by
          <a href="http://www.themekita.com">ThemeKita</a>
        </div>
        <div>
          Distributed by
          <a target="_blank" href="https://themewagon.com/">ThemeWagon</a>.
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection