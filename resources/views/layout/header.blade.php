<div class="container-fluid">
    <nav class="navbar fixed-top shadow-lg" style='background:white'    >
        <div class="container-fluid"  >
            <a class="navbar-brand  text-bold fw-bold" href="#"><span style="color:orangered">Auto</span>Stock</a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
            </button>
            <div style="background:rgb(2, 31, 29)" class="offcanvas offcanvas-end  " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-titl text-white" id="offcanvasNavbarLabel"><span style="color:orangered">Auto</span>Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-grid place-items-center bar-lateral-droite ">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" >
                    <li class="nav-item">
                        <a class="nav-link active" style="{{request()->routeIs("accueil") ? 'color:orangered':'color:white'}}" aria-current="page" href="{{request()->routeIs("accueil") ? "#" : route("accueil")}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#section_fonctionalite" onclick="closeSidebar()" >Fonctionnalité</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#section_tarif">Tarif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{request()->routeIs("propos") ? "#" :route('propos')}}" style="{{request()->routeIs("propos") ? 'color:orangered':'color:white'}}">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route("FAQ")}}"  >Centre d'aide</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>