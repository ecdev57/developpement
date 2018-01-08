<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Formulaire</title>
    </head>
    <body>
        <form action="veriftype.php" method="post">
            <label for="client_name">Votre nom :</label>
            <input type="text" name="client_name" id="client_name" />
            <br><br>
            <label for="client_html">Code HTML :</label>
            <textarea name="client_html" id="client_html" cols="30" rows="10"></textarea>
            <br><br>
            <label for="client_age">Vous avez :</label>
            <select name="client_age" id="client_age">
                <?php
                    for ($i = 1; $i<=100; $i++){
                        echo '<option value="'.$i.'">'.$i.'</option>';
                }
                ?>
            </select>
            <br><br>
            <label for="client_taille">Votre taille :</label>
            <input type="text" name="client_taille" id="client_taille" />
            <br><br>
            <p>Vous êtes :</p>
            <input type="radio" name="client_genre" value="femme" id="femme"/>
            <label for="femme">femme</label>
            <input type="radio" name="client_genre" value="homme" id="homme"/>
            <label for="homme">homme</label>
            <input type="submit" name="valid" id="valid">
        </form>
    </body>
</html>