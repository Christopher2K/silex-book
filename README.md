#Démo appli PHP avec le framwork Silex

Cette appli a été faite suite à mon apprentissage de l'utilisation du framwork Silex. Le moteur de template utilisé est Twig.

###Configuration
* Serveur Web Apache PHP MySQL fonctionnel.
* Mod_rewrite apache.

###Installation
1. Exécuter dans l'ordre les scripts SQL dans \db
    * database.sql
    * structure.sql
    * content.sql

2. Créer un host du nom de votre choix dans Apache ayant pour dossier root le dossier **/web**.

3. Changer si besoin la configuration du port MySQL dans **/app/config/prod.php**.

4. Accéder à l'application via l'host choisi.

=> Les dépendances de ce projet sont configurées dans le fichier composer.json. J'ai choisi d'upload ces dépendances cependant vous pouvez les mettre à jour avec un `composer update`.

Liens :
    * Utilisation de composer : https://getcomposer.org/doc/
    * Documentation de Silex : http://silex.sensiolabs.org/documentation
    * Documentation de Twig : http://twig.sensiolabs.org/documentation


Christopher2K - Etudiant en L3 Miage


