<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$page_title = "Accueil";
$active_page = "home";
$page_js = "home.js";


?>

<?php include __DIR__ . '/layout/header.php'; ?>

<div class="row mb-4">
    <div class="col-12">
        <div class="serdaigle-card">
            <div class="serdaigle-card-header">
                <h2 class="mb-0 text-light">
                    <i class="fas fa-dove me-2 text-bronze"></i>
                    Bienvenue sur Takalo-takalo
                </h2>
            </div>
            <div class="card-body p-4">
                <p class="lead mb-4">
                    La plateforme d'échange d'objets entre passionnés. 
                    Inscrivez-vous gratuitement et commencez à échanger dès aujourd'hui !
                </p>
                
                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="serdaigle-card h-100 text-center p-4">
                            <i class="fas fa-cloud-upload-alt fa-3x text-bronze mb-3"></i>
                            <h4 class="mb-3">Déposez</h4>
                            <p class="mb-0">Mettez en ligne vos objets dont vous ne vous servez plus</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="serdaigle-card h-100 text-center p-4">
                            <i class="fas fa-search fa-3x text-bronze mb-3"></i>
                            <h4 class="mb-3">Explorez</h4>
                            <p class="mb-0">Parcourez les objets proposés par d'autres membres</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="serdaigle-card h-100 text-center p-4">
                            <i class="fas fa-people-arrows fa-3x text-bronze mb-3"></i>
                            <h4 class="mb-3">Échangez</h4>
                            <p class="mb-0">Proposez des échanges et trouvez un accord</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="mb-4 text-bronze">
    <i class="fas fa-star me-2"></i>Objets récemment ajoutés
</h2>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php for ($i = 1; $i <= 6; $i++): ?>
    <div class="col">
        <div class="serdaigle-card h-100">
            <img src="<?= BASE_URL ?>/assets/images/placeholder-<?= $i ?>.jpg" 
                 class="card-img-top" 
                 alt="Objet <?= $i ?>"
                 style="height: 200px; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title text-light">Objet de qualité <?= $i ?></h5>
                <p class="card-text text-light-50">
                    Description détaillée de l'objet. État: Très bon.
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="badge badge-serdaigle">Valeur: <?= rand(10, 100) ?>€</span>
                    <a href="<?= BASE_URL ?>/pages/object-detail.php?id=<?= $i ?>" 
                       class="btn btn-serdaigle btn-sm">
                        <i class="fas fa-eye me-1"></i>Voir détails
                    </a>
                </div>
            </div>
            <div class="card-footer text-muted">
                <small>Ajouté il y a <?= rand(1, 30) ?> jours</small>
            </div>
        </div>
    </div>
    <?php endfor; ?>
</div>

<div class="row mt-5">
    <div class="col-12">
        <div class="alert alert-serdaigle d-flex align-items-center p-4">
            <i class="fas fa-lightbulb fa-3x me-4 text-bronze"></i>
            <div class="flex-grow-1">
                <h5 class="alert-heading mb-2"><strong>Comment démarrer ?</strong></h5>
                <p class="mb-0">Créez votre compte gratuitement et commencez à échanger dès maintenant !</p>
            </div>
            <a href="<?= BASE_URL ?>/pages/register.php" class="btn btn-serdaigle ms-auto">
                <i class="fas fa-user-plus me-2"></i>S'inscrire
            </a>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>