@extends('layouts.base')
@section('content')
  <div class="container">
    <div class="d-flex justify-content-end">
                 <button type="button" class="btn btn-success mt-5"><a href="{{ route('contacts.create')}}" class="text-decoration-none text-white">+ contacte</a></button>
    </div>
    <table class="table mt-5">
    <thead class="table-dark">
      <tr>
        <th>Nom</th>
        <th>Adreça</th>
        <th>Ciutat</th>
        <th>Accions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($contacts as $contact )
        <tr>
          <td>{{$contact->name}}</td>
           <td>{{$contact->adress}}</td>
            <td>{{$contact->city}}</td>
             <td>
               <div class="d-flex justify-content-around align-items-center">
                 <a href="{{ route('contacts.show', $contact )}}"><i class="far fa-eye text-success mx-2"></i></a>
                 <a href="#"><i class="far fa-edit text-warning mx-2"></i></a>
                 <form class="" action="" method="post">
                   <button type="submit" class="btn btn-light"><i class="far fa-trash-alt"></i></button>
                 </form>
               </div>
             </td>
        </tr>
      @endforeach

    </tbody>
  </table>
  <div class="d-flex justify-content-center mb-5 mt-4">
     {!!$contacts->links()!!}
  </div>


  </div>

@endsection
