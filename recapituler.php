<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanaya - Récapitulatif</title>
</head>
<body>
    <h1>Récapitulatif de vos choix :</h1>

    <?php
        
        // On récupère les données du formulaire sous forme de variable

        $civilite = $_POST['civilite'] ;
        $nom = $_POST['nom'] ;
        $prenom = $_POST['prenom'] ;
        $telephone = $_POST['telephone'] ;
        $email = $_POST['email'] ;
        $raison = $_POST['raison'] ;
        $reponse = $_POST['reponse'] ;
        $date_telephone = $_POST['date_telephone'] ;
        $message = $_POST['message'] ;

        // On affiche les données, pas la peine de vérifier si elles sont vides puisqu'elles sont obligatoires et par définition, certainement "pleines"
        echo "<p><strong>Civilité :</strong> $civilite</p>" ;
        echo "<p><strong>Nom :</strong> " . ucfirst($nom) ."</p>" ; // A l'aide de la fonction "ucfirst" on met la première lettre en majuscule (plus esthétique)
        echo "<p><strong>Prénom :</strong>" . ucfirst($prenom) ."</p>" ;
        echo "<p><strong>Numéro de téléphone :</strong> $telephone</p>" ;
        echo "<p><strong>Adresse électronique :</strong> $email</p>" ;
        echo "<p><strong>Raison de la prise de contact :</strong> $raison</p>" ;

        // A l'aide de la fonction empty, on vérifie si la variable est vide
        if (!empty($reponse)) {
            echo "<p><strong>Mode(s) de réponse :</strong> " ;
            echo implode(", " , $reponse); // On fait un "implode" pour réunir les différents éléments du tableau avec des virgules
            echo "</p>" ;
        } else {
            echo "<p><strong>Mode(s) de réponse :</strong> Aucun</p>" ;
        }

        if (!empty($date_telephone)) {
            echo "<p><strong>Date pour un rappel téléphonique :</strong> $date_telephone</p>" ;
        } else {
            echo "<p><strong>Date pour un rappel téléphonique :</strong> Aucune</p>" ;
        }

        if (!empty($message)) {
            echo "<p><strong>Message complémentaire :</strong> $message</p>" ;
        } else {
            echo "<p><strong>Message complémentaire :</strong> Aucun</p>" ;
        }
    ?>

</body>
</html>