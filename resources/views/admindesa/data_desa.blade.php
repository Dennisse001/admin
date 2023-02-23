@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-13 ms-auto me-auto">

          <div class="card">

            <div class="card-body">
              <input type="text" class="form-control mb-3 mt-3" placeholder="Search&hellip;">



              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Propinsi</th>
                    <th scope="col">Kabupaten</th>
                    <th scope="col">Kecamatan</th>
                    <th scope="col">Desa</th>

                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Jatim</td>
                    <td>Malang</td>
                    <td>Karlos</td>
                    <td>Ngijo</td>

                    <td><a href=""><button class="button-79 ms-3" role="button">Hapus</button></a></td>
                  </tr>

                </tbody>
              </table>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>


    </section>

  </main><!-- End #main -->
@endsection
