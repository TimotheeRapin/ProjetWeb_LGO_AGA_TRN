<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

Design by TEMPLATED
http://templated.co
Released for free unFder the Creative Commons Attribution License

Name       : Porphyrio
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="view/contents/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="view/contents/fonts.css" rel="stylesheet" type="text/css" media="all" />

    <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
    <!--<link rel="stylesheet" type="text/css" href="view/contents/vendor/bootstrap/css/bootstrap.min.css">-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/contents/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <!--<link rel="stylesheet" type="text/css" href="view/contents/vendor/animate/animate.css">-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/contents/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/contents/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/contents/css/util.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/contents/css/main.css">

    <link rel="stylesheet" type="text/css" href="view/contents/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="view/contents/vendor/bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="view/contents/vendor/bootstrap/css/bootstrap-reboot.css">
    
    <script src="view/contents/js/main.js"></script>
</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="index.php?action=home">AnnoncesFaciles</a></h1>
        </div>



        <div id="menu">
            <ul>
                <li><a href="index.php?action=home">Accueil</a></li>
                <?php if (isset($_SESSION['userType']) && $_SESSION['userType'] > 1 && isset($_SESSION['userTypeView']) && $_SESSION['userTypeView'] > 1) : ?>
                    <li><a href="index.php?action=administration">Administration</a></li>

                <?php endif;?>
                <?php if (isset($_SESSION['userEmailAddress'])) : ?>
                    <li><a href="index.php?action=mesAnnonces">Mes annonces</a></li>
                    <li><a href="index.php?action=logout">Se déconnecter</a></li>
                    <li><a href="index.php?action=accountManage">
                            <svg class="iconUser logged" viewBox="0 0 20 20">
                                <circle transform="rotate(90 10 10)" cx="10" cy="10" r="9"/>
                                <!--2.1 1.65-->
                                <path class="user" d="
                M 10 19
                c -2.1 0, -3.75 -.818, -3.75 -.818
                v 0 -.682
                c 0 -2.1, 1.65 -3.75, 3.75 -3.75
                c 2.1 0, 3.75 -1.65, 3.75 -3.75
                c 0 -2.1, -1.65 -3.75, -3.75 -3.75
                c -2.1 0, -3.75 1.65, -3.75 3.75
                c 0 2.1, 1.65 3.75, 3.75 3.75
                c 2.1 0, 3.75 1.65, 3.75 3.75
                v 0 .682
                c 0 0, -1.65 .818, -3.75 .818
                z
                "/>
                            </svg>
                            <?= userName($_SESSION['userEmailAddress']); ?></a>
                    </li>
                <?php else: ?>
                    <li><a href="index.php?action=login">Se connecter</a></li>
                    <li><a href="index.php?action=accountManage"><svg class="iconUser" viewBox="0 0 20 20">
                                <circle transform="rotate(90 10 10)" cx="10" cy="10" r="9"/>
                                <!--2.1 1.65-->
                                <path class="user" d="
                M 10 19
                c -2.1 0, -3.75 -.818, -3.75 -.818
                v 0 -.682
                c 0 -2.1, 1.65 -3.75, 3.75 -3.75
                c 2.1 0, 3.75 -1.65, 3.75 -3.75
                c 0 -2.1, -1.65 -3.75, -3.75 -3.75
                c -2.1 0, -3.75 1.65, -3.75 3.75
                c 0 2.1, 1.65 3.75, 3.75 3.75
                c 2.1 0, 3.75 1.65, 3.75 3.75
                v 0 .682
                c 0 0, -1.65 .818, -3.75 .818
                z
                "/>
                            </svg> S'inscrire</a></li>

                <?php endif;?>
            </ul>
        </div>

    </div>

</div>

<?=$content; ?>

<div id="copyright" class="container">
    <p>&copy; Untitled. All rights reserved. | Design by LGO - AGA - TRN.</p>
    <?php if (isset($_SESSION['userType']) && $_SESSION['userType'] > 1) : ?>
        <form action="index.php?action=viewType" method="post">
            <input type="radio" id="viewType1" name="viewType" value="1" <?php if ($_SESSION['userTypeView'] == 1){echo 'checked="checked"';} ?> onclick="this.form.submit()">
            <label id="adminboutons" for="viewType1">Utilisateur</label>
            <br>
            <input type="radio" id="viewType2" name="viewType" value="2" <?php if ($_SESSION['userTypeView'] == 2){echo 'checked="checked"';} ?> onclick="this.form.submit()">
            <label id="adminboutons" for="viewType2">Administrateur</label>
        </form>
    <?php endif;?>
</div>
</body>
</html>
