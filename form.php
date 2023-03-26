<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel='stylesheet' href='style.css'> -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
    <title>FriendForm</title>
</head>

<body>

<!-- Formulaires -->
<form class="border rounded p-3 m-5 bg-light" action="index.php"  method="POST">

        <p><span class="error">* required field</span></p>
                <div>
                <label  for="name" class="form-label" required>Nom :</label>
                <input  type="text"  id="name"  name="lastname">
                <span class="error">* </span>
                </div>
                <div>
                <label  for="firstname" class="form-label" required>Prénom :</label>
                <input  type="text"  id="firstname"  name="firstname">
                <span class="error">* </span>
                </div>
                
               
                <div  class="button" class="text-center">
                <button  type="submit">Ajouter</button>
                </div>
</form>

        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>
