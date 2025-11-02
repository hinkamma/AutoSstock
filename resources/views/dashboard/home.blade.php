@extends("dashboard.squellete.main")

@section('titre',"Accueil")

@section('content_dashboard')
    <div class="container" style="background:rgba(255, 68, 0, 0.021)">
        <h1>Tableau de bord</h1>

        <div class="row">

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2" style="border-left: 2px solid rgba(255, 68, 0, 0.562);position: relative;margin:10px">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold   text-uppercase mb-1 fs-8 fw-bold" style="color:orangered">
                                    Réapprovisionements
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark fs-3">8</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi-box-arrow-in-down text-gray-300 fs-1 opacity-50"></i>
                            </div>
                        </div>  
                    </div>
                    <a type="button"  data-bs-toggle="modal" data-bs-target="#fullModal">
                        <div class="card-footer d-flex align-items-center justify-content-between " style="background:rgba(255, 68, 0, 0.034);position: absolute;bottom:0;left:0;right:0">
                            voir les details 
                            <div class="small text-white"><i class="fas fa-angle-right text-dark"></i></div>
                        </div>
                    </a>

                    <div class="modal fade" id="fullModal" tabindex="-1">
                        <div class="modal-dialog modal-fullscreen">
                            <div class="modal-content">
                            <div class="modal-header bg-dark text-white">
                                <h5 class="modal-title">Modale en PLEIN ÉCRAN</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <h1>Je prends tout l'écran !</h1>
                                <p>Même sur ton navigateur desktop.</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            {{-- <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2" style="border-left: 2px solid rgba(255, 68, 0, 0.562);position: relative;margin:10px">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold  text-uppercase mb-1 fs-8 fw-bold"  style="color:orangered">
                                    Stocks Negatifs
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark fs-3">8</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi-x-circle-fill text-gray-300 fs-1 opacity-50"></i>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between " style="background:rgba(255, 68, 0, 0.034);position: absolute;bottom:0;left:0;right:0">
                        <a class="small  fw-bold stretched-link text-decoration-none" href="#" style="color:rgba(0, 0, 0, 0.459)">voir les details</a>
                        <div class="small text-white"><i class="fas fa-angle-right text-dark"></i></div>
                    </div>
                </div>
            </div> --}}

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2" style="border-left: 2px solid rgba(255, 68, 0, 0.562);position: relative;margin:10px">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold  text-uppercase mb-1 fs-8 fw-bold"  style="color:orangered">
                                    En stock
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark fs-3">8</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi-bell-fill text-gray-300 fs-1 opacity-50"></i>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between " style="background:rgba(255, 68, 0, 0.034);position: absolute;bottom:0;left:0;right:0">
                        <a class="small  fw-bold stretched-link text-decoration-none" href="#" style="color:rgba(0, 0, 0, 0.459)">voir les details</a>
                        <div class="small text-white"><i class="fas fa-angle-right text-dark"></i></div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2" style="border-left: 2px solid rgba(255, 68, 0, 0.562);position: relative;margin:10px">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold  text-uppercase mb-1 fs-8 fw-bold"  style="color:orangered">
                                    Fournisseurs
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-dark fs-3">8</div>
                            </div>
                            <div class="col-auto">
                                <i class="bi-truck text-gray-300 fs-1 opacity-50"></i>
                            </div>
                        </div>
                        
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between " style="background:rgba(255, 68, 0, 0.034);position: absolute;bottom:0;left:0;right:0">
                        <a class="small  fw-bold stretched-link text-decoration-none" href="#" style="color:rgba(0, 0, 0, 0.459)" >voir les details</a>
                        <div class="small text-white"><i class="fas fa-angle-right text-dark"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        
    </div>

@endsection
