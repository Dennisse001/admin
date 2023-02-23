@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Penghargaan Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
          <li class="breadcrumb-item active">Penghargaan Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


   <a href="tambah-penghargaan.html"><button style="margin-left: 10px;margin-bottom: 12px;" type="button" class="btn btn-primary btn-sm  ">Tambah Penghargaan</button></a>
   <section class="section" style="margin-left:70px;">
    <div class="row align-items-top" style="margin-left: 100px;">

      <div class="col-lg-3 d-flex flex-row" style="margin-left: 60px;">
        <!-- Card with an image on top -->
        <div class="card ms-0">
          <img src="assets/img/ex6.jpeg" class="card-img-top" alt="..." style="height: 14ch;">
          <div class="card-body">
            <h5 class="card-title">5 medali desa Kromengan</h5>
            <p class="card-text">Desa Kkromengan meraih lima penghargaan sekaligus tahun ini</p>
            <div class="mx-auto">
              <button  type="button" class="btn btn-primary btn-sm  ">Edit</button>
              <button  type="button" class="btn btn-primary btn-sm  ">Hapus</button>
            </div>
          </div>
        </div><!-- End Card with an image on top -->
      </div>

      <div class="col-lg-3 d-flex flex-row">
        <!-- Card with an image on top -->
        <div class="card ms-0">
          <img src="assets/img/ex4.jpeg" class="card-img-top" alt="..." style="height: 14ch;">
          <div class="card-body">
            <h5 class="card-title">Desa Kromengan terbersih </h5>
            <p class="card-text">Desa terbersih diraih oleh desa Kromengan, lihat keasrian dan keindahan dari desa ini.</p>
            <div class=" mx-auto">
              <button type="button" class="btn btn-primary btn-sm  ">Edit</button>
              <button type="button" class="btn btn-primary btn-sm  ">Hapus</button>
            </div>
          </div>
        </div><!-- End Card with an image on top -->



      </div>
      <div class="col-lg-3 d-flex flex-row">
        <!-- Card with an image on top -->
        <div class="card ms-0">
          <img src="assets/img/ex5.jpeg" class="card-img-top" alt="..." style="height: 14ch;">
          <div class="card-body">
            <h5 class="card-title">Pengharga- an desa indah</h5>
            <p class="card-text">Penghargaan desa terindah dan ter asri kembali diraih desa Kromengan.</p>
            <div class="mx-auto">
              <button  type="button" class="btn btn-primary btn-sm  ">Edit</button>
              <button  type="button" class="btn btn-primary btn-sm  ">Hapus</button>
            </div>
          </div>
        </div><!-- End Card with an image on top -->

      </div>
    </div>
  </section>

  </main><!-- End #main -->
@endsection
