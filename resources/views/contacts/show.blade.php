@extends('layouts.base')
@section('content')
<div class="container">
  <div class="row mt-5">
      <div class="col-md-4 mx-auto mt-5">
        <div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">{{ $contact->name}}</h5>
    <p class="text-center">{{$contact->adress}}</p>
    <p class="text-center">{{$contact->city}}</p>
    <p class="text-center">{{$contact->phone}}</p>
    <p class="text-center">{{$contact->email}}</p>
    <p class="text-center">{{$contact->birth}}</p>

  </div>
</div>
      </div>
  </div>
</div>
@endsection
