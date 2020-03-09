<?php include('include/menu.php'); 
include("include/dbcon.php");

$accueil = $conn->query('SELECT * FROM accueil');
$info = $conn->query('SELECT * FROM info');
while ($resinfo = $info->fetch())
{
while ($res = $accueil->fetch())
{
?>
       
<div class="slider">
    <div id="wowslider-container1">
        <div class="ws_images">
            <ul>
                
                <li>
                    <img src="media/zen.jpeg" alt=""  id="wows1_0"/>
                </li>
                
                <li>
                    <img src="media/carousel2.png" alt=""  id="wows1_0"/>
                    <div class="contenu-slide wow fadeInLeft animated">
                        <h1>Titre en gras ici</h1><br>
                        <p>Description ici</p>
                    </div>
                </li>
                
                <li>
                    <img src="media/carousel3.png" alt=""  id="wows1_0"/>
                </li>
                
                <li>
                    <img src="media/carousel4.png" alt=""  id="wows1_0"/>
                </li>
                
                
                
            </ul>
        </div>
        <div class="ws_bullets"><div>
            
                <a href="#" title="titre image"><span>1</span></a>
            
                <a href="#" title="titre image"><span>2</span></a>
            
                <a href="#" title="titre image"><span>3</span></a>
            
                <a href="#" title="titre image"><span>4</span></a>
            
                
            
        </div>
    </div>
</div>

    <div class="mouse_scroll">

        <div class="mouse">
            <div class="wheel"></div>
        </div>

</div>

</div>


<div class="container">
    <div class="row">
        <h2 class="phrase-home wow fadeInDown animated"><strong>L'institut Villa-Beauté</strong> vous propose un accueil personnalisé, des soins et des rituels haut de gamme pour votre beauté et votre bien être. <br></h2>

    </div>

    

    <div class="pres actu-home1 fadeIn animated" >
        <div class="col-sm-12">
            
            <table class="table">
                <tr>
                <th></th>
                <th>Ouverture</th>
                <th>Fermeture</th>
                </tr>
                    
                    <tr>
                    <td>Lundi</td>
                    <td><?php echo $res["lundi_ouv"]; ?></td>
                    <td><?php echo $res["lundi_ferm"]; ?></td> 
                    </tr>
                    <tr>
                    <td>Mardi</td>
                    <td><?php echo $res["mardi_ouv"]; ?></td>
                    <td><?php echo $res["mardi_ferm"]; ?></td>     
                    </tr>
                    <tr>
                    <td>Mercredi</td>
                    <td><?php echo $res["mercredi_ouv"]; ?></td>
                    <td><?php echo $res["mercredi_ferm"]; ?></td> 
                    </tr>
                    <tr>
                    <td>Jeudi</td>
                    <td><?php echo $res["jeudi_ouv"]; ?></td>
                    <td><?php echo $res["jeudi_ferm"]; ?></td>
                    </tr>
                    <tr>
                    <td>Vendredi</td>
                    <td><?php echo $res["vendredi_ouv"]; ?></td>
                    <td><?php echo $res["vendredi_ferm"]; ?></td>
                    </tr>
                    <tr>
                    <td>Samedi</td>
                    <td><?php echo $res["samedi_ouv"]; ?></td>
                    <td><?php echo $res["samedi_ferm"]; ?></td>
                    </tr>
                    
            </table>
        </div>
        
    </div>
</div>


<div class="container content-text carte">

        <div class="col-xs-12 col-md-6 col-lg-6 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d357.53501128751566!2d0.6252589!3d44.2012974!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12abb3197e3545a7%3A0x2cfa44df0c1a0f82!2sVilla%20Beaut%C3%A9%20Institut%20Guinot!5e0!3m2!1sfr!2sfr!4v1581341959449!5m2!1sfr!2sfr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>

        <div class="col-xs-12 col-md-6 col-lg-6">
            <div class="content-txt-contact">
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $resinfo['adresse']; ?><br><br>


                    <i class="fa fa-phone" aria-hidden="true"></i>  <?php echo $resinfo['numero_tel']; ?><br><br>
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>  <a href="mailto:<?php echo $resinfo['email']; ?>"> <?php echo $resinfo['email']; ?></a>   
                </p>
            </div>
        </div>

</div>








<div class="container">
    <center>
        <img src="static/images/shadow180.png" width="90%" alt="partenaires">
    </center>
</div>
<div class="container">
    <div class="row">
        <h1 class="title">Nos marques partenaires<br><div class="separateur"></div></h1>
            <div class="title partenaires">
                <img class="gap" src="media/absolution.png" alt="logo partenaire Absolution" width="150px">
                <img class="gap" src="media/guinot.png" alt="logo partenaire Guinot" width="150px">
                <img src="media/Logo-lpg.jpg" alt="logo partenaire Lpg" width="150px">
            </div>

    </div>
</div>


<div class="container">
    <center>
        <img src="static/images/shadow.png" width="90%" alt="logiciel">
    </center>
</div>


<div class="container">

<div class="col-xs-12 col-md-6 col-lg-6 ect-contact wow fadeInUp animated">
    <center>
    <h6>Une question ?</h6><br>
         <a href="contact/index.php" class="btn-gradient-orange">Contactez-nous</a>
        </center>

</div>
    </div>


    <?php
}// fermeture de requete select
}
$accueil->closeCursor(); // Termine le traitement de la requête
$info->closeCursor();
?>


<!-- footer -->

<?php include("include/footer.php"); ?>
       
