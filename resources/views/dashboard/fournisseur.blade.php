@extends("dashboard.squellete.main")

@section('titre',"Ventes")

@section('content_dashboard')
    <div class="container mt-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="fw-bold">Liste fournisseur</h2>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#add" data-bs-whatever="@getbootstrap"  class="btn btn-sm btn-primary float-end col-12 mt-2 col-sm-3 "><i class="bi bi-person-vcard-fill"></i> Ajouter</button> 
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Fournisseurs</h1>
                                    <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-floating mb-3 ">
                                            <input type="text"  class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput"><i class="bi bi-tag"></i> Référence Ref</label>
                                        </div>
                                        <div class="form-floating mb-3 ">
                                            <input type="text"  class="form-control" id="floatingInput" placeholder="name@example.com" >
                                            <label for="floatingInput"><i class="bi bi-person-vcard-fill"></i>  Fournisseur*</label>
                                        </div>
                                       
                                        <div class="form-floating mb-3 ">
                                            <input type="text"  class="form-control" id="floatingInput" placeholder="name@example.com" >
                                            <label for="floatingInput"><i class="bi bi-geo-alt"></i> Adresse*</label>
                                        </div>

                                        <div class="form-floating mb-3 ">
                                            <input type="text"  class="form-control" id="floatingInput" placeholder="name@example.com" >
                                            <label for="floatingInput"><i class="bi bi-telephone-fill"></i> Téléphone*</label>
                                        </div>

                                        <div class="form-floating mb-3 ">
                                            <input type="email"  class="form-control" id="floatingInput" placeholder="name@example.com" >
                                            <label for="floatingInput"><i class="bi bi-envelope"></i> Email*</label>
                                        </div>

                                        <div class="form-floating mb-3 ">
                                            <input type="text"  class="form-control" id="floatingInput" placeholder="name@example.com" >
                                            <label for="floatingInput"><i class="bi bi-building"></i> ville*</label>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary "><i class="bi bi-save"></i> Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                      
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background: rgba(255, 0, 0, 0.466)">
                                <!-- Modal renitialisation-->
                                <!-- <div class="modal fade" id="vider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">   
                                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Rénitialisation de la liste</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="background: rgba(255, 0, 0, 0.062)">
                                    <p class="text-danger fw-bold">Voulez-vous vraiment vider les données liées au vente ?<br>cette action est irréversible.</p>
                                </div>
                                <div class="modal-footer" style="background: rgba(255, 0, 0, 0.021)">
                                    <button type="button" class="btn btn-outline" data-bs-dismiss="modal">fermer</button>
                                    <button type="button" class="btn btn-danger">Accepter</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- end modal --}} -->    
                </div>

                <div class="card-body">

                    <style>
                        /* Styles locaux pour améliorer l'apparence du tableau */
                        .fournisseurs-table thead th { vertical-align: middle; }
                        .fournisseurs-table .qty-badge { min-width: 60px; display:inline-block; text-align:center; }
                        .fournisseurs-actions .btn { padding: .35rem .5rem; }
                        /* Typography */
                        .fournisseurs-table,
                        .fournisseurs-table th,
                        .fournisseurs-table td {
                            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                            font-size: .95rem;
                            color: #374151;
                        }
                        .fournisseurs-table thead th { font-weight:600; letter-spacing: .2px; }
                        .fournisseurs-table tbody td { font-weight:400; color:#4b5563; }
                        .fournisseurs-table .qty-badge { font-weight:600; font-size:.9rem; }
                        .fournisseurs-actions .btn { font-size:.88rem; }
                        /* Header soft background */
                        .fournisseurs-table thead th {
                            background-color: #f5f9ff; /* très léger bleu */
                            color: #0b5ed7;
                            border: none;
                        }
                        /* Subtle row dividers */
                        .fournisseurs-table tbody td { border: none; padding-top: .75rem; padding-bottom: .75rem; }
                        .fournisseurs-table tbody tr + tr td { border-top: 1px solid rgba(0,0,0,0.04); }
                        .fournisseurs-table.table-borderless tbody tr { background: transparent; }
                    </style>

                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-striped table-hover table-sm align-middle table-borderless fournisseurs-table">
                            <thead class="table-header">
                                <tr>
                                    <th><i class="bi bi-person-vcard-fill"></i> Noms</th>
                                    <th><i class="bi bi-telephone-fill"></i> Téléphone</th>
                                    <th><i class="bi bi-envelope"></i> E-mails</th>
                                    <th><i class="bi bi-globe2"></i> Adresse</th>
                                    <th class="text-center"><i class="bi bi-card-list"></i> Qté T</th>
                                    <th class="text-center"><i class="bi bi-gear-fill"></i> Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Hinkamma freddy roland</td>
                                    <td>682890741</td>
                                    <td>freddyrolandhoinkamma@gmail.com</td>
                                    <td>Douala rue 15 bordeau</td>
                                    <td class="text-center"><span class="badge bg-primary qty-badge">4509</span></td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2 fournisseurs-actions">
                                            <a href="{{ route('dashboard.fournisseur_historique') }}" class="btn btn-default border btn-sm fw-bold" title="Voir"><i class='bi bi-clock-history'></i> Historique</a>
                                            <a data-bs-toggle="modal" data-bs-target="#modifierItemFournisseur" data-bs-whatever="@mdo" href="#" class="btn btn-outline-success btn-sm" title="Modifier"><i class="bi bi-pencil"></i></a>
                                            <a data-bs-toggle="modal" data-bs-target="#supprimerItemFournisseur" data-bs-whatever="@mdo" href="#" class="btn btn-outline-danger btn-sm" title="Supprimer"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection