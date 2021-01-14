@extends('layouts.front')

@section('content')

<section class="breadcrumbs">

  <div class="container">  
          
    <div class="d-flex justify-content-between align-items-center">
    
      <h2>Contact</h2>
    
      <ol>
    
        <li><a href="index.html">Home</a></li>
    
        <li>Contact</li>
    
      </ol>
    
    </div>
        
  </div>
  
</section>

<section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

  <div class="container">  
          
    <div class="row">
            
      <div class="col-lg-6">
              
        <div class="row">
        
          <div class="col-md-12">
        
            <div class="info-box">
        
              <i class="bx bx-map"></i>
        
              <h3>Our Address</h3>
        
              <p>{{ $general->address1 }}@isset($general->address2), {{ $general->address2 }} @endisset</p>
        
            </div>
        
          </div>
        
          <div class="col-md-6">
        
            <div class="info-box">
        
              <i class="bx bx-envelope"></i>
        
              <h3>Email Us</h3>
        
              <p>{{ $general->email }}</p>
        
            </div>
        
          </div>
        
          <div class="col-md-6">
        
            <div class="info-box">
        
              <i class="bx bx-phone-call"></i>
        
              <h3>Call Us</h3>
        
              <p>{{ $general->phone }}</p>
        
            </div>
        
          </div>
        
        </div>
           
      </div>
            
      <div class="col-lg-6">
             
        @if (session('failed'))    
              
        <div class="alert alert-danger">  
             
          {{ session('failed') }}
              
        </div>  
              
        @endif      
              
        @if (session('sended'))
              
        <div class="alert alert-success">
                
          {{ session('sended') }}

        </div>  
              
        @endif      
              
        <form action="{{ route('message') }}" method="post" >     
               
          @csrf     
               
          <div class="form-row">    
                  
            <div class="col-md-6 form-group" style="padding-bottom: 8px;">  
                    
              <input type="text" name="name" class="form-control {{$errors->first('name') ? "is-invalid" : "" }} " id="name" placeholder="Your Name" value="{{old('name')}}" required>

              <div class="invalid-feedback">                    
                      
                {{ $errors->first('name') }}      
                    
              </div> 
                  
            </div>  
                  
            <div class="col-md-6 form-group" style="padding-bottom: 8px;">  
                    
              <input type="email" class="form-control {{$errors->first('email') ? "is-invalid" : "" }} " name="email" id="email" placeholder="Your Email" value="{{old('email')}}" required>

              <div class="invalid-feedback">                  
                      
                {{ $errors->first('email') }}      
                    
              </div> 
                  
            </div>  
                
          </div>    
                
          <div class="form-group" style="padding-bottom: 8px;">    
                  
            <input type="text" class="form-control {{$errors->first('subject') ? "is-invalid" : "" }} " name="subject" id="subject" placeholder="Subject" value="{{old('subject')}}" required>  
                 
            <div class="invalid-feedback">    
                   
              {{ $errors->first('subject') }}      
                  
            </div> 
                
          </div>    
                
          <div class="form-group" style="padding-bottom: 8px;">    
                  
            <textarea class="form-control {{$errors->first('body') ? "is-invalid" : "" }} " name="body" rows="5" placeholder="Message" required>{{old('body')}}</textarea>  
               
            <div class="invalid-feedback">    
                    
              {{ $errors->first('body') }}      
                  
            </div> 
                
          </div>  
                
          <div class="text-center">
          
            <button type="submit" style="background: #d9232d; border: 0; padding: 10px 24px; color: #fff; transition: 0.4s; border-radius: 4px;">Send Message</button>
          
          </div>
          
        </form>
        
      </div>
          
    </div>
        
  </div>
  
</section>
      
<section class="map mt-2">

  <div class="container-fluid p-0">

    <iframe src="{{ $general->gmaps }}" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

  </div>

</section>

@endsection