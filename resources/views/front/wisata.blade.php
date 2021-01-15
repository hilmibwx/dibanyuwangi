@extends('layouts.front')

@section('content')

<section class="breadcrumbs">

  <div class="container">  

    <div class="d-flex justify-content-between align-items-center">

      <h2>Wisata</h2>

      <ol>

        <li><a href="/">Home</a></li>

        <li>Wisata</li>

      </ol>

    </div>  

  </div>

</section>

<section class="portfolio py-5">

  <div class="container">  
      
    <div class="section-title">
    
      <h2>Destinasi Wisata</h2>
    
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">  
 
      @foreach ($travels as $travel)
     
      <div class="col-lg-4 col-md-6">
 
        <div class="portfolio-item">
 
          <img src="{{ asset('storage/'.$travel->cover) }}" class="img-fluid" alt="{{ $travel->title }}">
 
          <div class="portfolio-info">
 
            <h3><a href="{{ route('wisatashow',$travel->slug) }}" title="{{ $travel->title }}">{{ $travel->title }}</a></h3>
 
          </div>
 
        </div>
 
      </div> 

      @endforeach

    </div>  

    {{ $travels->links() }}
        
  </div>
  
</section>

@endsection