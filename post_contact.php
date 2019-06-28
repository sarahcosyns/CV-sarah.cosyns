<?php 

$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
    $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
    $errors['message'] = "Vous n'avez pas renseigné votre message";
}

if(!empty($errors)){
    session_start();
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php');
}
else {
    $headers = 'FROM: ' . $_POST['email'];

    mail('sarahcosyns1@gmail.com', 'Formulaire de contact de ' .$_POST['name'], $_POST['message'], $headers);
}

/*var_dump($errors);
die();*/

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sarah Cosyns</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">

        <script src="assets/js/jquery-3.3.1.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

        <link rel="shortcut icon" type="image/png" href="./images/3flechesColor.ico">

        <style>
            
            div {
                height: 240px;
                background-color: #FFE7EF;
                border-bottom: 1px solid grey;
            }
            h1{
                color: white;
                font-size: 30px;
                margin: auto;
                margin-left: 40%;
                padding-bottom: 20px;
            }
        </style>
    </head>
    <body>
       <div>
           <h1>Merci pour votre email.</h1>
       </div>
    </body>
</html>