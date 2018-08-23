

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>TP 2</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />

    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-around">
                <div class="col-sm-12-md-12-lg-6">
                    <h2>Demande de renseignements :</h2>
                    <div class="row">
                        <div class="col-sm-12-md-12-lg-12">
                            <form action="index.php" method="POST">
                                <div class="form-group">
                                    <label for="civility">Civilité</label>
                                    <select value="<?= (isset($_POST['civility']) ? $_POST['civility'] : '') ?>" name="civility" class="form-control" id="civilty">
                                        <option value='Monsieur'>M</option>
                                        <option value='Madame'>Mme</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="lastname">Nom</label>
                                    <input value="<?= (isset($_POST['lastname']) ? $_POST['lastname'] : '') ?>" name="lastname" type="text" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Nom">
                                </div>
                                <div class="form-group">
                                    <label for="firstname">Prénom</label>
                                    <input value="<?= (isset($_POST['firstname']) ? $_POST['firstname'] : '') ?>" name="firstname" type="text" class="form-control" id="firstname" placeholder="Prénom">
                                </div>
                                <div class="form-group">
                                    <label for="age">Age</label>
                                    <input value="<?= (isset($_POST['age']) ? $_POST['age'] : '') ?>" name="age" type="number" class="form-control" id="age" aria-describedby="ageHelp" placeholder="Age">
                                </div>
                                <div class="form-group">
                                    <label for="enterprise">Société</label>
                                    <input value="<?= (isset($_POST['enterprise']) ? $_POST['enterprise'] : '') ?>" name="enterprise" type="text" class="form-control" id="enterprise" aria-describedby="enterpriseHelp" placeholder="Société">
                                </div>
                                <button name="submit" type="submit" class="btn">Afficher</button>
                            </form>                
                        </div>
                    </div>
                </div>
                <div class="col-sm-12-md-12-lg-6">
                    <div class="info">
                        <?php
                        if (isset($_POST['submit'])) { // si des données sont envoyés
                            ?>
                            <h2>Vos informations :</h2>                    
                            <p>Civilité : 
                                <?php
                                if (!empty($_POST['civility'])) { //si le champs de saisie contient des informations
                                    ?>
                                    <span class="valid">
                                        <?php
                                        echo $_POST['civility']; // affichage des données
                                        ?>
                                    </span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="error">
                                        <?php
                                        echo 'Veuillez saisir votre civilité'; //message d'erreur en cas d'absence d'info
                                    }
                                    ?>
                                </span>
                            </p>
                            <p>Nom : 
                                <?php
                                if (!empty($_POST['lastname'])) { //si le champs de saisie contient des informations
                                    ?>
                                    <span class="valid">
                                        <?php
                                        echo $_POST['lastname']; // affichage des données
                                        ?>
                                    </span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="error">
                                        <?php
                                        echo 'Veuillez saisir votre nom'; //message d'erreur en cas d'absence d'info
                                    }
                                    ?>
                                </span>
                            </p>
                            <p>Prénom : 
                                <?php
                                if (!empty($_POST['firstname'])) { //si le champs de saisie contient des informations
                                    ?>
                                    <span class="valid">
                                        <?php
                                        echo $_POST['firstname']; // affichage des données
                                        ?>
                                    </span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="error">
                                        <?php
                                        echo 'Veuillez saisir votre prénom'; //message d'erreur en cas d'absence d'info
                                    }
                                    ?>
                                </span>
                            </p>
                            <p>Age : 
                                <?php
                                if (!empty($_POST['age'])) { //si le champs de saisie contient des informations
                                    ?>
                                    <span class="valid">
                                        <?php
                                        echo $_POST['age']; // affichage des données
                                        ?>
                                    </span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="error">
                                        <?php
                                        echo 'Veuillez saisir votre Age'; //message d'erreur en cas d'absence d'info
                                    }
                                    ?>
                                </span>
                            </p>
                            <p>Sociéte : 
                                <?php
                                if (!empty($_POST['enterprise'])) { //si le champs de saisie contient des informations
                                    ?>
                                    <span class="valid">
                                        <?php
                                        echo $_POST['enterprise']; // affichage des données
                                        ?>
                                    </span>
                                    <?php
                                } else {
                                    ?>
                                    <span class="error">
                                        <?php
                                        echo 'Veuillez saisir votre société'; //message d'erreur en cas d'absence d'info
                                    }
                                    ?>
                                </span>
                            </p>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>