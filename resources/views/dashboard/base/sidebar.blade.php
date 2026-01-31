<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link {{request()->routeIs('dashboard.home') ? 'active':''}}" href="{{route('dashboard.home')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Tableau de bord
                </a>

                <a class="nav-link {{request()->routeIs('dashboard.vente') ? 'active':''}}" href="{{route('dashboard.vente')}}">
                    <div class="sb-nav-link-icon"><i class="bi bi-bar-chart"></i></div>
                    Produits  
                </a>
                
                <!-- <a class="nav-link collapsed {{request()->routeIs('dashboard.client') ? 'active':''}}" href="{{route('dashboard.client')}}"  data-bs-toggle="collapse" data-bs-target="#client" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                    Clients
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="client" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{request()->routeIs('dashboard.information') ? 'active':''}}" href="{{route('dashboard.information')}}"><i class="bi bi-list-stars mx-2"></i> Historique d'achat</a>
                    
                    </nav>
                </div> -->
                
                <a class="nav-link collapsed {{request()->routeIs('dashboard.fournisseur') ? 'active':''}}" href="{{route('dashboard.fournisseur')}}"  aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="bi bi-truck"></i></div>
                    Fournisseurs    
                </a>
                
                <a class="nav-link collapsed {{request()->routeIs('dashboard.commande entrant') ? 'active':''}}" href="{{route('dashboard.commande entrant')}}"  aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-download"></i></div>
                    Stock entrant   
                </a>

                  <a class="nav-link collapsed {{request()->routeIs('dashboard.commande sortant') ? 'active':''}}" href="{{route('dashboard.commande sortant')}}"  aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-upload"></i></div> 
                    Stock sortant  
                </a>


                <a class="nav-link collapsed {{request()->routeIs('dashboard.support_aide') ? 'active':''}} " href="{{route('dashboard.support_aide')}}"  aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa fa-arrown-down"></i></div>
                    Guide manuel
                </a>
                
                    
                
                <a class="nav-link collapsed {{request()->routeIs('dashboard.parametre') ? 'active':''}}" href="{{route('dashboard.parametre')}}"  aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="bi bi-wrench-adjustable"></i></div>
                    Parametrage 
                </a>
                
            </div>
            
        </div>
        <div class="container"><small><span class="fw-bold">V1.0</span> Copyright&copy;2025</small></div>
        <div class="sb-sidenav-footer p-3" style="background:linear-gradient(90deg, rgba(255,122,69,0.08), rgba(255,122,69,0.03)); border-radius:8px;">
            <div class="d-flex align-items-center gap-2 mb-2">
                <img src="{{ asset('banners/admin.jpeg') }}" alt="avatar" style="width:44px;height:44px;border-radius:8px;object-fit:cover;border:1px solid rgba(0,0,0,0.06)">
                <div class="flex-grow-1">
                    <div class="fw-bold small">freddy roland</div>
                    <div class="small text-muted">Super-admin</div>
                </div>
            </div>
            <div class="d-grid">
                <button class="btn btn-danger btn-sm rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#logoutConfirmModal"><i class="bi bi-box-arrow-left me-2"></i> Se déconnecter</button>
            </div>
        </div>


    </nav>
</div>