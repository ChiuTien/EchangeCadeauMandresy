<?php
$page_title = "Inscription";
$active_page = "register";
$page_css = "auth.css";
$page_js = "auth.js";

?>

<?php include __DIR__ . '/layout/header.php'; ?>

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-7">
        <div class="serdaigle-card p-4">
            <div class="text-center mb-4">
                <i class="fas fa-scroll fa-3x text-bronze mb-3"></i>
                <h2 class="text-light">Créer un compte</h2>
                <p class="text-light-50">Rejoignez la communauté Takalo-takalo</p>
            </div>
            
            <form id="registerForm" method="POST" action="<?= BASE_URL ?>/includes/register-process.php">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label text-light">
                            <i class="fas fa-id-card me-2"></i>Prénom
                        </label>
                        <input type="text" 
                               class="form-control form-control-serdaigle" 
                               id="firstName" 
                               name="firstName" 
                               required 
                               placeholder="Votre prénom">
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label text-light">
                            <i class="fas fa-id-card me-2"></i>Nom
                        </label>
                        <input type="text" 
                               class="form-control form-control-serdaigle" 
                               id="lastName" 
                               name="lastName" 
                               required 
                               placeholder="Votre nom">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="email" class="form-label text-light">
                        <i class="fas fa-envelope-open-text me-2"></i>Adresse email
                    </label>
                    <input type="email" 
                           class="form-control form-control-serdaigle" 
                           id="email" 
                           name="email" 
                           required 
                           placeholder="votre@email.com">
                </div>
                
                <div class="mb-3">
                    <label for="username" class="form-label text-light">
                        <i class="fas fa-user-circle me-2"></i>Nom d'utilisateur
                    </label>
                    <input type="text" 
                           class="form-control form-control-serdaigle" 
                           id="username" 
                           name="username" 
                           required 
                           placeholder="Choisissez un nom d'utilisateur">
                    <div class="form-text text-light-50">
                        3 à 20 caractères (lettres, chiffres, underscores)
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label text-light">
                            <i class="fas fa-shield-alt me-2"></i>Mot de passe
                        </label>
                        <input type="password" 
                               class="form-control form-control-serdaigle" 
                               id="password" 
                               name="password" 
                               required 
                               placeholder="Créez un mot de passe">
                        <div class="password-strength mt-2">
                            <div class="progress" style="height: 5px;">
                                <div class="progress-bar" id="passwordStrengthBar" role="progressbar"></div>
                            </div>
                            <small class="text-light-50" id="passwordStrengthText"></small>
                        </div>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="confirmPassword" class="form-label text-light">
                            <i class="fas fa-shield-alt me-2"></i>Confirmation
                        </label>
                        <input type="password" 
                               class="form-control form-control-serdaigle" 
                               id="confirmPassword" 
                               name="confirmPassword" 
                               required 
                               placeholder="Confirmez le mot de passe">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="phone" class="form-label text-light">
                        <i class="fas fa-mobile-alt me-2"></i>Téléphone (optionnel)
                    </label>
                    <input type="tel" 
                           class="form-control form-control-serdaigle" 
                           id="phone" 
                           name="phone" 
                           placeholder="+33 1 23 45 67 89">
                </div>
                
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                        <label class="form-check-label text-light-50" for="terms">
                            J'accepte les <a href="#" class="text-bronze">conditions d'utilisation</a> 
                            et la <a href="#" class="text-bronze">politique de confidentialité</a>
                        </label>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="newsletter" name="newsletter">
                        <label class="form-check-label text-light-50" for="newsletter">
                            Je souhaite recevoir la newsletter et les offres spéciales
                        </label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-serdaigle w-100 mb-3" id="submitBtn">
                    <i class="fas fa-user-plus me-2"></i>Créer mon compte
                </button>
                
                <div class="text-center mt-3">
                    <p class="text-light-50 mb-0">
                        Déjà inscrit ? 
                        <a href="<?= BASE_URL ?>/pages/login.php" class="text-bronze">
                            <i class="fas fa-sign-in-alt me-1"></i>Se connecter
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include __DIR__ . '/layout/footer.php'; ?>