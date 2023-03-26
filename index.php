<?php

require_once 'connec.php';


$pdo = new \PDO(DSN, USER, PASS);

// A exécuter afin d'afficher vos lignes déjà insérées dans la table friends

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
//$friends = $statement->fetchAll();
//var_dump($friends);


//$query = "DELETE FROM friend WHERE  firstname = Rachel ";
//$statement = $pdo->exec($query);


$friends = $statement->fetchAll(PDO::FETCH_ASSOC);
//var_dump($friends);

foreach ( $friends as $friend ) {
    echo $friend['firstname'] .' '. $friend['lastname'].'<br>'; 
}

////////2de partie
require_once 'form.php';

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // nettoyage et validation des données soumises via le formulaire 
        if(!isset($_POST['firstname']) || trim($_POST['firstname']) === '') 
            $errors[] = "Le prénom est obligatoire";

        if(!isset($_POST['lastname']) || trim($_POST['lastname']) === '') 
            $errors[] = "Le nom est obligatoire";
   
        if(empty($errors)) {

            // traitement du formulaire
            // on recup les info du formulaire
            $firstname = trim($_POST['firstname']);
            $lastname = trim($_POST['lastname']);

            // on prépare la requete dinsertion
            $query = 'INSERT INTO friend (firstname,lastname) VALUES(:firstname,:lastname)';
            $statement = $pdo->prepare($query);

            //on lie les valeurs au placeholder
            $statement -> bindValue(':firstname',$firstname);
            $statement -> bindValue(':lastname',$lastname);

            $statement -> execute();

            header('Location: index.php');

        }
    }
?>

<?php // Affichage des éventuelles erreurs 
             if (count($errors) > 0) { ?>
                <div class="border border-danger rounded p-3 m-5 bg-danger">
                    <ul>
                        <?php foreach ($errors as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        <?php } ; ?>
<?php 


