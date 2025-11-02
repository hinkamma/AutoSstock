@extends("main.main")

@section("titre","Acueil")

@section("content")
    <div class="container" style="margin-top:150px">
        <div class="row">
            <div class="col-md-5">
                <div class="container">
                    <div class="container" data-aos="zoom-in-up" data-aos-duration="1500">
                        <h1 class="fs-1 ">Enfin une application pour piloter vos stocks en temps réel !</h1>
                        <p class="fs-6 mt-4">
                            <div class="row">
                                <div class="col-md-12"><i class="bi bi-check-circle-fill text-success"></i> Suivi de l'inventaire en temps réel;</div>
                                <div class="col-md-12"><i class="bi bi-check-circle-fill text-success"></i> Alertes de stock faible et ruptures;</div>
                                <div class="col-md-12"><i class="bi bi-check-circle-fill text-success"></i> Gestion multi-entrepôts;</div>
                                <div class="col-md-12"><i class="bi bi-check-circle-fill text-success"></i> Rapports et analyses automatisés</div>
                                <div class="col-md-12"><i class="bi bi-check-circle-fill text-success"></i> Intégration des ventes et des achats;</div>
                            </div>
                                            
                        </p>

                        <p class="mt-4">
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <a href="{{route('compte')}}" class="btn " style="background:orangered;color:white" type="button"><i class="bi bi-airplane-engines"></i> ESSAI GRATUIT-14 JOURS</a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-7" data-aos="zoom-in" data-aos-duration="1500">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('banners/facilium-0010-logistique-gestionnaire-de-stock.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('banners/Inventory_tracking_board__1_.png')}}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('banners/gestionnaire-des-stocks.jpg')}}" class="d-block w-100" alt="...">
                        </div>
                         <div class="carousel-item">
                            <img src="{{asset('banners/C1.PNG')}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div class="container-fluid mt-5 p-5" style="background:rgb(7, 27, 29);color:white">
        <p class="fs-3 text-center">AVANTAGES</p>
        <div class="container mt-2 justify-content-center" >
            <div class="row  ">
                <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center" data-aos="zoom-in" data-aos-duration="1000"> 
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center"><div style="width:90px;height:90px"><img src="{{asset("icons/1304119.png")}}" width="100%" height="100%" alt=""></div></div>
                            <h5 class="card-title text-center">Optimiser vos stocks</h5>
                            <h6 class="text-center">Evite les rupture de stock</h6>
                            <h6 class="text-center">Réduit les surstockage</h6>
                </div>
                <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center mb-sm-2 mt-2" data-aos="zoom-in" data-aos-duration="1000"> 
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center"><div style="width:90px;height:90px;"><img src="{{asset('icons/pngtree-warehouse-workers-check-the-inventory-levels-of-items-on-the-shelves-png-image_15622835.png')}}" height="100%" width="100%" alt=""></div></div>
                            <h5 class="card-title text-center">Meilleure visibilité & suivi</h5>
                            
                        </div>
                    </div>
                            <h6 class="text-center">suivi en temps des niveau de stock</h6>
                            <h6 class="text-center">alerte pour reapprovisionnement automatique</h6>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center mt-2" data-aos="zoom-in" data-aos-duration="1000"> 
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center"><div style="width:90px;height:90px;"><img src="{{asset('icons/time.png')}}" height="100%" width="100%" alt=""></div></div>
                            <h5 class="card-title text-center">Gain de temps & efficacité</h5>
                            <h6 class="text-center">Reduction des erreur liées a la saisie</h6>
                            <h6 class="text-center">Mise a jour en temps reel </h6>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container-fluid p-5" style="background: linear-gradient(10deg,rgba(200, 250, 246, 0.753),rgb(209, 248, 228));" data-aos="zoom-in-right" data-aos-duration="500">
        <div class="container">
            <div class="col-md-12 col-sm-6 d-flex justify-content-center align-items-center"> 
                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body ">
                        <div class="d-flex justify-content-center"><div style="width:200px;height:200px;"><div class="rounded" style='height:100%;width:100%;background-position:center;background-size:cover;background-image:url("{{asset('icons/users.jpg')}}")'></div></div></div>
                            <h3 class="card-title text-center text-success blockquote fs-6 mt-1">freddy roland Hinkamma</h3>
                        </div>
                        <em class="ms-auto p-2">Un utilisateur</em>
                    </div>
                </div>    
            </div>
            <div class="container">
                <p class="fs-6 fw-light text-center fst-italic">"Avant, notre gestion de stock était un vrai casse-tête : des inventaires manuels interminables, des ruptures de stock imprévues qui nous coûtaient cher, et des erreurs de saisie qui nous faisaient perdre des heures. Depuis que j'utilise cette application, tout a changé ! L'interface est intuitive, les alertes en temps réel m'avertissent dès qu'un produit approche de la rupture, et les rapports automatisés me permettent de suivre les ventes et les commandes en un clin d'œil. On a réduit nos pertes de 30% et gagné un temps fou pour se concentrer sur le développement de l'entreprise. Franchement, c'est l'outil indispensable pour toute équipe qui veut être efficace sans complications. Je le recommande à 100% !"</p>    
            </div>
        </div>
        
    </div>

    <div  id="section_fonctionalite" class="container-fluid p-5" style="background: white" >
        <p class="text-center fs-2 fw-bold" data-aos="fade-up" data-aos-duration="500">Fonctionnalités AutoStock</p>
        <div class="container" data-aos="fade-up" data-aos-duration="500">
            <div class="container">
                <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure autem aut aspernatur mollitia corrupti ipsum nulla unde fugit temporibus culpa est, voluptatibus vero dignissimos quas, beatae veniam delectus odit expedita.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center" data-aos="fade-up" data-aos-duration="500"> 
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <div style="width:90px;height:90px"><img src="{{asset('icons/5166970.png')}}" height="100%" width="100%" alt=""></div>
                        </div>
                        <h5 class="card-title text-center">Etat des stocks</h5>
                        <p class="text-center">Vision claire de votre inventaire : niveaux en temps réel, alertes automatiques, optimisation des commandes. Contrôlez vos stocks depuis n'importe où..</p> 
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center mt-2" data-aos="fade-up" data-aos-duration="500"> 
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <div style="width:90px;height:90px;"><img src="{{asset('icons/1622703.png')}}" height="100%" width="100%" alt=""></div>
                        </div>
                        <h5 class="card-title text-center">Achats Produits</h5>
                        <p class="text-center"> 
                            Simplifiez vos approvisionnements avec notre module d'achats intelligent. Créez des bons de commande en un clic, suivez l'état de vos livraisons en temps réel et bénéficiez de recommandations automatiques basées sur vos seuils de sécurité. </p>  
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center mt-2" data-aos="fade-up" data-aos-duration="500"> 
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <div style="width:90px;height:90px;"><img src="{{asset('icons/2649220.png')}}" height="100%" width="100%" alt=""></div>
                        </div>
                        <h5 class="card-title text-center">Vente Produits</h5>
                        <p class="text-center"> Accélérez vos ventes avec notre module point de vente intégré. Gérez vos commandes clients en temps réel, suivez vos encaissements et synchronisez instantanément vos stocks.</p>    
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 d-flex justify-content-center align-items-center mt-2" data-aos="fade-up" data-aos-duration="500"> 
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex justify-content-center">
                            <div style="width:90px;height:90px;"><img src="{{asset('icons/multi.jpg')}}" height="100%" width="100%" alt=""></div>
                        </div>
                        <h5 class="card-title text-center">Multi Entrepôts</h5>
                        <p class="text-center">
                                Avec notre système, fini les inventaires manuels longs et fastidieux. Visualisez et contrôlez vos stocks en direct, à chaque étape, de l'entrepôt au client. Anticipez les ruptures, optimisez vos approvisionnements et prenez des décisions rapides et éclairées pour maximiser votre efficacité
                        </p>    
                    </div>
                </div>
            </div>
        </div>

            
    </div>

    <div  id="section_tarif" class="container-fluid p-5" style="background: white;background:rgb(2, 25, 31)" >
        <p class="text-center fs-2 fw-bold text-light" data-aos="fade-in" data-aos-duration="500">Tarifs</p>
        
        <div class="row justify-content-center">
        
            <div class="col-md-3 col-sm-6 d-flex justify-content-center align-items-center mt-2" data-aos="fade-up" data-aos-duration="500"> 
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title text-center">FORMULE MENSUEL</h4>
                        <p class="text-center">visualisation du tableau de bord + notifications </p> 
                        
                        <div class="container">
                            <div class="row justify-content-center align-items-center" >
                                <div class="col-md-12 d-flex justify-content-center">
                                    <span class="badge bg-danger">Récommandé</span>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <p class="fs-6 text-center"><span class="fw-bold fs-3">36,99 $</span>/an</p>
                                </div>
                                <div>
                                    <p class="text-center">offre gratuite pour le moment </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('compte')}}" class="btn " style="background:orangered;color:rgba(255, 255, 255, 0.897)">Commencer</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 d-flex justify-content-center align-items-center mt-2" data-aos="fade-up" data-aos-duration="500"> 
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        
                        <h4 class="card-title text-center">FORMULE ANNUEL</h4>
                        <p class="text-center">Optimiser pour les pétites et moyens entreprise</p> 
                        
                        <div class="container">
                            <div class="row justify-content-center align-items-center" >
                                <div class="col-md-12 d-flex justify-content-center">
                                    <span class="badge bg-danger">Economisez 75%</span>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <p class="fs-6 text-center"><span class="fw-bold fs-3">3,99 $</span>/mois</p>
                                </div>
                                <div>
                                    <p class="text-center">offre gratuite poue le moment </p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('compte')}}" class="btn " style="background:orangered;color:rgba(255, 255, 255, 0.897)">Commencer</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            
    </div>

    <div class="container p-5 " style="background:linear-gradient(60deg,rgba(255, 68, 0, 0.541),white);border-radius:5px" data-aos="zoom-in-up" data-aos-duration="1000">
       <div class="d-flex justify-content-center" >
            <div class="" style='width:450px;height:300px'>
            <div class="" style="background-size:cover;background-position:center;width:100%;height:100%;background-image:url('{{asset('banners/Inventory_tracking_board__1_.png')}}')"></div>
        </div> 
       </div>
        <p class="fs-2 text-center mt-4" style="color:whitesmoke">Gérer vos stocks en temps réel </p>
        <p class="fs-5">Avec notre système, fini les inventaires manuels longs et fastidieux. Visualisez et contrôlez vos stocks en direct, à chaque étape, de l'entrepôt au client. Anticipez les ruptures, optimisez vos approvisionnements et prenez des décisions rapides et éclairées pour maximiser votre efficacité</p>
        <div class="col-md-3">
            <p class="mt-4 justify-content-center">
                <div class="d-grid gap-2 col-12 mx-auto d-flex " >
                    <a href="{{route("compte")}}" class="btn " style="background:white;color:orangered" type="button " data-aos="fade-up">Commencer maintenant</a>
                </div>
            </p>
        </div>
    </div>

    
    
    
    
@endsection