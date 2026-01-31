@extends("dashboard.squellete.main")

@section("titre","Support d'aide")

@section('content_dashboard')
<div class="container pt-5 mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="fw-bold" style="color:orangered">Centre d'aide</h1>
            <p class="text-muted">Trouvez rapidement des réponses aux questions fréquentes sur AutoStock</p>
        </div>
    </div>

    <div class="row gx-4">
        <div class="col-lg-8">
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                            Que faire en cas d'oubli de mot de passe ?
                        </button>
                    </h2>
                    <div id="faq-collapse-1" class="accordion-collapse collapse show" aria-labelledby="faq-heading-1" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">Pour créer un compte, rendez-vous sur la page d'inscription, renseignez vos informations et suivez les instructions envoyées par e-mail.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-2" aria-expanded="false" aria-controls="faq-collapse-2">
                            Comment ajouter un produit au stock ?
                        </button>
                    </h2>
                    <div id="faq-collapse-2" class="accordion-collapse collapse" aria-labelledby="faq-heading-2" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">Dans le menu "Stock", cliquez sur "Ajouter un produit" puis remplissez le formulaire (référence, catégorie, fournisseur, quantité, description).</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-3" aria-expanded="false" aria-controls="faq-collapse-3">
                            Comment générer un rapport d'inventaire ?
                        </button>
                    </h2>
                    <div id="faq-collapse-3" class="accordion-collapse collapse" aria-labelledby="faq-heading-3" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">Allez dans la section "Rapports" et choisissez la période souhaitée, puis cliquez sur "Générer". Vous pouvez exporter en PDF ou CSV.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-4">
                        <button class="accordion-buttoncollapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-4" aria-expanded="false" aria-controls="faq-collapse-4">
                            Que faire en cas d'oubli de mot de passe ?
                        </button>
                    </h2>
                    <div id="faq-collapse-4" class="accordion-collapse collapse" aria-labelledby="faq-heading-4" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">Utilisez la fonctionnalité "Mot de passe oublié" sur la page de connexion pour recevoir un lien de réinitialisation par e-mail.</div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faq-heading-5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-collapse-5" aria-expanded="false" aria-controls="faq-collapse-5">
                            Comment contacter le support ?
                        </button>
                    </h2>
                    <div id="faq-collapse-5" class="accordion-collapse collapse" aria-labelledby="faq-heading-5" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">Si vous ne trouvez pas de réponse ici, envoyez-nous un e-mail à <strong>support@autostock.example</strong> ou utilisez le bouton de contact dans l'application.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title" style="color:orangered">Besoin d'aide supplémentaire ?</h5>
                    <p class="card-text text-muted">Notre équipe support est disponible pour vous aider sur les aspects techniques et l'utilisation de la plateforme.</p>
                    <a href="mailto:support@autostock.example" class="btn btn-outline-danger w-100">Contacter le support</a>
                </div>
            </div>

            <div class="card shadow-sm">
                <div class="card-body small text-muted">
                    <p class="mb-1"><strong>Heures d'ouverture :</strong> Lun - Ven, 09:00 - 18:00</p>
                    <p class="mb-0"><strong>Téléphone :</strong> +243 99 000 0000</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection