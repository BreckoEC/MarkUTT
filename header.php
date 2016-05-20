<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Mark'UTT, site d'annonces de l'UTT. Venez vendre ou acheter vos polys, des livres, du mobilier, louer des apparts...">
        <meta name="language" content="fr">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>Mark'UTT, site d'annonces de l'UTT</title>
        <link rel="icon" type="image/png" href="/assets/images/favicon.png">
        
        <link rel='stylesheet' href='/assets/css/main.min.css'>
		<link rel='stylesheet' href='/assets/css/responsive.min.css'>
		<link rel='stylesheet' href='/assets/css/materialize.min.css'>
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        
    <header>
        <nav>
            <div class="nav-wrapper">
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="left hide-on-med-and-down" id="menu-list">
                    <li><a href="/">Recherche</a></li>
                    <li class="inline-b"><div class="separator inline-b"></div></li>
                    <li><a href="/contact.php">Contact</a></li>
                </ul>
                
                <div class="absolute-center" id="logo-container">
                    <a href="/" id="logo">
                        <img src="/assets/images/logo.png" alt="Mark'UTT">
                        <h1>Mark'<span class="clight-blue">UTT</span></h1>
                    </a>
                </div>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="/">Recherche</a></li>
                    <li><a href="/contact.php">Contact</a></li>
                    <li><a href="/deposer_annonce.php">Déposer une annonce</a></li>
                </ul>
                
                <ul class="right hide-on-med-and-down">
                    <li class="blue-nav"><a href="/deposer_annonce.php">Déposer une annonce</a></li>
                </ul>
            </div>
        </nav>
    </header>
        
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large blight-blue">
            <i class="large material-icons">supervisor_account</i>
        </a>
        <ul>
            <li>
                <a class="btn-floating green" title="Mon profil" href="profil.php">
                    <i class="material-icons">perm_identity</i>
                </a>
            </li>
            
            <li>
                <a class="btn-floating red" title="Mes messages" href="messages.php">
                    <i class="material-icons">message</i>
                </a>
            </li>
            <li>
                <a class="btn-floating yellow darken-1" title="Mes annonces" href="annonces.php">
                    <i class="material-icons">dashboard</i>
                </a>
            </li>
        </ul>
    </div>
        
    <div class="container">