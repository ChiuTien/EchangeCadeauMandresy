<!DOCTYPE html>
<html lang="fr">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Portail</title>
    <!-- Bootstrap 5 CSS (inclut ses propres icônes) -->
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
        }
        
        .icon-user::before,
        .icon-key::before,
        .icon-login::before,
        .icon-eye::before,
        .icon-eye-slash::before,
        .icon-wizard::before,
        .icon-check::before {
            content: '';
        }
        
        .login-container {
            background-color: var(--surface);
            border-radius: 16px;
            box-shadow: 0 24px 60px rgba(15, 23, 42, 0.12),
                        0 0 0 1px rgba(148, 163, 184, 0.35);
            padding: 2.75rem;
            position: relative;
            z-index: 1;
            border: 1px solid rgba(148, 163, 184, 0.35);
            overflow: hidden;
        }
        
        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--accent-strong), var(--accent), #60a5fa);
        }
        
        .serpentard-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .serpentard-title {
            color: var(--ink);
            font-family: 'Merriweather', 'Times New Roman', serif;
            font-size: 2rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
        }
        
        .serpentard-subtitle {
            color: var(--muted);
            font-size: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .serpentard-logo {
            display: none;
        }
        
        .form-label {
            color: var(--ink);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-stack {
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
        }

        .form-field {
            display: flex;
            flex-direction: column;
            gap: 0.35rem;
        }
        
        .form-control {
            background-color: var(--surface-alt);
            border: 1px solid var(--line);
            color: var(--ink);
            padding: 0.75rem 1rem;
            border-radius: 10px;
            transition: all 0.3s;
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
        
        .input-group-text {
            background-color: #eef2f7;
            border: 1px solid var(--line);
            color: var(--muted);
            cursor: pointer;
        }
        
        .input-group-text:hover {
            background-color: #e2e8f0;
        }
        
        .btn-serpentard {
            background: linear-gradient(180deg, var(--accent), var(--accent-strong));
            color: #ffffff;
            border: 1px solid rgba(15, 23, 42, 0.2);
            padding: 0.85rem 1.5rem;
            font-weight: 600;
            letter-spacing: 0.3px;
            border-radius: 10px;
            transition: all 0.3s;
            width: 100%;
        }
        
        .btn-serpentard:hover {
            background: linear-gradient(180deg, #2b5fb3, var(--accent));
            color: #ffffff;
            border-color: rgba(15, 23, 42, 0.25);
            box-shadow: 0 16px 30px rgba(31, 75, 143, 0.25);
            transform: translateY(-2px);
        }
        
        .btn-serpentard:active {
            transform: translateY(0);
        }
        
        .login-footer {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--line);
            color: var(--muted);
            font-size: 0.9rem;
        }
        
        .forgot-password {
            color: var(--accent);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .forgot-password:hover {
            color: var(--accent-strong);
            text-decoration: underline;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .login-container {
                padding: 1.5rem;
            }
            
            .serpentard-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-container">
                    <div class="serpentard-header">
                        <div class="serpentard-logo"></div>
                        <h1 class="serpentard-title">Acces au portail</h1>
                        <p class="serpentard-subtitle">Entrez vos identifiants pour continuer.</p>
                    </div>
                    
                    <form id="loginForm" method="post" action="accueil" class="form-stack">
                        <div class="form-field">
                            <label for="username" class="form-label">
                                <span class="icon-user"></span>Nom d'utilisateur
                            </label>
                            <input type="text" class="form-control" id="username" placeholder="Entrez votre nom d'utilisateur" required>
                        </div>
                        
                        <div class="form-field">
                            <label for="password" class="form-label">
                                <span class="icon-key"></span>Mot de passe
                            </label>
                            <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
                            <div class="text-end mt-2">
                                <a href="#" class="forgot-password">Mot de passe oublie ?</a>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-serpentard mb-3">
                            Se connecter
                        </button>
                        
                        <div class="login-footer">
                            <p>Pas encore de compte ? <a href="#" class="forgot-password">Contacter l'administrateur</a></p>
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
        // Fonction pour afficher/masquer le mot de passe
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const icon = this.querySelector('span');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.className = 'icon-eye-slash';
            } else {
                passwordInput.type = 'password';
                icon.className = 'icon-eye';
            }
        });
        
        // Gestion de la soumission du formulaire
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            
            // Simulation de validation (à remplacer par votre logique)
            if (username && password) {
                // Animation de succès
                const submitBtn = document.querySelector('.btn-serpentard');
                const originalText = submitBtn.innerHTML;
                
                submitBtn.innerHTML = 'Connexion reussie';
                submitBtn.style.background = 'linear-gradient(180deg, #2f6f4e, #24553d)';
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.background = '';
                    
                    // Ici, vous pourriez rediriger l'utilisateur ou faire une requête AJAX
                    alert(`Bienvenue ${username} ! Connexion reussie.`);
                }, 1500);
            } else {
                alert('Veuillez remplir tous les champs.');
            }
        });
        
        // Petit effet de frappe pour le titre
        document.addEventListener('DOMContentLoaded', function() {
            const title = document.querySelector('.serpentard-title');
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
            
            // Démarrer l'animation après un délai
            setTimeout(typeWriter, 500);
        });
    </script>
</body>
</html>