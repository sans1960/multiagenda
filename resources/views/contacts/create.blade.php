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
                 <form class="" action="{{route('contacts.store')}}" method="post">
                     @csrf
                   <div class="row">
                      <div class="col">
                       <input type="text" class="form-control" placeholder="Nom" name="name">

                     </div>
                    <div class="col">
                   <input type="text" class="form-control" placeholder="Adreça" name="adress" >

                   </div>
                    </div>
                    <div class="row mt-4">
                       <div class="col">
                        <input type="text" class="form-control" placeholder="Ciutat" name="city">

                      </div>
                     <div class="col">
                    <input type="text" class="form-control" placeholder="Teléfon" name="phone" >

                    </div>
                     </div>
                     <div class="row mt-4">
                        <div class="col">
                         <input type="email" class="form-control" placeholder="Email" name="email">

                       </div>
                      <div class="col">
                     <input type="date" class="form-control" name="birth" >
              
                     </div>
                      </div>
                      <button type="submit" class="btn btn-warning mx-auto mt-5">Crear</button>
                 </form>

              </div>

               </div>
      </div>

    </div>

  </div>

@endsection
