<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice 8</title>
    </head>
    <body>
        <?php
        //vérification de la présence de valeurs
        if (!empty($_POST['civility']) && !empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_FILES['file'])) {
            //variable qui stock les infos du fichier récupérées par la fonction pathinfo
            $fileInfo = pathinfo($_FILES['file']['name']);
            if ($fileInfo['extension'] == 'PDF' || $fileInfo['extension'] == 'pdf') {
                echo 'Le fichier est bien un pdf';
            }
            //affichage des valeurs des paramètres
            echo $_POST['civility'] . ' ' . $_POST['lastname'] . ' ' . $_POST['firstname'] . ' a envoyé le fichier ' . $_FILES['file']['name'] . ' ' . $fileInfo['extension'];
        } else {
            //sinon affichage du formulaire
            ?>
            <form action="index.php" method="post" enctype ="multipart/form-data">
                <label for="civility">Civilité</label>
                <select name="civility">
                    <option value="mr">Mr</option>
                    <option value="mme">Mme</option>
                </select>
                <label for="lastname">Votre Prénom : </label>
                <input type="text" name="lastname" id="lastname" />
                <label for="firstname">Votre Nom : </label>
                <input type="text" name="firstname" id="firstname" />
                <label for="file">Fichier : </label>
                <input type="file" name="file" id="file" />
                <input type="submit" name="submit" value="Envoyer" />
            </form>
        <?php } ?>
    </body>
</html>