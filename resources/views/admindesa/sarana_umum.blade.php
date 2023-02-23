@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sarana</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
          <li class="breadcrumb-item">Sarana</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-13 ms-auto me-auto">

          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Sarana Umum</h5>
              <input type="text" class="form-control mb-3" placeholder="Search&hellip;">



              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Sarana</th>
                    <th scope="col">Jumlah</th>


                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Balai RW</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Balai RT</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>PAUD</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>TK</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>SD</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>SMP</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>SMA/SMK</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Rumah Sakit</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Puskismas</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Pos Kesehatan Desa</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>Posyandu</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Pos KB</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td>Praktek Dokter</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td>Praktek Bidam</td>
                    <td><input type="number" placeholder="0"  class="form-control"></td>
                  </tr>


                </tbody>
              </table>
              <td><a href=""><button class="button-79 ms-3" role="button">simpan</button></a></td>
              <!-- End Primary Color Bordered Table -->

            </div>
          </div>


    </section>

  </main><!-- End #main -->

@endsection
