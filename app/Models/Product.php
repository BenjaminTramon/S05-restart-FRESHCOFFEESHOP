<?php
    class Product {

        // La représentation sous forme d'objet de ma table dans la BDD : products

        // proptiétés
        private $id;
        private $title;
        private $subtitle;
        private $picture;
        private $description;

        // Les méthodes

        // Active records (find / findAll)
        public function findAll() {
            $sql = 'SELECT * FROM products';
            $pdo = Database::getPDO();

            $pdoStatement = $pdo->query($sql);

            // un tableau d'objets de la class Product
            $products = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Product');

            return $products;
        }

        public function find($id) {
            $sql = 'SELECT * FROM products WHERE id = '.$id;
            $pdo = Database::getPDO();

            $pdoStatement = $pdo->query($sql);

            // un tableau d'objets de la class Product
            $product = $pdoStatement->fetchObject('Product');

            return $product;
        }

        // Les getters/les setters

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */ 
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of subtitle
         */ 
        public function getSubtitle()
        {
                return $this->subtitle;
        }

        /**
         * Set the value of subtitle
         *
         * @return  self
         */ 
        public function setSubtitle($subtitle)
        {
                $this->subtitle = $subtitle;

                return $this;
        }

        /**
         * Get the value of picture
         */ 
        public function getPicture()
        {
                return $this->picture;
        }

        /**
         * Set the value of picture
         *
         * @return  self
         */ 
        public function setPicture($picture)
        {
                $this->picture = $picture;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }
    }