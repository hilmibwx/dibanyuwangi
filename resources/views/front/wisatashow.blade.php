@extends('layouts.front')

@section('content')

     <section class="breadcrumbs">

        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">

            <h2>Wisata</h2>

            <ol>

                <li><a href="/">Home</a></li>

                <li><a href="{{ route('wisata') }}">Wisata</a></li>

                <li>{{ $travel->title }}</li>

            </ol>

        </div>
  
        </div>

    </section>

    <section class="portfolio-details">

        <div class="container">  
          
            <div div class="portfolio-details-container">

                <img src="{{ asset('storage/'.$travel->cover) }}" class="img-fluid" alt="">  
  
            </div>

            <div class="portfolio-description">

                <h2>{{ $travel->title }}</h2>

                <p>

                    {!! $travel->desc !!}

                </p>

            </div>

        </div>

    </section>

    @endsection