@extends('layouts.front')

@section('title')
{{ $travel->title }} - 
@endsection
@section('meta')

<!-- Primary Meta Tags -->
<meta name="title" content="{{ $travel->title }}">
<meta name="description" content="{{ $travel->meta_desc }}">
<meta name='keywords' content='{{ $travel->keyword }}' />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="article">
<meta property="og:url" content="www.dibanyuwangi.cyou/wisata/{{ $travel->slug }}">
<meta property="og:title" content="{{ $travel->title }}">
<meta property="og:description" content="{{ $travel->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$travel->cover) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary">
<meta property="twitter:url" content="www.dibanyuwangi.cyou/wisata/{{ $travel->slug }}">
<meta property="twitter:title" content="{{ $travel->title }}">
<meta property="twitter:description" content="{{ $travel->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$travel->cover) }}">
@endsection

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
            
              <div id="disqus_thread"></div>

        </div>

    </section>

    @endsection
    
    @push('scripts')
{!! $general->disqus !!}
@endpush
