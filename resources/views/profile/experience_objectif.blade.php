@extends('../layouts.appGuest');
@section('content')
{{-- creation du formulaire pour recuperer les donnees dans la table entreprise --}}
<div class="container ">
    <div class="row d-flex justify-content-center mt-4">
      <div style="width: 450px">
        <p class="text-center">
            <img src="assets/img/logo.png" alt="">
        </p>
        <h2 class="text-center" style="color: #012970"> VOS MISSIONS</h2>
        <form action="{{route('store_objectifs')}}" method="POST" >
          @csrf
          <div class="form-group mb-2">
            <input type="text" class="form-control" id="objectif" name="objectif"  >
          </div>

          <div class="mb-3  d-flex justify-content-center " >
            <button class="btn btn-outline-primary" style="width: 200px">Soumettre</button>
          </div>
         
          
        </form>
      </div>
        

      </div>
     
    {{-- </div> --}}
   </div>
@endsection