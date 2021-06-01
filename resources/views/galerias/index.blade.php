@extends('layouts.base')
@section('content')
  <div class="container">
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
          <p>{{ $message }}</p>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    <div class="d-flex justify-content-end">
                 <button type="button" class="btn btn-success mt-5"><a href="{{ route('galerias.create')}}" class="text-decoration-none text-white">+ galeria</a></button>
    </div>
   <div class="row mt-5">
     @foreach ($galerias as $galeria)
         <div class="col-md-4">
           <div class="card">
            <img src="{{ asset('storage/'.$galeria->image)}}" class="card-img-top" alt="...">
             <div class="card-body">
            <h5 class="card-title">{{$galeria->title}}</h5>

            <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('galerias.show', $galeria )}}"> <i class="far fa-eye text-success mx-2 fa-2x"></i></a>
              <a href="#"><i class="far fa-edit text-warning mx-2 fa-2x"></i></a>
              <form class="" action="" method="post">
                <button type="submit" class="btn btn-light"><i class="far fa-trash-alt fa-2x"></i></button>
              </form>

            </div>
          </div>
        </div>
       </div>

     @endforeach
   </div>


  </div>

@endsection
