  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>TheHafiz</span></h2> <br>
          <p class="animate__animated animate__fadeInUp h2 misbah text-center">إِنَّا نَحْنُ نَزَّلْنَا الذِّكْرَ وَإِنَّا لَهُ لَحَافِظُونَ
          </p>
          <p class="text-center font-italic white"> "Sesungguhnya Kami-lah yang menurunkan Al Qur'an, dan sesungguhnya Kami benar-benar memeliharanya."
          </p>
          <p class="text-center white mt-0"> QS. Al-Hijr[15]:9 </p>
          <a href="<?= base_url() ?>audio" class="btn-get-started animate__animated animate__fadeInUp">Yuk Dengarkan Murottal Qur'an</a>
        </div>
      </div>


      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Upgrade Wawasan</h2>
          <p class="animate__animated animate__fadeInUp">Barang siapa yang menapaki suatu jalan dalam rangka menuntut ilmu, maka Allah akan memudahkan baginya jalan menuju surga</p>
          <a href="<?= base_url() ?>blog" class="btn-get-started animate__animated animate__fadeInUp">Upgrade Wawasan </a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Uji Hafalan Quran</h2>
          <p class="animate__animated animate__fadeInUp">Al-Qur'an Seluruhnya Adalah Kemuliaan. Maka Tidaklah Kamu Menghafalkannya Dengan Ikhlas Kecuali kemuliaan Itu Akan Menjadi Milikmu</p>
          <a href="<?= base_url() ?>test" class="btn-get-started animate__animated animate__fadeInUp">Uji Hafalan Quran</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">

        <div class="section-title">
          <h2>Fitur The Hafiz</h2>
          <p>Memberikan Layanan-layanan untuk berkembang menjadi seorang hafiz Quran dengan berbagai fitur</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class='bx bx-list-check'></i></div>
              <h4 class="title"><a href="">Uji Hafalan Al-Qur'an</a></h4>
              <p class="description">Yuk, perkuat hafalan dengan ujian! Di sini kamu bisa uji hafalan dengan menjawab soal, bahkan dengan rekaman suaramu juga, lho!</p>
              <div class="row mt-5 text-center">
                <a href="<?= base_url() ?>test" type="button" class="btn btn-outline-primary btn-sm mr-2 text-center m-auto">Latihan Soal</a>
                <a href="<?= base_url() ?>test/record" type="button" class="btn btn-primary btn-sm  text-center m-auto">Rekam Suara</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class='bx bxs-volume-full'></i></div>
              <h4 class="title"><a href="">Simak Al-Qur'an</a></h4>
              <p class="description">Untuk mempermudah murajaah hafalan atau menambah hafalan baru, ayo dengarkan Al-Quran per halaman atau putar satu ayat secara berulang.</p>
              <div class="row mt-4 pt-4">
                <a href="<?= base_url() ?>audio" type="button" class="btn btn-outline-primary btn-sm mr-6 ml-4 m-auto">Per Ayat</a>
                <a href="<?= base_url() ?>audio/page" type="button" class="btn btn-primary btn-sm  ml-3 m-auto">Per Halaman</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class='bx bxs-news'></i></div>
              <h4 class="title"><a href="">Upgrade Wawasan</a></h4>
              <p class="description">Agar semakin termotivasi dalam menghafal Al-Quran, baca artikel-artikel menarik seputar Hafiz Indonesia di sini, yuk.</p>
              <div class="row pt-4">
                <a href="<?= base_url() ?>blog" type="button" class="btn btn-primary btn-sm btn3d text-center mt-5" style="margin: auto;">Upgrade Wawasan</a>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class='bx bx-play-circle'></i></div>
              <h4 class="title"><a href="">Playlist Booster</a></h4>
              <p class="description">Hibur diri dan naikin mood dengan hal yang baik-baik, langsung tonton playlist moodboostering hati. inyaallah mood langsung baikan, yuk.</p>
              <div class="row pt-4">
                <a href="<?= base_url() ?>moodbooster" type="button" class="btn btn-primary btn-sm btn3d text-center mt-4" style="margin: auto;">Play Booster</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= How To Use TheHafiz ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">
        <div class="section-title">
          <h2 style="padding-top: 50px;">Cara Menggunakan The Hafiz</h2>
          <p>Untuk lebih lengkapnya cara menggunakan dan mendownload aplikasi the hafiz bisa cek di video tutorial kami.</p>
        </div>
        <div class="row">
          <div class="col-lg-12 col-sm-12 video-box" style="margin-top: 75px;">
            <img src="<?= base_url() ?>/assets/img/why-us.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=RQfgrLwjZe4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>
          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Us Section ======= -->
    <section class="testimonials" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>About TheHafiz</h2>
        </div>

        <div class="row text-justify p-3">

          <p>TheHafiz merupakan suatu aplikasi berbasis website yang dikembangkan untuk membantu dan memudahkan umat muslim dalam menguji hafalan Al-Qur'an serta sebagai sarana untuk meningkatkan motivasi umat muslim agar terus beribadah. Melalui TheHafiz kamu dapat dengan mudah melakukan uji hafalan di mana pun kamu berada dan kapan pun kamu mau. Kamu juga dapat memilih metode uji hafalan baik dengan suara maupun dengan tulisan. Kamu dapat melakukan evaluasi karena hasil dari ujian serta detail ayat akan ditampilkan setelah uji hafalan selesai. Selain itu, kamu bisa mendapatkan motivasi penyejuk hati jika kamu merasa bosan atau gabut di menu Play Booster dan ilmu yang bermanfaat di menu Upgrade Wawasan. Eits.. bukan itu aja, jika kamu ingin berdiskusi, kami menyediakan forum diskusi untuk berinteraksi dengan teman-teman muslim lainnya. Membaca Al-Qur'an merupakan suatu ibadah, terlebih lagi jika kita menghafalkannya merupakan suatu kemuliaan dan memiliki ganjaran serta pahala yang berlipat ganda dari Allah 'Azza Wajalla.
          </p>


        </div>
      </div>
    </section><!-- End About Us Section -->
  </main>