@extends('layouts.front')

@section('content')

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
  
</section>

<section class="portfolio py-5">

  <div class="container">  
         
    <div class="section-title">
    
      <h2>Cafe & Resto</h2>
    
    </div>
          
    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      @foreach ($restos as $resto)
      
      <div class="col-lg-4 col-md-6">

        <div class="portfolio-item">

          <img src="{{ asset('storage/'.$resto->cover) }}" class="img-fluid" alt="{{ $resto->title }}">

          <div class="portfolio-info">

            <h3><a href="{{ route('caferestoshow', $resto->slug) }}" title="{{ $resto->title }}">{{ $resto->title }}</a></h3>

          </div>

        </div>

      </div>  
      
      @endforeach

    </div>  

    {{ $restos->links() }}
        
  </div>
  
</section>

@endsection