<?php
// Assurez-vous que BASE_URL est défini
if (!defined('BASE_URL')) {
    require_once __DIR__ . '/../config/constants.php';
}
?>
<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takalo-takalo - <?php echo $page_title ?? 'Accueil'; ?></title>
    
    <!-- Bootstrap 5 CSS local -->
    <link href="<?= BASE_URL ?>/assets/lib/bootstrap-5.3.0/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome local -->
    <link href="<?= BASE_URL ?>/assets/lib/font-awesome/css/all.min.css" rel="stylesheet">
    
    <!-- Styles personnalisés -->
    <link href="<?= BASE_URL ?>/assets/css/serpentard.css" rel="stylesheet">
    <link href="<?= BASE_URL ?>/assets/css/style.css" rel="stylesheet">
    
    <style>
        .serpentard-gradient {
            background: linear-gradient(135deg, #1a472a 0%, #2a623d 50%, #1a472a 100%);
        }
        
        .serpentard-nav {
            background: linear-gradient(to right, #0d2818, #1a472a, #2a623d);
            border-bottom: 3px solid #aaaaaa;
        }
        
        .serpentard-logo {
            font-family: 'Georgia', serif;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .nav-link.active {
            background: linear-gradient(to right, #5d5d5d, #aaaaaa);
            border-radius: 5px;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-dark text-light">
    <header class="sticky-top shadow-lg">
        <nav class="navbar navbar-expand-lg serpentard-nav py-3">
            <div class="container">
                <a class="navbar-brand serpentard-logo text-light fs-3" href="<?= BASE_URL ?>">
                    <i class="fas fa-dragon me-2 text-warning"></i>Takalo-takalo
                    <small class="d-block fs-6 text-muted"><?= PROJECT_NAME ?></small>
                </a>
                
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-light <?= ($active_page ?? '') == 'home' ? 'active' : '' ?>" 
                               href="<?= BASE_URL ?>/index.php">
                                <i class="fas fa-home me-1"></i>Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light <?= ($active_page ?? '') == 'my-objects' ? 'active' : '' ?>" 
                               href="<?= BASE_URL ?>/pages/my-objects.php">
                                <i class="fas fa-box me-1"></i>Mes objets
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light <?= ($active_page ?? '') == 'exchanges' ? 'active' : '' ?>" 
                               href="<?= BASE_URL ?>/pages/exchanges.php">
                                <i class="fas fa-exchange-alt me-1"></i>Échanges
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light <?= ($active_page ?? '') == 'admin' ? 'active' : '' ?>" 
                               href="<?= BASE_URL ?>/admin/">
                                <i class="fas fa-cog me-1"></i>Admin
                            </a>
                        </li>
                    </ul>

                    <form class="d-flex me-4" role="search">
                        <div class="input-group">
                            <input class="form-control bg-dark text-light border-secondary" 
                                   type="search" 
                                   placeholder="Rechercher un objet...">
                            <select class="form-select bg-dark text-light border-secondary" style="width: auto;">
                                <option class="bg-dark">Toutes catégories</option>
                                <option class="bg-dark">Vêtements</option>
                                <option class="bg-dark">Livres</option>
                                <option class="bg-dark">DVD / Blu-ray</option>
                                <option class="bg-dark">Jeux vidéo</option>
                                <option class="bg-dark">Autres</option>
                            </select>
                            <button class="btn btn-outline-warning" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>

                    <div class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user me-1"></i>Mon compte
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end bg-dark border-warning">
                                <li><a class="dropdown-item text-light" href="<?= BASE_URL ?>/pages/login.php">
                                    <i class="fas fa-sign-in-alt me-2"></i>Connexion</a></li>
                                <li><a class="dropdown-item text-light" href="<?= BASE_URL ?>/pages/register.php">
                                    <i class="fas fa-user-plus me-2"></i>Inscription</a></li>
                                <li><hr class="dropdown-divider border-secondary"></li>
                                <li><a class="dropdown-item text-light" href="#">
                                    <i class="fas fa-question-circle me-2"></i>Aide</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-4"></main>