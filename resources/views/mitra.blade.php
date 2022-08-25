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
        @foreach($mitra as $mitra)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ url('images/'.$mitra->gambar) }}" class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href="{{ url('images/'.$mitra->gambar) }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $mitra->pemilik }}">
                <i class="bx bx-plus"></i>
              </a>
              <a href="https://wa.me/{{$mitra->nomerhandphone}}" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>
</main>
@endsection
