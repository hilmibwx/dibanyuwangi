@extends('layouts.front')

@section('title')
{{ $hotel->title }} - 
@endsection
@section('meta')

<!-- Primary Meta Tags -->
<meta name="title" content="{{ $hotel->title }}">
<meta name="description" content="{{ $hotel->meta_desc }}">
<meta name='keywords' content='{{ $hotel->keyword }}' />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="article">
<meta property="og:url" content="www.dibanyuwangi.cyou/akomodasi/{{ $hotel->slug }}">
<meta property="og:title" content="{{ $hotel->title }}">
<meta property="og:description" content="{{ $hotel->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$hotel->cover) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary">
<meta property="twitter:url" content="www.dibanyuwangi.cyou/akomodasi/{{ $hotel->slug }}">
<meta property="twitter:title" content="{{ $hotel->title }}">
<meta property="twitter:description" content="{{ $hotel->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$hotel->cover) }}">
@endsection

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