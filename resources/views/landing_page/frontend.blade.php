<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Manajemen Layanan Teknis dan IT Persero Batam</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/img/Persero.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: BizLand
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">
            <nav id="navbar" class="navbar">
                <!-- Logo -->
                <a href="#" class="logo"><img src="{{ asset('assets/img/Persero.png') }}" alt="Persero"></a>
                <ul>
                    <li><a class="nav-link scrollto active " href="#hero"><i class="bi bi-columns-gap"></i>Dashboard</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#request"><i class="bi bi-box-arrow-right"></i>Request Masuk</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#kerjakan"><i class="bi bi-briefcase"></i>Dikerjakan</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#History"><i class="bi bi-clock-history"></i>History</a></li>
                    <li><a class="nav-link scrollto" href="#setuju"><i class="bi bi-journal-text"></i>Persetujuan</a>
                    </li>
                    <li><a class="nav-link scrollto" href="#selesai"><i class="bi bi-journals"></i>Selesai</a></li>
                    <li><a class="nav-link scrollto" href="#permintaan"><i class="bi bi-journal-plus"></i>Permintaan</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Dashboard Section ======= -->
    <section id="hero" class="d-flex align-items-center h-100">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <section class="section dashboard">
                <div class="row gx-4">
                    <div class="col-lg-3 col-xxl-4 col-md-6">
                        <div class="card card-info sales-card">
                            <div class="filter">
                                <a class="icon m-3" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Daftar Request Belum Dikerjaakan </h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-box-arrow-right"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="filter">
                                <a class="icon m-3" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Daftar Request Sedang Dikerjakan</h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-briefcase"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>$3,264</h6>
                                        <span class="text-success small pt-1 fw-bold">8%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xxl-4 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="filter">
                                <a class="icon m-3" href="#" data-bs-toggle="dropdown"><i
                                        class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Daftar Request Selesai Dikerjakan</h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>1244</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">decrease</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-xxl-4 col-md-6">
                        <!-- Recent Activity -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Recent Activity</h5>
                                <div class="activity">
                                    <div class="activity-item d-flex">
                                        <div class="activite-label">32 min</div>
                                        <i class="bi bi-circle-fill activity-badge text-secondary align-self-start"></i>
                                        <div class="activity-content"><a href="#" class="fw-bold text-dark">Request Sedang Dikerjakan</a></div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">1 hour</div>
                                        <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                        <div class="activity-content"><a href="#" class="fw-bold text-dark">Request Selesai Dikerjakan</a></div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">1 day</div>
                                        <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                                        <div class="activity-content"><a href="#" class="fw-bold text-dark">Request Belum Dikerjakan</a></div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity-item d-flex">
                                        <div class="activite-label">1 day</div>
                                        <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                                        <div class="activity-content"><a href="#" class="fw-bold text-dark">Request Selesai Dikerjakan</a></div>
                                    </div>
                                    <!-- End activity item-->

                                    <div class="activity">
                                        <div class="activity-item d-flex">
                                            <div class="activite-label">1 day</div>
                                            <i
                                                class="bi bi-circle-fill activity-badge text-secondary align-self-start"></i>
                                            <div class="activity-content"><a href="#" class="fw-bold text-dark">Request Sedang Dikerjakan</a></div>
                                        </div>
                                        <!-- End activity item-->
                                    </div>
                                </div>
                            </div>
                            <!-- End Recent Activity -->
                        </div>
                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-sm-6  h-50">
                            <div class="card card-img-holder card-primary">
                                <div class="card-body">
                                    <h5 class="card-title">Total Revenue</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Daily Report</h6>
                                    <div class="card-text">
                                        <!-- Canvas untuk Pie Chart -->
                                        <canvas id="revenuePieChart" style="max-width: 60%;"></canvas>
                                    </div>
                                    <a href="#" class="card-link"><i class="fe fe-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card card-img-holder card-secondary">
                                <div class="card-body">
                                    <h5 class="card-title">Sales Comparison</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Monthly Report</h6>
                                    <div class="card-text">
                                        <!-- Canvas untuk Bar Chart -->
                                        <canvas id="salesBarChart" style="max-width: 100%;"></canvas>
                                    </div>
                                    <a href="#" class="card-link"><i class="fe fe-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ======= End Dashboard Section ======= -->

    <!-- ======= Request Section ======= -->
    <section id="request" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Request Masuk</h5>
                                <a href="#" type="button" class="btn btn-rounded btn-success mb-3"><i
                                        class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah Data</a>

                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th><b>No.</b>Inventaris</th>
                                            <th>Tahun</th>
                                            <th>Jenis</th>
                                            <th>Merek</th>
                                            <th>Unit</th>
                                            <th>Lokasi</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Unity Pugh</td>
                                            <td>9958</td>
                                            <td>Curicó</td>
                                            <td>2005/02/11</td>
                                            <td>37%</td>
                                            <td>Rio de Janeiro, Brazil</td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Theodore Duran</td>
                                            <td>8971</td>
                                            <td>Dhanbad</td>
                                            <td>1999/04/07</td>
                                            <td>97%</td>
                                            <td>New York City, USA</td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kylie Bishop</td>
                                            <td>3147</td>
                                            <td>Norman</td>
                                            <td>2005/09/08</td>
                                            <td>63%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Willow Gilliam</td>
                                            <td>3497</td>
                                            <td>Amqui</td>
                                            <td>2009/29/11</td>
                                            <td>30%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Blossom Dickerson</td>
                                            <td>5018</td>
                                            <td>Kempten</td>
                                            <td>2006/11/09</td>
                                            <td>17%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Elliott Snyder</td>
                                            <td>3925</td>
                                            <td>Enines</td>
                                            <td>2006/03/08</td>
                                            <td>57%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Castor Pugh</td>
                                            <td>9488</td>
                                            <td>Neath</td>
                                            <td>2014/23/12</td>
                                            <td>93%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pearl Carlson</td>
                                            <td>6231</td>
                                            <td>Cobourg</td>
                                            <td>2014/31/08</td>
                                            <td>100%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Deirdre Bridges</td>
                                            <td>1579</td>
                                            <td>Eberswalde-Finow</td>
                                            <td>2014/26/08</td>
                                            <td>44%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Daniel Baldwin</td>
                                            <td>6095</td>
                                            <td>Moircy</td>
                                            <td>2000/11/01</td>
                                            <td>33%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ======= End Request Section ======= -->

    <!-- ======= Kejakan Section ======= -->
    <section id="kerjakan" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Dikerjakan</h5>
                                <a href="#" type="button" class="btn btn-rounded btn-success mb-3"><i
                                        class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah Data</a>

                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Pengaduan</th>
                                            <th>Deskripsi</th>
                                            <th>Teknisi</th>
                                            <th>Status</th>
                                            <th>User</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Unity Pugh</td>
                                            <td>9958</td>
                                            <td>Curicó</td>
                                            <td>2005/02/11</td>
                                            <td>37%</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Theodore Duran</td>
                                            <td>8971</td>
                                            <td>Dhanbad</td>
                                            <td>1999/04/07</td>
                                            <td>97%</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Kylie Bishop</td>
                                            <td>3147</td>
                                            <td>Norman</td>
                                            <td>2005/09/08</td>
                                            <td>63%</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Willow Gilliam</td>
                                            <td>3497</td>
                                            <td>Amqui</td>
                                            <td>2009/29/11</td>
                                            <td>30%</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Blossom Dickerson</td>
                                            <td>5018</td>
                                            <td>Kempten</td>
                                            <td>2006/11/09</td>
                                            <td>17%</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Elliott Snyder</td>
                                            <td>3925</td>
                                            <td>Enines</td>
                                            <td>2006/03/08</td>
                                            <td>57%</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Castor Pugh</td>
                                            <td>9488</td>
                                            <td>Neath</td>
                                            <td>2014/23/12</td>
                                            <td>93%</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Pearl Carlson</td>
                                            <td>6231</td>
                                            <td>Cobourg</td>
                                            <td>2014/31/08</td>
                                            <td>100%</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ======= End Kejakan Section ======= -->

    <!-- ======= History Section ======= -->
    <section id="History" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data History</h5>
                                <a href="#" type="button" class="btn btn-rounded btn-success mb-3"><i
                                        class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah Data</a>

                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Category</th>
                                            <th>Teknisi</th>
                                            <th>Created</th>
                                            <th>Progress</th>
                                            <th>Finish</th>
                                            <th>Hour</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Unity Pugh</td>
                                            <td>abdul</td>
                                            <td>Curicó</td>
                                            <td>Unity Pugh</td>
                                            <td>abdul</td>
                                            <td>Curicó</td>
                                            <td>1 hour</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Unity Pugh</td>
                                            <td>zee</td>
                                            <td>Curicó</td>
                                            <td>Unity Pugh</td>
                                            <td>abdul</td>
                                            <td>Curicó</td>
                                            <td>1 hour</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ======= End History Section ======= -->

    <!-- ======= Setuju Section ======= -->
    <section id="setuju" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Persetujuan</h5>
                                <a href="#" type="button" class="btn btn-rounded btn-success mb-3"><i
                                        class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah Data</a>

                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>Pengaduan</th>
                                            <th>Deskripsi</th>
                                            <th>Teknisi</th>
                                            <th>Status</th>
                                            <th>User</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Unity Pugh</td>
                                            <td>9958</td>
                                            <td>Curicó</td>
                                            <td>2005/02/11</td>
                                            <td>37%</td>
                                            <td>Rio de Janeiro, Brazil</td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Theodore Duran</td>
                                            <td>8971</td>
                                            <td>Dhanbad</td>
                                            <td>1999/04/07</td>
                                            <td>97%</td>
                                            <td>New York City, USA</td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Kylie Bishop</td>
                                            <td>3147</td>
                                            <td>Norman</td>
                                            <td>2005/09/08</td>
                                            <td>63%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Willow Gilliam</td>
                                            <td>3497</td>
                                            <td>Amqui</td>
                                            <td>2009/29/11</td>
                                            <td>30%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Blossom Dickerson</td>
                                            <td>5018</td>
                                            <td>Kempten</td>
                                            <td>2006/11/09</td>
                                            <td>17%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Elliott Snyder</td>
                                            <td>3925</td>
                                            <td>Enines</td>
                                            <td>2006/03/08</td>
                                            <td>57%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Castor Pugh</td>
                                            <td>9488</td>
                                            <td>Neath</td>
                                            <td>2014/23/12</td>
                                            <td>93%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pearl Carlson</td>
                                            <td>6231</td>
                                            <td>Cobourg</td>
                                            <td>2014/31/08</td>
                                            <td>100%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Deirdre Bridges</td>
                                            <td>1579</td>
                                            <td>Eberswalde-Finow</td>
                                            <td>2014/26/08</td>
                                            <td>44%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Daniel Baldwin</td>
                                            <td>6095</td>
                                            <td>Moircy</td>
                                            <td>2000/11/01</td>
                                            <td>33%</td>
                                            <td></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ======= End Setuju Section ======= -->

    <!-- ======= Selesai Section ======= -->
    <section id="selesai" class="d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Selesai</h5>
                                <a href="#" type="button" class="btn btn-rounded btn-success mb-3"><i
                                        class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah Data</a>

                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No. Pengaduan</th>
                                            <th>Deskripsi</th>
                                            <th>Teknisi</th>
                                            <th>User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Unity Pugh</td>
                                            <td>abdul</td>
                                            <td>Curicó</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Unity Pugh</td>
                                            <td>zee</td>
                                            <td>Curicó</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ======= End Selesai Section ======= -->

    <!-- ======= Permintaan Section ======= -->
    <section id="permintaan" class=" d-flex align-items-center">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <section class="section">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Data Permintaan</h5>
                                <a href="#" type="button" class="btn btn-rounded btn-success mb-3"><i
                                        class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah Data</a>

                                <!-- Table with stripped rows -->
                                <table class="table datatable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Pengaduan</th>
                                            <th>Deskripsi</th>
                                            <th>Teknisi</th>
                                            <th>Status</th>
                                            <th>User</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Kylie Bishop</td>
                                            <td>3147</td>
                                            <td>Belum Dipilih</td>
                                            <td>Dikirim</td>
                                            <td>Norman</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Willow Gilliam</td>
                                            <td>3497</td>
                                            <td>Belum Dipilih</td>
                                            <td>Dikirim</td>
                                            <td>Amqui</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Blossom Dickerson</td>
                                            <td>5018</td>
                                            <td>Belum Dipilih</td>
                                            <td>Belum Dikirim</td>
                                            <td>Kempten</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Elliott Snyder</td>
                                            <td>3925</td>
                                            <td>Belum Dipilih</td>
                                            <td>Dikirim</td>
                                            <td>Enines</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Castor Pugh</td>
                                            <td>9488</td>
                                            <td>Belum Dipilih</td>
                                            <td>Dikirim</td>
                                            <td>Neath</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Pearl Carlson</td>
                                            <td>6231</td>
                                            <td>Belum Dipilih</td>
                                            <td>Belum Dikirim</td>
                                            <td>Cobourg</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Deirdre Bridges</td>
                                            <td>1579</td>
                                            <td>Belum Dipilih</td>
                                            <td>Belum Dikirim</td>
                                            <td>Eberswalde-Finow</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Daniel Baldwin</td>
                                            <td>6095</td>
                                            <td>Belum Dipilih</td>
                                            <td>Dikirim</td>
                                            <td>Moircy</td>
                                            <td><i class="bi bi-filetype-exe"></i></td>
                                            <td>
                                                <a href="" type="button" class="btn btn-warning btn-sm">Show</a>
                                                <a href="" type="button" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- ======= End Permintaan Section ======= -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>fenn</span></strong>. All Rights
                Reserved
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Data untuk pie chart
        var pieChartData = {
            labels: ['Product A', 'Product B', 'Product C'],
            datasets: [{
                label: 'Sales',
                data: [300, 450, 200],
                backgroundColor: ['#ff6384', '#36a2eb', '#ffce56'],
                hoverOffset: 4
            }]
        };
    
        // Konfigurasi pie chart
        var pieChartConfig = {
            type: 'pie',
            data: pieChartData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                    },
                }
            }
        };
    
        // Inisialisasi pie chart
        var revenuePieChart = new Chart(document.getElementById('revenuePieChart'), pieChartConfig);
    
        // Data untuk bar chart
    var barChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June'],
        datasets: [{
            label: '2023',
            data: [1200, 1400, 1600, 1800, 2000, 2200],
            backgroundColor: 'rgba(255, 99, 132, 0.5)'
        }, {
            label: '2024',
            data: [1000, 1100, 1300, 1500, 1700, 1900],
            backgroundColor: 'rgba(54, 162, 235, 0.5)'
        }]
    };

    // Konfigurasi bar chart
    var barChartConfig = {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
            }
        }
    };

    // Inisialisasi bar chart
    var salesBarChart = new Chart(document.getElementById('salesBarChart'), barChartConfig);
    </script>

</body>

</html>