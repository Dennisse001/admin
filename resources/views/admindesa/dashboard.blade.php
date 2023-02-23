@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <!-- BEGIN -->

      <!-- satu baris -->
      <div class="udin d-flex flex-row">


        <!-- Revenue Card -->
        <div class="col-xxl-1 col-md-4 me-3">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="d-flex align-items-center">
                <div
                  class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                >
                <span
                id="boot-icon"
                class="bi bi-diagram-3-fill"
                style="font-size: 42px"
              ></span>
                </div>
                 <div class="ps-3">
                   <a href="struktur-pkk.html"> <h6>Struktur PKK</h6> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Revenue Card -->






        <!-- Penghargaan -->
        <div class="col-xxl-1 col-md-4 me-3">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="d-flex align-items-center">
                <div
                  class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                >
                  <span
                    id="boot-icon"
                    class="bi bi-diagram-3-fill"
                    style="font-size: 42px"
                  ></span>
                </div>
                 <div class="ps-3">
                 <a href="struktur-desa.html"><h6>Struktur Desa</h6></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Penghargaan -->
<!-- Revenue Card -->
<div class="col-xxl-1 col-md-4 me-3">
<div class="card info-card revenue-card">
  <div class="card-body">
    <h5 class="card-title"></h5>

    <div class="d-flex align-items-center">
      <div
        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
      >
        <span
          id="boot-icon"
          class="bi bi-diagram-3-fill"
          style="font-size: 42px"
        ></span>
      </div>
       <div class="ps-3">
         <a href="struktur-karang.html"> <h6>Struktur Karang Taruna</h6> </a>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Revenue Card -->

        <!-- End Sarana umum -->
      </div>
      <!-- end satu baris -->

      <!-- satu baris -->
      <div class="udin d-flex flex-row">
                  <!-- Sarana umum -->
                  <div class="col-xxl-1 col-md-4  me-3">
                    <div class="card info-card revenue-card">
                      <div class="card-body">
                        <h5 class="card-title"></h5>

                        <div class="d-flex align-items-center">
                          <div
                            class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                          >
                            <span
                              id="boot-icon"
                              class="bi bi-globe"
                              style="font-size: 42px"
                            ></span>
                          </div>
                           <div class="ps-3">
                             <a href="sarana-umum.html"> <h6>Sarana</h6> </a>
                             <h3>0</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        <!-- Penghargaan -->
        <div class="col-xxl-1 col-md-4 me-3">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="d-flex align-items-center">
                <div
                  class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                >
                  <span
                    id="boot-icon"
                    class="bi bi-person"
                    style="font-size: 42px"
                  ></span>
                </div>
                 <div class="ps-3">
                   <a href="data-penduduk.html"> <h6>Data Penduduk</h6> </a>
                   <h3>0</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Penghargaan -->


        <!-- Sarana umum -->
        <div class="col-xxl-1 col-md-4">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <div class="d-flex align-items-center">
                <div
                class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                >
                <span
                id="boot-icon"
                class="bi bi-cart-fill"
                style="font-size: 42px"
                ></span>
              </div>
              <div class="ps-3">
                <a href="umkm.html"> <h6>UMKM</h6> </a>
                <h3>0</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sarana umum -->

      </div>
      <!-- end satu baris -->

      <!-- satu baris -->
      <div class="udin d-flex flex-row">





<!-- Sarana umum -->
<div class="col-xxl-1 col-md-4 me-3">
<div class="card info-card revenue-card">
  <div class="card-body">
    <h5 class="card-title"></h5>

    <div class="d-flex align-items-center">
      <div
        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
      >
        <i class="bi bi-currency-dollar"></i>
      </div>
       <div class="ps-3">
        <a href="berita.html"> <h6>Berita Desa</h6></a>
        <h3>0</h3>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Sarana umum -->


<!-- profil desa -->
<div class="col-xxl-1 col-md-4 me-3">

<div class="card info-card revenue-card">
  <div class="card-body">
 <h5 class="card-title"></h5>

    <div class="d-flex align-items-center">
      <div
        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
      >
        <span
          id="boot-icon"
          class="bi bi-house-fill"
          style="font-size: 42px"
        ></span>
      </div>
      <div class="ps-3">
       <a href="peraturan.html"> <h6>Peraturan Desa</h6></a>
       <h3>0</h3>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End profil desa -->


      </div>
      <!-- end satu baris -->

      <!-- enn begis -->
    </section>
  </main>

@endsection
