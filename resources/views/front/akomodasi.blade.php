@extends('layouts.front')

@section('content')

<section class="breadcrumbs">

  <div class="container">  
         
    <div class="d-flex justify-content-between align-items-center">
    
      <h2>Akomodasi</h2>
    
      <ol>
    
        <li><a href="/">Home</a></li>
    
        <li>Akomodasi</li>
    
      </ol>
    
    </div>

  </div>

</section>

<section class="portfolio py-5">

  <div class="container">  
          
    <div class="section-title">
    
      <h2>Akomodasi</h2>
    
    </div>
      
    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

      @foreach ($hotels as $hotel)

      <div class="col-lg-4 col-md-6">

        <div class="portfolio-item">

          <img src="{{ asset('storage/'.$hotel->cover) }}" class="img-fluid" alt="{{ $hotel->title }}">

          <div class="portfolio-info">

            <h3><a href="{{ route('akomodasishow',$hotel->slug) }}" title="{{ $hotel->title }}">{{ $hotel->title }}</a></h3>

          </div>

        </div>

      </div>

      @endforeach

      {{ $hotels->links() }}  
 
    </div> 
        
  </div>
  
</section>

@endsection