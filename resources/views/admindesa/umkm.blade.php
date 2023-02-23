@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>UMKM</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
          <li class="breadcrumb-item">UMKM</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-13 ms-auto me-auto">

          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Data Produk</h5>  <a href="tambah-umkm.html"><button class="btn btn-primary mb-3" style="font-size: 13px;">Tambah Produk</button></a>
              <input type="text" class="form-control mb-3" placeholder="Search&hellip;">



              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Product</th>
                    <th scope="col">Jenis Produk</th>
                    <th scope="col">No Tlp</th>
                    <th scope="col">Link olshop</th>

                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><img src="img/pocari.webp" width="100px" height="100px" alt=""></td>
                    <td>Pocari Swet</td>
                    <td>minuman</td>
                    <td>098097</td>
                    <td>linksandhsd</td>

                    <td><button class="button-79" role="button">Edit</button><button class="button-79 ms-3" role="button">Hapus</button></td>
                  </tr>

                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>


    </section>

  </main><!-- End #main -->
@endsection
