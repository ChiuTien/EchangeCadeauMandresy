<?php
// Assurez-vous que BASE_URL est défini
// if (!defined('BASE_URL')) {
//     require_once __DIR__ . '/../config/constants.php';
// }
?>
<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takalo-takalo - <?php echo $page_title ?? 'Accueil'; ?></title>
    
    <!-- Bootstrap 5 CSS local -->
    <link href="<?= BASE_URL ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome local -->
    <link href="<?= BASE_URL ?>/assets/font-awesome/css/all.min.css" rel="stylesheet">
    
    <!-- Styles personnalisés -->
    <link href="<?= BASE_URL ?>/assets/css/serdaigle.css" rel="stylesheet">

    
    <style>
        .serdaigle-gradient {
            background: linear-gradient(135deg, #0E1A40 0%, #222F5B 50%, #0E1A40 100%);
        }
        
        .serdaigle-nav {
            background: linear-gradient(to right, #05080f, #0E1A40, #222F5B);
            border-bottom: 3px solid #946B2D;
        }
        
        .serdaigle-logo {
            font-family: 'Georgia', serif;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }
        
        .nav-link.active {
            background: linear-gradient(to right, #222F5B, #946B2D);
            border-radius: 5px;
            font-weight: bold;
        }
        
        .text-bronze {
            color: #CD7F32 !important;
        }
    </style>
</head>
<body class="bg-dark text-light">
    <header class="sticky-top shadow-lg">
        <nav class="navbar navbar-expand-lg serdaigle-nav py-3">
            <div class="container">
                <a class="navbar-brand serdaigle-logo text-light fs-3" href="<?= BASE_URL ?>">
                    <i class="fas fa-dove me-2 text-bronze"></i>Takalo-takalo
                    <small class="d-block fs-6 text-muted" style="letter-spacing: 1px;"><i class="fas fa-book-open me-1"></i>Plateforme d'échange</small>
                </a>
                
                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item mx-1">
                            <a class="nav-link text-light <?= ($active_page ?? '') == 'home' ? 'active' : '' ?>" 
                               href="<?= BASE_URL ?>/index.php">
                                <i class="fas fa-home me-1"></i>Accueil
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-light <?= ($active_page ?? '') == 'my-objects' ? 'active' : '' ?>" 
                               href="<?= BASE_URL ?>/pages/my-objects.php">
                                <i class="fas fa-box me-1"></i>Mes objets
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-light <?= ($active_page ?? '') == 'exchanges' ? 'active' : '' ?>" 
                               href="<?= BASE_URL ?>/pages/exchanges.php">
                                <i class="fas fa-people-arrows me-1"></i>Échanges
                            </a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link text-light <?= ($active_page ?? '') == 'admin' ? 'active' : '' ?>" 
                               href="<?= BASE_URL ?>/admin/">
                                <i class="fas fa-user-shield me-1"></i>Admin
                            </a>
                        </li>
                    </ul>

                    <form class="d-flex me-3" role="search">
                        <div class="input-group" style="min-width: 350px;">
                            <input class="form-control form-control-serdaigle" 
                                   type="search" 
                                   placeholder="Rechercher un objet..."
                                   style="background-color: rgba(5, 8, 15, 0.8); border: 2px solid #222F5B; color: #f8f9fa;">
                            <select class="form-select" style="width: auto; background-color: rgba(5, 8, 15, 0.8); border: 2px solid #222F5B; color: #CD7F32;">
                                <option style="background-color: #0E1A40;">Toutes catégories</option>
                                <option style="background-color: #0E1A40;">Vêtements</option>
                                <option style="background-color: #0E1A40;">Livres</option>
                                <option style="background-color: #0E1A40;">DVD / Blu-ray</option>
                                <option style="background-color: #0E1A40;">Jeux vidéo</option>
                                <option style="background-color: #0E1A40;">Autres</option>
                            </select>
                            <button class="btn" style="background: linear-gradient(135deg, #0E1A40, #222F5B); border: 2px solid #946B2D; color: #CD7F32;" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </form>

                    <div class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user-circle me-2"></i>Mon compte
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end border-bronze\" style=\"background-color: #0E1A40; border: 2px solid #946B2D;\">
                                <li><a class="dropdown-item text-light\" href=\"<?= BASE_URL ?>/pages/login.php\" style=\"background-color: transparent;\">
                                    <i class="fas fa-sign-in-alt me-2 text-bronze\"></i>Connexion</a></li>
                                <li><a class="dropdown-item text-light\" href=\"<?= BASE_URL ?>/pages/register.php\" style=\"background-color: transparent;\">
                                    <i class="fas fa-user-plus me-2 text-bronze\"></i>Inscription</a></li>
                                <li><hr class="dropdown-divider\" style=\"border-color: #946B2D;\"></li>
                                <li><a class="dropdown-item text-light\" href=\"#\" style=\"background-color: transparent;\">
                                    <i class="fas fa-question-circle me-2 text-bronze\"></i>Aide</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-4"></main>