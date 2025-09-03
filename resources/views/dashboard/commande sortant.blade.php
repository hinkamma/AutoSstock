@extends("dashboard.squellete.main")

@section('titre',"Ventes")

@section('content_dashboard')
    <div class="container mt-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Commandes Entrantes
                    {{-- <button type="button" class="btn btn-sm btn-danger float-end mx-3" data-bs-toggle="modal" data-bs-target="#vider"><i class="bi arrowclockwise"></i> vider</button> --}}
                    <button title="télécharger le fichier " type="button"  class="btn btn-sm btn-success float-end col-12 mt-2 mx-2  col-sm-3 "><i class="bi bi-download"></i> Telecharger </button> 
                    <button title="imprimer le fichier" type="button"  class="btn btn-sm  float-end  col-12 mt-2 col-sm-3 mx-2  text-light" style="background:rgba(189, 89, 52, 0.973)"><i class="bi bi-printer"></i> Imprimer</button>
                    <button title="ajouter un stock vide" type="button" data-bs-toggle="modal" data-bs-target="#add" data-bs-whatever="@getbootstrap"  class="btn btn-sm btn-primary float-end col-12 mt-2 mx-2  col-sm-3 "><i class="bi bi-plus"></i> Nouveau </button> 
            
                   
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Nouveau stock</h1>
                                    <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">stock</label>
                                        </div>
                                        
                                        <div class="form-floating mt-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Description</label>
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
                                <th>Stocks</th>
                                <th>Quantité</th>
                                <th>Description</th>
                                <th>operations</th>
                                </tr>
                        </thead>           
                        <tbody>
                            <tr>
                                <td>Support de stockage </td>
                                <td>23</td>
                                <td>stock de disque dur externe</td>
                                <td>
                                    <div class="row gap-2">
                                        
                                        <div class="col-4 col-sm-6 col-lg-4 col-xl-1">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#addU" data-bs-whatever="@getbootstrap" class="btn btn-sm btn-info" ><i class="bi bi-plus text-white"></i></button>
                                            <div class="modal fade" id="addU" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header bg-info">
                                                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Creer un stock vide</h1>
                                                            <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form>
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control" id="floatingInput" name="nom_fournisseur" >
                                                                    <label for="floatingInput">Nom du fournisseur</label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control" id="floatingInput" >
                                                                    <label for="floatingInput">Telephone</label>
                                                                </div>
                                                                <div class="form-floating mb-3">
                                                                    <input type="text" class="form-control" id="floatingInput"  >
                                                                    <label for="floatingInput">E-mail</label>
                                                                </div>
                                                                
                                                                <div class="form-floating mt-3">
                                                                    <input type="text" class="form-control" id="floatingInput"  >
                                                                    <label for="floatingInput">Marque</label>
                                                                </div>

                                                                <div class="form-floating mt-3">
                                                                    <input type="number" class="form-control" id="floatingInput"  >
                                                                    <label for="floatingInput">Quantité</label>
                                                                </div>
                                                                <div class="form-floating mt-3">
                                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                                    <label for="floatingTextarea2">Description detaillé du motif</label>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn" data-bs-dismiss="modal">Fermer</button>
                                                            <button type="button" class="btn btn-outline-info "><i class="bi bi-save"></i> Enregistrer</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4 col-sm-6 col-lg-2 col-xl-1">
                                            <a href="{{route('dashboard.liste_produit_sortant')}}" title="liste des stock" class="btn btn-sm btn btn-default"><i class="bi bi-list"></i></i></a>
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-4 col-xl-1">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#supprStock" data-bs-whatever="@getbootstrap" title="supprimer" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash3"></i></i></a>
                                            <!-- Modal renitialisation-->
                                            <div class="modal fade" id="supprStock" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background: rgb(146, 12, 12)">
                                                            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Rénitialisation de la liste</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body" style="background: rgba(255, 0, 0, 0.014)">
                                                            <p class="text-danger fw-bold">Voulez-vous vraiment supprimé le stock?<br>cette action est irréversible.</p>
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