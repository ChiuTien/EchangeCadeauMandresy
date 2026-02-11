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
        <div class="serpentard-card">
            <div class="serpentard-card-header">
                <h2 class="mb-0 text-light">
                    <i class="fas fa-dragon me-2 text-warning"></i>
                    Bienvenue sur Takalo-takalo
                </h2>
            </div>
            <div class="card-body p-4">
                <p class="lead">
                    La plateforme d'échange d'objets entre passionnés. 
                    Inscrivez-vous gratuitement et commencez à échanger dès aujourd'hui !
                </p>
                
                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="serpentard-card h-100 text-center p-3">
                            <i class="fas fa-upload fa-3x text-warning mb-3"></i>
                            <h4>Déposez</h4>
                            <p>Mettez en ligne vos objets dont vous ne vous servez plus</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="serpentard-card h-100 text-center p-3">
                            <i class="fas fa-search fa-3x text-warning mb-3"></i>
                            <h4>Explorez</h4>
                            <p>Parcourez les objets proposés par d'autres membres</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="serpentard-card h-100 text-center p-3">
                            <i class="fas fa-exchange-alt fa-3x text-warning mb-3"></i>
                            <h4>Échangez</h4>
                            <p>Proposez des échanges et trouvez un accord</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="mb-4 text-warning">
    <i class="fas fa-gem me-2"></i>Objets récemment ajoutés
</h2>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
    <?php for ($i = 1; $i <= 6; $i++): ?>
    <div class="col">
        <div class="serpentard-card h-100">
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
                    <span class="badge badge-serpentard">Valeur: <?= rand(10, 100) ?>€</span>
                    <a href="<?= BASE_URL ?>/pages/object-detail.php?id=<?= $i ?>" 
                       class="btn btn-serpentard btn-sm">
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
        <div class="alert alert-serpentard d-flex align-items-center">
            <i class="fas fa-info-circle fa-2x me-3 text-warning"></i>
            <div>
                <h5 class="alert-heading mb-1">Comment démarrer ?</h5>
                <p class="mb-0">Créez votre compte gratuitement et commencez à échanger dès maintenant !</p>
            </div>
            <a href="<?= BASE_URL ?>/pages/register.php" class="btn btn-serpentard ms-auto">
                <i class="fas fa-user-plus me-2"></i>S'inscrire
            </a>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>