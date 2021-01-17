@extends('layouts.front')

@section('title')
{{ $resto->title }} - 
@endsection
@section('meta')

<!-- Primary Meta Tags -->
<meta name="title" content="{{ $resto->title }}">
<meta name="description" content="{{ $resto->meta_desc }}">
<meta name='keywords' content='{{ $resto->keyword }}' />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="article">
<meta property="og:url" content="www.dibanyuwangi.cyou/cafe-resto/{{ $resto->slug }}">
<meta property="og:title" content="{{ $resto->title }}">
<meta property="og:description" content="{{ $resto->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$resto->cover) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary">
<meta property="twitter:url" content="www.dibanyuwangi.cyou/cafe-resto/{{ $resto->slug }}">
<meta property="twitter:title" content="{{ $resto->title }}">
<meta property="twitter:description" content="{{ $resto->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$resto->cover) }}">
@endsection

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
        
          <div id="disqus_thread"></div>

        </div>

    </section>

    @endsection
