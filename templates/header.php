<?php include_once 'config/url.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Blog Pessoal</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?= $BASE_URL ?>img/favicon.png" type="image/x-icon">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= $BASE_URL ?>index.php"><img src="<?= $BASE_URL ?>img/favicon.png" alt="Code Icon"></a>

        <div class="navbar-nav">
            <a class="nav-link" href="<?= $BASE_URL ?>sobre.php">Sobre</a>
            <a class="nav-link" href="#">Posts</a>
            <a class="nav-link" href="<?= $BASE_URL ?>contato.php">Contatos</a>
        </div>
    </nav>