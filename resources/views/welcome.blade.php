@extends('layouts.front')

@section('meta')
<meta name="description" content="{{ $general->meta_desc }}">
<meta name='keywords' content='{{ $general->keyword }}' />
@endsection
@section('hero')

<section id="hero" class="d-flex justify-cntent-center align-items-center">

  <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

    <!-- Slide 1 -->

    <div class="carousel-item active">

      <div class="carousel-container">

        <h2 class="animate__animated animate__fadeInDown">Selamat Datang <span>#DiBanyuwangi</span></h2>

        <p class="animate__animated animate__fadeInUp">Pengen liburan tapi ngga tau mau kemana ? ya #diBanyuwangi aja. Temukan destinasi menarik mulai dari wisata alam, religi, sejarah dan budaya #diBanyuwangi.</p>

        <a href="{{ route('wisata') }}" class="btn-get-started animate__animated animate__fadeInUp">Info Wisata</a>

      </div>

    </div>

    <!-- Slide 2 -->

    <div class="carousel-item">

      <div class="carousel-container">

        <h2 class="animate__animated animate__fadeInDown">Akomodasi</h2>

        <p class="animate__animated animate__fadeInUp">Bingung mau nginap dimana ? tenang aja, #dibanyuwangi ada banyak sekali opsi penginapan mulai dari hotel berbintang, home stay dan lainnya. Di setiap kawasan wisata #dibanyuwangi pasti ada penginapan yang dapat kamu pesan.</p>

        <a href="" class="btn-get-started animate__animated animate__fadeInUp">Info Penginapan</a>

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

</section>

@endsection

@section('content')

<section class="services">

  <div class="container">  
          
    <div class="row">
    
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
    
        <div class="icon-box icon-box-pink">
    
          <div class="icon"><i class="bx bx-car"></i></div>
    
          <h4 class="title"><a href="">Destinasi Wisata</a></h4>
    
          <p class="description">Informasi seputar destinasi wisata keren yang ada #diBanyuwangi</p>
    
        </div>
    
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">

        <div class="icon-box icon-box-cyan">

          <div class="icon"><i class="bx bx-hotel"></i></div>

          <h4 class="title"><a href="">Akomodasi</a></h4>

          <p class="description">Informasi penginapan untuk kebutuhan liburan #dibanyuwangi</p>

        </div>

      </div>  
    
      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
    
        <div class="icon-box icon-box-green">
    
          <div class="icon"><i class="bx bx-restaurant"></i></div>
    
          <h4 class="title"><a href="">Restaurant</a></h4>
    
          <p class="description">Cafe & Resto kece untuk kebutuhan konsumsi #dibanyuwangi</p>
    
        </div>
    
      </div>

      <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">

        <div class="icon-box icon-box-blue">

          <div class="icon"><i class="bx bx-paper-plane"></i></div>

          <h4 class="title"><a href="">Artikel</a></h4>

          <p class="description">Baca artikel seputar apa saja yang ada #dibanyuwangi</p>

        </div>

      </div>  
  
    </div>

  </div>

</section>

<section class="portfolio py-0">

  <div class="container">    
   
    <div class="section-title">
   
      <h2>Destinasi Wisata</h2>
   
    </div> 
           
    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      @foreach ($travel as $travel)

      <div class="col-lg-4 col-md-6">

        <div class="portfolio-item">

          <img src="{{ asset('storage/'.$travel->cover) }}" class="img-fluid" alt="">

          <div class="portfolio-info">

            <h3><a href="{{ route('wisatashow',$travel->slug) }}" title="{{ $travel->title }}">{{ $travel->title }}</a></h3>

          </div>

        </div>

      </div>

      @endforeach    
           
    </div>

    <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      <a href="{{ route('wisata') }}" class="btn btn-primary rounded">Semua Destinasi</a>

    </div>    
          
  </div>
  
</section>

<section class="portfolio">

  <div class="container">  
          
    <div class="section-title">
    
      <h2>Akomodasi</h2>
    
    </div>
          
    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      @foreach ($hotel as $hotel)

      <div class="col-lg-4 col-md-6">

        <div class="portfolio-item">

          <img src="{{ asset('storage/'.$hotel->cover) }}" class="img-fluid" alt="{{ $hotel->title }}">

          <div class="portfolio-info">

            <h3><a href="{{ route('akomodasishow',$hotel->slug) }}" title="{{ $hotel->title }}">{{ $hotel->title }}</a></h3>

          </div>

        </div>

      </div>

      @endforeach  
          
    </div>
  
    <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  
      <a href="{{ route('akomodasi') }}" class="btn btn-primary rounded">Semua Akomodasi</a>
  
    </div>
        
  </div>
  
</section>

<section class="portfolio py-0">

  <div class="container">  
          
    <div class="section-title">
    
      <h2>Cafe & Resto</h2>
    
    </div>
          
    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      @foreach ($resto as $resto)

      <div class="col-lg-4 col-md-6">

        <div class="portfolio-item">

          <img src="{{ asset('storage/'.$resto->cover) }}" class="img-fluid" alt="{{ $resto->title }}">

          <div class="portfolio-info">

            <h3><a href="{{ route('caferestoshow',$resto->slug) }}" title="{{ $resto->title }}">{{ $resto->title }}</a></h3>

          </div>

        </div>

      </div>

      @endforeach            
          
    </div>
          
    <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    
      <a href="{{ route('caferesto') }}" class="btn btn-primary rounded">Semua Cafe & Resto</a>
    
    </div>
        
  </div>
  
</section>

@endsection