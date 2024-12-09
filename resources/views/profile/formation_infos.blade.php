@extends('../layouts.appGuest');
@section('content')
{{-- creation du formulaire pour recuperer les donnees dans la table entreprise --}}
<div class="container ">
    <div class="row d-flex justify-content-center">
        <p style="text-align: right">
            <a href="" class="text-primary"> <i class="fa-solid fa-arrow-right"></i></a>
          
             </p>
      <div style="width: 450px">
        <p class="text-center">
            <img src="assets/img/logo.png" alt="">
        </p>
        <h2 class="text-center" style="color: #012970">VOS FORMATION</h2>
        <form action="{{route('store_formations')}}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="form-group mb-2">
            <input type="text" class="form-control" name="nom" placeholder="Nom"  >
          </div>
        
          <div class="form-group mb-2">
            <input type="text" class="form-control" name="duree" placeholder="Duree"  >
          </div>
      
          <div class="form-group mb-2">
            {{-- <label for="domaine">Domaine:</label> --}}
            <input type="text" class="form-control" id="name" name="lieu" placeholder="Lieu"  >
          </div>
         
           
          <div class="form-group mb-2">
            <textarea name="description" id="" cols="30" rows="10" class="form-control"  placeholder="Description" style="resize: none "></textarea>
          </div>

          <div class="mb-3  d-flex justify-content-center " >
            <button class="btn btn-outline-primary" style="width: 200px">Soumettre</button>
          </div>
         
        </form>
      </div>
        

      </div>
     
   </div>
@endsection