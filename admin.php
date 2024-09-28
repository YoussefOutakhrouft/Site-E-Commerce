<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" type="text/css">
        <title>Admin</title>
    </head>

    <body>
        <?php include 'include/nav.php' ?>
        <div class="container py-2">
            <?php
            if (!isset($_SESSION['utilisateur'])) {
                header('location: connexion.php');
            }
            ?>

            <h4>Bonjour : <?php
            echo $_SESSION['utilisateur']['prenom'].' '.$_SESSION['utilisateur']['nom'];
            ?></h4>

        </div>
    </body>
vc
</html>