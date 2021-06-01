@extends('layouts.base')
@section('content')
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-8 mx-auto mt-5">
        <div class="card text-center">
            <div class="card-header">
                  <h3>Crear contacto</h3>
              </div>
               <div class="card-body">
                 <form class="" action="{{ route('contacts.update', $contact)}}" method="post">
                     @csrf
                     @method('PUT')
                   <div class="row">
                      <div class="col">
                       <input type="text" class="form-control" value="{{$contact->name}}" name="name">
                     </div>
                    <div class="col">
                   <input type="text" class="form-control" value="{{$contact->adress}}"  name="adress" >
                   </div>
                    </div>
                    <div class="row mt-4">
                       <div class="col">
                        <input type="text" class="form-control" value="{{$contact->city}}"  name="city">
                      </div>
                     <div class="col">
                    <input type="text" class="form-control" value="{{$contact->phone}}"  name="phone" >
                    </div>
                     </div>
                     <div class="row mt-4">
                        <div class="col">
                         <input type="email" class="form-control" value="{{$contact->email}}"  name="email">
                       </div>
                      <div class="col">
                     <input type="date" class="form-control" name="birth"  value="{{$contact->birth}}" >
                     </div>
                      </div>
                      <button type="submit" class="btn btn-warning mx-auto mt-5">Actualizar</button>
                 </form>

              </div>

               </div>
      </div>

    </div>

  </div>


@endsection
