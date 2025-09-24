<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="asset('bootstrap-icons/font/bootstrap-icons.min.css')">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body style="background: rgba(198, 251, 255, 0.308)">
     <div class="container-fluid   d-flex justify-content-center align-items-center vh-100">
        <div class="card " style="width: 18rem;" data-aos="fade-in" data-duration="5000" data-aos-delay="200" data-aos-easing="ease-in-out">
            @if ($errors->has('stop'))
                <div class="alert alert-danger">{{$errors->first('stop')}}</div>
            @endif
            <form action="{{route('traitment_new_Identifiants')}}" method="post">
                @csrf
                <div class="card-body ">
    
                <h5 class="card-title"><span style="color:orangered">Auto</span>Stock</h5>
                <div>
                    <p class="fs-5 fw-bold text-center">Veuillez creer de nouvel identifiants</p>
                    <p class="fs-6 text-center">Nous sommes sur le point de renitialiser votre compte, ne vous inquitez pas vous le retrouveré.</p>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" class="form-control" id="nom" aria-describedby="nom" name="email" value="{{session('session_active_email')}}" autocomplete="off"> 
                    @error("tokens")
                        <div style="color:red" id="prenom" class="form-text">{{$message}}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="nom" aria-describedby="nom" name="password" value="" autocomplete="off"> 
                    @error("password")
                        <div style="color:red" id="prenom" class="form-text">{{$message}}</div>
                    @enderror
                </div>

               

                <div class="mb-3">
                   <button style="width:100%; background:orangered;color:white" class="btn  mt-4">ENREGISTRER ET SE CONNECTER</button>
                </div>

                <div class="text-center">
                    <a  href="{{route('connecter')}}" class="btn btn-light ">Retour à la connexion</a>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
<script>
    AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>