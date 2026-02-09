<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = trim($_POST['nom']);

    if (!empty($nom)) {

        $_SESSION['utilisateur'] = $nom;

        header('Location: profil.php');

        exit;
    }else {
        $message = "Veuillez entrer votre nom.";
    }
}

    ?>





    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>chapiter_3</title>
    </head>
    <body>

    <form method="POST">
        
        <label >Nom :</label>

        <input type="text" name="nom">

        <button type="submit"> Se connenter</button>


    </form>
        
    </body>
    </html>


    <?php if (!empty($message)) echo "<p style='color:red;'>$message</p>"; ?>