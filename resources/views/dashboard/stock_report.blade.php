@extends('dashboard.squellete.main')

@section('titre','Rapport de stock')

@section('content_dashboard')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold">Rapport de stock</h3>
            <p class="text-muted">Générez, filtrez et exportez des rapports détaillés sur vos stocks.</p>
        </div>
        <div class="d-flex gap-2">
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="bi bi-chevron-left"></i> retour</a>
            <button class="btn btn-success" id="exportPdfBtn"><i class="bi bi-file-earmark-pdf"></i> Exporter PDF</button>
            <button class="btn btn-outline-primary" id="exportCsvBtn"><i class="bi bi-file-earmark-spreadsheet"></i> Exporter CSV</button>
            <button class="btn btn-outline-dark" id="downloadChartPngBtn" title="Télécharger le graphique"><i class="bi bi-download"></i> Télécharger PNG</button>
        </div>
    </div>

    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form id="reportFilterForm" class="row g-3 align-items-end">
                <div class="col-md-4">
                    <label class="form-label">Période</label>
                    <div class="d-flex gap-2">
                        <input type="date" name="from" class="form-control">
                        <input type="date" name="to" class="form-control">
                    </div>
                </div>

                <div class="col-md-3">
                    <label class="form-label">Catégorie</label>
                    <select name="category" class="form-select">
                        <option value="">Toutes</option>
                        <option value="Ordinateur">Ordinateur</option>
                        <option value="Téléphone">Téléphone</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <button type="button" class="btn " style="background: linear-gradient(90deg,#4b6f8a,#6e93a6);color:white" id="generateReportBtn">Générer</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row gx-4">
        <div class="col-lg-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h6 class="fw-bold">Détails du rapport</h6>
                    <div class="small text-muted mb-3">Tableau des produits correspondant aux filtres.</div>

                    <div class="table-responsive">
                        <table class="table table-sm table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th>Réf</th>
                                    <th>Produit</th>
                                    <th>Stock</th>
                                    <th class="text-end">Qté</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Exemple de ligne, à remplacer par boucle backend --}}
                                <tr>
                                    <td><strong>C356-01</strong></td>
                                    <td>Lenovo 8iem G</td>
                                    <td>Ordinateur</td>
                                    <td class="text-end">10</td>
                                </tr>
    
                            </tbody>
                            <tfoot>
                                <tr class="table-active">
                                    <td colspan="4" class="text-end fw-bold">Total</td>
                                    <td class="text-end fw-bold">15</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold">Commentaires</h6>
                    <p class="small text-muted">Ajoutez des notes ou précisions sur le rapport généré (observations, anomalies, recommandations).</p>
                    <textarea class="form-control" rows="3" id="reportNotes"></textarea>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body text-center">
                    <h6 class="fw-bold">Résumé</h6>
                    <div class="mt-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="small text-muted">Produits</div>
                            <div id="report-summary-products" class="fw-bold">15</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="small text-muted">Quantité totale</div>
                            <div id="report-summary-quantity" class="fw-bold">15</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-2">
                            <div class="small text-muted" title="Nombre d'emplacements distincts inclus dans le rapport">Stocks couverts</div>
                            <div id="report-summary-stocks" class="fw-bold">3</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <h6 class="fw-bold">Graphique</h6>
                    <div class="mt-3">
                        <canvas id="reportChart" style="width:100%;height:200px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection