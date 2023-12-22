# Structurer une application avec MVC

Voici un petit site internet de 2 pages.    
On va à travers cet exemple mettre en place l'architecture MVC sur le projet.


# CODAGE

Par quoi commencer ?

## Contexte

MVC =>    
Model /    
View /    
Controller /    
index.php => page utilisée comme entrée principale du point de vue utilisateur
    Routeur du projet 

### 1ère étape : Mettre en place le routeur / mettre en place la structure de nos fichiers

En fonction de l'URL    
    http://localhost/votrechemin/index => index.php   
    http://localhost/votrechemin/products => va afficher la liste des produits

### 2ème étape : Mettre en place les vues (views / tpl.php)

Vues HTML 

### 3ème étape : Mettre en place les controllers (classes)

Mettre en place la logique PHP

### 4ème étape : Mettre en place la modélisation de la BDD

MCD / Mocodo / Entités / Relations etc.
Création la BDD

Qu'est-ce que je veux rendre dynamique dans le site ?   

products   
-------    
id : unique / auto incrémenter   
title : varchar(50)  
subtitle : varchar(255)  
picture : varchar(255)  
description : text  


### 5ème étape : Créer les modèles qui nous permettront de récupérer les données dans la BDD

PDO / Rajouter une class Database qui instancie PDO    
Models/Product.php => lié à la table product

### 6ème étape : Appeler les modèles (les instancier) pour donner aux vues les données provenant de la BDD

Passage de paramètre et d'arguments entre le fichier index.php / controllers (paramètres d'URL) /   
Controller -> instancier le modèle pour récupérer les données de la base (5ème étape)  
Controller -> appeler la vue en lui passant les données   