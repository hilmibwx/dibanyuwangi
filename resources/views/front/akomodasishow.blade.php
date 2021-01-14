@extends('layouts.front')

@section('content')

<section class="breadcrumbs">

    <div class="container">  
          
        <div class="d-flex justify-content-between align-items-center">
        
            <h2>Akomodasi</h2>
        
            <ol>
        
                <li><a href="/">Home</a></li>
        
                <li><a href="{{ route('akomodasi') }}">Akomodasi</a></li>
        
                <li>{{ $hotel->title }}</li>
        
            </ol>
        
        </div>

    </div>

</section>

<section class="portfolio-details">

    <div class="container">  
         
        <div class="portfolio-details-container">

            <img src="{{ asset('storage/'.$hotel->cover) }}" class="img-fluid" alt="{{ $hotel->title }}">            

            <div class="portfolio-info">

                <h3>Informasi</h3>

                <ul>

                    <li><strong>Type</strong>: {{ $hotel->type }}</li>

                </ul>

            </div>  
    
        </div>
          
        <div class="portfolio-description">
        
            <h2>{{ $hotel->title }}</h2>
        
            <p>
        
                {!! $hotel->desc !!}
        
            </p>

            <br>

            @isset($hotel->link)

            <a href="{{ $hotel->link }}" class="btn btn-primary">Booking</a>

            @endisset

        </div>

    </div>

</section>

@endsection