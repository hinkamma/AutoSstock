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
            <a href="#" data-bs-toggle="modal" data-bs-target="#enregistrer_produit" data-bs-whatever="@mdo" class="btn btn-success d-flex align-items-center justify-content-center flex-column" style="width:56px;height:56px;border-radius:12px;box-shadow:0 6px 14px rgba(0,0,0,0.12);">
                <i class="bi bi-box-arrow-in-down fs-5" aria-hidden="true"></i>
                <small style="font-size:10px;line-height:1;margin-top:2px;">Stocker</small>
            </a>
            <a data-bs-toggle="modal" data-bs-target="#retirer_produit" data-bs-whatever="@mdo" href="" class="btn btn-danger d-flex align-items-center justify-content-center flex-column" style="width:56px;height:56px;border-radius:12px;box-shadow:0 6px 14px rgba(0,0,0,0.12);">
                <i class="bi bi-box-arrow-up fs-5" aria-hidden="true"></i>
                <small style="font-size:10px;line-height:1;margin-top:2px;">Destocker</small>
            </a>
            <a href="{{route('dashboard.stock_report')}}" class="btn  d-flex align-items-center justify-content-center flex-column" style="color:white;background: linear-gradient(90deg,#4b6f8a,#6e93a6);width:56px;height:56px;border-radius:12px;box-shadow:0 6px 14px rgba(0,0,0,0.12);">
                <i class="bi bi-file-earmark-text fs-5" aria-hidden="true"></i>
                <small style="font-size:10px;line-height:1;margin-top:2px;">rapport</small>
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
                <a href="#"  data-bs-toggle="modal" data-bs-target="#raccourcis_stock_vide" data-bs-whatever="@mdo" class="btn btn-outline-primary w-100 py-2">
                    <i class="bi bi-plus-square me-2"></i> Créer un stock vide
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex gap-2">
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
                                <h6 class="fw-semibold mb-1">Recap stock</h6>
                                <div class="small text-muted">Résumé des stocks</div>
                            </div>
                        </div>

                        @php
                            $sampleStocks = [
                                ['name' => 'Ordinateur', 'total' => 184],
                                ['name' => 'Tablette', 'total' => 92],
                                ['name' => 'Téléphone', 'total' => 240],
                            ];
                        @endphp

                        <ul class="list-unstyled mt-3 mb-0">
                            @foreach($stocks ?? $sampleStocks as $s)
                                <li class="d-flex justify-content-between align-items-center py-1">
                                    <div>
                                        <strong>{{ $s['name'] ?? $s->name ?? 'Stock' }}</strong>
                                        <div class="small text-muted">Catégorie: {{ $s['category'] ?? '—' }}</div>
                                    </div>
                                    <div>
                                        <span class="badge bg-primary">{{ $s['total'] ?? $s->total ?? 0 }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>

                        <div class="mt-3 text-end">
                            <a href="#" class="btn btn-sm btn-outline-light" style="color:#6c757d">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-1">Produits faibles en stock</h6>
                        <div class="small text-muted">Alertes de stock</div>

                        @php
                            $sampleLow = [
                                ['ref'=>'C83E1','name'=>'Lenovo 8iem G','category'=>'Ordinateur','qte'=>2],
                                ['ref'=>'T11X','name'=>'Samsung Tab A','category'=>'Tablette','qte'=>1],
                                ['ref'=>'P44Z','name'=>'iPhone SE','category'=>'Téléphone','qte'=>3],
                            ];
                        @endphp

                        <div class="list-group mt-3">
                            @foreach($lowStockProducts ?? $sampleLow as $p)
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fw-bold">{{ $p['name'] ?? $p->name }}</div>
                                        <div class="small text-muted">{{ $p['category'] ?? $p->category }} • Réf: {{ $p['ref'] ?? $p->ref }}</div>
                                    </div>
                                    <div class="text-end">
                                        <div class="mb-2"><span class="badge bg-warning text-dark">{{ $p['qte'] ?? $p->qte }}</span></div>
                                        <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal" data-bs-target="#restockModal" data-ref="{{ $p['ref'] ?? $p->ref }}" data-name="{{ $p['name'] ?? $p->name }}">Ravitailler</button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-1">Entrées récentes</h6>
                        <div class="small text-muted">Produits ajoutés aujourd'hui</div>

                        @php
                            $sampleEntries = [
                                ['ref'=>'C356-01','name'=>'Lenovo 8iem G','time'=>'2026-01-31 09:12'],
                                ['ref'=>'T11-09','name'=>'Samsung Tab A','time'=>'2026-01-31 10:45'],
                            ];
                        @endphp

                        <ul class="list-unstyled mt-3">
                            @foreach($recentEntries ?? $sampleEntries as $e)
                                <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fw-bold">{{ $e['name'] ?? $e->name }}</div>
                                        <div class="small text-muted">Réf: {{ $e['ref'] ?? $e->ref }}</div>
                                    </div>
                                    <div class="small text-muted">{{ $e['time'] ?? $e->time }}</div>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-1">Sorties récentes</h6>
                        <div class="small text-muted">Produits sortis récemment</div>

                        @php
                            $sampleExits = [
                                ['ref'=>'C356-03','name'=>'HP Envy','time'=>'2026-01-31 11:05'],
                                ['ref'=>'P44Z','name'=>'iPhone SE','time'=>'2026-01-31 12:30'],
                            ];
                        @endphp

                        <ul class="list-unstyled mt-3">
                            @foreach($recentExits ?? $sampleExits as $ex)
                                <li class="py-2 border-bottom d-flex justify-content-between align-items-center">
                                    <div>
                                        <div class="fw-bold">{{ $ex['name'] ?? $ex->name }}</div>
                                        <div class="small text-muted">Réf: {{ $ex['ref'] ?? $ex->ref }}</div>
                                    </div>
                                    <div class="small text-muted">{{ $ex['time'] ?? $ex->time }}</div>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            </div>

            <!-- Full width global stats chart -->
            <div class="col-12">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h6 class="fw-semibold mb-2">Statistiques globales (graphique)</h6>
                        <div class="small text-muted mb-3">Graphique récapitulatif (ventes, valeur stock, rotation)</div>
                        <div>
                            <canvas id="globalStatsChart" style="width:100%;height:260px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Restock Modal -->
            <div class="modal fade" id="restockModal" tabindex="-1" aria-labelledby="restockModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header bg-success text-light">
                    <h5 class="modal-title" id="restockModalLabel">Ravitailler le produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form id="restockForm">
                        <div class="mb-2">
                            <label class="form-label">Produit</label>
                            <input type="text" id="restock-name" class="form-control" readonly>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Référence</label>
                            <input type="text" id="restock-ref" class="form-control" readonly>
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Quantité à ajouter</label>
                            <input type="number" id="restock-qte" class="form-control" min="1" value="1">
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success" id="restockSubmitBtn">Ravitailler</button>
                  </div>
                </div>
              </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function(){
                    // Restock modal prefill
                    var restockModal = document.getElementById('restockModal');
                    if(restockModal){
                        restockModal.addEventListener('show.bs.modal', function(e){
                            var button = e.relatedTarget;
                            var ref = button.getAttribute('data-ref') || '';
                            var name = button.getAttribute('data-name') || '';
                            document.getElementById('restock-ref').value = ref;
                            document.getElementById('restock-name').value = name;
                        });
                    }

                    document.getElementById('restockSubmitBtn')?.addEventListener('click', function(){
                        var qte = parseInt(document.getElementById('restock-qte').value || 0,10);
                        if(qte <= 0) return alert('Quantité invalide');
                        // TODO: AJAX call to backend to perform restock
                        this.textContent = 'Ravitaillage...';
                        setTimeout(()=>{ this.textContent='Ravitailler'; document.querySelector('#restockModal .btn-close').click(); },800);
                    });

                    // Chart placeholders using Chart.js (data will be provided by backend)
                    function initChart(ctx, labels, dataSets){
                        if(typeof Chart === 'undefined') return;
                        new Chart(ctx, {
                            type: 'bar',
                            data: { labels: labels, datasets: dataSets },
                            options: { responsive:true, maintainAspectRatio:false }
                        });
                    }

                    // Small chart for total products (sample)
                    var ctxSmall = document.getElementById('chartTotalProducts');
                    if(ctxSmall){
                        initChart(ctxSmall, ['Ordinateur','Tablette','Téléphone'], [{label:'Total produits', backgroundColor:['#007bff','#6f42c1','#17a2b8'], data:[184,92,240]}]);
                    }

                    // Global stats chart (sample)
                    var ctxGlobal = document.getElementById('globalStatsChart');
                    if(ctxGlobal){
                        initChart(ctxGlobal, ['Jan','Fév','Mar','Avr','Mai','Juin'], [
                            {label:'Ventes', backgroundColor:'#ff7a45', data:[120,150,170,140,190,210]},
                            {label:'Valeur stock', backgroundColor:'#6e93a6', data:[200,180,210,230,220,240]}
                        ]);
                    }
                });
            </script>
        </div>

        
    </div>

@endsection
