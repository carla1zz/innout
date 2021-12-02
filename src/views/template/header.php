<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" SameSite=None/>
    <a href="https://icons8.com/icon/23178/tarefas"></a>
    <title>Ponto Eletrônico do Carlã1</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <i class="icofont-travelling ml-3 mr-2"></i>
            <span class="font-weight-light"> In </span>
            <span class="font-weight-bold mx-1">N' </span>
            <span class="font-weight-light">Out </span>
            <i class="icofont-runner-alt-1 ml-2"></i>
        </div>
        <div class="menu-toggle-c ml-1">
            <img src="https://img.icons8.com/windows/32/000000/tasks.png"/>
            <!-- <input type="checkbox" id="menu-toggle-c" class="menu-toggle-c icofont-navigation-menu">  -->
        </div>
        <div class="spacer"></div>
        <div class="dropdown">
            <div class="dropdown-button">
                <img class="avatar"
                    src="<?= "https://images.uncyc.org/pt/thumb/2/29/Mr-bean-avatar.jpg/250px-Mr-bean-avatar.jpg" .md5(strtolower(trim($_SESSION['user']->email))) ?>" alt="user">
                <span class="ml-3">
                    <?= $_SESSION['user'] ->name ?>
                </span>
                <i class="icofont-simple-down mx-2"></i>
                <div class="dropdown-content">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="logout.php">
                                <i class="icofont-logout mr-2 ml-1"></i>
                                Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>