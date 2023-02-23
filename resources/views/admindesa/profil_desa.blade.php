@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Profile Desa</h5>

              <!-- General Form Elements -->
              <form>

                <div class="row mb-4">
                  <div class="col-lg-12">
             <div class="card-sa col-12 mb-3 d-flex flex-row">
             <div class="col-3 mx-auto">
               <label class="d-block" for="">Gambar 1</label>
               <img src="assets/img/desa11.jpeg"  class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
               <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;">
             </div>
             <div class="col-3 mx-auto">
               <label for="" class="d-block">Gambar 2</label>
               <img src="assets/img/desa12.jpeg" class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
               <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;">
             </div>
             <div class="col-3 mx-auto">
               <label for="" class="d-block">Gambar 3</label>
               <img src="assets/img/desa13.jpeg" class="img-fluid rounded-start col-10 mx-auto" alt="..." style="border-radius: 6px;">
               <input class="ms-0" type="file" style="margin: 3% 0% 3% 0%;">
             </div>

               </div>


                  </div>
               </div>


                <div class="row mb-5">
                  <label class="mb-4" for="">“DENGAN SEMANGAT PERSAUDARAAN, GOTONG ROYONG DAN AKHLAK MULIA GUNA MEWUJUDKAN DESA LANGKAP YANG LUAR BIASA”</label>
                  <label for="inputText" class="col-sm-2 col-form-label">Visi Desa</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;"></textarea>
                  </div>
                </div>
                <div class="row mb-5">
                  <label class="mb-4" for="">Untuk mewujudkan Visi, Misi yang akan dilakukan adalah sebagai berikut :

                    Melanjutkan program yang telah dilaksanakan dan memelihara program-program yang sudah dilaksanakan oleh pemerintah Desa Langkap periode yang lalu sesuai dengan fungsinya.

                    Menggali, memberdayakan serta memaksimalkan semua potensi yang ada di masyarakat, meliputi :

                    Pemberdayaan Sumber Daya Manusia (SDM)
                    Pemberdayaan Sumber Daya Alam (SDA)
                    Pemberdayaan Ekonomi Kerakyatan
                    Menciptakan kondisi masyarakat Desa Langkap yang aman, tertib, guyub dan rukun dalam kehidupan bermasyarakat.

                    Optimalisasi penyelenggaraan pemerintah Desa Langkap yang meliputi :

                    Penyelenggaraan pemerintahan yang Tertib dan Transparan
                    Pelayanan kepada masyarakat yang prima, yaitu : Cepat, Tepat dan Benar
                    Pelaksanaan pembangunan yang berkesinambungan dan mengedepankan partisipasi dan gotong royong masyarakat.</label>
                  <label for="inputEmail" class="col-sm-2 col-form-label">Misi Desa</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;"></textarea>
                  </div>
                </div>
                <div class="row mb-5">
                  <label class="mb-4" for="">Desa sebagai unit paling rendah tingkatannya dalam struktur pemerintahan Indonesia telah ada sejak dulu dan bukan terbentuk oleh Belanda. Awal sejarah terbentuknya desa diawali dengan terbentuknya kelompok masyarakat akibat sifat manusia sebagai makhluk sosial yang memiliki dorongan kodrat atau kepentingan yang sama dari bahaya luar. Kapan awal pembentukan desa hingga sekarang sulit diketahui secara pasti. Tetapi ada bukti dalam prasasti Kawali di Jawa Barat pada akhir tahun 1350 M serta ditemukannya prasasti Walandit di Tengger, Jatim pada 1381 M. Desa sudah ada jauh sebelum penjajahan Belanda di Indonesia dimana penyelenggaraannya didasarkan pada hukum adat.

                    Setelah Belanda menjajah Indonesia dan membentuk undang – undang pemerintahan di Hindia Belanda (Regeling Reglemen), maka desa juga diberi kedudukan hukum. Untuk menjabarkan maksud dari peraturan perundangan tersebut, Belanda kemudian mengeluarkan Indlandsche Gemeente Ordonnantie (IGO) yang berlaku untuk Jawa dan Madura. Pada tahun 1924 Regeling Reglemen diubah dengan Indische Staatsregeling tetapi dalam prinsipnya tidak ada perubahan berarti, maka IGO masih berlaku. Untuk daerah di luar Jawa pada masa penjajahan Belanda di Indonesia, Belanda mengeluarkan peraturan Indlandsche Gemeente Ordonnantie Buitengewesten (IGOB) tahun 1938 no.490.</label>
                  <label for="inputPassword" class="col-sm-2 col-form-label">Sejarah Desa</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;"></textarea>
                  </div>
                </div>

                <div class="row mb-5">
                  <label for="" class="mb-2">Sebelah Utara adalah desa</label>
                  <label for="inputNumber" class="col-sm-2 col-form-label">Utara Desa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                  <label for="" class="mb-2">Sebelah Selatan adalah desa</label>
                  <label for="inputNumber" class="col-sm-2 col-form-label">Selatan Desa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                  <label for="" class="mb-2">Sebelah Timur adalah desa</label>
                  <label for="inputNumber" class="col-sm-2 col-form-label">Timur Desa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>

                  <label for="" class="mb-2">Sebelah Barat adalah desa</label>
                  <label for="inputNumber" class="col-sm-2 col-form-label">Barat Desa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control">
                  </div>
                </div>


                  <div class="row align-items-top">
                    <div class="col-lg-12 ">

                        <!-- Card with an image on left -->
                        <div class="card-sa mb-3 ">
                          <div class="row">
                            <div class="col-md-12">
                              <h4 class="card-title" style="margin-left: 20px;">Maps</h4>
                              <div class="d-flex">
                              <iframe class="col-7 mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.9521455536983!2d112.60469731437782!3d-7.900068680795382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881c2c4637501%3A0x10433eaf1fb2fb4c!2sHummasoft%20Technology!5e0!3m2!1sid!2sid!4v1676113690021!5m2!1sid!2sid" style="border:1px solid rgb(255, 255, 255); margin-left: 189px;height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              <br>
                            </div>
                            </div>
                            <span style="margin-left: 3%; margin-top: 1%;">Masukkan letak koordinat desa anda</span>
                          </div>
                          <textarea class="form-control" placeholder="" id="floatingTextarea" style="height: 100px;"></textarea>
                        </div><!-- End Card with an image on left -->

                    </div>
                  </div>

                </div>


              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>



            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
