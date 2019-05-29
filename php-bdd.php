<?php 
/*
1- A quoi sert MySQL ?
- il sert à gerer les bases de sonnées relationnelles

2- Quelle est la différence entre une base de donnée, des cookies et des variables de session ? Précisez à quel moment chacune de ces données sont supprimées.

-

3- Concevez une base de données "esv_m2i" via phpmyadmin en créant une table stagiaire, qui contient 5 colonnes en faisant le meilleur choix pour le type : id, created_at, name, phone, birthday

4- Ecrivez un script PHP qui se connecte à cette  base de données "esv_m2i", grâce à PDO.

5- Ecrivez le script PHP, qui une fois connecté à cette base, récupère tous les enregistrements de la table stagiaire et dans les affiche dans la page. Affichez l'ensemble des informations de chaque stagiaire séparées par des tirets, avec un retour à la ligne entre chaque stagiaire. Pour tester ce script, vous pouvez ajouter manuellement des enregistrements grâce à phpmyadmin.
*/


	$pdo = new PDO("mysql:host=localhost;dbname=evs_m2i;charset=UTF8", 'root', '');


    $sql = "SELECT * FROM stagiaire";
    $statement = $pdo->query($sql);
    $stagiaires = $statement->fetchAll(PDO::FETCH_ASSOC);

        function modifDate($dateNaissance, $formatEntree="d/m/Y", $formatSortie="Y-m-d") {
        $dateNaissanceObjet = DateTime::createFromFormat($formatEntree, $dateNaissance);
        $dateNaissance = $dateNaissanceObjet->format($formatSortie);

        return $dateNaissance;
    };
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Examen blanc</title>
        <meta charset="UTF-8">
    </head>

    <body>
        <h1>Stagiaires</h1>


            <?php
                foreach ($stagiaires as $stagiaire) {
                    echo " Presentation du stagiaire numéro : " . $stagiaire['id'] . " - " . $stagiaire['name'] . " - " . $stagiaire['dateNaissance'] . " - " . $stagiaire['phone'];
                };
            ?>
        </table>
    </body>
</html>
