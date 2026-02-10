<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Portail</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --ink: #0f172a;
            --muted: #475569;
            --line: #e2e8f0;
            --surface: #ffffff;
            --surface-alt: #f8fafc;
            --accent: #1f4b8f;
            --accent-strong: #0b3b7a;
            --accent-soft: rgba(31, 75, 143, 0.12);
            --success: #059669;
            --success-soft: rgba(5, 150, 105, 0.12);
        }
        
        body {
            background-color: #eef2f7;
            background-image:
                radial-gradient(circle at 20% 15%, rgba(31, 75, 143, 0.12) 0%, transparent 35%),
                radial-gradient(circle at 80% 10%, rgba(15, 23, 42, 0.08) 0%, transparent 30%),
                linear-gradient(135deg, #f8fafc, #e8eef6 55%, #f1f5f9);
            font-family: 'IBM Plex Sans', 'Helvetica Neue', Arial, sans-serif;
            color: var(--ink);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow-x: hidden;
            padding: 20px 0;
        }
        
        .registration-container {
            background-color: var(--surface);
            border-radius: 16px;
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12),
                        0 0 0 1px rgba(148, 163, 184, 0.35);
            padding: 2.75rem;
            position: relative;
            z-index: 1;
            border: 1px solid rgba(148, 163, 184, 0.35);
            overflow: hidden;
            width: 100%;
            max-width: 600px;
        }
        
        .registration-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--accent-strong), var(--accent), #60a5fa);
        }
        
        .registration-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .registration-title {
            color: var(--ink);
            font-family: 'Merriweather', 'Times New Roman', serif;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }
        
        .registration-subtitle {
            color: var(--muted);
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--accent);
            text-decoration: none;
            margin-bottom: 1.5rem;
            font-weight: 500;
        }
        
        .back-link:hover {
            color: var(--accent-strong);
            text-decoration: underline;
        }
        
        .form-stack {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 1.25rem;
        }
        
        .form-row .form-field {
            flex: 1;
            min-width: 200px;
        }
        
        .form-field {
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
        }
        
        .form-label {
            color: var(--ink);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            background-color: var(--surface-alt);
            border: 1px solid var(--line);
            color: var(--ink);
            padding: 0.75rem 1rem;
            border-radius: 10px;
            transition: all 0.3s;
            width: 100%;
        }
        
        .form-control:focus {
            background-color: #ffffff;
            border-color: var(--accent);
            box-shadow: 0 0 0 0.2rem var(--accent-soft);
            color: var(--ink);
        }
        
        .form-control::placeholder {
            color: rgba(71, 85, 105, 0.6);
        }
        
        .form-control.is-valid {
            border-color: var(--success);
            box-shadow: 0 0 0 0.2rem var(--success-soft);
        }
        
        .form-control.is-invalid {
            border-color: #dc2626;
            box-shadow: 0 0 0 0.2rem rgba(220, 38, 38, 0.12);
        }
        
        .form-text {
            color: var(--muted);
            font-size: 0.85rem;
            margin-top: 4px;
        }
        
        .password-strength {
            height: 4px;
            background-color: var(--line);
            border-radius: 2px;
            margin-top: 8px;
            overflow: hidden;
        }
        
        .password-strength-bar {
            height: 100%;
            width: 0;
            background-color: #dc2626;
            border-radius: 2px;
            transition: width 0.3s ease, background-color 0.3s ease;
        }
        
        .password-strength-text {
            font-size: 0.85rem;
            margin-top: 4px;
            text-align: right;
        }
        
        .checkbox-container {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            margin: 1rem 0;
        }
        
        .checkbox-container input[type="checkbox"] {
            margin-top: 4px;
            accent-color: var(--accent);
        }
        
        .checkbox-container label {
            color: var(--ink);
            font-size: 0.95rem;
            line-height: 1.4;
        }
        
        .checkbox-container a {
            color: var(--accent);
            text-decoration: none;
        }
        
        .checkbox-container a:hover {
            text-decoration: underline;
        }
        
        .btn-register {
            background: linear-gradient(180deg, var(--success), #047857);
            color: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.2);
            padding: 0.85rem 1.5rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            border-radius: 10px;
            transition: all 0.3s;
            width: 100%;
            margin-top: 1rem;
        }
        
        .btn-register:hover {
            background: linear-gradient(180deg, #10b981, var(--success));
            color: #ffffff;
            border-color: rgba(15, 23, 42, 0.25);
            box-shadow: 0 16px 30px rgba(5, 150, 105, 0.25);
            transform: translateY(-2px);
        }
        
        .btn-register:disabled {
            background: #94a3b8;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }
        
        .btn-register:active {
            transform: translateY(0);
        }
        
        .registration-footer {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--line);
            color: var(--muted);
            font-size: 0.9rem;
        }
        
        .login-link {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .login-link:hover {
            color: var(--accent-strong);
            text-decoration: underline;
        }
        
        /* Animation pour les indicateurs de validation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-5px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .valid-feedback, .invalid-feedback {
            animation: fadeIn 0.3s ease;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .registration-container {
                padding: 1.5rem;
            }
            
            .registration-title {
                font-size: 1.8rem;
            }
            
            .form-row {
                flex-direction: column;
                gap: 1.25rem;
            }
            
            .form-row .form-field {
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="registration-container">
                    <a href="login.html" class="back-link">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 13L5 8L10 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Retour à la connexion
                    </a>
                    
                    <div class="registration-header">
                        <h1 class="registration-title">Créer un compte</h1>
                        <p class="registration-subtitle">Remplissez le formulaire ci-dessous pour créer votre compte.</p>
                    </div>
                    
                    <form id="registrationForm" method="post" action="inscription" class="form-stack">
                        <div class="form-row">
                            <div class="form-field">
                                <label for="firstName" class="form-label">Prénom</label>
                                <input type="text" class="form-control" id="firstName" placeholder="Entrez votre prénom" required>
                                <div class="invalid-feedback">Veuillez entrer un prénom valide.</div>
                            </div>
                            
                            <div class="form-field">
                                <label for="lastName" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Entrez votre nom" required>
                                <div class="invalid-feedback">Veuillez entrer un nom valide.</div>
                            </div>
                        </div>
                        
                        <div class="form-field">
                            <label for="email" class="form-label">Adresse email</label>
                            <input type="email" class="form-control" id="email" placeholder="exemple@domaine.com" required>
                            <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                        </div>
                        
                        <div class="form-field">
                            <label for="username" class="form-label">Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="username" placeholder="Choisissez un nom d'utilisateur" required>
                            <div class="form-text">3 à 20 caractères, lettres, chiffres et underscores uniquement.</div>
                            <div class="invalid-feedback">Ce nom d'utilisateur est invalide ou déjà pris.</div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-field">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" placeholder="Créez un mot de passe" required>
                                <div class="password-strength">
                                    <div class="password-strength-bar" id="passwordStrengthBar"></div>
                                </div>
                                <div class="password-strength-text" id="passwordStrengthText">Force du mot de passe: faible</div>
                                <div class="invalid-feedback">Le mot de passe doit contenir au moins 8 caractères.</div>
                            </div>
                            
                            <div class="form-field">
                                <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Retapez votre mot de passe" required>
                                <div class="invalid-feedback">Les mots de passe ne correspondent pas.</div>
                            </div>
                        </div>
                        
                        <div class="form-field">
                            <label for="phone" class="form-label">Téléphone (optionnel)</label>
                            <input type="tel" class="form-control" id="phone" placeholder="+33 1 23 45 67 89">
                            <div class="form-text">Format international recommandé.</div>
                        </div>
                        
                        <div class="checkbox-container">
                            <input type="checkbox" id="terms" name="terms" required>
                            <label for="terms">
                                J'accepte les <a href="#" target="_blank">Conditions d'utilisation</a> et la <a href="#" target="_blank">Politique de confidentialité</a>.
                            </label>
                        </div>
                        
                        <div class="checkbox-container">
                            <input type="checkbox" id="newsletter" name="newsletter">
                            <label for="newsletter">
                                Je souhaite recevoir les newsletters et les mises à jour du portail.
                            </label>
                        </div>
                        
                        <button type="submit" class="btn-register" id="submitBtn" disabled>
                            Créer mon compte
                        </button>
                        
                        <div class="registration-footer">
                            <p>Vous avez déjà un compte ? <a href="login.html" class="login-link">Connectez-vous ici</a></p>
                            <p class="mb-0 mt-2"><small>© Portail interne - 2026</small></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS avec Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Éléments DOM
        const registrationForm = document.getElementById('registrationForm');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const passwordStrengthBar = document.getElementById('passwordStrengthBar');
        const passwordStrengthText = document.getElementById('passwordStrengthText');
        const termsCheckbox = document.getElementById('terms');
        const submitBtn = document.getElementById('submitBtn');
        
        // Validation en temps réel
        const validateField = (field, validationFn) => {
            const value = field.value.trim();
            const isValid = validationFn(value);
            
            if (value === '') {
                field.classList.remove('is-valid', 'is-invalid');
                return false;
            }
            
            if (isValid) {
                field.classList.remove('is-invalid');
                field.classList.add('is-valid');
                return true;
            } else {
                field.classList.remove('is-valid');
                field.classList.add('is-invalid');
                return false;
            }
        };
        
        // Fonctions de validation
        const validateName = (name) => name.length >= 2 && name.length <= 50;
        const validateEmail = (email) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        const validateUsername = (username) => /^[a-zA-Z0-9_]{3,20}$/.test(username);
        const validatePassword = (password) => password.length >= 8;
        
        // Validation de la force du mot de passe
        const checkPasswordStrength = (password) => {
            let strength = 0;
            
            // Longueur
            if (password.length >= 8) strength += 1;
            if (password.length >= 12) strength += 1;
            
            // Complexité
            if (/[a-z]/.test(password)) strength += 1;
            if (/[A-Z]/.test(password)) strength += 1;
            if (/[0-9]/.test(password)) strength += 1;
            if (/[^a-zA-Z0-9]/.test(password)) strength += 1;
            
            // Mise à jour de l'indicateur visuel
            let width = 0;
            let color = '#dc2626';
            let text = 'Faible';
            
            if (strength <= 2) {
                width = 33;
                color = '#dc2626';
                text = 'Faible';
            } else if (strength <= 4) {
                width = 66;
                color = '#f59e0b';
                text = 'Moyenne';
            } else {
                width = 100;
                color = '#059669';
                text = 'Forte';
            }
            
            passwordStrengthBar.style.width = `${width}%`;
            passwordStrengthBar.style.backgroundColor = color;
            passwordStrengthText.textContent = `Force du mot de passe: ${text}`;
            passwordStrengthText.style.color = color;
            
            return strength;
        };
        
        // Validation de la correspondance des mots de passe
        const validatePasswordMatch = () => {
            const password = passwordInput.value;
            const confirmPassword = confirmPasswordInput.value;
            
            if (confirmPassword === '') {
                confirmPasswordInput.classList.remove('is-valid', 'is-invalid');
                return false;
            }
            
            if (password === confirmPassword && password.length >= 8) {
                confirmPasswordInput.classList.remove('is-invalid');
                confirmPasswordInput.classList.add('is-valid');
                return true;
            } else {
                confirmPasswordInput.classList.remove('is-valid');
                confirmPasswordInput.classList.add('is-invalid');
                return false;
            }
        };
        
        // Vérification du formulaire complet
        const checkFormValidity = () => {
            const fields = [
                'firstName', 'lastName', 'email', 'username', 'password'
            ];
            
            let allValid = true;
            
            fields.forEach(fieldId => {
                const field = document.getElementById(fieldId);
                if (!field.classList.contains('is-valid')) {
                    allValid = false;
                }
            });
            
            // Vérifier la correspondance des mots de passe
            if (!validatePasswordMatch()) {
                allValid = false;
            }
            
            // Vérifier l'acceptation des conditions
            if (!termsCheckbox.checked) {
                allValid = false;
            }
            
            // Activer/désactiver le bouton de soumission
            submitBtn.disabled = !allValid;
            
            return allValid;
        };
        
        // Événements de validation en temps réel
        document.getElementById('firstName').addEventListener('input', (e) => {
            validateField(e.target, validateName);
            checkFormValidity();
        });
        
        document.getElementById('lastName').addEventListener('input', (e) => {
            validateField(e.target, validateName);
            checkFormValidity();
        });
        
        document.getElementById('email').addEventListener('input', (e) => {
            validateField(e.target, validateEmail);
            checkFormValidity();
        });
        
        document.getElementById('username').addEventListener('input', (e) => {
            validateField(e.target, validateUsername);
            checkFormValidity();
        });
        
        passwordInput.addEventListener('input', (e) => {
            validateField(e.target, validatePassword);
            checkPasswordStrength(e.target.value);
            validatePasswordMatch();
            checkFormValidity();
        });
        
        confirmPasswordInput.addEventListener('input', () => {
            validatePasswordMatch();
            checkFormValidity();
        });
        
        termsCheckbox.addEventListener('change', checkFormValidity);
        
        // Gestion de la soumission du formulaire
        registrationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!checkFormValidity()) {
                alert('Veuillez corriger les erreurs dans le formulaire.');
                return;
            }
            
            // Animation de soumission
            submitBtn.disabled = true;
            submitBtn.innerHTML = `
                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Création du compte...
            `;
            
            // Simuler une requête serveur
            setTimeout(() => {
                // Récupérer les données du formulaire
                const formData = {
                    firstName: document.getElementById('firstName').value,
                    lastName: document.getElementById('lastName').value,
                    email: document.getElementById('email').value,
                    username: document.getElementById('username').value,
                    phone: document.getElementById('phone').value,
                    newsletter: document.getElementById('newsletter').checked
                };
                
                // Message de succès
                submitBtn.innerHTML = '<span style="margin-right: 8px;">✅</span> Compte créé avec succès!';
                submitBtn.style.background = 'linear-gradient(180deg, #059669, #047857)';
                
                // Redirection simulée
                setTimeout(() => {
                    alert(`Félicitations ${formData.firstName} ! Votre compte a été créé avec succès. Vous allez être redirigé vers la page de connexion.`);
                    window.location.href = 'login.html';
                }, 1500);
                
            }, 2000);
        });
        
        // Initialisation
        document.addEventListener('DOMContentLoaded', () => {
            // Animation du titre
            const title = document.querySelector('.registration-title');
            const originalText = title.textContent;
            title.textContent = '';
            
            let i = 0;
            const typeWriter = () => {
                if (i < originalText.length) {
                    title.textContent += originalText.charAt(i);
                    i++;
                    setTimeout(typeWriter, 50);
                }
            };
            
            setTimeout(typeWriter, 500);
        });
    </script>
</body>
</html>