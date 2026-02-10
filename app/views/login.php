<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Serpentard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --serpentard-dark: #1a472a;
            --serpentard-medium: #2a623d;
            --serpentard-light: #5d5d5d;
            --serpentard-silver: #aaaaaa;
            --serpentard-green: #2a623d;
            --serpentard-green-light: rgba(42, 98, 61, 0.1);
        }
        
        body {
            background-color: #0d1f0d;
            background-image: 
                radial-gradient(circle at 20% 30%, rgba(26, 71, 42, 0.2) 0%, transparent 20%),
                radial-gradient(circle at 80% 80%, rgba(42, 98, 61, 0.1) 0%, transparent 20%);
            font-family: 'Georgia', serif;
            color: var(--serpentard-silver);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Effet de serpent qui serpente en arrière-plan */
        .snake-decoration {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }
        
        .snake-path {
            position: absolute;
            width: 300px;
            height: 300px;
            border: 2px solid rgba(42, 98, 61, 0.2);
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
            transform: rotate(45deg);
            top: -100px;
            right: -100px;
        }
        
        .snake-path:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 50%;
            left: -80px;
            border-color: rgba(170, 170, 170, 0.15);
        }
        
        .login-container {
            background-color: rgba(13, 31, 13, 0.9);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7),
                        0 0 0 1px rgba(42, 98, 61, 0.3),
                        0 0 20px rgba(42, 98, 61, 0.2) inset;
            padding: 2.5rem;
            position: relative;
            z-index: 1;
            border: 1px solid var(--serpentard-medium);
            overflow: hidden;
        }
        
        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--serpentard-dark), var(--serpentard-silver), var(--serpentard-dark));
        }
        
        .serpentard-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .serpentard-title {
            color: var(--serpentard-silver);
            font-size: 2.2rem;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 0.5rem;
            text-shadow: 0 0 10px rgba(170, 170, 170, 0.5);
        }
        
        .serpentard-subtitle {
            color: var(--serpentard-medium);
            font-style: italic;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
        }
        
        .serpentard-logo {
            font-size: 3rem;
            color: var(--serpentard-green);
            margin-bottom: 1rem;
            text-shadow: 0 0 10px rgba(42, 98, 61, 0.5);
        }
        
        .form-label {
            color: var(--serpentard-silver);
            font-weight: 600;
            margin-bottom: 0.5rem;
        }
        
        .form-control {
            background-color: rgba(26, 71, 42, 0.2);
            border: 1px solid var(--serpentard-medium);
            color: var(--serpentard-silver);
            padding: 0.75rem 1rem;
            border-radius: 8px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            background-color: rgba(42, 98, 61, 0.2);
            border-color: var(--serpentard-silver);
            box-shadow: 0 0 0 0.25rem rgba(42, 98, 61, 0.25);
            color: white;
        }
        
        .form-control::placeholder {
            color: #6c757d;
        }
        
        .input-group-text {
            background-color: rgba(26, 71, 42, 0.4);
            border: 1px solid var(--serpentard-medium);
            color: var(--serpentard-silver);
        }
        
        .btn-serpentard {
            background: linear-gradient(to bottom, var(--serpentard-medium), var(--serpentard-dark));
            color: var(--serpentard-silver);
            border: 1px solid var(--serpentard-green);
            padding: 0.75rem 1.5rem;
            font-weight: bold;
            letter-spacing: 1px;
            border-radius: 8px;
            transition: all 0.3s;
            width: 100%;
            text-transform: uppercase;
        }
        
        .btn-serpentard:hover {
            background: linear-gradient(to bottom, var(--serpentard-green), var(--serpentard-medium));
            color: white;
            border-color: var(--serpentard-silver);
            box-shadow: 0 0 15px rgba(42, 98, 61, 0.5);
            transform: translateY(-2px);
        }
        
        .btn-serpentard:active {
            transform: translateY(0);
        }
        
        .login-footer {
            text-align: center;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(42, 98, 61, 0.3);
            color: var(--serpentard-light);
            font-size: 0.9rem;
        }
        
        .forgot-password {
            color: var(--serpentard-silver);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .forgot-password:hover {
            color: white;
            text-decoration: underline;
        }
        
        .password-toggle {
            cursor: pointer;
            color: var(--serpentard-silver);
        }
        
        .password-toggle:hover {
            color: white;
        }
        
        /* Animation serpent */
        @keyframes snakeMove {
            0% { transform: translateX(-100px) rotate(45deg); }
            100% { transform: translateX(100px) rotate(45deg); }
        }
        
        .snake-path {
            animation: snakeMove 20s infinite alternate ease-in-out;
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
    <!-- Décorations serpentard -->
    <div class="snake-decoration">
        <div class="snake-path"></div>
        <div class="snake-path"></div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-container">
                    <div class="serpentard-header">
                        <div class="serpentard-logo">
                            <i class="fas fa-hat-wizard"></i>
                        </div>
                        <h1 class="serpentard-title">Salon Serpentard</h1>
                        <p class="serpentard-subtitle">"Quiconque possède l'ambition trouvera sa place ici"</p>
                    </div>
                    
                    <form id="loginForm">
                        <div class="mb-3">
                            <label for="username" class="form-label">
                                <i class="fas fa-user me-2"></i>Nom d'utilisateur
                            </label>
                            <input type="text" class="form-control" id="username" placeholder="Entrez votre nom d'utilisateur" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="password" class="form-label">
                                <i class="fas fa-key me-2"></i>Mot de passe
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
                                <span class="input-group-text password-toggle" id="togglePassword">
                                    <i class="fas fa-eye"></i>
                                </span>
                            </div>
                            <div class="text-end mt-2">
                                <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-serpentard mb-3">
                            <i class="fas fa-sign-in-alt me-2"></i>Se connecter
                        </button>
                        
                        <div class="login-footer">
                            <p>Première visite à la Salle sur Demande ? <a href="#" class="forgot-password">Demandez l'accès au Préfet</a></p>
                            <p class="mb-0 mt-2"><small>© Slytherin Common Room - Poudlard</small></p>
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
            const icon = this.querySelector('i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
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
                
                submitBtn.innerHTML = '<i class="fas fa-check me-2"></i>Connexion réussie';
                submitBtn.style.background = 'linear-gradient(to bottom, #2a623d, #1a472a)';
                
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.style.background = '';
                    
                    // Ici, vous pourriez rediriger l'utilisateur ou faire une requête AJAX
                    alert(`Bienvenue ${username} ! Accès au salon Serpentard accordé.`);
                }, 1500);
            } else {
                alert('Veuillez remplir tous les champs.');
            }
        });
    </script>
</body>
</html>