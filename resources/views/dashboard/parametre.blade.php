@extends("dashboard.squellete.main")

@section('titre','Paramètres')

@section('content_dashboard')
<div class="container-fluid px-4 py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Paramètres de l'application</h2>
        <small class="text-muted">Gérez les informations et la sécurité de votre compte</small>
    </div>

    <div class="row gy-4">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Paramètres généraux</h5>
                    <form action="#" method="post">
                        @csrf
                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label class="form-label">Nom de l'application</label>
                                <input type="text" name="app_name" class="form-control" value="AutoStock">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">E-mail de contact</label>
                                <input type="email" name="contact_email" class="form-control" value="support@autostock.example">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Devise par défaut</label>
                                <select name="currency" class="form-select">
                                    <option value="CDF">CDF</option>
                                    <option value="USD">USD</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Fuseau horaire</label>
                                <select name="timezone" class="form-select">
                                    <option value="Africa/Kinshasa">Africa/Kinshasa</option>
                                    <option value="UTC">UTC</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Description courte</label>
                                <textarea name="description" class="form-control" rows="3" placeholder="Brève description de l'application">Gestion simple et rapide de vos stocks</textarea>
                            </div>
                        </div>

                        <div class="mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-outline-primary me-2">Annuler</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    <h5 class="card-title">Sécurité</h5>
                    <p class="text-muted">Changez votre mot de passe régulièrement pour sécuriser votre compte.</p>
                    <form action="#" method="post" class="row g-3">
                        @csrf
                        <div class="col-md-4">
                            <label class="form-label">Mot de passe actuel</label>
                            <input type="password" name="current_password" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Nouveau mot de passe</label>
                            <input type="password" name="new_password" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Confirmer mot de passe</label>
                            <input type="password" name="new_password_confirmation" class="form-control">
                        </div>
                        <div class="col-12 d-flex justify-content-end mt-2">
                            <button type="submit" class="btn btn-success">Mettre à jour le mot de passe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-3">
                <div class="card-body text-center">
                    <img src="{{ asset('banners/admin.jpeg') }}" alt="logo" class="mb-3" style="width:96px;height:96px;border-radius:12px;object-fit:cover">
                    <h6 class="fw-bold">AutoStock</h6>
                    <p class="small text-muted">Version: 1.0.0</p>
                    <p class="small text-muted">Dernière sauvegarde: --</p>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body small text-muted">
                    <p class="mb-2"><strong>Administrateur:</strong> {{ auth()->user()->name ?? 'Admin' }}</p>
                    <p class="mb-2"><strong>Rôle:</strong> Super-admin</p>
                </div>
            </div>

             <div class="card shadow-sm mt-3">
                <div class="card-body small text-muted">
                    <a href="" class="btn btn-outline btn-danger">RENITIALISER L'APPLICATION</a>
                </div>
                <p class="m-2">cette option changera l'application, tout reviendra comme au debut </p>
            </div>
        </div>
    </div>
</div>
@endsection