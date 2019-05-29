<!--
1- Quelles sont les différences entre le langage orienté objet et le style procédural ? Donnez les avantages et les inconvénients de chacun d'entre d'eux.


2- Comment déclare-t-on et instancie-t-on un objet en PHP ?

	-On le déclare dans un variable avec là méthode magique new qui va instancier

3- A quoi sert un constructeur ?

	- Un constructeur est une méthode qui va nous permettre de rendre notre classe immédiatement opérationnelle et utilisable en définissant des propriétés dès qu’un utilisateur va vouloir créer une nouvelle instance de cette classe.

4- Quelles sont les rôles des accesseurs / mutateurs ?

	-accesseur = getter
	-mutateur = setter

	les getters sont des fonctions qui te permettent de récupérer la valeur d'une variable declarée "private" dans ta classe.
	Le setter lui va te permettre d'affecter une valeur a l'un de ses attributs 

5- Quelles sont les différences entre des propriétés/méthodes privées et publiques ?
	- c'est la visibilité qui sont respectivement défini dans la classe

6- Qu'est-ce que l'héritage ? Quel est le mot-clé utilisé en PHP pour l'héritage ?
	-l'héritage d'une classe va affecté les propriétés de la classe mere à la classe fille.
	-le mots clé est "extends"

7- Qu'est-ce qu'une interface ? Avec quel mot-clé une classe PHP peut-elle implémenter une interface ?
	-une classe qui va permettre de créer des plans pour la création de futures classes
	
	-implements
8- Qu'est-ce qu'une classe abstraite ?

	-permet de définir dans une classe mère des méthodes qui devront être définies dans les classes filles

9- Qu'est-ce qu'une méthode magique en PHP ? Donnez quelques exemples et expliquez leur utilité.
	-Une méthode magique est une méthode qui, si elle est présente dans votre classe, sera appelée lors de tel ou tel évènement
	__construct()
	__to string()

10- Quel opérateur en PHP permet de savoir si une variable objet est bien une instance d'une classe en particulier ?

	-this


11- Ecrivez une classe PHP qui modélise un stagiaire : id, created_at, name, phone, birthday. Cette classe doit contenir les propriétés, le constructeur et les getters/setters correspondants.

12- Utilisez cette classe dans un script PHP, en l'important grâce à un autoload PHP. Instancier un stagiaire et donner une valeur à chacune de ses propriétés.

-->

<?php 
    class Stagiaire {
        private $id;
        private $createdAt;
		private $name;
        private $phone;
        private $dateNaissance;
       
        public function __construct($name, $phone, $dateNaissance, $id="", $createdAt="")
        {
            $this->setName($name);
            $this->setPhone($phone);
            $this->setDateNaissance($dateNaissance);
            $this->setId($id);
            $this->setCreatedAt($createdAt);
        }

        // getter/setter
        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getCreatedAt()
        {
            return $this->createdAt;
        }

        /**
         * @param mixed $createdAt
         */
        public function setCreatedAt($createdAt)
        {
            $this->createdAt = $createdAt;
        }

        public function getName()  {
            return $this->name;
        }
        public function setName($Name)
            $this->name = $name;
        }
        public function getPhone()  {
            return $this->phone;

        public function setPhone($phone) {
            $this->phone = $phone;
        }
        public function getDateNaissance()  {
            return $this->dateNaissance;
        }
        public function setDateNaissance($dateNaissance) {
            $this->dateNaissance = $dateNaissance;
        }



 ?>
 
