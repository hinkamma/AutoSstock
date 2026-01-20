@extends("dashboard.squellete.main")

@section('titre',"Accueil")

@section('content_dashboard')
    <style>
        @media (max-width: 576px) {
            .fixed-action-buttons { right: 8px; }
            .fixed-action-buttons a { width:48px;height:48px;border-radius:10px;font-size:12px }
            .fixed-action-buttons a small { display:block; font-size:9px }
        }
    </style>

    <div class="container" style="background:rgba(255, 68, 0, 0.021)">
        

        <!-- Fixed action buttons: Stocker / Destocker -->
        <div class="fixed-action-buttons" style="position:fixed;right:18px;top:50%;transform:translateY(-50%);z-index:1100;display:flex;flex-direction:column;gap:.6rem;">
            <a href="" class="btn btn-success d-flex align-items-center justify-content-center flex-column" style="width:56px;height:56px;border-radius:12px;box-shadow:0 6px 14px rgba(0,0,0,0.12);">
                <i class="bi bi-box-arrow-in-down fs-5" aria-hidden="true"></i>
                <small style="font-size:10px;line-height:1;margin-top:2px;">Stocker</small>
            </a>
            <a href="" class="btn btn-danger d-flex align-items-center justify-content-center flex-column" style="width:56px;height:56px;border-radius:12px;box-shadow:0 6px 14px rgba(0,0,0,0.12);">
                <i class="bi bi-box-arrow-up fs-5" aria-hidden="true"></i>
                <small style="font-size:10px;line-height:1;margin-top:2px;">Destocker</small>
            </a>
        </div>

        <div class="row g-3 mt-4">
            <!-- Panel: Nombre total de produits -->
            <div class="col-xl-3 col-md-6">
                <div class="card shadow h-100" style="border-left:4px solid #ff7a45;">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-box-seam fs-1 text-muted"></i>
                            </div>
                            <div>
                                <div class="text-uppercase fw-semibold text-muted small">NOMBRE TOTAL DE PRODUIT</div>
                                <div class="h3 fw-bold text-dark">{{ $lowStockCount ?? 124 }}</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('dashboard.produit') }}" class="card-footer text-decoration-none" style="background:transparent;border-top:1px solid rgba(0,0,0,0.03);">
                        Voir tous les produits <span class="float-end"><i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <!-- Panel: Produits faibles en stock -->
            <div class="col-xl-3 col-md-6">
                <div class="card shadow h-100" style="border-left:4px solid #ffc107;">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-exclamation-triangle-fill fs-1 text-warning"></i>
                            </div>
                            <div>
                                <div class="text-uppercase fw-semibold text-muted small">Produits faibles en stock</div>
                                <div class="h3 fw-bold text-warning">{{ $lowStockCount ?? 6 }}</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('dashboard.stock') }}" class="card-footer text-decoration-none" style="background:transparent;border-top:1px solid rgba(0,0,0,0.03);">
                        Voir les alertes <span class="float-end"><i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <!-- Panel: Entrées récentes -->
            <div class="col-xl-3 col-md-6">
                <div class="card shadow h-100" style="border-left:4px solid #198754;">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-box-arrow-in-down fs-1 text-success"></i>
                            </div>
                            <div>
                                <div class="text-uppercase fw-semibold text-muted small">Entrées récentes</div>
                                <div class="h5 fw-bold">{{ $recentEntriesCount ?? 3 }} nouvelles</div>
                                <div class="small text-muted">Dernière: {{ $recentEntryDate ?? '2026-01-15' }}</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('dashboard.liste_produit_entrant') }}" class="card-footer text-decoration-none" style="background:transparent;border-top:1px solid rgba(0,0,0,0.03);">
                        Voir les entrées <span class="float-end"><i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <!-- Panel: Sorties récentes -->
            <div class="col-xl-3 col-md-6">
                <div class="card shadow h-100" style="border-left:4px solid #dc3545;">
                    <div class="card-body p-3">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="bi bi-box-arrow-up fs-1 text-danger"></i>
                            </div>
                            <div>
                                <div class="text-uppercase fw-semibold text-muted small">Sorties récentes</div>
                                <div class="h5 fw-bold text-danger">{{ $recentExitsCount ?? 2 }} sorties</div>
                                <div class="small text-muted">Dernière: {{ $recentExitDate ?? '2026-01-12' }}</div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('dashboard.liste_produit_sortant') }}" class="card-footer text-decoration-none" style="background:transparent;border-top:1px solid rgba(0,0,0,0.03);">
                        Voir les sorties <span class="float-end"><i class="bi bi-arrow-right"></i></span>
                    </a>
                </div>
            </div>

            <!-- Panel: Statistiques globales (mise en évidence) -->
            <div class="col-12">
                <div class="card shadow mt-2 card-stats text-white" style="background: linear-gradient(90deg,#4b6f8a,#6e93a6); border: none;">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1 fw-bold">Statistiques globales</h5>
                                <div class="small" style="color: rgba(255,255,255,0.9);">Ventes totales, valeur du stock, taux de rotation</div>
                            </div>
                            <div>
                                <!-- Small summary stats with high-contrast text -->
                                <div class="d-flex gap-4">
                                    <div class="text-center">
                                        <div class="h4 mb-0">{{ $totalSales ?? '12k' }}</div>
                                        <div class="small" style="color: rgba(255,255,255,0.85);">Ventes</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="h4 mb-0">{{ $stockValue ?? '3.2M' }}</div>
                                        <div class="small" style="color: rgba(255,255,255,0.85);">Valeur stock</div>
                                    </div>
                                    <div class="text-center">
                                        <div class="h4 mb-0">{{ $turnoverRate ?? '4.2%' }}</div>
                                        <div class="small" style="color: rgba(255,255,255,0.85);">Taux rot.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Shortcut buttons -->
        <div class="row mt-3 mb-4">
            <div class="col-md-4 mb-2">
                <a href="{{ route('dashboard.stock') }}" class="btn btn-outline-primary w-100 py-2">
                    <i class="bi bi-plus-square me-2"></i> Créer un stock vide
                </a>
            </div>
            <div class="col-md-4 mb-2">
                <a href="{{ route('dashboard.produit') }}" class="btn btn-outline-success w-100 py-2">
                    <i class="bi bi-box-seam me-2"></i> Ajouter un produit
                </a>
            </div>
            <div class="col-md-4 mb-2">
                <a href="{{ route('dashboard.fournisseur') }}" class="btn btn-outline-info w-100 py-2">
                    <i class="bi bi-person-plus me-2"></i> Ajouter un fournisseur
                </a>
            </div>
        </div>

        <hr>

        <!-- Chart placeholders: canvases to be filled with Chart.js or other libs -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-semibold mb-1">Produits (total)</h6>
                                <div class="small text-muted">Résumé des produits</div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <canvas id="chartTotalProducts" data-related="products" style="width:100%;height:140px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-1">Produits faibles en stock</h6>
                        <div class="small text-muted">Alertes de stock</div>
                        <div class="mt-3">
                            <canvas id="chartLowStock" data-related="lowstock" style="width:100%;height:140px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-1">Entrées récentes</h6>
                        <div class="small text-muted">Produits ajoutés récemment</div>
                        <div class="mt-3">
                            <canvas id="chartEntries" data-related="entries" style="width:100%;height:140px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-1">Sorties récentes</h6>
                        <div class="small text-muted">Produits sortis récemment</div>
                        <div class="mt-3">
                            <canvas id="chartExits" data-related="exits" style="width:100%;height:140px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Full width global stats chart -->
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-2">Statistiques globales (graphique)</h6>
                        <div class="small text-muted mb-3">Graphique récapitulatif (ventes, valeur stock, rotation)</div>
                        <canvas id="chartGlobalStats" data-related="global" style="width:100%;height:220px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        
    </div>

@endsection
