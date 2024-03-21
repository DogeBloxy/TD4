<?php

$error = false;
$password = 'Blablala5';
$message = '';

if (strlen($password) < 8) {
    $message = 'Mot de passe est trop court, le mot de passe doit comporter au moins 8 caractères.';
    $error = true;
} elseif (!preg_match('/[A-Z]+/',$password)) {
    $message = 'Le mot de passe doit comporter au moins une majuscule.';
    $error = true;
} elseif (!preg_match('/[a-z]+/',$password)) {
    $message = 'Le mot de passe doit comporter au moins une minuscule.';
    $error = true;
} elseif (!preg_match('/[0-9]+/',$password)) {
    $message = 'Le mot de passe doit comporter au moins un chiffre.';
    $error = true;
} else {
    $message = 'Le mot de passe est valide.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TD4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="alert alert-<?php echo ($error) ? 'danger' : 'success'; ?>" role="alert"><?php echo $message ?></div>
</body>
</html>