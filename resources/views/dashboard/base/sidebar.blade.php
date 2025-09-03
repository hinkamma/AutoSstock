<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link {{request()->routeIs('dashboard.home') ? 'active':''}}" href="{{route('dashboard.home')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>

                            <a class="nav-link {{request()->routeIs('dashboard.vente') ? 'active':''}}" href="{{route('dashboard.vente')}}">
                                <div class="sb-nav-link-icon"><i class="bi bi-cart4"></i></div>
                                Ventes   
                            </a>
                            
                            <a class="nav-link collapsed {{request()->routeIs('dashboard.client') ? 'active':''}}" href="{{route('dashboard.client')}}"  data-bs-toggle="collapse" data-bs-target="#client" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-people-fill"></i></div>
                                Clients
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="client" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{request()->routeIs('dashboard.information') ? 'active':''}}" href="{{route('dashboard.information')}}"><i class="bi bi-list-stars mx-2"></i> Historique d'achat</a>
                                
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed {{request()->routeIs('dashboard.fournisseur') ? 'active':''}}" href="{{route('dashboard.fournisseur')}}"  aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-truck"></i></div>
                                Fournisseurs    
                            </a>
                            
                            <a class="nav-link collapsed {{request()->routeIs('dashboard.commande') ? 'active':''}}" href="{{route('dashboard.commande')}}"  data-bs-toggle="collapse" data-bs-target="#commande" aria-expanded="false" aria-controls="commande">
                                <div class="sb-nav-link-icon"><i class="bi bi-arrows-angle-contract"></i></div>
                                flux
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="commande" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('dashboard.commande_entrant')}}"><i class="bi bi-arrow-return-right mx-2"></i> Entrants</a>
                                    <a class="nav-link" href="{{route("dashboard.commande_sortant")}}"><i class="bi bi-arrow-return-left mx-2"></i> Sortants</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed {{request()->routeIs('dashboard.commande') ? 'active':''}}" href="{{route('dashboard.commande')}}"  data-bs-toggle="collapse" data-bs-target="#stockProduit" aria-expanded="false" aria-controls="commande">
                                <div class="sb-nav-link-icon"><i class="bi bi-arrows-angle-contract"></i></div>
                                Stocks -Produits
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="stockProduit" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route("dashboard.produit")}}"><i class="bi bi-arrow-return-left mx-2"></i> Ordinateurs</a>
                                </nav>
                            </div>
                             
                          
                            <a class="nav-link collapsed {{request()->routeIs('dashboard.parametre') ? 'active':''}}" href="{{route('dashboard.parametre')}}"  aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="bi bi-wrench-adjustable"></i></div>
                                Parametrage 
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer" style="background:rgba(240, 148, 148, 0.178)">
                        <div class="small text-center">Deconnexion</div>
                        <div class="text-center">
                            <a class="nav-link active" href="{{route('dashboard.setting.logout')}}" title="deconnexion"><i class="bi bi-box-arrow-left text-center " style="color:rgba(255, 99, 71, 0.418)"></i></a>
                        </div>
                    </div>
                </nav>
            </div>