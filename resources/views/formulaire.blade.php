<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Formulaire</title>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5 my-4" >
            <div class="card shadow" style="width:340px">
                <form action="{{route('store')}}" method="POST" class="p-2" enctype="multipart/form-data">
                 @csrf
                    <h2 class="text-center mb-2 fw-bold">Formulaire</h2>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nom et prenom</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="nom" value="{{old('nom')}}" >
                      </div>
                      @error('nom')
                          <p class="text-danger">{{$message}}</p>
                      @enderror
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email </label>
                        <input type="Email" class="form-control" id="exampleFormControlInput1" name="email" value="{{old('Email')}}" >
                      </div>
                      @error('email')
                         <p class="text-danger">{{$message}}</p>
                    @enderror
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Specialite</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="specialite" value="{{old('specialite')}}" >
                      </div>
                      @error('specialite')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Deposer CV</label>
                        <input type="file" class="form-control" id="exampleFormControlInput1" name="file" >
                      </div>
                      @error('file')
                      <p class="text-danger">{{$message}}</p>
                  @enderror
                      <div class="mb-3">
                        <button class="btn btn-outline-primary" type="submit">Soumettre</button>
                      </div>
                </form>
            </div>
        </div>
    </div>

    
      
    
</body>
</html>