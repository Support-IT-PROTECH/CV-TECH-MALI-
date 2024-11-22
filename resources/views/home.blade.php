@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
     
          <h2 class="text-primary text-center fw-bolder mb-4 ">La liste de tous les CV deposes</h2>
          @forelse ($depots as $depot)
          <div class="col-md-6 ">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-9 ">
                        <div class="card-body">
                            <h5 class="card-title"><span style="font-weight: 800">Nom: </span>{{$depot->Nom}}</h5>
                            <h5 class="card-title"><span style="font-weight: 800">Email: </span>{{$depot->email}}</h5>
                            <h5 class="card-title"><span style="font-weight: 800">specialite: </span>{{$depot->specialite}}</h5>
                            <p class="card-text">
                                Date: {{$depot->created_at->format('d/m/Y')}}
                            </p>
                           <p> <a href="{{route('upload',$depot->file)}}" class="link">Voir CV</a></p>
                         <div>
                            <a href="{{route('edit',$depot->id)}}" class="link">  
                                <button class="btn btn-success">Modifier </button>
                            </a>
                            <a href="{{route('delete',$depot->id)}}" class="link"> 
                            <button class="btn btn-outline-danger">Supprimer</button>
                            </a>
                         </div>
                           
                        </div>
                    </div>
                </div>
            </div>

        </div>
          {{-- <div class="card w-75 mb-4 shadow">
            <div class="card-body">
              <h4 class="card-title"><span style="font-weight: 800">Nom:</span> {{$depot->Nom}}</h4>
              <h4 class="card-text"><span style="font-weight: 800">Email:</span> {{$depot->email}}</h4>
              <h4 class="card-text"><span style="font-weight: 800">Specialite:</span> {{$depot->specialite}}</p>
              </h4>

              <h4 class="card-text"><span style="font-weight: 800">Date de depot:</span> {{$depot->created_at->format('d/m/Y')}}</h4>
              <div class="d-flex justify-content-center align-items-center">
              <a href="{{route('upload',$depot->file)}}" class="btn btn-outline-primary" style="width: 200px">Voir CV</a>

              </div>
              
            </div>
          </div> --}}
          @empty
              <p class="text-danger">Aucun Depot effectuer</p>
          @endforelse
          
    </div>
</div>
          
         

@endsection
