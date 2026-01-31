<!-- Logout confirmation modal (global) -->
<div class="modal fade" id="logoutConfirmModal" tabindex="-1" aria-labelledby="logoutConfirmLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-light">
        <h5 class="modal-title" id="logoutConfirmLabel">Confirmer la déconnexion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="mb-0">Voulez-vous vraiment vous déconnecter ?</p>
      </div>
      <div class="modal-footer">
        <form action="{{ route('traitment_Disconet') }}" method="post" class="m-0">
            @csrf
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-danger">Déconnexion</button>
        </form>
      </div>
    </div>
  </div>
</div>