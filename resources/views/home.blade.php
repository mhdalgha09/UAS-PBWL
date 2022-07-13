@extends('layouts.app')

<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
@section('content')
<style>
  body{
    background-image: none;
  }
</style>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<section id="hero" style="margin-top: -24px!important;">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(https://riaulink.com/assets/berita/original/97762477444-img-20210920-wa0086.jpg)">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(https://foto.data.kemdikbud.go.id/getImage/10207079/6.jpg)">
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

<section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang SMAN 1 Tebing Tinggi</h2>
          <p> Perkembangan teknologi informasi sangat pesat. Perkembangan tersebut didukung oleh semakin banyaknya pengguna internet. Indonesia merupakan negera nomer 6 dengan pengguna internet terbanyak di dunia.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="https://foto.data.kemdikbud.go.id/getImage/10211565/10.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>FASILITAS YANG DISEDIAKAN SMAN 1 TEBING TINGGI</h3>
            <p>
            SMAN 1 TEBING TINGGI menyediakan listrik untuk membantu kegiatan belajar mengajar. Sumber listrik yang digunakan oleh SMAN 1 TEBING TINGGI berasal dari PLN. SMAN 1 TEBING TINGGI menyediakan akses internet yang dapat digunakan untuk mendukung kegiatan belajar mengajar menjadi lebih mudah. 
            Provider yang digunakan SMAN 1 TEBING TINGGI untuk sambungan internetnya adalah Telkomsel Flash.
            </p>
            <h3>JAM PEMBELAJARAN DI SMAN 1 TEBING TINGGI</h3>
            <p>Pembelajaran di SMAN 1 TEBING TINGGI dilakukan pada Pagi. Dalam seminggu, pembelajaran dilakukan selama 6 hari.</p>
            <h3>AKREDITASI</h3>
            <p>SMAN 1 TEBING TINGGI memiliki akreditasi A, berdasarkan sertifikat 694/BAP-SM/LL/XI/2017.</p>
          </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
            <ul>
              <h3>Identitas Satuan Pendidikan</h3>
              <li><i class="bi bi-check-circle"></i>Nama    : SMAN 1 TEBING TINGGI</li>
              <li><i class="bi bi-check-circle"></i>NPSN    : 10211565</li>
              <li><i class="bi bi-check-circle"></i>Alamat  :	JALAN KOMODOR LAUT YOS SUDARSO</li>
              <li><i class="bi bi-check-circle"></i>Kode Pos : 20614</li>
              <li><i class="bi bi-check-circle"></i>Kelurahan : Tanjung Marulak</li>
              <li><i class="bi bi-check-circle"></i>Kecamatan / Kota (LN)	: Kec. Rambutan</li>
              <li><i class="bi bi-check-circle"></i>Kab : Kota Tebing Tinggi</li>
              <li><i class="bi bi-check-circle"></i>Provinsi : Sumatera Utara</li>
              <li><i class="bi bi-check-circle"></i>Status Sekolah : Negeri</li>
              <li><i class="bi bi-check-circle"></i>Jenjang Pendidikan : SMA</li>
            </ul>
          </div>
        </div>
      </div>
      </section><!-- End Counts Section -->
        <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-person-circle"></i>
              <span style="font-size:30px !important;">300</span>
              <br> <br>
              <strong>Siswa</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-person-circle"></i>
              <span style="font-size:30px !important;">250</span>
              <br> <br>
              <strong>Siswi</strong> 
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-mortarboard-fill"></i>
              <span style="font-size:30px !important;">1100</span>
              <br> <br>
              <strong>Alumni</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-award-fill"></i>
              <span style="font-size:30px !important;">A</span>
              <br> <br>
              <strong>Akreditasi</strong>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
      <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>SMAN 1 TEBING TINGGI berada di koordinat Garis lintang: 1.5766 dan Garis bujur: 99.7351.</p>
        </div>

      </div>

      <div>
      <iframe style="border:0; width: 100%; height: 350px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127455.61690380977!2d99.09594329083971!3d3.3530705003714485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30316040f18f35a5%3A0xef75b50d25b3c5a1!2s9538%2B69Q%2C%20Tj.%20Marulak%2C%20Kec.%20Rambutan%2C%20Kota%20Tebing%20Tinggi%2C%20Sumatera%20Utara%2020614!5e0!3m2!1sid!2sid!4v1657639422308!5m2!1sid!2sid"> </iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Alamat</h3>
                  <p>JALAN KOMODOR LAUT YOS SUDARSO</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email</h3>
                  <p>smansatutebingtinggi@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Telepon</h3>
                  <p>+062124904</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="#" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    
  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="container">
  <div class="copyright"  style="margin-top:1% !important;">
    &copy; Copyright <strong><span>SMAN 1 TEBING TINGGI</span></strong>
     
      
      </div>
      </div>
      </footer>
      @endsection

<script src="{{ asset('js/main.js') }}"></script> 
<script src="{{ asset('js/apps.js') }}"></script> 
<script src="{{ asset('js/bootstrap.js') }}"></script> 