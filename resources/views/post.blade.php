@extends('layout.main')
@section('title')
    Artikel - BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('content')
<main id="main">
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="/posts">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section>
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="{{ asset('tampilanutama/assets/img/portfolio/portfolio-1.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
                <h3>Informasi Data</h3>
              <ul>
                <li><strong>Penulis </strong>: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></li>
                <li><strong>Kategori </strong>: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg">
            <div class="portfolio-description">
              <h2>{{ $post->title }}</h2>
               {!! $post->tulisan !!}
            </div>
          </div>
        </div>

      </div>
    </section>
</main>
@endsection



