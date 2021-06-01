@extends('layouts.base')
@section('content')
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-8 mx-auto mt-5">
        <div class="card text-center">
            <div class="card-header">
                  <h3>Crear galeria</h3>
              </div>
               <div class="card-body">
                 <form class="" action="{{route('galerias.store')}}" method="post" enctype="multipart/form-data">
                     @csrf
                       <input type="text" class="form-control" placeholder="Titulo" name="title">
                        <input type="file" class="form-control mt-4 mb-5"  name="image">
                         <textarea id="body" name="description" class="form-control" rows="8" cols="100"></textarea>
                      <button type="submit" class="btn btn-warning mx-auto mt-5">Crear</button>
                 </form>

              </div>

               </div>
      </div>

    </div>

  </div>
  <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
     <script>
            ClassicEditor
         .create( document.querySelector( '#body' ) )
         .catch( error => {
             console.error( error );
         } );

     </script>
@endsection
