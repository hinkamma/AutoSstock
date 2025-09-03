@extends("dashboard.squellete.main")

@section('titre',"Accueil")

@section('content_dashboard')
    <div class="container" style="background:rgba(255, 68, 0, 0.021)">
        <h1>dashoboard</h1>

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
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2" style="border-left: 2px solid rgba(255, 68, 0, 0.562);position: relative;margin:10px">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold  text-uppercase mb-1 fs-8 fw-bold"  style="color:orangered">
                                    Alertes
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