<!-- 
1- Qu'est-ce qu'un Framework . Donnez différents avantages et inconvénients.
	- C'est une infrastructure prés defini avec une architecture  des bibliothéque ect
	- les avantage sont la simplicité et le gain de temps pour les developpeurs
	- l'inconvegnent c'est la prise en main pas facile

2- Qu'est qu'un ORM et à quoi cela sert-il ? Quel est l'ORM par défaut utilisé avec symfony ?
	-mapping objet relationnel: il manipule lui même la base de donnée 
	- ORM par defaut sur symfony est doctrine

3- A quoi sert Composer et que permet-il d'éviter ?
	-il sert a installer des bibliothéques utilise pour notre projet

4- Qu'est-ce que le service routing ? Décrivez comment symfony attrape une route, puis ce qu'il se passe ensuite jusqu'à la réponse au navigateur. Décrivez ce qu'il se passe au niveau d'apache et de php.


5- Créer un projet symfony 3.4. Vous pouvez récupérer celui que j'ai mis en ligne : git clone https://bitbucket.org/fsanter/esv_symfony.git

6- Installer ensuite les vendors, qui ne sont pas versionnés : composer update

7- Connectez cette application à la base de donnée de l'exercice PHP BDD : configurez le fichier parameter.yml.

8- Modélisez à nouveau la classe stagiaire des exercices précédents, cette fois-ci en passant par la ligne de commande : php bin/console doctrine:generate:entity

9- Modélisez une autre classe "Competence", et la lier à la classe stagiaire en tenant compte de ceci : un stagiaire peut avoir plusieurs compétences, et une compétence peut être liée à plusieurs stagiaires.

10- Créez le formulaire qui permet d'ajouter dans la base une compétence : php bin/console doctrine:generate:form AppBundle:Competence

11- Créez également un formulaire qui permet d'ajouter dans la base un stagiaire. Ce formulaire doit proposer de lier des compétences à ce stagiaire.

12- Créez les pages web (route, controller, template) qui affichent ces formulaires.

13- Gérez les validations grâce aux annotations (Assert) en forçant tous les champs à être obligatoires, le code postal à 5 chiffres et le téléphone à 10 chiffres.

 

Supplément cadeau :

14- Sécurisez ces pages formulaires en ne les rendant accessibles qu’aux utilisateurs qui ont le rôle ROLE_ADMIN (Créer le formulaire d'identification, configurez le fichier security.yml, etc.)-->