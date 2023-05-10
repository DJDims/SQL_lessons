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
                <a class="navbar-brand" href="#">Machina maker</a>
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Companies</a></li>
                                <li><a class="dropdown-item" href="#">Coolers</a></li>
                                <li><a class="dropdown-item" href="#">Corpuses</a></li>
                                <li><a class="dropdown-item" href="#">Harddrives</a></li>
                                <li><a class="dropdown-item" href="#">Memorys</a></li>
                                <li><a class="dropdown-item" href="#">Motherboards</a></li>
                                <li><a class="dropdown-item" href="#">Powerblocks</a></li>
                                <li><a class="dropdown-item" href="#">Processors</a></li>
                                <li><a class="dropdown-item" href="#">Sockets</a></li>
                                <li><a class="dropdown-item" href="#">Videocards</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav mb-2 mb-lg-0 float-end">
                        <li class="nav-item">
                            <a class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Logout</a>
                        </li>
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