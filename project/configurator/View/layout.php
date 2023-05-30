<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE BEST PC CONFIGURATOR</title>

    <link rel="stylesheet" href="../Public/css.css">
    <!-- Bootstrap core -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
</head>

<body>
    <!-- navbar -->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="../Images/logo.svg">
                <a class="navbar-brand" href="/">Machina maker</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">PC Cnfigurator</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Completed builds</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Computer components</a>
                        </li>
                        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'ADMIN') { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Manage menu
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="companies?page=1">Companies</a></li>
                                    <li><a class="dropdown-item" href="coolers?page=1">Coolers</a></li>
                                    <li><a class="dropdown-item" href="corpuses?page=1">Corpuses</a></li>
                                    <li><a class="dropdown-item" href="harddrives?page=1">Harddrives</a></li>
                                    <li><a class="dropdown-item" href="memorys?page=1">Memorys</a></li>
                                    <li><a class="dropdown-item" href="motherboards?page=1">Motherboards</a></li>
                                    <li><a class="dropdown-item" href="powerblocks?page=1">Powerblocks</a></li>
                                    <li><a class="dropdown-item" href="processors?page=1">Processors</a></li>
                                    <li><a class="dropdown-item" href="sockets?page=1">Sockets</a></li>
                                    <li><a class="dropdown-item" href="videocards?page=1">Videocards</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0 float-end">
                        <?php if (isset($_SESSION['sessionId'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="Logout">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="showLogin">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="showRegister">Register</a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- navbar -->

    <!-- content -->
    <?php
        echo $content;
    ?>
    <!-- content -->

    <!-- bootstrap scripts -->
    <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>