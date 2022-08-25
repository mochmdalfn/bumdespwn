@extends('layout.main')
@section('title')
    BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('content')
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Selamat Datang Di BUMDes Puwawinangun Kab. Cirebon</h1>
      <h2>Meningkatkan kesejahteraan warga pada Desa Purwawinangun</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section>

  <main id="main">

    <section id="counts" class="counts  section-bg">
      <div class="container">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Indikator Angka</h2>
          <p>Data Dari Januari - Desember 2022</p>
        </div>
        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $total_mitra }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Mitra</strong> Data mitra yang ada di kami sudah bergabung.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $total_jenis_usaha }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Orang</strong> Total orang yang bergabung di kami.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $total_produk_pertanian }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Omzet</strong> Omzet total dalam mitra BUMDES kami.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="{{ $total_ulasan }}" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Investasi</strong> Jumlah investasi yang ada di desa kami.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="about">
      <div class="container">
        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h3>BUMDes Purwawinangun Kab. Cirebon</h3>
              <a href="#" class="about-btn">Tentang Kami <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Visi sit</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eros odio, sed semper mi pretium eget. Nulla ac justo vel turpis iaculis bibendum ut tempus erat. Mauris ultricies turpis ut ullamcorper posuere.</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Misi sit</h4>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod eros odio, sed semper mi pretium eget. Nulla ac justo vel turpis iaculis bibendum ut tempus erat. Mauris ultricies turpis ut ullamcorper posuere.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Produk BUMDes</h2>
        </div>

        <div class="row">
          @foreach ($produkpertanian as $produk)    
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-5">
              <div class="icon-box" data-aos="fade-up">
                <h4 class="title">
                  <a href="">{{ $produk->name }}</a>
                </h4>
                <p class="description">
                  <img src="{{ url('images/'.$produk->gambar) }}">
                </p>
              </div>
            </div>
          @endforeach
        </div>

      </div>
    </section>

    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Mitra BUMDes Purwawinangun</h3>
          <p> Seputar informasi lebih lanjut klik dibawah ini.</p>
          <a class="cta-btn" href="#">Whastapp</a>
        </div>

      </div>
    </section>

    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Singkat Kata Mitra</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach($ulasan as $ulasan)
              <div class="swiper-slide">
                <div class="testimonial-item">
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {{$ulasan->ulasan}}
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>{{$ulasan->name}}</h3>
                  <h4>{{$ulasan->job}}</h4>
                </div>
              </div><!-- End testimonial item -->
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

  </main>
@endsection
