<?php 
include("include/dbcon.php");

$info = $conn->query('SELECT * FROM info');
while ($resinfo = $info->fetch())
{
    ?>

<footer>
            <div class="container-footer">
                <div class="container">
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <img src="static/images/logo-footer.png" alt="Institut Villa-beauté Agen" width="80%;">

                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <a href="index.php">Accueil</a><br>
                        <a href="presentation/index.php">Présentation</a><br>
                        <a href="nos-soins/index.php">Nos soins</a><br>
                        <a href="contact/index.php">Contact</a><br>
                    </div>
                    <div class="col-xs-12 col-md-3 col-lg-3">
                        
                        <a href="mentions-legales/index.html">Mentions Légales</a>

                    </div>

                    <div class="col-xs-12 col-md-3 col-lg-3">
                        <p style="color: #fff;"><?php echo $resinfo['adresse']; ?><br><?php echo $resinfo['ville']; ?><br><br>
                        <?php echo $resinfo['numero_tel']; ?><br>
                            <a href="mailto:<?php echo $resinfo['email']; ?>"><?php echo $resinfo['email']; ?></a><br>
                        Siret : <?php echo $resinfo['siret']; ?><br>
                        N°tva : <?php echo $resinfo['tva']; ?>
                        </p>
                    </div>
                </div>

            </div>
        </footer>

<?php
}
$info->closeCursor();
?>

</body>

    
    <script src="../code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="../netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.js"></script>
        
            <script>
    $('.carousel-client').bxSlider({
        auto: true,
        slideWidth: 234,
        minSlides: 2,
        maxSlides: 5,
        controls: false
    });</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="static/js/menu.js"></script>
    <script src="static/js/wow.js"></script>
        <script src="static/js/cookie.js"></script>

    <script>
    new WOW().init();
</script>
            <script src="static/js/captcha.js"></script>

    <!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106061204-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106061204-1');
</script>


    
        <script type="text/javascript" src="static/engine1/wowslider.js"></script>
        <script type="text/javascript" src="static/engine1/script.js"></script>


</html>