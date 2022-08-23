@extends('layout.main')
@section('title')
    Tentang Kami - BUMDes Purwawinangun | Badan Usaha Milik Desa
@endsection

@section('content')

<main id="main">
  @foreach ($tentangkami as $tentang)
  <section id="testimonials" class="testimonials section-bg">
    <div class="container">
      <div class="row no-gutters">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Seputar Tentang Kami</h2>
        </div>
        <div class="content d-flex align-items-stretch" data-aos="fade-up">
          <div class="content">
            <h4>Penjelasan Singkat</h4>
            <p>{{ $tentang->penjelasansingkat }}</p>
          </div>
        </div>
        <div class="content d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              <h4>Sejarah Singkat</h4>
              <p>{{ $tentang->sejarah }}</p>
            </div>
          </div>
        <div class=" d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <h4>Visi</h4>
                <p>{!!$tentang->visi !!}</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <h4>Misi</h4>
                <p>{!!$tentang->misi !!}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  <section id="team" class="team">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Team</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up">
            <div class="pic"><img src="{{ asset('tampilanutama/assets/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="150">
            <div class="pic"><img src="{{ asset('tampilanutama/assets/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="member" data-aos="fade-up" data-aos-delay="300">
            <div class="pic"><img src="{{ asset('tampilanutama/assets/img/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
</main>
</main>
@endsection
