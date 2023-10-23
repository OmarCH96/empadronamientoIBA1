<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>/assets/img/icon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href=" <?php echo base_url(); ?>/css/styles.css" rel="stylesheet" />
    <link href=" <?php echo base_url(); ?>/css/root.css" rel="stylesheet" />
    <link href=" <?php echo base_url(); ?>/css/footer.css" rel="stylesheet" />
    <link href=" <?php echo base_url(); ?>/css/reset.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700;800&display=swap" rel="stylesheet">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <header class="header">
        <nav class="header__nav">
            <div class="header__div">
                <a href="https://smadsot.puebla.gob.mx/" target="_blank"><img class="header__img" src="<?php echo base_url(); ?>/assets/img/SMADSOT.png" alt=""></a>
                <a href="https://iba.puebla.gob.mx/" target="_blank"><img class="header__img" src="<?php echo base_url(); ?>/assets/img/images.png" alt=""></a>
            </div>
            <div class="header__div--logos">
                <ul class="header__ul">
                    <li class="header__li"><a href="<?php echo base_url(); ?>inicio" class="header__a">Inicio</a></li>
                    <li class="header__li"><a href="<?php echo base_url(); ?>preguntas" class="header__a">Preguntas frecuentes</a></li>
                    <li class="header__li"><a href="<?php echo base_url(); ?>consulta" class="header__a">Consultar solicitud</a></li>
                </ul>
            </div>
            <div class="header__div--login">
                <a class="header__a" href="<?php echo base_url(); ?>registro">Inicia sesion o Registrate</a>
            </div>
        </nav>
    </header>

