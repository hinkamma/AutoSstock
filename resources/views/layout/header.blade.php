<div class="container">
    <nav class="navbar fixed-top shadow-lg" style='background:white'    >
        <div class="container"  >
            <a class="navbar-brand  text-bold fw-bold" href="#"><span style="color:orangered">Auto</span>Stock</a>
            <button class="navbar-toggler text-white " type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <!-- Welcome box and avatar (positioned to the right) -->
            <div class="d-flex align-items-center ms-auto me-2">
                <div class="user-welcome d-flex align-items-center me-2 " style="position:relative;background: rgba(0,0,0,0.03);padding:6px 10px;border-radius:9px;border:1px solid rgba(0,0,0,0.04);">
                    <div style="font-size:.85rem;color:#222;line-height:1" >Bienvenue,&nbsp;<strong>Connectez-vous</strong></div>
                    <div  style="position:absolute;right:-10px;top:50%;transform:translateY(-50%) rotate(18deg);width:0;height:0;border-left:10px solid rgba(0,0,0,0.03);border-top:6px solid transparent;border-bottom:6px solid transparent;"></div>
                </div>
                <a href="{{ route('connecter') }}" class="d-block" style="width:36px;height:36px;">
                    <img src="{{ asset('banners/admin.jpeg') }}" alt="avatar" style="width:100%;height:100%;border-radius:50%;object-fit:cover;border:1px solid rgba(0,0,0,0.07);">
                </a>
            </div>
            <div style="background:rgb(2, 31, 29)" class="offcanvas offcanvas-end  " tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-titl text-white" id="offcanvasNavbarLabel"><span style="color:orangered">Auto</span>Stock</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-grid place-items-center bar-lateral-droite ">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" >
                    <li class="nav-item">
                        <a class="nav-link active" style="{{request()->routeIs('accueil') ? 'color:orangered':'color:white'}}" aria-current="page" href="{{request()->routeIs('accueil') ? '#' : route('accueil')}}">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#section_fonctionalite"  >Fonctionnalité</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#section_tarif">Tarif</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{request()->routeIs('propos') ? '#' : route('propos')}} " style="{{request()->routeIs('propos') ? 'color:orangered':'color:white'}}">A propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('FAQ')}}"  >Centre d'aide</a>
                    </li>
                    <li class="nav-item">
                        <a  href="{{route('connecter')}}" class="btn" style="background: orangered;color:beige" >se connecter</a>  
                    </li>
                    </ul>
                </div>
                <div class="col-md-12 mb-2">
                    
                </div>
            </div>
        </div>
    </nav>
</div>