<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>creer un compte</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="asset('bootstrap-icons/font/bootstrap-icons.min.css')">
    <link rel="stylesheet" href="{{asset('styles/retouchCss.css')}}">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body style="background: rgba(198, 251, 255, 0.308)">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-9" style='height:100vh;position: relative;' data-aos="zoom-in" data-duration="1000">
                <div style="background: rgba(0, 0, 0, 0.888);height:100%;width:100%;position: absolute;top:0;left:0;right:0:bottom:0"><div style="z-index:9999" class="container">
                    <div class="container" >
                        <div class="row  justify-content-center align-items-center" style="height: 100vh" >
                            <div class="col-md-6" data-aos="zoom-in-left" data-duration="5000">
                                <p  class="fs-1 text-center" style="color:white">
                                    <span style="color:orangered">Une solution digitale</span> pour gerer vos stock de façon efficace
                                </p>
                                <p class="fs-5 text-center" style="color: rgba(255, 255, 255, 0.603)">
                                    plus de risque ou d'erreur dans la gestion de vos produit, Autostock vous aide facilement a transformer votre entrepot de commerce en une tache simple 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div style="background-size:cover;background-position:center;width:100%;height:100vh;background-image:url('{{asset('icons/solutions-GestionStock2.png')}}')"></div>
                
            </div>
            <div class="col-md-3" style="background:white;position: relative;" >
                <div class="row">
                    <div class="col-md-12" >
                        <h4  class="text-center offcanvas-titl text-dark" id="offcanvasNavbarLabel"><span style="color:orangered">Auto</span>Stock</h4>
                    </div>
                    <div class="container">
                        <p class="fw-bold text-center" style="color: rgba(0, 0, 0, 0.666)">Simplifiez votre gestion des stocks !</p>
                        <h6 class="text-center">Essaie gratuit et illimité. pas besoin de carte de credit necessaire. Aucun engagement.</h6>
                    </div>

                    <form method="POST" action="{{route('traitment_Sign')}}" action="" data-aos="fade-up" data-duration="3000">
                        @csrf
                        <div class="mb-3 container">
                            <label for="prenom" class="form-label fw-bold">Votre Prenom</label>
                            <input value="{{old('prenom')}}" type="text" class="form-control" id="prenom" aria-describedby="nom" name="prenom"  autocomplete="off"> 
                            @error("prenom")
                                <div style="color:red" id="prenom" class="form-text">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 container">
                            <label for="nom" class="form-label fw-bold">Votre Nom</label>
                            <input value='{{old('nom')}}' type="text" class="form-control" id="nom" aria-describedby="nom" name="nom" autocomplete="off"> 
                            @error("nom")
                                <div style="color:red" id="prenom" class="form-text">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 container">
                            <label for="nom_entreprise" class="form-label fw-bold">Nom de l'entreprise</label>
                            <input value='{{old('company')}}' type="text" class="form-control" id="nom_entreprise" aria-describedby="nom" name="company" autocomplete="off"> 
                            @error("company")
                                <div style="color:red" id="prenom" class="form-text">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 container" >
                            <label for="email" class="form-label fw-bold">Votre e-mail</label>
                            <input value="{{old('email')}}" type="text" class="form-control" id="email" aria-describedby="nom" name="email" autocomplete="off"> 
                            @error("email")
                                <div style="color:red" id="prenom" class="form-text">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3 container" >
                            <label for="email" class="form-label fw-bold">Votre Mot de passe</label>
                            <input value="{{old('password')}}" type="text" class="form-control" id="email" aria-describedby="nom" name="password" autocomplete="off"> 
                            @error("password")
                                <div style="color:red" id="prenom" class="form-text">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="mb-3 container">
                            <button class="btn mt-4 btn-sign" style="border:2px solid rgb(2, 31, 29);;width:100%">S'inscrire</button>
                        </div>
                        <div class="container d-flex justify-content-center m-0">
                            <a href="{{route('connecter')}}" class="text-decoration-none">J'ai deja un compte</a>
                        </div>

                        
                        
                    </form>

                </div>
                <div class=" text-center mt-4">
                    <a  href="{{route('accueil')}}" class="btn btn-light " style="background:rgb(2, 31, 29);color:whitesmoke"><i class="bi bi-home"></i> Revenir dans le site</a>
                </div>
            </div>
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