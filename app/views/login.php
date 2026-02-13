<?php
$page_title = "Connexion";
$active_page = "login";
$page_css = "auth.css";
$page_js = "auth.js";
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

<body class="bg-dark text-light position-relative">
    <div class="position-absolute top-0 end-0 p-3">
        <a class="btn btn-serdaigle" href="<?= BASE_URL ?>/admin/">
            <i class="fas fa-user-shield me-2"></i>Se connecter en tant qu'admin
        </a>
    </div>
    <div class="d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
            <div class="serdaigle-card p-4">
                <div class="text-center mb-4">
                    <i class="fas fa-feather-alt fa-3x text-bronze mb-3"></i>
                    <h2 class="text-light">Connexion</h2>
                    <p class="text-light-50">Accédez à votre compte Takalo-takalo</p>
                </div>

                <form id="loginForm" method="POST" action="<?= BASE_URL ?>/includes/auth-process.php">
                    <div class="mb-3">
                        <label for="username" class="form-label text-light">
                            <i class="fas fa-user-circle me-2"></i>Nom d'utilisateur
                        </label>
                        <input type="text"
                            class="form-control form-control-serdaigle"
                            id="username"
                            name="username"
                            required
                            placeholder="Votre nom d'utilisateur">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label text-light">
                            <i class="fas fa-key me-2"></i>Mot de passe
                        </label>
                        <div class="input-group">
                            <input type="password"
                                class="form-control form-control-serdaigle"
                                id="password"
                                name="password"
                                required
                                placeholder="Votre mot de passe">
                            <button class="btn" style="background: linear-gradient(135deg, #0E1A40, #222F5B); border: 2px solid #946B2D; color: #CD7F32;" type="button" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                        <label class="form-check-label text-light-50" for="rememberMe">
                            Se souvenir de moi
                        </label>
                        <a href="<?= BASE_URL ?>/pages/forgot-password.php" class="float-end text-bronze">
                            <i class="fas fa-question-circle me-1"></i>Mot de passe oublié ?
                        </a>
                    </div>

                    <button type="submit" class="btn btn-serdaigle w-100 mb-3">
                        <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                    </button>

                    <div class="text-center mt-3">
                        <p class="text-light-50 mb-0">
                            Pas encore de compte ?
                            <a href="<?= BASE_URL ?>/pages/register.php" class="text-bronze">
                                <i class="fas fa-user-plus me-1"></i>S'inscrire
                            </a>
                        </p>
                    </div>
                </form>

                <div class="mt-4 pt-3 border-top border-secondary">
                    <p class="text-center text-light-50 small">
                        <i class="fas fa-shield-alt me-1"></i>
                        Vos données sont sécurisées avec nous
                    </p>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html> 