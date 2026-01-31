@extends('dashboard.squellete.main')

@section('titre','Historique fournisseur')

@section('content_dashboard')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold">Historique des produits</h3>
        </div>
        <div>
            <a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i class="bi bi-chevron-left"></i> Retour</a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-sm align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Référence</th>
                            <th>Produit</th>
                            <th>Catégorie</th>
                            <th>Quantité</th>
                            <th>Date d'ajout</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produits ?? [
                            (object)[ 'ref' => 'C83E1', 'nom' => 'Lenovo 8iem G', 'categorie' => 'Ordinateur', 'qte' => 12, 'date' => '2026-01-20'],
                            (object)[ 'ref' => 'C83E2', 'nom' => 'HP ProBook', 'categorie' => 'Ordinateur', 'qte' => 5, 'date' => '2026-01-12']
                        ] as $p)
                        <tr>
                            <td><strong>{{ $p->ref }}</strong></td>
                            <td>{{ $p->nom }}</td>
                            <td>{{ $p->categorie }}</td>
                            <td><span class="badge bg-info">{{ $p->qte }}</span></td>
                            <td class="text-muted">{{ $p->date }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">Aucun produit trouvé pour ce fournisseur.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Produit détail modal (réutilisable) -->
<div class="modal fade" id="produitDetailModal" tabindex="-1" aria-labelledby="produitDetailLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-light">
        <h5 class="modal-title" id="produitDetailLabel">Détails du produit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="produit-detail-content">
            <p class="fw-bold">Référence: <span id="pd-ref">C83E1</span></p>
            <p>Nom: <span id="pd-nom">Lenovo 8iem G</span></p>
            <p>Catégorie: <span id="pd-cat">Ordinateur</span></p>
            <p>Quantité: <span id="pd-qte">12</span></p>
            <p>Description: <span id="pd-desc">Description du produit...</span></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function(){
    var detailModal = document.getElementById('produitDetailModal');
    if(detailModal){
        detailModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var ref = button.getAttribute('data-ref') || 'N/A';
            // Ici on pourrait charger les données via AJAX. Pour l'instant on met des valeurs d'exemple.
            document.getElementById('pd-ref').textContent = ref;
            document.getElementById('pd-nom').textContent = 'Nom de ' + ref;
            document.getElementById('pd-cat').textContent = 'Catégorie exemple';
            document.getElementById('pd-qte').textContent = '—';
            document.getElementById('pd-desc').textContent = 'Détails et historique du produit ' + ref;
        });
    }
});
</script>

@endsection
