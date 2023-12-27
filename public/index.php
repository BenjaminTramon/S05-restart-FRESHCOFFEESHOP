<?php  
    // Point d'entrée de notre projet

    // http://localhost/S05/videos_yannick/S05-restart-FRESHCOFFEESHOP/public/ => '/' => affichera l'index du site (la page home)

    // http://localhost/S05/videos_yannick/S05-restart-FRESHCOFFEESHOP/products/ => '/products' => affichera les produits du site (tous les produits)


    require __DIR__ . "/../vendor/autoload.php";

    $router = new AltoRouter();
    $router->setBasePath("/S05/videos_yannick/S05-restart-FRESHCOFFEESHOP/public");

    // Définir mes URLS

    // Index
    $router->map('GET', '/', ['method'=>'homepage', 'controller'=>'mainController'], 'page_index');
    // Products : afficher les produits du site
    $router->map('GET', '/products', ['method'=>'productspage', 'controller'=>'mainController'], 'page_products');

    // $match va contenir soit un tableau, soit un booléen = false
    $match = $router->match();

    var_dump($match);

    if($match !== false) {

        $matchRoute = $match['target'];
        var_dump($matchRoute);

    }
