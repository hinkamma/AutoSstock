<nav class="sb-topnav navbar navbar-expand navbar-dark shadow-lg text-dark" style="background:white">
  <!-- Navbar Brand-->
  <a class="navbar-brand ps-3 text-dark" href="index.html"><span class="fw-bold" style="color:orangered">Auto</span>Stock</a>
  <!-- Sidebar Toggle-->
  <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-dark " id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
  <!-- Navbar Search-->
  <form class="d-none d-md-inline-block form-inline ">
      <div class="input-group">
          <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
              <button class="btn text-dark " id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
      </div>


  </form>
  <!-- Task  manager -->
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 text-dark" >
      <li class="nav-item dropdown bg-light rounded-2">
          <a class="text-dark nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi-sliders2"></i></a>
          <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="navbarDropdown" >
              <li><a class="dropdown-item" href="{{route('dashboard.manager.gerer')}}"><i class="bi-person-fill-lock"></i> Gérer </a></li>
              <li><a class="dropdown-item" href="{{route('dashboard.manager.activite')}}"><i class="bi bi-activity"></i> Activités</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <form action="{{route('traitment_Disconet')}}" method="post">
                  @csrf  
                  <button class="dropdown-item text-danger"><i class="bi bi-box-arrow-left"></i> Deconnexion</button>
                </form>
              </li>

                
          </ul>
      </li>
  </ul>


    
  <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 text-light" >
      <li class="nav-item dropdown bg-light rounded-2">
          <a class="text-dark nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell fa-fw"></i> <span class="badge badge-danger badge-counter" style="background:rgba(207, 48, 20, 0.863);font-size:10px;position:relative;right:15px;bottom:8px">3+</span></a>
          <ul class="dropdown-menu dropdown-menu-end shadow-lg bg-dark" aria-labelledby="navbarDropdown"  >
              <li class='container fw-bold' style="color:orangered">Notifications</li>
              <hr class="dropdown-divider" style="background-color:rgba(255, 68, 0, 0.452)" />
              <li><a class="dropdown-item text-light" href="#!"><i class="bi-bell"></i> Notification 1</a></li>
              <li><hr class="dropdown-divider bg-light text-light" /></li>
              <li><a class="dropdown-item text-light" href="#!">Voir toutes <i class="bi bi-chevron-right"></i></a></li>
          </UL>
      </li>
  </ul>

  
   

  {{-- profil --}}
    
  <div class="ms-auto mx-4" style="background;width: 30px;height: 30px; "> 
      <a style="cursor:pointer" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" style="border-radius:1000px;border:none">
          <img src="{{asset('banners/admin.jpeg')}}" width="100%" height="100%" alt="" style="border-radius:1000px" title="freddy roland">
      </a>
  </div>

    

</nav>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-light" style="background:orangered">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Mon compte</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="container">
                <div style="width:200px;height:200px;background-size:cover;background-position:center" class="mx-auto mb-3">
                    <img src="{{asset('banners/admin.jpeg')}}" width="100%" height="100%" alt="" style="border-radius:1000px" title="freddy roland">
                </div>
            </div>
          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Noms</label>
            <input type="text" class="form-control fw-bold" id="recipient-name" value="nom_Admin">
          </div>

          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Prenoms</label>
            <input type="text" class="form-control fw-bold" id="recipient-name" value="prenom_Admin">
          </div>

          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">E-mail</label>
            <input type="text" class="form-control fw-bold" id="recipient-name" value="email_Admin">
          </div>

          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Mot de passe</label>
            <input type="text" class="form-control fw-bold" id="recipient-name" value="motdepasse_Admin">
          </div>
        </form>
      </div>
      <div class="modal-footer" style='background:rgba(255, 68, 0, 0.062)'>
        <button type="button" 
                class="btn btn-outline-dark rounded-pill px-4 py-2 fw-bold"
                style="border:1.5px solid orangered; color:orangered; transition:background 0.2s, color 0.2s;"
                data-bs-dismiss="modal"
                onmouseover="this.style.background='orangered';this.style.color='white';"
                onmouseout="this.style.background='';this.style.color='orangered';">
            Fermer
        </button>
        <button type="button" 
                class="btn rounded-pill px-4 py-2 fw-bold text-light"
                style="background:orangered; border:none; box-shadow:0 2px 8px rgba(255,68,0,0.15); transition:background 0.2s;"
                onmouseover="this.style.background='#cf3014';"
                onmouseout="this.style.background='orangered';">
            Enregistrer
        </button>
      </div>
    </div>
  </div>
</div>