@extends('layouts.app')

@section('content')
<div id="app-sidepanel" class="app-sidepanel">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
        <div class="app-branding">
            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/logo.svg"
                    alt="logo"><span class="logo-text">PKK RW XX</span></a>

        </div><!--//app-branding-->

        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('home') }}">
                        <span class="nav-icon">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                <path fill-rule="evenodd"
                                    d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                            </svg>
                        </span>
                        <span class="nav-link-text">Dashboard</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('anggota') }}">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
                                <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                              </svg>
                        </span>
                        <span class="nav-link-text">Daftar Anggota</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
                <li class="nav-item">
                    <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                    <a class="nav-link" href="{{ route('pengurus') }}">
                        <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8Zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022ZM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816ZM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0Zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z"/>
                              </svg>
                        </span>
                        <span class="nav-link-text">Daftar Pengurus</span>
                    </a><!--//nav-link-->
                </li><!--//nav-item-->
            </li><!--//nav-item-->
            <li class="nav-item">
                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                <a class="nav-link active" href="#">
                    <span class="nav-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
                            <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1H1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                            <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V5zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2H3z"/>
                          </svg>
                    </span>
                    <span class="nav-link-text">Keuangan</span>
                </a><!--//nav-link-->
            </li><!--//nav-item-->
            </ul><!--//app-menu-->
        </nav><!--//app-nav-->
        <div class="app-sidepanel-footer">
            <nav class="app-nav app-nav-footer">
                <ul class="app-menu footer-menu list-unstyled">
                    <li class="nav-item">
                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                        <a class="nav-link" href="settings.html">
                            <span class="nav-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                  </svg>
                            </span>
                            <span class="nav-link-text">Logout</span>
                        </a><!--//nav-link-->
                    </li><!--//nav-item-->
                </ul><!--//footer-menu-->
            </nav>
        </div><!--//app-sidepanel-footer-->

    </div><!--//sidepanel-inner-->
</div><!--//app-sidepanel-->
</header><!--//app-header-->

<div class="app-wrapper">

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

        <div class="row g-3 mb-4 align-items-center justify-content-between">
            <div class="col-auto">
                <h1 class="app-page-title mb-0">Keuangan</h1>
            </div>
            <div class="col-auto">
                <div class="page-utilities">
                    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                        <div class="col-auto">
                            <button class="btn app-btn-secondary" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                                  </svg>
                                Tambah Laporan Keuangan
                            </button>
                        </div>
                        <div class="col-auto">
                            <button class="btn app-btn-secondary" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down-fill" viewBox="0 0 16 16">
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0z"/>
                                  </svg>
                                 Cetak Laporan
                            </button>
                        </div>
                        <div class="col-auto">
                            <button class="btn app-btn-secondary" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-spreadsheet-fill" viewBox="0 0 16 16">
                                    <path d="M6 12v-2h3v2H6z"/>
                                    <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z"/>
                                  </svg>
                                 Unduh Excel
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Form Keuangan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="{{ route('tambahkeuangan') }}" method="POST">
                                            {!! csrf_field() !!}
                                            <div class="col-12">
                                                <label for="kategori" class="form-label">Jenis :</label>
                                                <select id="kategori" class="form-select" name="jenis">
                                                    <option selected>Pilih Jenis Dana</option>
                                                    <option value="Pemasukan">Pemasukan</option>
                                                    <option value="Pengeluaran">Pengeluaran</option>
                                                  </select>
                                              </div>
                                            <div class="col-12">
                                                <label for="Pemasukan" class="form-label">Keterangan
                                                    :</label>
                                                    <textarea class="form-control" id="Pemasukan" rows="3" name="keterangan"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <label for="sumber" class="form-label">Sumber Dana :</label>
                                                <input type="text" class="form-control" id="sumber" placeholder="Masukkan Sumber Dana" name="sumber">
                                              </div>
                                              <div class="col-12">
                                                <label for="nominal" class="form-label">Nominal Dana :</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="nominal">Rp</span>
                                                    <input type="text" class="form-control" placeholder="Masukkan Nominal Dana" aria-label="Username" aria-describedby="basic-addon1" name="nominal">
                                                  </div>
                                              </div>
                                              <div class="col-12">
                                                <label for="Tanggal" class="form-label">Tanggal :</label>
                                                <input type="date" class="form-control" id="Tanggal" placeholder="Masukkan Sumber Dana" name="tanggal">
                                              </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--//row-->
                </div><!--//table-utilities-->
            </div><!--//col-auto-->
        </div><!--//row-->

        <div class="row g-4 mb-4">
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah Pemasukan</h4>
                        <div class="stats-figure">Rp.{{number_format($Tpemasukan)}}</div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="#"></a>
                </div><!--//app-card-->
            </div><!--//col-->

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Jumlah Pengeluaran</h4>
                        <div class="stats-figure">Rp.{{number_format($Tpengeluaran)}}</div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="#"></a>
                </div><!--//app-card-->
            </div><!--//col-->
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Total Kas PKK</h4>
                        <div class="stats-figure">Rp.{{number_format    ($total)}}</div>
                    </div><!--//app-card-body-->
                    <a class="app-card-link-mask" href="#"></a>
                </div><!--//app-card-->
            </div><!--//col-->
        </div><!--//row-->

        <div class="container">
            <nav id="orders-table-tab"
            class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
            <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Pemasukan</a>
            <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pengeluaran</a>
        </nav>

        <div class="tab-content" id="orders-table-tab-content">
            <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                aria-labelledby="orders-all-tab">
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell" style="width: 5%">No.</th>
                                        <th class="cell" style="width: 30%">Keterangan Pemasukan</th>
                                        <th class="cell" style="width: 25%">Sumber Dana</th>
                                        <th class="cell" style="width: 20%">Jumlah Dana</th>
                                        <th class="cell" style="width: 20%">Tanggal Pemasukan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;?>
                                    @foreach ($pemasukan as $masuk)
                                    <tr>
                                        <td class="cell">{{$no}}.</td>
                                        <td class="cell"><span class="truncate">{{$masuk['keterangan']}}</span></td>
                                        <td class="cell">{{$masuk['sumber']}}</td>
                                        <td class="cell">Rp.{{number_format($masuk['nominal'])}}</td>
                                        <td class="cell">{{$masuk['tanggal']}}</td>
                                    </tr>
                                    <?php $no++ ;?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->

                    </div><!--//app-card-body-->
                </div><!--//app-card-->

            </div><!--//tab-pane-->


            <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell" style="width: 5%">No.</th>
                                        <th class="cell" style="width: 30%">Keterangan Pengeluaran</th>
                                        <th class="cell" style="width: 25%">Sumber Dana</th>
                                        <th class="cell" style="width: 20%">Jumlah Dana</th>
                                        <th class="cell" style="width: 20%">Tanggal Pengeluaran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengeluaran as $keluar)
                                    <tr>
                                        <td class="cell">{{$no}}.</td>
                                        <td class="cell"><span class="truncate">{{$keluar['keterangan']}}</span></td>
                                        <td class="cell">{{$keluar['sumber']}}</td>
                                        <td class="cell">Rp.{{number_format($keluar['nominal'])}}</td>
                                        <td class="cell">{{$keluar['tanggal']}}</td>
                                    </tr>                                                                            
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!--//table-responsive-->
                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//tab-pane-->
            <div class="tab-pane fade" id="orders-cancelled" role="tabpanel"
                aria-labelledby="orders-cancelled-tab">
                <div class="app-card app-card-orders-table mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Order</th>
                                        <th class="cell">Product</th>
                                        <th class="cell">Customer</th>
                                        <th class="cell">Date</th>
                                        <th class="cell">Status</th>
                                        <th class="cell">Total</th>
                                        <th class="cell"></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="cell">#15342</td>
                                        <td class="cell"><span class="truncate">Justo feugiat neque</span></td>
                                        <td class="cell">Reina Brooks</td>
                                        <td class="cell"><span class="cell-data">12 Oct</span><span
                                                class="note">04:23 PM</span></td>
                                        <td class="cell"><span class="badge bg-danger">Cancelled</span></td>
                                        <td class="cell">$59.00</td>
                                        <td class="cell"><a class="btn-sm app-btn-secondary" href="#">View</a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div><!--//table-responsive-->
                    </div><!--//app-card-body-->
                </div><!--//app-card-->
            </div><!--//tab-pane-->
        </div><!--//tab-content-->

        

        </div>

    </div><!--//container-fluid-->
</div><!--//app-content-->


@endsection
