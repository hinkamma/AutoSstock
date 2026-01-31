@extends("dashboard.squellete.main")

@section('titre',"Ventes")

@section('content_dashboard')
    <div class="container mt-4">

         <!-- Fixed action buttons: Stocker / Destocker -->
        <div class="fixed-action-buttons" style="position:fixed;right:18px;top:50%;transform:translateY(-50%);z-index:1100;display:flex;flex-direction:column;gap:.6rem;">
            <a href=""  data-bs-toggle="modal" data-bs-target="#enregistrer_produit" data-bs-whatever="@getbootstrap" class="btn btn-success d-flex align-items-center justify-content-center flex-column" style="width:56px;height:56px;border-radius:12px;box-shadow:0 6px 14px rgba(0,0,0,0.12);">
                <i class="bi bi-box-arrow-in-down fs-5" aria-hidden="true"></i>
                <small style="font-size:10px;line-height:1;margin-top:2px;">Stocker</small>
                
            </a>
            
            <a href="" data-bs-toggle="modal" data-bs-target="#retirer_produit" data-bs-whatever="@getbootstrap" class="btn btn-danger d-flex align-items-center justify-content-center flex-column" style="width:56px;height:56px;border-radius:12px;box-shadow:0 6px 14px rgba(0,0,0,0.12);">
                <i class="bi bi-box-arrow-up fs-5" aria-hidden="true"></i>
                <small style="font-size:10px;line-height:1;margin-top:2px;">Destocker</small>
            </a>

            <a href="{{route('dashboard.stock_report')}}" class="btn  d-flex align-items-center justify-content-center flex-column" style="color:white;background: linear-gradient(90deg,#4b6f8a,#6e93a6);width:56px;height:56px;border-radius:12px;box-shadow:0 6px 14px rgba(0,0,0,0.12);">
                <i class="bi bi-file-earmark-text fs-5" aria-hidden="true"></i>
                <small style="font-size:10px;line-height:1;margin-top:2px;">rapport</small>
            </a>
        </div>

        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <h2 class="fw-bold">Stock sortant</h2>
                    <button type="button" class="btn  btn-danger float-end mx-3 shadow-sm" data-bs-toggle="modal" data-bs-target="#vider_stock_sortant"><i class="bi arrowclockwise"></i> vider l'historique</button>                  
                    <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">stock vide</h1>
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
                    <style>
                        /* Styles locaux pour améliorer l'apparence du tableau des ventes */
                        .ventes-table thead th { vertical-align: middle; }
                        .ventes-table .date-badge { min-width: 110px; display:inline-block; text-align:center; }
                        .ventes-actions .btn { padding: .35rem .5rem; }
                        /* Typography */
                        .ventes-table,
                        .ventes-table th,
                        .ventes-table td {
                            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                            font-size: .95rem;
                            color: #374151;
                        }
                        .ventes-table thead th { font-weight:600; letter-spacing: .2px; }
                        .ventes-table tbody td { font-weight:400; color:#4b5563; }
                        .ventes-table .date-badge { font-weight:600; font-size:.9rem; }
                        .ventes-actions .btn { font-size:.88rem; }
                        /* Header soft background */
                        .ventes-table thead th {
                            background-color: #fdf7f3; /* très léger beige */
                            color: #6f2d00;
                            border: none;
                        }
                        /* Subtle row dividers */
                        .ventes-table tbody td { border: none; padding-top: .75rem; padding-bottom: .75rem; }
                        .ventes-table tbody tr + tr td { border-top: 1px solid rgba(0,0,0,0.04); }
                        .ventes-table.table-borderless tbody tr { background: transparent; }
                    </style>

                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-striped table-hover table-sm align-middle table-borderless ventes-table">
                            <thead class="table-header">
                                <tr>
                                    <th><i class="bi bi-tag"></i> Ref</th>
                                    <th><i class="bi bi-box"></i> Stock</th>
                                    <th><i class="bi bi-card-text"></i> Description</th>
                                    <th class="text-center"><i class="bi bi-calendar-plus"></i> QtéT produit</th>
                                    <th class="text-center"><i class="bi bi-gear-fill"></i> Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><b>C356r</b></td>
                                    <td>Ordinateur</td>
                                    <td class="text-truncate" style="max-width:260px;">...</td>
                                    <td class="text-center"><span class="badge bg-danger date-badge">184</span></td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center gap-2 ventes-actions">
                                            <!-- <a href="#" class="btn btn-outline-default btn-sm border" title="ouvrir le stock"><i class="bi bi-folder2-open"></i> ouvrir</a> -->
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#supprimer_stock_sortant" class="btn btn-outline-danger btn-sm" title="Supprimer"><i class="bi bi-trash"></i></a>
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