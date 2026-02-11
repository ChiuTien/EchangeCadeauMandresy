    </main>

    <footer class="serpentard-gradient text-light py-4 mt-5 border-top border-warning">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="text-warning">
                        <i class="fas fa-dragon me-2"></i>Takalo-takalo
                    </h5>
                    <p class="text-light-50">
                        Plateforme d'échange d'objets entre utilisateurs.
                        Échangez, partagez, découvrez!
                    </p>
                    <div class="social-icons">
                        <a href="#" class="text-light me-3"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-light me-3"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-light"><i class="fab fa-instagram fa-lg"></i></a>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4">
                    <h5 class="text-warning">Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?= BASE_URL ?>/index.php" class="text-light-50 text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i>Accueil</a></li>
                        <li><a href="<?= BASE_URL ?>/pages/my-objects.php" class="text-light-50 text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i>Mes objets</a></li>
                        <li><a href="<?= BASE_URL ?>/pages/exchanges.php" class="text-light-50 text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i>Échanges en cours</a></li>
                        <li><a href="#" class="text-light-50 text-decoration-none">
                            <i class="fas fa-chevron-right me-2"></i>Comment ça marche?</a></li>
                    </ul>
                </div>
                
                <div class="col-md-4 mb-4">
                    <h5 class="text-warning">Membres du projet</h5>
                    <div class="bg-dark bg-opacity-50 p-3 rounded">
                        <p class="mb-1 text-light-50">
                            <strong>Takalo takalo</strong>
                        </p>
                        <p class="mb-1">
                            <span class="text-warning">Étudiants:</span><br>
                            • Nom Prénom - ETUXXXXXX<br>
                            • Nom Prénom - ETUXXXXXX<br>
                            • Nom Prénom - ETUXXXXXX
                        </p>
                        <p class="mb-0 mt-2 small text-light-50">
                            Projet académique - Février 2026
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="row pt-3 border-top border-secondary">
                <div class="col-md-6">
                    <p class="mb-0 small text-light-50">
                        &copy; 2026 Takalo-takalo. Tous droits réservés.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="#" class="text-light-50 small me-3 text-decoration-none">Mentions légales</a>
                    <a href="#" class="text-light-50 small me-3 text-decoration-none">Politique de confidentialité</a>
                    <a href="#" class="text-light-50 small text-decoration-none">Contact</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS local -->
    <script src="<?= BASE_URL ?>/assets/lib/bootstrap-5.3.0/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts personnalisés -->
    <script src="<?= BASE_URL ?>/assets/js/main.js"></script>
    
    <?php if (isset($page_js)): ?>
    <script src="<?= BASE_URL ?>/assets/js/<?= $page_js ?>"></script>
    <?php endif; ?>
    
</body>
</html>