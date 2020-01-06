<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Booking</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
        <style>
            /* Stackoverflow preview fix, please ignore */
            .navbar-nav {
            flex-direction: row;
            }
            
            .nav-link {
            padding-right: .5rem !important;
            padding-left: .5rem !important;
            }
            
            /* Fixes dropdown menus placed on the right side */
            .ml-auto .dropdown-menu {
            left: auto !important;
            right: 0px;
            }
        </style>
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?php echo site_url('BookController') ?>">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                <?php if ($this->session->userdata('logged_in') == TRUE) {
                    if ($this->session->userdata('level') === '1') {
                    } else { ?>
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url('UserBookController') ?>">Mis Reservas</a>
                        </li>
                    <?php }
                    }
                    ?> 
                </ul>

                <ul class="navbar-nav ml-auto">

                <?php if ($this->session->userdata('logged_in') == TRUE) { ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('LoginController/logout') ?>">Cerrar Sesión</a>
                    </li>
                <?php } else {?>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('LoginController') ?>">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo site_url('RegisterController') ?>">Registrar</a>
                    </li>
                <?php } ?> 
                </ul>
            </div>
        </nav>