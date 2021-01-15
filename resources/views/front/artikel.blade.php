@extends('layouts.front')

@section('meta')
@isset($category)
@section('title')
{{ $category->name }} - 
@endsection
<!-- Primary Meta Tags -->
<meta name="description" content="{{ $category->meta_desc }}">
<meta name="keywords" content="{{ $category->keyword }}">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{ $general->name }}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="www.dibanyuwangi.cyou/categories/{{ $category->slug }}"/>
<meta property="og:title" content="{{ $category->name }}"/>
<meta property="og:description" content="{{ $category->meta_desc }}"/>
<meta property="og:keywords" content="{{ $category->keyword }}"/>
<meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary">
<meta property="twitter:url" content="www.dibanyuwangi.cyou/categories/{{ $category->slug }}">
<meta property="twitter:title" content="{{ $category->name }}">
<meta property="twitter:description" content="{{ $category->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">

@endisset

@isset($tag)
@section('title')
{{ $tag->name }} - 
@endsection
<!-- Primary Meta Tags -->
<meta name="description" content="{{ $tag->meta_desc }}">
<meta name="keywords" content="{{ $tag->keyword }}">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{ $general->name }}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="www.dibanyuwangi.cyou/tags/{{ $tag->slug }}"/>
<meta property="og:title" content="{{ $tag->name }}"/>
<meta property="og:description" content="{{ $tag->meta_desc }}"/>
<meta property="og:keywords" content="{{ $tag->keyword }}"/>
<meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary">
<meta property="twitter:url" content="www.dibanyuwangi.cyou/tags/{{ $tag->slug }}">
<meta property="twitter:title" content="{{ $tag->name }}">
<meta property="twitter:description" content="{{ $tag->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">

@endisset

@if (!isset($tag) && !isset($category) && !isset($query))

@section('title')
Artikel - 
@endsection

<!-- Primary Meta Tags -->
<meta name="description" content="Dapatkan artikel seputar apa saja yang ada di banyuwangi">
<meta name="keywords" content="artikel di banyuwangi">

<!-- Open Graph / Facebook -->
<meta property="og:site_name" content="{{ $general->name }}"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="www.dibanyuwangi.cyou/artikel"/>
<meta property="og:title" content="Artikel Dibanyuwangi.cyou"/>
<meta property="og:description" content="Dapatkan artikel seputar apa saja yang ada di banyuwangi"/>
<meta property="og:keywords" content="artikel dibanyuwangi"/>
<meta property='og:image' content='{{ asset('storage/'.$general->favicon) }}'/>

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="www.dibanyuwangi.cyou/artikel">
<meta property="twitter:title" content="Artikel Dibanyuwangi.cyou">
<meta property="twitter:description" content="Dapatkan artikel seputar apa saja yang ada di banyuwangi">
<meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">

@endif
@endsection

@section('content')

<section class="breadcrumbs">

  <div class="container">  
          
    <div class="d-flex justify-content-between align-items-center">
    
      @isset($category)
      <h2>Category: {{ $category->name }}</h2>
      @endisset
      @isset($tag)
      <h2>Tag: {{ $tag->name }}</h2>
      @endisset
      @isset($query)
      <h2>Hasil Pencarian: {{ $query }}</h2>
      @endisset
      @if (!isset($tag) && !isset($category) && !isset($query))
      <h2>Artikel</h2>
      @endif

      <ol>

        <li><a href="/">Home</a></li>

        <li>Artikel</li>

      </ol>

    </div>  
        
  </div>
  
</section>

<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="container">  
          
    <div class="row">
            
      @foreach ($posts as $post)
      
      <div class="col-lg-4  col-md-6 d-flex align-items-stretch entries" data-aos="fade-up">

        <article class="entry">  
                
          <div class="entry-img">
          
            <img src="{{ asset('storage/'.$post->cover) }}" alt="{{ $post->title }}" class="img-fluid">
          
          </div>
                
          <h2 class="entry-title">
          
            <a href="{{route('artikelshow',$post->slug)}}">{{ $post->title }}</a>
          
          </h2>
               
          <div class="entry-meta">
          
            <ul>
          
              <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="{{route('artikelshow',$post->slug)}}">{{ $post->user->name }}</a></li>
          
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="{{route('artikelshow',$post->slug)}}"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</time></a></li>
          
            </ul>
          
          </div>
                
          <div class="entry-content">
          
            <p>
          
              {!! Str::limit( strip_tags( $post->body ), 200 ) !!}
          
            </p>
          
            <div class="read-more">
          
              <a href="{{route('artikelshow',$post->slug)}}">Read More</a>
          
            </div>
          
          </div>
              
        </article>
            
      </div>
      
      @endforeach
          
    </div>
    
      {{ $posts->links() }}
        
  </div>
      
</section>

@endsection