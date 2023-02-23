@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Struktur PKK</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Lembaga</li>
          <li class="breadcrumb-item active">Struktur PKK</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-13 ms-auto me-auto">

          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Struktur PKK</h5>
              <input type="text" class="form-control mb-3" placeholder="Search&hellip;">
              <td><a href=""><button class="button-79 ms-0 mb-3" role="button">Tambah Anggota</button></a></td>


              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>


                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ketua</td>
                    <td>Udin</td>
                    <td><img src="assets/img/foto1.jpeg"></td>
                    <td><a href=""><button class="button-79" role="button">Edit</button></a> <a href=""></a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Wakil</td>
                    <td>Udin</td>
                    <td><img src="assets/img/foto1.jpeg"></td>
                    <td><a href=""><button class="button-79" role="button">Edit</button></a> <a href=""></a></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Seketaris</td>
                    <td>Udin</td>
                    <td><img src="assets/img/foto1.jpeg"></td>
                    <td><a href=""><button class="button-79" role="button">Edit</button></a> <a href=""></a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Bendahara</td>
                    <td>Udin</td>
                    <td><img src="assets/img/foto1.jpeg"></td>
                    <td><a href=""><button class="button-79" role="button">Edit</button></a> <a href=""></a></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>anggota</td>
                    <td>Udin</td>
                    <td><img src="assets/img/foto1.jpeg"></td>
                    <td><a href=""><button class="button-79" role="button">Edit</button></a> <a href=""><button class="button-79" role="button">Hapus</button></a></td>
                  </tr>



                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

              <!-- End Primary Color Bordered Table -->

            </div>
          </div>


    </section>

  </main><!-- End #main -->
@endsection
