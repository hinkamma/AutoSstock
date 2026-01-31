@extends("dashboard.squellete.main")

@section('titre',"Support d'aide")

@section('content_dashboard')
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div>
                <h1 class="fw-bold mb-1" style="color:orangered">Centre d'aide</h1>
                <p class="small text-muted">Ressources, guides et support pour utiliser AutoStock efficacement.</p>
            </div>

            <div class="d-flex gap-2">
                <a href="{{ route('FAQ') }}" class="btn btn-outline-secondary">FAQ publique</a>
                <a href="#contactSupport" class="btn btn-outline-danger"><i class="bi bi-envelope"></i> Contacter</a>
            </div>
        </div>
    </div>

    <div class="row gx-4">
        <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">
                                    <div class="accordion-item" data-keywords="compte inscription">
                                    <h2 class="accordion-header" id="faq-heading-1">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-1" aria-expanded="true" aria-controls="#faq-collapse-1">
                                            Comment créer un compte ?
                                        </button>
                                    </h2>
                                    <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">Rendez-vous sur la page d'inscription, remplissez le formulaire et confirmez votre e-mail. Si vous rencontrez un problème, contactez le support.</div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-keywords="produit ajouter stock">
                                    <h2 class="accordion-header" id="faq-heading-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="#faq-collapse-2">
                                            Comment ajouter un produit au stock ?
                                        </button>
                                    </h2>
                                    <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">Accédez à Stock → Ajouter un produit, renseignez la référence, la catégorie, le fournisseur et la quantité puis validez.</div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-keywords="rapport inventaire export pdf csv">
                                    <h2 class="accordion-header" id="faq-heading-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="#faq-collapse-3">
                                            Comment générer un rapport d'inventaire ?
                                        </button>
                                    </h2>
                                    <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">Rendez-vous dans Rapports, sélectionnez la période et les filtres, puis cliquez sur Générer. Vous pouvez exporter en PDF ou CSV.</div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-keywords="mot de passe réinitialisation connexion">
                                    <h2 class="accordion-header" id="faq-heading-4">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="#faq-collapse-4">
                                            Mot de passe oublié ?
                                        </button>
                                    </h2>
                                    <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">Utilisez la fonction "Mot de passe oublié" sur la page de connexion pour recevoir un e-mail de réinitialisation.</div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-keywords="support contact aide">
                                    <h2 class="accordion-header" id="faq-heading-5">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="#faq-collapse-5">
                                            Comment contacter le support ?
                                        </button>
                                    </h2>
                                    <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">Envoyez-nous un e-mail à <strong>support@autostock.example</strong> ou utilisez le formulaire de contact à droite.</div>
                                    </div>
                                </div>
            </div>
        </div>

        <div class="col-lg-4" id="contactSupport">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title" style="color:orangered">Contact support</h5>
                    <p class="card-text text-muted">Remplissez ce formulaire et notre équipe vous répondra sous 24h.</p>
                    <form id="supportForm">
                        <div class="mb-2">
                            <label class="form-label small">Votre nom</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label small">Votre email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label small">Sujet</label>
                            <input type="text" class="form-control" name="subject" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label small">Message</label>
                            <textarea class="form-control" rows="4" name="message" required></textarea>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="submit" id="supportSubmit" class="btn btn-danger">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body small text-muted">
                    <p class="mb-1"><strong>Heures d'ouverture :</strong> Lun - Ven, 09:00 - 18:00</p>
                    <p class="mb-1"><strong>Téléphone :</strong> +243 99 000 0000</p>
                    <p class="mb-0"><strong>Temps de réponse :</strong> <span class="fw-bold">~24h</span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function(){
        var search = document.getElementById('faqSearch');
        search?.addEventListener('input', function(){
            var q = this.value.trim().toLowerCase();
            document.querySelectorAll('#faqAccordion .accordion-item').forEach(function(item){
                var keys = (item.getAttribute('data-keywords')||'').toLowerCase();
                if(!q || keys.indexOf(q) !== -1 || item.textContent.toLowerCase().indexOf(q) !== -1){
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        document.getElementById('supportForm')?.addEventListener('submit', function(e){
            e.preventDefault();
            var btn = document.getElementById('supportSubmit'); btn.textContent='Envoi...';
            setTimeout(function(){ btn.textContent='Envoyer'; alert('Message envoyé (exemple).'); document.getElementById('supportForm').reset(); },800);
        });
    });
</script>

@endsection