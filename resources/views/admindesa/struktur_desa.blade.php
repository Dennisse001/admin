@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Struktur Karang Taruna</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Kelembagaan</li>
          <li class="breadcrumb-item active">Struktur Desa</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12 ms-auto me-auto">


          <div class="card">

            <div class="card-body">
              <h5 class="card-title">Struktur Karang Taruna </h5>




              <!-- Primary Color Bordered Table -->
              <table class="table table-bordered border-primary">
                <label for="inputNanme4" class="form-label">Contoh</label>
                  <div class="col-4 mb-2">
                    <img src="assets/img/contoh_struktur.jpg"  class="card-img-top" alt="...">
                  </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">upload Gambar Struktur</label>
                  <input type="file" class="form-control" id="inputNanme4">
                </div>
              </table>
              <!-- End Primary Color Bordered Table -->
              <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
          <a href="pariwisata.html" style="margin-bottom: 20px;"> <button type="submit" class="btn btn-danger"> Kembali</button></a>
        </div>
            </div>
          </div>


    </section>

  </main><!-- End #main -->

@endsection
