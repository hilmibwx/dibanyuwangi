@extends('layouts.front')

@section('title')
{{ $post->title }} - 
@endsection
@section('meta')

<!-- Primary Meta Tags -->
<meta name="title" content="{{ $post->title }}">
<meta name="description" content="{{ $post->meta_desc }}">
<meta name='keywords' content='{{ $post->keyword }}' />

<!-- Open Graph / Facebook -->
<meta property="og:type" content="article">
<meta property="og:url" content="www.dibanyuwangi.cyou/artikel/{{ $post->slug }}">
<meta property="og:title" content="{{ $post->title }}">
<meta property="og:description" content="{{ $post->meta_desc }}">
<meta property="og:image" content="{{ asset('storage/'.$post->cover) }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary">
<meta property="twitter:url" content="www.dibanyuwangi.cyou/artikel/{{ $post->slug }}">
<meta property="twitter:title" content="{{ $post->title }}">
<meta property="twitter:description" content="{{ $post->meta_desc }}">
<meta property="twitter:image" content="{{ asset('storage/'.$post->cover) }}">
@endsection

@section('content')

<section class="breadcrumbs">

  <div class="container">  
         
    <div class="d-flex justify-content-between align-items-center">
    
      <h2>Artikel</h2>

      <ol>

        <li><a href="/">Home</a></li>

        <li><a href="{{ route('artikel') }}">Artikel</a></li>

        <li>{{ $post->title }}</li>

      </ol>

    </div>  
        
  </div>
  
</section>
      
<section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="container">  
          
    <div class="row">
            
      <div class="col-lg-8 entries">
              
        <article class="entry entry-single">
        
          <div class="entry-img">
        
            <img src="{{ asset('storage/'.$post->cover) }}" alt="{{ $post->title }}" class="img-fluid">
        
          </div>
                
          <h2 class="entry-title">
          
            <a href="{{ route('artikelshow',$post->slug) }}">{{ $post->title }}</a>
          
          </h2>
               
          <div class="entry-meta">
          
            <ul>
          
              <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#">{{ $post->user->name }}</a></li>
          
              <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><time datetime="2020-01-01">{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</time></a></li>
          
              <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="http://127.0.0.1:8000/artikel/{{ $post->slug }}#disqus_thread">Comments</a></li>
          
            </ul>
          
          </div>
                
          <div class="entry-content">
          
            <p>{!! $post->body !!}</p>

          </div>  
                
          <div class="entry-footer clearfix">
          
            <div class="float-left">
          
              <i class="icofont-folder"></i>
          
              <ul class="cats">
          
                <li><a href="{{ route('category',$post->category->slug) }}">{{ $post->category->name }}</a></li>
          
              </ul>
                   
              <i class="icofont-tags"></i>
              
              <ul class="tags">
              
                @foreach ($post->tags as $tag)
                <li><a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a></li>
                @endforeach
              
              </ul>
              
            </div>
            
          </div>

        </article> 
              
        <div class="blog-comments">
        
          <div id="disqus_thread"></div>
        
        </div>
            
      </div>  
            
      <div class="col-lg-4">

        <div class="sidebar">  
               
          <h3 class="sidebar-title">Search</h3>
          
          <div class="sidebar-item search-form">
          
            <form action="{{ route("search") }}" method="GET">
             
              <input type="text" name="query">
             
              <button type="submit"><i class="icofont-search"></i></button>
            
            </form>
          
          </div>
                
          <h3 class="sidebar-title">Categories</h3>
          
          <div class="sidebar-item categories">
          
            <ul>
          
              @foreach ($categories as $category)
          
              <li><a href="{{ route('category',$category->slug) }}">{{ $category->name }}<span>({{ $category->posts()->count() }})</span></a></li>
          
              @endforeach          
                  
            </ul>
                
          </div>
                
          <h3 class="sidebar-title">Recent Posts</h3>
          
          <div class="sidebar-item recent-posts">
          
            @foreach ($recent as $recent)
          
            <div class="post-item clearfix">
          
              <img src="{{asset('storage/' . $recent->cover)}}" alt="{{$recent->title}}">
          
              <h4><a href="{{route('artikelshow',$recent->slug)}}">{{ substr($recent->title,0,50) }}....</a></h4>
          
              <time datetime="2020-01-01">{{ Carbon\Carbon::parse($recent->created_at)->format("d F, Y") }}</time>
          
            </div>
          
            @endforeach 
                
          </div>
                
          <h3 class="sidebar-title">Tags</h3>
          
          <div class="sidebar-item tags">
          
            <ul>
          
              @foreach ($tags as $tag)
          
              <li><a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a></li>
          
              @endforeach          
                  
            </ul>
                
          </div>
              
        </div>
            
      </div>
          
    </div>
        
  </div>
      
</section>

@endsection

@push('scripts')
{!! $general->disqus !!}
@endpush