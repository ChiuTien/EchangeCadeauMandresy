<?php

	use app\middlewares\SecurityHeadersMiddleware;	
	use flight\Engine;
	use flight\net\Router;
	use app\controllers\ControllerUser;

/** 
 * @var Router $router 
 * @var Engine $app
 */

// This wraps all routes in the group with the SecurityHeadersMiddleware
$router->group('', function(Router $router) use ($app) {

	$router->get('/', function() use ($app) {
		$app->render('login');
	});

	$router->post('/accueil', function() use ($app) {
		$nom = $_POST['username'];
		$mdp = $_POST['password'];

		if(empty($nom) || empty($mdp)) {
			$app->flash('error', 'Veuillez remplir tous les champs.');
			$app->redirect('/');
		} else {
			// $controllerUser = new ControllerUser();
			// $users = $controllerUser->listUser();
		}

		$app->render('accueil', ['nom' => $nom, 'mdp' => $mdp]);
	});
	
}, [ SecurityHeadersMiddleware::class ]);