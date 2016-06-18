Kazanac
=======


Site associatif .....

L'application sera une gestion des membres




----------


Premier import du projet, voici les commandes a executer :

> Installation des dépendances

 	php composer.phar update 

> Création de la base de données et mise à jour

    php app/console doctrine:databse:create
    php app/console doctrine:schema:update --force

> Création d'un utilisateur admin et attribution du rôle
    
    php app/console fos:user:create
    php app/console fos:user:promote / ajouter le role : ROLE_ADMIN


A chaque import du projet 


> Installation des dépendances

	php composer.phar update

> Installation des assets

	php app/console assets:install

> Mise à jour de la base données

	php app/console doctrine:schema:update --force
