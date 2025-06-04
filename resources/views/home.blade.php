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
          <li class="nav-item active">
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
          <li class="nav-item ">
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

          <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">

            <!-- Form Baru -->
            <li class="nav-item d-flex align-items-center">
              <form
                class="d-flex"
                role="search"
                method="get"
                action="{{ url('mobil/cari/data', []) }}"
              >
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                  name="search"
                />
                &nbsp;
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
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
                          <a class="dropdown-item" href="{{ route('profile') }}">My Profile</a>
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
        <div
          class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
        >
          <div>
            <h3 class="fw-bold mb-3">Dashboard</h3>

          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div
                      class="icon-big text-center icon-primary bubble-shadow-small"
                    >
                      <i class="fas fa-car"></i>
                    </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                    <div class="mobil">
                      <a href="{{ url('mobil', []) }}">
                        <p class="card-category">Daftar Mobil</p>
                        <h4 class="card-title">100</h4>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div
                      class="icon-big text-center icon-info bubble-shadow-small"
                    >
                      <i class="fas fa-users"></i>
                    </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                    <div class="numbers">
                      <a href="{{ url('pengguna', []) }}">
                        <p class="card-category">Pengguna</p>
                        <h4 class="card-title">1303</h4>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="card card-stats card-round">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-icon">
                    <div
                      class="icon-big text-center icon-secondary bubble-shadow-small"
                    >
                    <i class="fas fa-wallet"></i>
                    </div>
                  </div>
                  <div class="col col-stats ms-3 ms-sm-0">
                    <div class="numbers">
                      <p class="card-category">Transaksi</p>
                      <h4 class="card-title">576</h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="row">
          <div class="col-md-8">
            <div class="card card-round">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">User Statistics</div>
                  <div class="card-tools">
                    <a
                      href="{{ url('transaksi', []) }}"
                      class="btn btn-label-success btn-round btn-sm me-2"
                    >
                      <span class="btn-label">
                        <i class="fa fa-pencil"></i>
                      </span>
                      Export
                    </a>
                    <a href="#" class="btn btn-label-info btn-round btn-sm">
                      <span class="btn-label">
                        <i class="fa fa-print"></i>
                      </span>
                      Print
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="chart-container">
                  <img src="{{ asset('lite/assets/img/grafik.jpg') }}" alt="Grafik pelayanan" style="width: 100%; height: auto;" />
                </div>
                <div id="myChartLegend"></div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-primary card-round">
              <div class="card-header">
                <div class="card-head-row">
                  <div class="card-title">Transaksi</div>
                  <div class="card-tools">
                    <div class="dropdown">
                      <button
                        class="btn btn-sm btn-label-light dropdown-toggle"
                        type="button"
                        id="dropdownMenuButton"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        Export
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-category">March 25 - April 02</div>
              </div>
              <div class="card-body pb-0">
                <div class="mb-4 mt-2">
                  <h1>$4,578.58</h1>
                </div>
                <div class="pull-in">
                  <canvas id="dailySalesChart"></canvas>
                </div>
              </div>
            </div>
            <div class="card card-round">
              <div class="card-body pb-0">
                <div class="h1 fw-bold float-end text-primary">+5%</div>
                <h2 class="mb-2">17</h2>
                <p class="text-muted">Users online</p>
                <div class="pull-in sparkline-fix">
                  <div id="lineChart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-round">
              <div class="card-header">
                <div class="card-head-row card-tools-still-right">
                  <h4 class="card-title">Users Geolocation</h4>
                  <div class="card-tools">
                    <button
                      class="btn btn-icon btn-link btn-primary btn-xs"
                    >
                      <span class="fa fa-angle-down"></span>
                    </button>
                    <button
                      class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card"
                    >
                      <span class="fa fa-sync-alt"></span>
                    </button>
                    <button
                      class="btn btn-icon btn-link btn-primary btn-xs"
                    >
                      <span class="fa fa-times"></span>
                    </button>
                  </div>
                </div>
                <p class="card-category">
                  Map of the distribution of users around the world
                </p>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="table-responsive table-hover table-sales">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td>
                              <div class="flag">
                                <img
                                  src="{{ asset('lite/assets/img/flags/id.png') }}"
                                  alt="indonesia"
                                />
                              </div>
                            </td>
                            <td>Indonesia</td>
                            <td class="text-end">2.320</td>
                            <td class="text-end">42.18%</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img
                                  src="{{ asset('lite/assets/img/flags/us.png') }}"
                                  alt="united states"
                                />
                              </div>
                            </td>
                            <td>USA</td>
                            <td class="text-end">240</td>
                            <td class="text-end">4.36%</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img
                                  src="{{ asset('lite/assets/img/flags/au.png') }}"
                                  alt="australia"
                                />
                              </div>
                            </td>
                            <td>Australia</td>
                            <td class="text-end">119</td>
                            <td class="text-end">2.16%</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img
                                  src="{{ asset('lite/assets/img/flags/ru.png') }}"
                                  alt="russia"
                                />
                              </div>
                            </td>
                            <td>Russia</td>
                            <td class="text-end">1.081</td>
                            <td class="text-end">19.65%</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img
                                  src="{{ asset('lite/assets/img/flags/cn.png') }}"
                                  alt="china"
                                />
                              </div>
                            </td>
                            <td>China</td>
                            <td class="text-end">1.100</td>
                            <td class="text-end">20%</td>
                          </tr>
                          <tr>
                            <td>
                              <div class="flag">
                                <img
                                  src="{{ asset('lite/assets/img/flags/br.png') }}"
                                  alt="brazil"
                                />
                              </div>
                            </td>
                            <td>Brasil</td>
                            <td class="text-end">640</td>
                            <td class="text-end">11.63%</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mapcontainer">
                      <div
                        id="world-map"
                        class="w-100"
                        style="height: 300px"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-round">
              <div class="card-body">
                <div class="card-head-row card-tools-still-right">
                  <div class="card-title">New Customers</div>
                  <div class="card-tools">
                    <div class="dropdown">
                      <button
                        class="btn btn-icon btn-clean me-0"
                        type="button"
                        id="dropdownMenuButton"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="fas fa-ellipsis-h"></i>
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-list py-4">
                  <div class="item-list">
                    <div class="avatar">
                      <img
                        src="{{ asset('lite/assets/img/jm_denis.jpg') }}"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <div class="info-user ms-3">
                      <div class="username">Jimmy Denis</div>
                      <div class="status">Graphic Designer</div>
                    </div>
                    <button class="btn btn-icon btn-link op-8 me-1">
                      <i class="far fa-envelope"></i>
                    </button>
                    <button class="btn btn-icon btn-link btn-danger op-8">
                      <i class="fas fa-ban"></i>
                    </button>
                  </div>
                  <div class="item-list">
                    <div class="avatar">
                      <span
                        class="avatar-title rounded-circle border border-white"
                        >CF</span
                      >
                    </div>
                    <div class="info-user ms-3">
                      <div class="username">Chandra Felix</div>
                      <div class="status">Sales Promotion</div>
                    </div>
                    <button class="btn btn-icon btn-link op-8 me-1">
                      <i class="far fa-envelope"></i>
                    </button>
                    <button class="btn btn-icon btn-link btn-danger op-8">
                      <i class="fas fa-ban"></i>
                    </button>
                  </div>
                  <div class="item-list">
                    <div class="avatar">
                      <img
                        src="{{ asset('lite/assets/img/talha.jpg') }}"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <div class="info-user ms-3">
                      <div class="username">Talha</div>
                      <div class="status">Front End Designer</div>
                    </div>
                    <button class="btn btn-icon btn-link op-8 me-1">
                      <i class="far fa-envelope"></i>
                    </button>
                    <button class="btn btn-icon btn-link btn-danger op-8">
                      <i class="fas fa-ban"></i>
                    </button>
                  </div>
                  <div class="item-list">
                    <div class="avatar">
                      <img
                        src="{{ asset('lite/assets/img/chadengle.jpg') }}"
                        alt="..."
                        class="avatar-img rounded-circle"
                      />
                    </div>
                    <div class="info-user ms-3">
                      <div class="username">Chad</div>
                      <div class="status">CEO Zeleaf</div>
                    </div>
                    <button class="btn btn-icon btn-link op-8 me-1">
                      <i class="far fa-envelope"></i>
                    </button>
                    <button class="btn btn-icon btn-link btn-danger op-8">
                      <i class="fas fa-ban"></i>
                    </button>
                  </div>
                  <div class="item-list">
                    <div class="avatar">
                      <span
                        class="avatar-title rounded-circle border border-white bg-primary"
                        >H</span
                      >
                    </div>
                    <div class="info-user ms-3">
                      <div class="username">Hizrian</div>
                      <div class="status">Web Designer</div>
                    </div>
                    <button class="btn btn-icon btn-link op-8 me-1">
                      <i class="far fa-envelope"></i>
                    </button>
                    <button class="btn btn-icon btn-link btn-danger op-8">
                      <i class="fas fa-ban"></i>
                    </button>
                  </div>
                  <div class="item-list">
                    <div class="avatar">
                      <span
                        class="avatar-title rounded-circle border border-white bg-secondary"
                        >F</span
                      >
                    </div>
                    <div class="info-user ms-3">
                      <div class="username">Farrah</div>
                      <div class="status">Marketing</div>
                    </div>
                    <button class="btn btn-icon btn-link op-8 me-1">
                      <i class="far fa-envelope"></i>
                    </button>
                    <button class="btn btn-icon btn-link btn-danger op-8">
                      <i class="fas fa-ban"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card card-round">
              <div class="card-header">
                <div class="card-head-row card-tools-still-right">
                  <div class="card-title">Transaction History</div>
                  <div class="card-tools">
                    <div class="dropdown">
                      <button
                        class="btn btn-icon btn-clean me-0"
                        type="button"
                        id="dropdownMenuButton"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="fas fa-ellipsis-h"></i>
                      </button>
                      <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                      >
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#"
                          >Something else here</a
                        >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="table-responsive">
                  <!-- Projects table -->
                  <table class="table align-items-center mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Payment Number</th>
                        <th scope="col" class="text-end">Date & Time</th>
                        <th scope="col" class="text-end">Amount</th>
                        <th scope="col" class="text-end">Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">
                          <button
                            class="btn btn-icon btn-round btn-success btn-sm me-2"
                          >
                            <i class="fa fa-check"></i>
                          </button>
                          Payment from #10231
                        </th>
                        <td class="text-end">Mar 19, 2020, 2.45pm</td>
                        <td class="text-end">$250.00</td>
                        <td class="text-end">
                          <span class="badge badge-success">Completed</span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <button
                            class="btn btn-icon btn-round btn-success btn-sm me-2"
                          >
                            <i class="fa fa-check"></i>
                          </button>
                          Payment from #10231
                        </th>
                        <td class="text-end">Mar 19, 2020, 2.45pm</td>
                        <td class="text-end">$250.00</td>
                        <td class="text-end">
                          <span class="badge badge-success">Completed</span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <button
                            class="btn btn-icon btn-round btn-success btn-sm me-2"
                          >
                            <i class="fa fa-check"></i>
                          </button>
                          Payment from #10231
                        </th>
                        <td class="text-end">Mar 19, 2020, 2.45pm</td>
                        <td class="text-end">$250.00</td>
                        <td class="text-end">
                          <span class="badge badge-success">Completed</span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <button
                            class="btn btn-icon btn-round btn-success btn-sm me-2"
                          >
                            <i class="fa fa-check"></i>
                          </button>
                          Payment from #10231
                        </th>
                        <td class="text-end">Mar 19, 2020, 2.45pm</td>
                        <td class="text-end">$250.00</td>
                        <td class="text-end">
                          <span class="badge badge-success">Completed</span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <button
                            class="btn btn-icon btn-round btn-success btn-sm me-2"
                          >
                            <i class="fa fa-check"></i>
                          </button>
                          Payment from #10231
                        </th>
                        <td class="text-end">Mar 19, 2020, 2.45pm</td>
                        <td class="text-end">$250.00</td>
                        <td class="text-end">
                          <span class="badge badge-success">Completed</span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <button
                            class="btn btn-icon btn-round btn-success btn-sm me-2"
                          >
                            <i class="fa fa-check"></i>
                          </button>
                          Payment from #10231
                        </th>
                        <td class="text-end">Mar 19, 2020, 2.45pm</td>
                        <td class="text-end">$250.00</td>
                        <td class="text-end">
                          <span class="badge badge-success">Completed</span>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">
                          <button
                            class="btn btn-icon btn-round btn-success btn-sm me-2"
                          >
                            <i class="fa fa-check"></i>
                          </button>
                          Payment from #10231
                        </th>
                        <td class="text-end">Mar 19, 2020, 2.45pm</td>
                        <td class="text-end">$250.00</td>
                        <td class="text-end">
                          <span class="badge badge-success">Completed</span>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
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