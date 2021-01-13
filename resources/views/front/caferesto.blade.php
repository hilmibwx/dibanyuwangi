@extends('layouts.front')

@section('content')
    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Cafe & Resto</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>Cafe & Resto</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Our Portfolio Section -->

      <!-- ======= Portfolio Section ======= -->
      <section class="portfolio py-0">
        <div class="container">
  
          <div class="section-title">
            <h2>Destinasi Wisata</h2>
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
  
        </div>
      </section><!-- End Portfolio Section -->
@endsection