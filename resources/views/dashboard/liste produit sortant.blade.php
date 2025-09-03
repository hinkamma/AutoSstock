@extends("dashboard.squellete.main")

@section('titre',"Ventes")

@section('content_dashboard')
    <div class="container mt-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    liste Produits sortants
                  

                    <button type="button" data-bs-toggle="modal" data-bs-target="#add" data-bs-whatever="@getbootstrap"  class="btn btn-sm btn-primary float-end col-12 mt-2 col-sm-3 "><i class="bi bi-plus"></i> Nouvelle commande</button> 
                    
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Nouvelle commande</h1>
                                    <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Fournisseur</label>
                                        </div>
                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Telephone</label>
                                        </div>

                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">E-mail</label>
                                        </div>

                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Article</label>
                                        </div>

                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Description</label>
                                        </div>

                                        <div class="input-group input-group-lg mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">FCFA</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="prix Unitaire">
                                        </div>

                                        <div class="input-group input-group-lg mt-3">
                                            <span class="input-group-text" id="inputGroup-sizing-lg">FCFA</span>
                                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="prix d'achat">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn " data-bs-dismiss="modal">Fermer</button>
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
                                    <th>Produits</th>
                                    <th>Description</th>
                                    <th>Dates </th>
                                    <th>operations</th>
                                </tr>
                        </thead>           
                        <tbody>
                            <tr>
                                <td>Pc Lenovo </td>
                                <td>...</td>
                                <td>2026/09/01</td>
                                <td>
                                    <div class="row gap-1">
                                        <div class="col-4 col-sm-4 col-lg-2 col-md-2 col-xl-1 col-xxl-1">
                                            <button  title="modifier" type="button" data-bs-toggle="modal" data-bs-target="#addU" data-bs-whatever="@getbootstrap" class="btn btn-sm btn-outline-success" ><i class="bi bi-pen"></i></button>
                                            <div class="modal fade" id="addU" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-success">
                                                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Modifier L'enregistrement</h1>
                                                            <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="form-floating mt-3">
                                                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                    <label for="floatingInput">Fournisseur</label>
                                                                </div>

                                                                <div class="form-floating mt-3">
                                                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                    <label for="floatingInput">Article</label>
                                                                </div>

                                                                <div class="form-floating mt-3">
                                                                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                                                    <label for="floatingInput">Description</label>
                                                                </div>

                                                                <div class="input-group input-group-lg mt-3">
                                                                    <span class="input-group-text" id="inputGroup-sizing-lg">FCFA</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="prix Unitaire">
                                                                </div>

                                                                <div class="input-group input-group-lg mt-3">
                                                                    <span class="input-group-text" id="inputGroup-sizing-lg">FCFA</span>
                                                                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="prix d'achat">
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
                                        <div class="col-4 col-sm-4 col-lg-2 col-md-2 col-xl-1 col-xxl-1">
                                            <a  href="#" data-bs-toggle="modal" data-bs-target="#supprStock" data-bs-whatever="@getbootstrap" title="supprimer" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash3"></i></i></a>
                                            <!-- Modal renitialisation-->
                                            <div class="modal fade" id="supprStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: rgb(146, 12, 12)">
                                                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Rénitialisation de la liste</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body" style="background: rgba(255, 0, 0, 0.014)">
                                                            <p class="text-danger fw-bold">Voulez-vous vraiment supprimé le produit ?<br>cette action est irréversible.</p>
                                                        </div>
                                                        <div class="modal-footer" style="background: rgba(255, 0, 0, 0.021)">
                                                            <button style="border: 1px solid rgba(0, 0, 0, 0.466)" type="button" class="btn btn-outline" data-bs-dismiss="modal">fermer</button>
                                                            <button type="button" class="btn btn-danger">Accepter</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- end modal --}}
                                        </div>
                                         <div class="col-4 col-sm-4 col-lg-2 col-md-2 col-xl-1 col-xxl-1">
                                            <a title="ajuster l'etat de la commande" href="" class="btn btn-sm btn btn-success"><i class="bi bi-arrow-clockwise"></i></a>
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