@extends('layout.main')
@section('title')
    Artikel - BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('content')
<main id="main">
  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>{{ $title }}</h2>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
        @foreach ($posts as $post)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ asset('tampilanutama/assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $post["title"] }}"><i class="bx bx-plus"></i></a>
              <a href="/posts/{{ $post->slug }}" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>
</main>
@endsection
