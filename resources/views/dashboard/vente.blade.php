@extends("dashboard.squellete.main")

@section('titre',"Ventes")

@section('content_dashboard')
    <div class="container mt-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Historique des ventes
                    <button type="button" data-bs-toggle="modal" data-bs-target="#add" data-bs-whatever="@getbootstrap"  class="btn btn-sm btn-primary float-end col-12 mt-2 col-sm-3 "><i class="bi bi-plus"></i> Nouvelle vente</button> 
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Nouvelle Vente</h1>
                                    <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Nom de l'acheteur</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option value="3">Telephone</option>
                                            </select>
                                            <label for="floatingSelect">Categorie</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                <option value="3">Tablette</option>
                                            </select>
                                            <label for="floatingSelect">Produits acheter</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Description</label>
                                        </div>
                                         <div class="form-floating mt-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Quantité</label>
                                        </div>
                                        <div class="alert alert-info mt-3" role="alert">
                                           La quantité totale est évalué à <span class="fw-bold">239879 FCFA</span>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                                    <button type="button" class="btn btn-outline-primary "><i class="bi bi-save"></i> Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Noms acheteurs</th>
                                    <th>Produits</th>
                                    <th>Description</th>
                                    <th>Qtés totales</th>
                                    <th>Prix Totales</th>
                                    <th>Prix D'achat</th>
                                    <th>Dates D'achats</th>
                                    <th>operations</th>
                                </tr>
                        </thead>           
                        <tbody>
                            <tr>
                                <td>Hinkamma freddy roland</td>
                                <td>ordinateur </td>
                                <td>...</td>
                                <td>23</td>
                                <td>102399 FcFa</td>
                                <td>10239900 FcFa</td>
                                <td>2026/09/01</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4 col-4 col-sm-6 col-lg-4 col-xl-3">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#addU" data-bs-whatever="@getbootstrap" class="btn btn-sm btn-outline-success" ><i class="bi bi-pen"></i></button>
                                            <div class="modal fade" id="addU" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-success">
                                                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Modifier une vente</h1>
                                                            <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                    <label for="floatingInput">Nom de l'acheteur</label>
                                                                </div>
                                                                <div class="form-floating mt-3">
                                                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                                        <option value="3">Telephone</option>
                                                                    </select>
                                                                    <label for="floatingSelect">Categorie</label>
                                                                </div>
                                                                <div class="form-floating mt-3">
                                                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                                                        <option value="3">Tablette</option>
                                                                    </select>
                                                                    <label for="floatingSelect">Produits acheter</label>
                                                                </div>
                                                                <div class="form-floating mt-3">
                                                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                    <label for="floatingInput">Description</label>
                                                                </div>
                                                                <div class="form-floating mt-3">
                                                                    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                    <label for="floatingInput">Quantité</label>
                                                                </div>
                                                                <div class="alert alert-success mt-3" role="alert">
                                                                    La quantité totale est évalué à <span class="fw-bold">239879 FCFA</span>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Fermer</button>
                                                            <button type="button" class="btn btn-outline-success "><i class="bi bi-save"></i> Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-4 col-sm-6 col-lg-4 col-xl-3">
                                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash3"></i></i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection