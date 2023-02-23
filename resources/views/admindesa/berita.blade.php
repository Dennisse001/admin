@extends('admindesa.navside')
@section('isi')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Berita Desa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Berita Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


    <a href="tambah-berita.html"><button style="margin-left: 69px;margin-bottom: 12px;" type="button" class="btn btn-primary btn-sm  ">Tambah Berita</button></a>
    <section class="section" style="margin-left:70px;">
      <div class="row align-items-top" style="margin-left: 100px;">

        <div class="col-lg-3 d-flex flex-row" style="margin-left: 60px;">
          <!-- Card with an image on top -->
          <div class="card ms-0">
            <img src="assets/img/ex3.jpeg" class="card-img-top" alt="..." style="height: 13ch;">
            <div class="card-body">
              <h5 class="card-title">Banjir dan Badai</h5>
              <p class="card-text">Selama dua minggu terakhir desa Kromengan dilanda banjir dan badai dahsyat</p>
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
            <img src="assets/img/ex1.jpeg" class="card-img-top" alt="..." style="height: 13ch;">
            <div class="card-body">
              <h5 class="card-title">Pedagang Pesugihan</h5>
              <p class="card-text">Diduga seorang pengusaha desa kromengan menggunakan ilmu hitam agar dagangannya laris</p>
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
            <img src="assets/img/ex2.jpeg" class="card-img-top" alt="..." style="height: 13ch;">
            <div class="card-body">
              <h5 class="card-title">Pembangunan Jembatan</h5>
              <p class="card-text">Pembangunan jembatan kayu yang menjadi penghubung dengan desa Karang Agung</p>
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
