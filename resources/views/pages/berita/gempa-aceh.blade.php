@extends('layouts/main')

@section('isi-konten')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Pembaruan Bencana Terkini</h2>
              <p>Selamat datang di layanan berita kami! Dapatkan informasi terkini, faktual, dan beragam tentang berita terkini, hiburan, olahraga, dan banyak lagi. Jangan lewatkan berita terkini, bergabunglah dengan kami sekarang!</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="/home">Home</a></li>
            <li>gempa-aceh</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="position-relative h-100">
          <div class="slides-1 portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="assets/img/portfolio/app-1.png" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/app-1.png" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/app-1.png" alt="">
              </div>

              <div class="swiper-slide">
                <img src="assets/img/portfolio/app-1.png" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>

        </div>

        <div class="row justify-content-between gy-4 mt-4">

          <div class="col-lg-8">
            <div class="portfolio-description">
              <h2>Gempa Aceh</h2>
              <p>
                Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
              </p>
              <p>
                Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
              </p>

              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <div>
                  <img src="assets/img/testimonials/testimonials-1.png" class="testimonial-img" alt="">
                  <h3>Laksmi</h3>
                  <h4>Warga Aceh</h4>
                </div>
              </div>

              <p>
                Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

              <p>
                Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
              </p>

            </div>
          </div>

          <div class="col-lg-3">
            <div class="portfolio-info">
              <h3>Informasi Berita</h3>
              <ul>
                <li><strong>Nama Bencana</strong> <span>Gempa</span></li>
                <li><strong>Pelapor</strong> <span>Laksmi</span></li>
                <li><strong>Lokasi</strong> <span>Aceh</span></li>
                <li><strong>Waktu Kejadian</strong> <span> Kamis, 26 November 2003 10.07 WIB</span></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  @endsection