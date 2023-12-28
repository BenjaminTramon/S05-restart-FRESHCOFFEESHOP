<?php

    class mainController {

        /**
         * Affichage de la page home
         * 
         * @return void
         */

        public function homepage() {
            $this->show("content_home");
        }

        /**
         * Affichage de la page produits
         * Affichera également les produits provenant de la DB 
         * 
         * @return void
         */

        public function productspage() {

        // Instancier le modèle -> interragit avec la DB
        $productModel = new Product();
        $productsFromModel = $productModel->findAll();

            $this->show("content_products", ["products" => $productsFromModel]);
        }

        private function show($viewPage, $viewData = []) {

            require __DIR__. "/../Views/parts/header.tpl.php";
            require __DIR__. "/../Views/$viewPage.tpl.php";
            require __DIR__. "/../Views/parts/footer.tpl.php";

        }

    }