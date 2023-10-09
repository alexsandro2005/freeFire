<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO <?php echo $_SESSION['nombres']?></title>
    <script src="../../../assets/js/fontawesome.js"></script>
    
    <link rel="stylesheet" href="../../../assets/css/admin.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
    <header id="header">
        <div class="container__header">
            <div class="logo">
                <h1 class="logo-social">FREE FIRE</h1>
            </div>
            <div class="container__nav">
                <nav id="nav">
                    <ul>
                        <li><a href="" class="select">INICIO</a></li>
                        <li><a href="">DATOS</a></li>
                        <li><a href="">DEPOSITOS</a></li>
                        <li><a href="">RETIROS</a></li>
                        <li><a href="">MOVIMIENTOS</a></li>
                        <li><a href="">CERRAR SESION</a></li>
                    </ul>
                </nav>
                <div class="btn__menu" id="btn_menu"><i class="fas fa-bars"></i></div>
            </div>
        </div>
    </header>

    @yield('content')
