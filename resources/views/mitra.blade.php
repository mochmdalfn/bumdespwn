@extends('layout.main')
@section('title')
    Mitra - BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('content')

<main id="main">
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Mitra Kami</h2>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Warung Bu Erna"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Warnet"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-3.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-4.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-5.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-6.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-7.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-8.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-9.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
</main>
@endsection
