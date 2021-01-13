@extends('layouts.front')

@section('hero')
     <!-- ======= Hero Section ======= -->
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
  </section><!-- End Hero -->
@endsection

@section('content')
     <!-- ======= Services Section ======= -->
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
      </section><!-- End Services Section -->
  
         <!-- ======= Portfolio Section ======= -->
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
                    <h3><a href="portfolio-details.html" data-gall="portfolioGallery" class="venobox" title="{{ $travel->title }}">{{ $travel->title }}</a></h3>
                  </div>
                </div>
              </div>
              @endforeach
    
    
            </div>
  
            <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
              <a href="#" class="btn btn-primary rounded">Semua Destinasi</a>
            </div>
    
          </div>
        </section><!-- End Portfolio Section -->
  
        <!-- ======= Portfolio Section ======= -->
      <section class="portfolio">
        <div class="container">
  
          <div class="section-title">
            <h2>Akomodasi</h2>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  
            <div class="col-lg-4 col-md-6">
              <div class="portfolio-item">
                <img src="{{ asset('front/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h3><a href="portfolio-details.html" data-gall="portfolioGallery" class="venobox" title="App 1">App 1</a></h3>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="portfolio-item">
                <img src="{{ asset('front/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h3><a href="portfolio-details.html" data-gall="portfolioGallery" class="venobox" title="Web 3">Web 3</a></h3>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="portfolio-item">
                <img src="{{ asset('front/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h3><a href="portfolio-details.html" data-gall="portfolioGallery" class="venobox" title="App 2">App 2</a></h3>
                </div>
              </div>
            </div>
  
          </div>
  
          <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <a href="#" class="btn btn-primary rounded">Semua Akomodasi</a>
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
           <!-- ======= Portfolio Section ======= -->
      <section class="portfolio py-0">
        <div class="container">
  
          <div class="section-title">
            <h2>Cafe & Resto</h2>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
  
            <div class="col-lg-4 col-md-6">
              <div class="portfolio-item">
                <img src="{{ asset('front/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h3><a href="portfolio-details.html" data-gall="portfolioGallery" class="venobox" title="App 1">App 1</a></h3>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="portfolio-item">
                <img src="{{ asset('front/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h3><a href="portfolio-details.html" data-gall="portfolioGallery" class="venobox" title="Web 3">Web 3</a></h3>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6">
              <div class="portfolio-item">
                <img src="{{ asset('front/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h3><a href="portfolio-details.html" data-gall="portfolioGallery" class="venobox" title="App 2">App 2</a></h3>
                </div>
              </div>
            </div>
  
          </div>
  
          <div class="section-title" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <a href="#" class="btn btn-primary rounded">Semua Cafe & Resto</a>
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
  
         <!-- ======= Blog Section ======= -->
       <section id="blog" class="blog">
        <div class="container">
  
            <div class="section-title">
                <h2>Artikel</h2>
            </div>
  
          <div class="row">
  
            <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <article class="entry">
  
                <div class="entry-img">
                  <img src="{{ asset('front/img/blog-post-1.jpg') }}" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                  <a href="blog-single.html">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>
                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta zena prista maraeda talan mas indera.
                  </p>
                  <div class="read-more">
                    <a href="blog-single.html">Read More</a>
                  </div>
                </div>
  
              </article><!-- End blog entry -->
            </div>
  
            <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <article class="entry">
  
                <div class="entry-img">
                  <img src="{{ asset('front/img/blog-post-2.jpg') }}" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                  <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>
                    Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias.
                  </p>
                  <div class="read-more">
                    <a href="blog-single.html">Read More</a>
                  </div>
                </div>
  
              </article><!-- End blog entry -->
            </div>
  
            <div class="col-lg-4  col-md-6 d-flex align-items-stretch" data-aos="fade-up">
              <article class="entry">
  
                <div class="entry-img">
                  <img src="{{ asset('front/img/blog-post-3.jpg') }}" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                  <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>
                    Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis tara kero pakla metaruna nedore stan.
                  </p>
                  <div class="read-more">
                    <a href="blog-single.html">Read More</a>
                  </div>
                </div>
  
              </article><!-- End blog entry -->
            </div>
  
          </div>
  
        </div>
      </section><!-- End Blog Section -->
@endsection