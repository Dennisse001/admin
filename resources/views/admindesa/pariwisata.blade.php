@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Pariwisata Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
          <li class="breadcrumb-item active">Pariwisata Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <a href="tambah-pariwisata.html"><button style="margin-left: 69px;margin-bottom: 12px;" type="button" class="btn btn-primary btn-sm  ">Tambah Pariwisata</button></a>

    <section class="section" style="margin-left:70px;">
      <div class="row align-items-top">
        <div class="col-lg-11 d-flex flex-row">

          <!-- Card with an image on top -->
          <div class="card me-5">
            <img src="assets/img/ex8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Water Park Kromengan</h5>
              <p class="card-text">Water park dengan water slide setinggi 20 meter kini dibangun di desa Kromengan</p>
              <div class="d-flex">
              <button style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm  ">Edit</button>
              <button style="margin-left: 8px;" type="button" class="btn btn-primary btn-sm  ">Hapus</button>
            </div>
            </div>
          </div><!-- End Card with an image on top -->


                    <!-- Card with an image on top -->
                    <div class="card me-5">
                      <img src="assets/img/ex9.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Zoo CafeDesa</h5>
                        <p class="card-text">Cafe desa Kromengan ini mengusung tema kebun binatang dengan bebrapa satwa hutan.</p>
                        <div class="d-flex">
                          <button style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm  ">Edit</button>
                          <button style="margin-left: 8px;" type="button" class="btn btn-primary btn-sm  ">Hapus</button>
                        </div>
                      </div>
                    </div><!-- End Card with an image on top -->

                              <!-- Card with an image on top -->
          <div class="card ms-0">
            <img src="assets/img/ex10.jpg" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5 class="card-title">Time Zone Kromengan</h5>
              <p class="card-text">Kini sudah tersedia timezone di swalayan desa Kromengan disini disediakan lebih dari 20 game.</p>
              <div class="d-flex">
                <button style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm  ">Edit</button>
                <button style="margin-left: 8px;" type="button" class="btn btn-primary btn-sm  ">Hapus</button>
              </div>
            </div>
          </div><!-- End Card with an image on top -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
