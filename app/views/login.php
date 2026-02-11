<?php
$page_title = "Connexion";
$active_page = "login";
$page_css = "auth.css";
$page_js = "auth.js";


?>

<?php include __DIR__ . '/layout/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="serpentard-card p-4">
            <div class="text-center mb-4">
                <i class="fas fa-dragon fa-3x text-warning mb-3"></i>
                <h2 class="text-light">Connexion</h2>
                <p class="text-light-50">Accédez à votre compte Takalo-takalo</p>
            </div>
            
            <form id="loginForm" method="POST" action="<?= BASE_URL ?>/includes/auth-process.php">
                <div class="mb-3">
                    <label for="username" class="form-label text-light">
                        <i class="fas fa-user me-2"></i>Nom d'utilisateur
                    </label>
                    <input type="text" 
                           class="form-control form-control-serpentard" 
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
                               class="form-control form-control-serpentard" 
                               id="password" 
                               name="password" 
                               required 
                               placeholder="Votre mot de passe">
                        <button class="btn btn-outline-warning" type="button" id="togglePassword">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                    <label class="form-check-label text-light-50" for="rememberMe">
                        Se souvenir de moi
                    </label>
                    <a href="<?= BASE_URL ?>/pages/forgot-password.php" class="float-end text-warning">
                        <i class="fas fa-question-circle me-1"></i>Mot de passe oublié ?
                    </a>
                </div>
                
                <button type="submit" class="btn btn-serpentard w-100 mb-3">
                    <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                </button>
                
                <div class="text-center mt-3">
                    <p class="text-light-50 mb-0">
                        Pas encore de compte ? 
                        <a href="<?= BASE_URL ?>/pages/register.php" class="text-warning">
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

<?php include __DIR__ . '/layout/footer.php'; ?>