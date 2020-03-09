<?php include('../include/menu-dossier.php');
$info = $conn->query('SELECT * FROM info');
while ($resinfo = $info->fetch())
{
    ?>
        

<div class="img-page contact-img">

    <h1 class="title-page wow fadeIn animated">Contact</h1>



    </div>
<!--  FIl ariane -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a></li>
        <li class="active">Contact</li>
    </ol>
</div>

<div class="container content-text">
    
    
    
    <p class="intro">Nous sommes à votre entière disposition pour toute question et/ou demande</p><br><br>

      <div class="content-form row">


        <form method="POST">
        <input type='hidden' name='csrfmiddlewaretoken' value='sB70zXwEhiFFnRxbswGWGHYG8H5BroWKS1ljs2IlhlQ9ENq2SC3kk0Jz95esUOah' />
            <div class="col-xs-12 col-md-4 col-lg-6">
                <input id="id_lastname" maxlength="255" name="lastname" placeholder="Nom " type="text" required />
            </div>
            <div class="col-xs-12 col-md-4 col-lg-6">
                <input id="id_firstname" maxlength="255" name="firstname" placeholder="Prénom" type="text" required />
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <input id="id_email" name="email" placeholder="Email" type="text" required />
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <input id="id_phone" maxlength="15" name="phone" placeholder="Téléphone" type="text" required />
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12">
                <textarea cols="40" id="id_message" name="message" placeholder="Votre message" rows="10" required>
</textarea>
            </div>
            <div class="col-md-12">
                

                
                
         
            </div>
            <div class="g-recaptcha" data-sitekey="6LfjEV0UAAAAAKabg3F2tj2eonr91oHWWqrP-ITN"  data-callback="enableBtn"></div>
            <br>
            <button id="SuccessMessage" type="submit" class="btn-gradient-orange" style="float:right;">Envoyer</button>
            <div style="clear:both;"></div>
        </form>
<div style="clear:both;"></div>
    </div>

    <!-- <div class="container content-text carte"> -->

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

<!-- </div> -->
  
</div>
<script src="../../www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
 document.getElementById("SuccessMessage").disabled = true;
function enableBtn(){
    document.getElementById("SuccessMessage").disabled = false;
   }
</script>

<?php
}
$info->closeCursor();
include('../include/footer-dossier.php');
?>