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
            </ul>
        </li>
    </ul>
    
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 " >
        <li class="nav-item dropdown  ">
            <a class="text-dark nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bell fa-fw"></i> <span class="badge badge-danger badge-counter" style="background:rgba(207, 48, 20, 0.863);font-size:10px;position:relative;right:15px;bottom:8px">1+</span></a>
            <ul class="dropdown-menu dropdown-menu-end shadow-lg  " aria-labelledby="navbarDropdown"  >
                <li><a class="dropdown-item " href="{{route('dashboard.notifications')}}" style="color:red"><i class="bi-bell"></i> stock ordinateur en bai...</a></li>
            </ul>
        </li>
    </ul>

    <div class="d-none d-md-flex align-items-center ms-auto">
      <div class="px-3 py-1 rounded" style="background: rgba(0,0,0,0.03); border: 1px solid rgba(0,0,0,0.04);">
        <div class="small text-muted" style="line-height:1">Bienvenue,</div>
        <div class="fw-bold" style="font-size:0.95rem">freddy roland</div>
      </div>
    </div>
</nav>


<div class="modal fade" id="raccourcis_stock_vide" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-primary">
              <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">stock vide</h1>
              <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">stock</label>
                  </div>
                  
                  <div class="form-floating mt-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Description</label>
                  </div>
                  
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn " data-bs-dismiss="modal">Fermer</button>
              <button type="button" class="btn btn-outline-primary "><i class="bi bi-save"></i> Creer</button>
          </div>
      </div>
  </div>
</div>

<!-- raccourcis direct pour stocker un produit -->
<div class="modal fade" id="enregistrer_produit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-success">
              <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Produit / Article</h1>
              <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-floating mb-3 ">
                      <input type="text" value="C83E1" class="form-control cursor-none fw-bold" id="floatingInput" placeholder="name@example.com"  >
                      <label for="floatingInput"><i class="bi bi-tag"></i> Référence Ref</label>
                  </div>
                  <div class="form-floating mb-3 ">
                      <input type="text"  class="form-control" id="floatingInput" placeholder="name@example.com" >
                      <label for="floatingInput"><i class="bi bi-box"></i> Article*</label>
                  </div>
                  

                  <div class="border border-2" style="padding:10px; border-radius:5px">
                      <div class="form-floating mt-3">
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option value="3">Tablette</option>
                              <option value="">Autres...</option>
                          </select>
                          <label for="floatingSelect"><i class="bi bi-boxes"></i> Catégorie*</label>
                      </div>
                  
                      <div class="d-flex justify-content-between align-items-center mt-1">
                        <p class='text-danger' >si le stock est innexistant, veuillez le crée</p>
                      </div>
                  
                  </div>


                  <div class="form-floating mt-3">
                      <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput"><i class="bi bi-card-text"></i> Description</label>
                  </div>

                  <div class="border border-2 mt-2" style="padding:10px; border-radius:5px">
                      <div class="form-floating mt-3">
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option value="3">TAMO SIMO PIERE RENE</option>
                              <option value="">option...</option>
                          </select>
                          <label for="floatingSelect"><i class="bi bi-boxes"></i> Fournisseurs*</label>
                      </div>
                      <div class="d-flex justify-content-between align-items-center mt-1">
                        <p class='text-danger' >si le fournisseur est innexistant, veuillez l'ajouté</p>
                      </div>
                  </div>


                  <div class="form-floating mt-3">
                      <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput"><i class="bi bi-123"></i> Qté*</label>
                  </div>
                
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-outline-success bg-success " style="color:white;"><i class="bi bi-save"></i> Enregistrer</button>
          </div>
      </div>
  </div>
</div>

<!-- Modifier un produit -->
<div class="modal fade" id="modifier_produit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-success">
              <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Produit / Article</h1>
              <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-floating mb-3 ">
                      <input type="text" value="C83E1" class="form-control cursor-none fw-bold" id="floatingInput" placeholder="name@example.com"  >
                      <label for="floatingInput"><i class="bi bi-tag"></i> Référence Ref</label>
                  </div>
                  <div class="form-floating mb-3 ">
                      <input type="text" value="PC Lenovo Core i5"  class="form-control" id="floatingInput" placeholder="name@example.com" >
                      <label for="floatingInput"><i class="bi bi-box"></i> Article*</label>
                  </div>
                  

                    <div class="border border-2" style="padding:10px; border-radius:5px">
                      <div class="form-floating mt-3">
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option value="3">Tablette</option>
                              <option value="">Autres...</option>
                          </select>
                          <label for="floatingSelect"><i class="bi bi-boxes"></i> Catégorie*</label>
                      </div>
                  </div>


                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput"><i class="bi bi-card-text"></i> Description</label>
                    </div>

                    <div class="border border-2 mt-2" style="padding:10px; border-radius:5px">
                      <div class="form-floating mt-3">
                          <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                              <option value="3">TAMO SIMO PIERE RENE</option>
                              <option value="">option...</option>
                          </select>
                          <label for="floatingSelect"><i class="bi bi-boxes"></i> Fournisseurs*</label>
                      </div>
                    </div>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-outline-success bg-success " style="color:white;"><i class="bi bi-save"></i> Modifier</button>
          </div>
      </div>
  </div>
</div>

<!-- raccourcis direct pour destocker un produit -->
<div class="modal fade" id="retirer_produit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-danger">
              <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Retiré un article</h1>
              <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-floating mt-3">
                  <select class="form-select fw-bold" id="floatingSelect" aria-label="Floating label select example">
                      <option value="3">C83E1</option>
                      <option value="">C83E2</option>
                  </select>
                  <label for="floatingSelect"><i class="bi bi-tag"></i> Référence*</label>
              </div>

              <div class="form-floating mt-3">
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                      <option value="3">Lenovo 8iem G 128 4</option>
                      <option value="">Lenovo 9iem G 128 4</option>
                  </select>
                  <label for="floatingSelect"><i class="bi bi-boxes"></i> Categorie x</label>
              </div>
          
              

              <div class="form-floating mt-3">
                  <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput"><i class="bi bi-123"></i> Qté*</label>
                  <p class='text-danger' >Alerte sur la quantité de produit à retirer</p>
              </div>
            
            </form>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-outline-success bg-danger " style="color:white;"><i class="bi bi-save"></i> RETIRER</button>
          </div>
      </div>
  </div>
</div>


<!-- boite de dialogue pour supprimer un fournisseur -->
<div class="modal fade" id="supprimerItemFournisseur" tabindex="-1" aria-labelledby="deleteStockLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="deleteStockLabel">Supprimer <strong id="delete-stock-ref">Hinkamma</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-danger fw-bold">Voulez-vous vraiment supprimer ce fournisseur  ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Non</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Oui, supprimer</button>
            </div>
        </div>
    </div>
</div>

<!-- boite de dialogue pour supprimer un produit -->
<div class="modal fade" id="supprimerItemProduit" tabindex="-1" aria-labelledby="deleteStockLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="deleteStockLabel">Suppression de C356R</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-danger fw-bold">Voulez-vous vraiment supprimer ce produit  ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Non</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Oui, supprimer</button>
            </div>
        </div>
    </div>
</div>

<!-- boite de dialogue pour supprimer un stock sortant -->
<div class="modal fade" id="supprimer_stock_sortant" tabindex="-1" aria-labelledby="deleteStockLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="deleteStockLabel">Suppression definitive</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-danger fw-bold">Voulez-vous vraiment supprimer ce stock  ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Non</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Oui, supprimer</button>
            </div>
        </div>
    </div>
</div>


<!-- boite de dialogue pour vider le stock sortant -->
<div class="modal fade" id="vider_stock_sortant" tabindex="-1" aria-labelledby="deleteStockLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="deleteStockLabel">Suppression definitive</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-danger fw-bold"><i class="bi bi-warning"></i> Voulez-vous vraiment vider l'historique de stock sortant ?</p>
                <p>cette action est irreverible et supprimera toutes les données du stock</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Non</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Oui, supprimer</button>
            </div>
        </div>
    </div>
</div>
        
<!-- pour modifier un item de produit -->
<div class="modal fade" id="modifierItemFournisseur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header bg-success">
              <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Modifier le fournisseur</h1>
              <button type="button" class="btn-close text-light" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            
            <div class="">
                <div class="card shadow-sm mb-3">
                    <div class="card-body text-center">
                        <img src="{{ asset('banners/admin.jpeg') }}" alt="logo" class="mb-3" style="width:100px;height:100px;border-radius:12px;object-fit:cover">
                    </div>
                </div>
            </div>

            <form>
                <div class="mt-3">
                    <label for="">Nom d'utilisateur</label>
                  <input type="text" class="form-control" id="floatingInput"  value='freddy roland hinkamma'>
                </div>

                <div class="mt-3">
                    <label for="">Adresse</label>
                  <input type="text" class="form-control" id="floatingInput" value="Douala">
                </div>

                <div class="mt-3">
                    <label for="">Tel</label>
                  <input type="text" class="form-control" id="floatingInput" value="682890741">
                </div>
            
            </form>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-outline-success bg-success " style="color:white;"> MODIFIER</button>
          </div>
      </div>
  </div>
</div>

<!-- boite de dialogue pour supprimer un item de stock entrant-->
<div class="modal fade" id="deleteStockItemEntrant" tabindex="-1" aria-labelledby="deleteStockLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-light">
                <h5 class="modal-title" id="deleteStockLabel">Supprimer <strong id="delete-stock-ref">C356R</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-danger fw-bold">Voulez-vous vraiment supprimer ce stock  ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Non</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Oui, supprimer</button>
            </div>
        </div>
    </div>
</div>
