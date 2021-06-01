@extends('layouts.base')
@section('content')
  <div class="container">

   <div class="row mt-5">

         <div class="col-md-8 mx-auto">
           <div class="card">
            <img src="{{ asset('storage/'.$galeria->image)}}" class="card-img-top" alt="...">
             <div class="card-body">
            <h5 class="card-title">{{$galeria->title}}</h5>
            <div class="">
              {!! $galeria->description !!}

            </div>


          </div>
        </div>
       </div>

     
   </div>


  </div>

@endsection
