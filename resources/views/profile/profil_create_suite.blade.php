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
        <h2 class="text-center" style="color: #012970">ENTRER VOTRE PROFILE</h2>
        <form action="{{route('store_profil_suite')}}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <div class="form-group mb-2">
            <input type="text" class="form-control" name="date_naissance" placeholder="Date_Naissance"  >
          </div>
        
          <div class="form-group mb-2">
            <input type="text" class="form-control" name="age" placeholder="Age"  >
          </div>
      
          <div class="form-group mb-2">
            {{-- <label for="domaine">Domaine:</label> --}}
            <input type="text" class="form-control" id="name" name="email" placeholder="Email"  >
          </div>

          <div class="form-group mb-2">
            {{-- <label for="domaine">Domaine:</label> --}}
            <input type="text" class="form-control" name="telephone" placeholder="Telephone"  >
          </div>

          <div class="form-group mb-2">
            {{-- <label for="domaine">Domaine:</label> --}}
            <input type="text" class="form-control" name="adresse" placeholder="Adresse"  >
          </div>

        

          <div class="form-group mb-2">
            {{-- <label for="domaine">Domaine:</label> --}}
            <input type="text" class="form-control" name="diplome" placeholder="Diplome"  >
          </div>

          <div class="form-group mb-2">
            {{-- <label for="domaine">Domaine:</label> --}}
            <input type="text" class="form-control" name="niveau_travail" placeholder="niveau_travail"  >
          </div>
         
           
          {{-- <div class="form-group mb-2">
            <textarea name="description" id="" cols="30" rows="10" class="form-control"  placeholder="Description" style="resize: none "></textarea>
          </div> --}}

          <div class="mb-3  d-flex justify-content-center " >
            <button class="btn btn-outline-primary" style="width: 200px">Soumettre</button>
          </div>
         
        </form>
      </div>
        

      </div>
     
   </div>
@endsection