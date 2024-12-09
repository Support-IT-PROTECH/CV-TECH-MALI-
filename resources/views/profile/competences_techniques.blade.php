@extends('../layouts.appGuest');
@section('content')
{{-- creation du formulaire pour recuperer les donnees dans la table entreprise --}}
<div class="container ">
    <div class="row d-flex justify-content-center mt-4">
      <p style="text-align: right">
     <a href="" class="text-primary"> <i class="fa-solid fa-arrow-right"></i></a>
   
      </p>
      <div style="width: 450px">
        <p class="text-center">
            <img src="assets/img/logo.png" alt="">
           
        </p>
        <h2 class="text-center" style="color: #012970">Competences Techniques</h2>
        <form action="{{route('store_competences')}}" method="POST">
          @csrf
          <div class="form-group mb-3">
           <input type="text" class="form-control" name="nom" placeholder="Nom_competence">
          </div>

          <div class="form-group mb-3">
            <input type="text" class="form-control" name="niveau_maitrise" placeholder="Niveaux_Maitrise">
           </div>
            <div class="  d-flex justify-content-center mt-3 " >
              <button class="btn btn-outline-primary" style="width: 200px">Soumettre</button>
            </div>

        </form>
      </div>
        

      </div>
     
    {{-- </div> --}}
   </div>
@endsection