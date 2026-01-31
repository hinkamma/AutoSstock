@extends('dashboard.squellete.main')

@section('titre','Notifications')

@section('content_dashboard')
<div class="container py-4">
    <div class="row mb-3 align-items-center">
        <div class="col-md-8">
            <h1 class="fw-bold mb-1" style="color:orangered">Notifications</h1>
            <p class="small text-muted mb-0">Toutes les alertes et activités liées à votre compte et au stock.</p>
        </div>

        <div class="col-md-4 text-md-end mt-3 mt-md-0">
            <div class="d-inline-flex gap-2">
                <button id="markAllRead" class="btn btn-outline-secondary">Marquer toutes comme lues</button>
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Filtrer</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item filter" href="#" data-filter="all">Toutes</a></li>
                        <li><a class="dropdown-item filter" href="#" data-filter="unread">Nouvelles</a></li>
                        <li><a class="dropdown-item filter" href="#" data-filter="read">Lues</a></li>
                    </ul>
                </div>
                <a href="{{ url('dashboard/parametre') }}" class="btn btn-outline-secondary">Paramètres</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                            <input id="notifSearch" type="search" class="form-control" placeholder="Rechercher une notification (référence, fournisseur, type...)">
                        </div>
                    </div>

                    <div id="notifList" class="list-group">
                        @php
                            // Exemple de notifications de démonstration. Remplacez par $notifications envoyé depuis le controller.
                            $notifications = $notifications ?? [
                                ['id'=>1,'type'=>'stock','title'=>'Produit en rupture: R-129','message'=>'Le produit R-129 du fournisseur Acme est passé à 0 unité.','when'=>'2 min','unread'=>true],
                                ['id'=>2,'type'=>'commande','title'=>'Nouvelle commande #458','message'=>'Commande #458 attend traitement (quantité 12).','when'=>'1 h','unread'=>true],
                                ['id'=>3,'type'=>'info','title'=>'Maintenance planifiée','message'=>'Maintenance le 02/02/2026 à 22:00. Service non disponible ~30min.','when'=>'Hier','unread'=>false],
                                ['id'=>4,'type'=>'alerte','title'=>'Produit faible: P-77','message'=>'P-77 atteint le seuil de réapprovisionnement (5 unités).','when'=>'3 j','unread'=>true],
                            ];
                        @endphp

                        @foreach($notifications as $n)
                        <div class="list-group-item list-group-item-action d-flex gap-3 align-items-start notif-item @if($n['unread']) notif-unread @endif" data-id="{{ $n['id'] }}" data-unread="{{ $n['unread'] ? '1' : '0' }}">
                            <div class="icon-shape bg-light rounded-circle d-flex align-items-center justify-content-center" style="width:44px;height:44px">
                                @if($n['type']=='stock') <i class="bi bi-box-seam text-danger fs-5"></i>
                                @elseif($n['type']=='commande') <i class="bi bi-bag-check text-success fs-5"></i>
                                @elseif($n['type']=='alerte') <i class="bi bi-exclamation-triangle text-warning fs-5"></i>
                                @else <i class="bi bi-info-circle text-primary fs-5"></i>
                                @endif
                            </div>

                            <div class="flex-grow-1 me-2">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0 notif-title @if($n['unread']) fw-bold @endif">{{ $n['title'] }}</h6>
                                    <small class="text-muted">{{ $n['when'] }}</small>
                                </div>
                                <p class="mb-0 small text-muted notif-body">{{ $n['message'] }}</p>
                            </div>

                            <div class="d-flex align-items-center notif-actions">
                                <button class="btn btn-sm btn-outline-primary me-2 view-notif" data-id="{{ $n['id'] }}" data-title="{{ $n['title'] }}" data-msg="{{ $n['message'] }}" data-unread="{{ $n['unread'] ? '1' : '0' }}">Ouvrir</button>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item toggle-read" href="#">@if($n['unread']) Marquer comme lue @else Marquer non-lue @endif</a></li>
                                        <li><a class="dropdown-item text-danger delete-notif" href="#">Supprimer</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="mt-3 text-center small text-muted">Affichage d'exemple — les notifications réelles viendront du serveur.</div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h6 class="fw-bold">Résumé</h6>
                    <p class="mb-1">Nouvelles: <span id="countUnread" class="fw-bold text-danger">{{ collect($notifications)->where('unread',true)->count() }}</span></p>
                    <p class="mb-1">Total: <span class="fw-bold">{{ collect($notifications)->count() }}</span></p>
                    <hr>
                    <div class="d-grid gap-2">
                        <button class="btn btn-outline-danger" id="filterUnread">Voir nouvelles</button>
                        <button class="btn btn-outline-secondary" id="filterAll">Voir toutes</button>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body small text-muted">
                    <p class="mb-1"><strong>Astuce :</strong> Cliquez sur une notification pour voir les détails et les actions associées (marquer, supprimer).</p>
                    <p class="mb-0">Les notifications sont triées par date côté serveur. Utilise l'API pour récupérer et mettre à jour leur état.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal: Détails notification -->
<div class="modal fade" id="notificationDetailModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="notifModalTitle">Détails</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <p id="notifModalBody" class="small text-muted"></p>
                <div class="mt-3">
                    <button id="modalToggleRead" class="btn btn-sm btn-outline-primary">Marquer comme lue</button>
                    <button id="modalDelete" class="btn btn-sm btn-outline-danger ms-2">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .notif-unread{ border-left:4px solid orangered; background:#fff6f2; }
    .notif-actions{ visibility:hidden; }
    .list-group-item:hover .notif-actions{ visibility:visible; }
    .icon-shape i{ transform: translateY(1px); }
</style>