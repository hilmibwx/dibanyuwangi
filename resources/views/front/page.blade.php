@extends('layouts.front')

@section('content')
<section class="breadcrumbs">

    <div class="container">  
          
        <div class="d-flex justify-content-between align-items-center">
        
            <h2>{{ $page->title }}</h2>
        
            <ol>
        
                <li><a href="/">Home</a></li>
        
                <li>{{ $page->title }}</li>
        
            </ol>
        
        </div>

    </div>

</section>

@if(request()->is('page/informasi'))
<section id="services" class="blog py-3">
    
    <div class="container">
    
        <div class="section-title">
   
            <h2>Jadwal Sholat</h2>
         
          </div> 

        <div class="row">
    
            <div class="entry mx-auto d-block mb-0">
                <marquee>
                    Jadwal sholat hari ini atau tanggal {{ date("d F Y") }} untuk wilayah Kab. Banyuwangi, <strong>Subuh: {{ $schedule['subuh'] }} WIB</strong> | <strong>Dzuhur: {{ $schedule['dzuhur'] }} WIB</strong> | <strong>Ashar: {{ $schedule['ashar'] }} WIB</strong> | <strong>Magrib: {{ $schedule['maghrib'] }} WIB</strong> | <strong>Isya: {{ $schedule['isya'] }} WIB</strong>
                </marquee>
            </div>
    
        </div>
    
    </div>
  
</section>
@endif


<section class="blog">

    <div class="container">  

        <div class="row">

            <div class="entry mx-auto d-block mb-0">

                <p>        
           
                    {!! $page->text !!}
        
                </p>

            </div>

        </div>

    </div>

</section>

@endsection