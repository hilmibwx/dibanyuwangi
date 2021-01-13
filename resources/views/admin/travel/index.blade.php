@extends('layouts.admin')

@section('styles')

<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

@endsection

@section('content')

<!-- Page Heading -->

<h1 class="h3 mb-2 text-gray-800">Wisata</h1>     
   
@if (session('success'))

<div class="alert alert-success">

    {{ session('success') }}

</div>

@endif

<!-- DataTales Example -->

<div class="card shadow mb-4">

    <div class="card-header py-3">

        <a href="{{ route('admin.travel.create') }}" class="btn btn-success">Tambah Wisata</a>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>

                    <tr>

                        <th>No.</th>

                        <th>Cover</th>

                        <th>Name</th>

                        <th>Desc</th>

                        <th>Option</th>

                    </tr>

                </thead>

                <tbody>

                @php
                
                $no=0;
                
                @endphp
                
                @foreach ($travel as $travel)
                     
                    <tr> 
             
                        <td>{{ ++$no }}</td>  
             
                        <td>  
                
                            <img src="{{asset('storage/' . $travel->cover)}}" width="96px"/>   
           
                        </td>    
                
                        <td>{{ $travel->title }}</td> 
                        
                        <td>{{ Str::limit( strip_tags( $travel->desc ), 50 ) }}</td>
                
                        <td>    
                
                            <a href="{{route('admin.travel.edit', [$travel->id])}}" class="btn btn-info btn-sm"> Edit </a>
                
                            <form method="POST" action="{{route('admin.travel.destroy', [$travel->id])}}" class="d-inline" onsubmit="return confirm('Delete this travel permanently?')">
                
                                @csrf
                
                                <input type="hidden" name="_method" value="DELETE">
                
                                <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                
                            </form>
                
                        </td>
            
                    </tr>
            
                    @endforeach
        
                </tbody>
    
            </table>

        </div>

    </div>

</div>

@endsection

@push('scripts')

<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>

<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>

@endpush