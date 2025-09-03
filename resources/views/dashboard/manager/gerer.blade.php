<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gérer</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('styles/styles.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body">
    <div class="container" style="margin-top: 20px">
        <div class="col-md-12 d-flex">
            <a href="{{route('dashboard.home')}}" type="button" class="btn btn-outline-secondary" ><i class="bi bi-chevron-left"></i> Précédent</a>
            <button data-bs-toggle="modal" data-bs-target="#addUser" data-bs-whatever="@getbootstrap"  style="background: rgb(170, 59, 19)" class="btn text-light  ms-auto   d-xl-none d-xxl-none " type="submit"><i class="bi bi-plus-square"></i> Ajouter</button>
            <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background: rgb(170, 59, 19)">
                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Nouveau Membre</h1>
                            <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Noms</label>
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Prenoms</label>
                                </div>

                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">E-mail</label>
                                </div>

                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Mot de passe</label>
                                </div>

                                <div class="alert alert-info mt-3">le mot de passe lui sera communiqué par email,dès lors ce dernier aura la possibilité de le changé</div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn " style="border: 1px solid rgba(0, 0, 0, 0.562)" data-bs-dismiss="modal">Fermer</button>
                            <button type="button" class="btn text-light " style="background:rgb(170, 59, 19)"><i class="bi bi-save"></i> Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-md-12">
                <p class="fs-3" ><i class="bi-person-gear"></i> Gestion des droits d'access</p>
            </div>
            <div class="col-md-12 col-xl-9 col-xxl-9 mt-4" >
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Noms</th>
                            <th>Prenoms</th>
                            <th>E-mail</th>
                            <th>Date d'entrée</th>
                            <th>Decision</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>admin nom</td>
                            <td>admin prenom</td>
                            <td>mail admin</td>
                            <td>12/22/25</td>
                            <td >
                                <a href="" class="btn btn-sm btn-outline-danger"><i class="bi bi-pencil-square"></i> bloquer</a>
                                <a href="" class="btn btn-sm btn-outline-danger my-1"><i class="bi bi-trash"></i> Supprimer</a>
                            </td>
               
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3 d-none d-xl-block d-xxl-block">
                <div class="alert alert-info mt-3">le mot de passe lui sera communiqué par email,dès lors ce dernier aura la possibilité de le changé</div>
                <div class="card position-fixed" style="width: 18rem">
                    <div class="card-body">
                    <h5 class="card-title">Admin</h5>
                        <form class="form-floating">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Prenoms</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Noms</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">E-mail</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Mot de passe attribuer</label>
                            </div>

                            <button style="background: rgb(252, 105, 52)" class="col-12 btn text-light" type="submit"><i class="bi bi-plus-square"></i> Ajouter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/demo/chart-area-demo.js')}}"></script>
<script src="{{asset('assets/demo/chart-bar-demo.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/datatables-simple-demo.js')}}"></script>
</body>
</html>