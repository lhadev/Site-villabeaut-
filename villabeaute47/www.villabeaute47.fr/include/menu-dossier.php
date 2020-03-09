<?php
include("../include/dbcon.php");

$info = $conn->query('SELECT * FROM info');

while ($donnees = $info->fetch())
{
?>
<!DOCTYPE html>
<html lang="fr">


<head>
        <meta charset="utf-8">
        <title>Villa-Beauté : spécialiste de l'esthétique  </title>
        <meta name="description" content="L'institut villabeauté est un salon proposant des soins visages, anti-âge, soins du corps, massages, épilations, rituels et des chèques cadeaux." />
        <link rel="icon" href="static/images/logo.ico" />
          
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="google-site-verification" content="z4dyu6Hz9JHCWyukiFl45crfZ50GnRZNXxrStltKZ-M" />
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="../../netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="../static/css/common.css">
        <link rel="stylesheet" href="../static/css/global.css">
        <link rel="stylesheet" href="../static/css/animate.css">
        <link rel="stylesheet" type="text/css" href="../static/engine1/style.css"/>
        


    </head>
    <body>
        <header>
            <div class="container menudeskop">
                <div class="infos-header"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $donnees['numero_tel']; ?> | <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $donnees['email']; ?>">&nbsp;&nbsp;<?php echo $donnees['email']; ?></a></div>
                <div class="col-xs-12 col-md-2 col-lg-2 logomenu">
                   <a href="../index.php"> <img src="../static/images/logo.png" alt="Bewease" width="90%"></a>
                </div>
                <nav  id="menu" >
                    <ul class="niveau1">
                        <li class="col-xs-12 col-md-1 col-md-1"> <a href="../index.php">Accueil</a></li>
                        <li class="col-xs-12 col-md-2 col-md-2 sousmenu"><a href="../presentation/index.php">Présentation</a></li>
                        <li class="col-xs-12 col-md-2 col-md-2 sousmenu">
                            <a href="../nos-soins/index.php">Nos soins</a>
                            <ul class="niveau2">
                                <li><a href="../nos-soins/soins-femme.php">Soins femme</a></li>
                                <li><a href="../nos-soins/soins-homme.php">Soins homme</a></li> 
                                <li><a href="../nos-soins/soins-marque.php">Soins marques</a></li>
                            </ul>
                        </li>
                        <li class="col-xs-12 col-md-1 col-md-1"><a href="../contact/index.php">Contact</a></li>
                    </ul>
                </nav>
                <div style="clear:both;"></div>
            </div>

            <!--////////////////////-->
<!-- MENU MOBILE -->
<!--////////////////////-->
<div class="col-xs-show col-sm-show menu-mobile">
    <div class="wrapper">
<div class="infos-contact-mobile"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;<?php echo $donnees['numero_tel']; ?> <br> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:<?php echo $donnees['email']; ?>"><?php echo $donnees['email']; ?></a></div>
        <button id="bt-menu-mobile">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </button>
        <div class="clear"></div>
    </div>
    <div id="wrapper-menu-mobile">
        <div class="wrapper">
            <ul>
                        <li class="first"><button id="bt-fechar-menu"><span class="">X</span></button><div class="clear"></div></li>
                        <li class="col-xs-12 col-md-1 col-md-1"> <a href="../index.php">Accueil</a></li>
                        <li class="col-xs-12 col-md-2 col-md-2"><a href="../presentation/index.php">Présentation</a></li>
                        <li class="col-xs-12 col-md-2 col-md-2"><a href="../nos-soins/index.php">Nos soins</a>
                            <ul>
                                <li><a href="../nos-soins/soins-femme.php">Soins femme</a></li>
                                <li><a href="../nos-soins/soins-homme.php">Soins homme</a></li> 
                                <li><a href="../nos-soins/soins-marque.php">Soins marques</a></li>                            
                            </ul>
                        </li>
                        <li class="col-xs-12 col-md-1 col-md-1"><a href="../contact/index.php">Contact</a></li>
            </ul>
        </div>
        <div class="block-menu-mobile"></div>
    </div>
</div>



        </header>


        <?php
}// fermeture de requete select

$info->closeCursor(); // Termine le traitement de la requête

?>