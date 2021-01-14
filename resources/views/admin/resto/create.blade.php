@extends('layouts.admin')

@section('styles')
@section('styles')
<style>
   .picture-container {
  position: relative;
  cursor: pointer;
  text-align: center;
}
 .picture {
  width: 800px;
  height: 400px;
  background-color: #999999;
  border: 4px solid #CCCCCC;
  color: #FFFFFF;
  /* border-radius: 50%; */
  margin: 5px auto;
  overflow: hidden;
  transition: all 0.2s;
  -webkit-transition: all 0.2s;
}
.picture:hover {
  border-color: #2ca8ff;
}
.picture input[type="file"] {
  cursor: pointer;
  display: block;
  height: 100%;
  left: 0;
  opacity: 0 !important;
  position: absolute;
  top: 0;
  width: 100%;
}
.picture-src {
  width: 100%;
  height: 100%;
}
</style>
@endsection
@section('content')

@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

<form action="{{ route('admin.resto.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="container">

        <div class="form-group">

            <div class="picture-container">
    
                <div class="picture">
    
                    <img src="" class="picture-src" id="wizardPicturePreview" height="200px" width="400px" title=""/>
    
                    <input type="file" id="wizard-picture" name="cover" class="form-control {{$errors->first('cover') ? "is-invalid" : "" }} ">
    
                    <div class="invalid-feedback">
                        {{ $errors->first('cover') }}    
                    </div>  
    
                </div>
    
                <h6>Pilih Cover</h6>
    
            </div>
    
        </div>


        <div class="form-group ml-5">

            <label for="title" class="col-sm-2 col-form-label">Name</label>

            <div class="col-sm-9">

                <input type="text" name='title' class="form-control {{$errors->first('title') ? "is-invalid" : "" }} " value="{{old('title')}}" id="title" placeholder="ex: Cafe Buah Naga">

                <div class="invalid-feedback">
                    {{ $errors->first('title') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="desc" class="col-sm-2 col-form-label">Desc</label>

            <div class="col-sm-9">

                <textarea name="desc" class="form-control {{$errors->first('desc') ? "is-invalid" : "" }} "  id="summernote" cols="30" rows="10">{{old('desc')}}</textarea>
                <div class="invalid-feedback">
                    {{ $errors->first('desc') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="keyword" class="col-sm-2 col-form-label">Keyword</label>

            <div class="col-sm-9">

                <input type="text" name='keyword' class="form-control {{$errors->first('keyword') ? "is-invalid" : "" }} " value="{{old('keyword')}}" id="keyword" placeholder="ex: Cafe Buah Naga">

                <div class="invalid-feedback">
                    {{ $errors->first('keyword') }}    
                </div>   

            </div>

        </div>

        <div class="form-group ml-5">

            <label for="meta_desc" class="col-sm-2 col-form-label">Meta Description</label>

            <div class="col-sm-9">

                <input type="text" name='meta_desc' class="form-control {{$errors->first('meta_desc') ? "is-invalid" : "" }} " value="{{old('meta_desc')}}" id="meta_desc" placeholder="Meta Desc">

                <div class="invalid-feedback">
                    {{ $errors->first('meta_desc') }}    
                </div>   

            </div>

        </div>
   
        <div class="form-group ml-5">
   
            <div class="col-sm-3">
   
                <button type="submit" class="btn btn-primary">Create</button>
   
            </div>
   
        </div>

    </div>      

  </form>
@endsection

@push('scripts')

<script>
    // Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
      readURL(this);
  });
  //Function to show image before upload
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
      }
      reader.readAsDataURL(input.files[0]);
  }
}
</script>
@endpush