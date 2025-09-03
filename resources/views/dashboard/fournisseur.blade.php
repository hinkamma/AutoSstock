@extends("dashboard.squellete.main")

@section('titre',"Ventes")

@section('content_dashboard')
    <div class="container mt-4">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Liste des fournisseurs
                    {{-- <button type="button" class="btn btn-sm btn-danger float-end mx-3" data-bs-toggle="modal" data-bs-target="#vider"><i class="bi arrowclockwise"></i> vider</button>
                    <!-- Modal renitialisation-->
                    <div class="modal fade" id="vider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header" style="background: rgba(255, 0, 0, 0.466)">
                                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Rénitialisation de la liste</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" style="background: rgba(255, 0, 0, 0.062)">
                                    <p class="text-danger fw-bold">Voulez-vous vraiment vider les données liées au vente ?<br>cette action est irréversible.</p>
                                </div>
                                <div class="modal-footer" style="background: rgba(255, 0, 0, 0.021)">
                                    <button type="button" class="btn btn-outline" data-bs-dismiss="modal">fermer</button>
                                    <button type="button" class="btn btn-danger">Accepter</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- end modal --}}

                    
                </div>

                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                    <th><i class="bi bi-person-vcard-fill"></i> Noms Fournisseurs</th>
                                    <th><i class="bi bi-telephone-fill"></i> Téléphone</th>
                                    <th><i class="bi bi-envelope"></i> E-mails</th>
                                    <th><i class="bi bi-globe2"></i> Adresse</th>
                                    <th><i class="bi bi-card-list"></i> Quantitées totales d'aticles</th>
                                </tr>
                        </thead>           
                        <tbody>
                            <tr>
                                <td>Hinkamma freddy roland</td>
                                <td>682890741 </td>
                                <td>freddyrolandhoinkamma@gmail.com</td>
                                <td>Douala rue 15 bordeau</td>
                                <td>4509</td>
                            </tr>
                                       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection