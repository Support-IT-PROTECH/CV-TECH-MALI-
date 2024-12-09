@extends('../layouts.appGuest');
@section('content')
{{-- creation du formulaire pour recuperer les donnees dans la table entreprise --}}
<div class="container ">
    <div class="row d-flex justify-content-center">
      <div style="width: 450px">
        <p class="text-center">
            <img src="assets/img/logo.png" alt="">
        </p>
        <h2 class="text-center" style="color: #012970">ENTRER VOTRE INFORMATION</h2>
        <form action="{{route('store_entreprise')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group mb-2">
            <input type="text" class="form-control" id="name" name="nom" placeholder="Entreprise"  >
          </div>
          @error('nom')
              <p class="text-danger">{{$message}}</p>
          @enderror
          <div class="form-group mb-2">
            {{-- <label for="image">Logo</label> --}}
            <input type="file" class="form-control" name="image"  >
          </div>
          @error('image')
              <p class="text-danger">{{$message}}</p>
          @enderror
      
          <div class="form-group mb-2">
            {{-- <label for="domaine">Domaine:</label> --}}
            <input type="text" class="form-control" id="name" name="domaine" placeholder="Domaine"  >
          </div>
          @error('domaine')
              <p class="text-danger">{{$message}}</p>
          @enderror
         
          <div class="form-group mb-2">
            
            <input type="text" class="form-control"  name="vision" placeholder="Vision" >
          </div>
          @error('vision')
            <p class="text-danger">{{$message}}</p>
          @enderror
         
          <div class="form-group mb-2">
            <textarea name="description" id="" cols="30" rows="10" class="form-control"  placeholder="Description" style="resize: none "></textarea>
          </div>
          @error('description')
              <p class="text-danger">{{$message}}</p>
          @enderror
         
          <div class="mb-3  d-flex justify-content-center " >
            <button class="btn btn-outline-primary" style="width: 200px">Soumettre</button>
          </div>
         
        </form>
      </div>
        

      </div>
     
    {{-- </div> --}}
   </div>
@endsection