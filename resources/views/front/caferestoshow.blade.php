@extends('layouts.front')

@section('content')

     <section class="breadcrumbs">

        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">

            <h2>Cafe & Resto</h2>

            <ol>

                <li><a href="/">Home</a></li>

                <li><a href="{{ route('caferesto') }}">Cafe & Resto</a></li>

                <li>{{ $resto->title }}</li>

            </ol>

        </div>
  
        </div>

    </section>

    <section class="portfolio-details">

        <div class="container">  
          
            <div div class="portfolio-details-container">

                <img src="{{ asset('storage/'.$resto->cover) }}" class="img-fluid" alt="">  
  
            </div>

            <div class="portfolio-description">

                <h2>{{ $resto->title }}</h2>

                <p>

                    {!! $resto->desc !!}

                </p>

            </div>

        </div>

    </section>

    @endsection