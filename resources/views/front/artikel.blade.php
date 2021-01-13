@extends('layouts.front')
@section('content')
     <!-- ======= Blog Section ======= -->
     <section class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Blog</h2>
  
            <ol>
              <li><a href="index.html">Home</a></li>
              <li>Blog</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Blog Section -->
  
      <!-- ======= Blog Section ======= -->
      <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">
  
          <div class="row">
  
            <div class="col-lg-4  col-md-6 d-flex align-items-stretch entries" data-aos="fade-up">
  
              <article class="entry">
  
                <div class="entry-img">
                  <img src="{{ asset('front/img/blog-post-1.jpg') }}" alt="" class="img-fluid">
                </div>
  
                <h2 class="entry-title">
                  <a href="{{route('artikelshow')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia
                    reiciendis</a>
                </h2>
  
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('artikelshow')}}">John
                        Doe</a></li>
                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('artikelshow')}}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{route('artikelshow')}}">12
                        Comments</a></li>
                  </ul>
                </div>
  
                <div class="entry-content">
                  <p>
                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                    laboriosam eius aut nostrum quidem aliquid dicta.
                    Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                    aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                  </p>
                  <div class="read-more">
                    <a href="{{route('artikelshow')}}">Read More</a>
                  </div>
                </div>
  
              </article><!-- End blog entry -->

            </div>

            <div class="col-lg-4  col-md-6 d-flex align-items-stretch entries" data-aos="fade-up">
  
                <article class="entry">
    
                  <div class="entry-img">
                    <img src="{{ asset('front/img/blog-post-1.jpg') }}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                    <a href="{{route('artikelshow')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia
                      reiciendis</a>
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('artikelshow')}}">John
                          Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('artikelshow')}}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                      <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{route('artikelshow')}}">12
                          Comments</a></li>
                    </ul>
                  </div>
    
                  <div class="entry-content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                      laboriosam eius aut nostrum quidem aliquid dicta.
                      Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                      aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                    </p>
                    <div class="read-more">
                      <a href="{{route('artikelshow')}}">Read More</a>
                    </div>
                  </div>
    
                </article><!-- End blog entry -->
  
              </div>

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch entries" data-aos="fade-up">
  
                <article class="entry">
    
                  <div class="entry-img">
                    <img src="{{ asset('front/img/blog-post-1.jpg') }}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                    <a href="{{route('artikelshow')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia
                      reiciendis</a>
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('artikelshow')}}">John
                          Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('artikelshow')}}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                      <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{route('artikelshow')}}">12
                          Comments</a></li>
                    </ul>
                  </div>
    
                  <div class="entry-content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                      laboriosam eius aut nostrum quidem aliquid dicta.
                      Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                      aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                    </p>
                    <div class="read-more">
                      <a href="{{route('artikelshow')}}">Read More</a>
                    </div>
                  </div>
    
                </article><!-- End blog entry -->
  
              </div>

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch entries" data-aos="fade-up">
  
                <article class="entry">
    
                  <div class="entry-img">
                    <img src="{{ asset('front/img/blog-post-1.jpg') }}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                    <a href="{{route('artikelshow')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia
                      reiciendis</a>
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('artikelshow')}}">John
                          Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('artikelshow')}}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                      <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{route('artikelshow')}}">12
                          Comments</a></li>
                    </ul>
                  </div>
    
                  <div class="entry-content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                      laboriosam eius aut nostrum quidem aliquid dicta.
                      Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                      aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                    </p>
                    <div class="read-more">
                      <a href="{{route('artikelshow')}}">Read More</a>
                    </div>
                  </div>
    
                </article><!-- End blog entry -->
  
              </div>

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch entries" data-aos="fade-up">
  
                <article class="entry">
    
                  <div class="entry-img">
                    <img src="{{ asset('front/img/blog-post-1.jpg') }}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                    <a href="{{route('artikelshow')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia
                      reiciendis</a>
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('artikelshow')}}">John
                          Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('artikelshow')}}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                      <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{route('artikelshow')}}">12
                          Comments</a></li>
                    </ul>
                  </div>
    
                  <div class="entry-content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                      laboriosam eius aut nostrum quidem aliquid dicta.
                      Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                      aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                    </p>
                    <div class="read-more">
                      <a href="{{route('artikelshow')}}">Read More</a>
                    </div>
                  </div>
    
                </article><!-- End blog entry -->
  
              </div>

              <div class="col-lg-4  col-md-6 d-flex align-items-stretch entries" data-aos="fade-up">
  
                <article class="entry">
    
                  <div class="entry-img">
                    <img src="{{ asset('front/img/blog-post-1.jpg') }}" alt="" class="img-fluid">
                  </div>
    
                  <h2 class="entry-title">
                    <a href="{{route('artikelshow')}}">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia
                      reiciendis</a>
                  </h2>
    
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('artikelshow')}}">John
                          Doe</a></li>
                      <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('artikelshow')}}"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                      <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="{{route('artikelshow')}}">12
                          Comments</a></li>
                    </ul>
                  </div>
    
                  <div class="entry-content">
                    <p>
                      Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi praesentium. Aliquam et
                      laboriosam eius aut nostrum quidem aliquid dicta.
                      Et eveniet enim. Qui velit est ea dolorem doloremque deleniti aperiam unde soluta. Est cum et quod quos
                      aut ut et sit sunt. Voluptate porro consequatur assumenda perferendis dolore.
                    </p>
                    <div class="read-more">
                      <a href="{{route('artikelshow')}}">Read More</a>
                    </div>
                  </div>
    
                </article><!-- End blog entry -->
  
              </div>

              
  
  
              
  
          </div><!-- End .row -->

          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li class="disabled"><i class="icofont-rounded-left"></i></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
            </ul>
          </div>
  
        </div><!-- End .container -->
  
      </section><!-- End Blog Section -->
@endsection