<?php
include 'allgames.php';
include 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Games</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">

</head>
<body>
<div class="blueBackground">
    <?php navbar(); ?>  
</div>
<div class="aboutusBg">
</div>
<div class="container aboutusMain">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="yellow"> Приказната за <span class="boldLetters">Brainster</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">  
            <p>Brainster е иновативна компанија за едукација каде можеш да научиш практични вештини за трансформација на кариерата. Нашата специјалност е организирање на курсеви, 
                    академии, кариерна трансформација и поврзување на талентите со иновативните компании oд областа на маркетинг, дизајн, бизнис и програмирање. Во изминатите години 
                    Brainster реализираше повеќе од 400 курсеви преку кои 5000 учесници се стекнаа со нови вештини и стигнаа чекор поблиску до кариерата која ја посакуваат. Нашата мисија е
                    да им помогнеме на 1 милион индивидуалци да стигнат до кариера која секогаш ја посакувале. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="yellow">Започни нова кариера</h2>
        </div> 
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <p class="text-center"> Биди дел од нашата приказна и запиши се на некоја од следниве академии</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h3 class="text-center">Академија за програмирање </h3>
                <a href="http://codepreneurs.co/"><img src="assets/css/images/programming.jpg"></a>
            </div>
            <div class="col-sm-4">
                <h3 class="text-center">Академија за дизајн</h3>
                <a href="https://www.brainster.io/akademija-za-dizajn"><img src="assets/css/images/design.jpg"></a>
            </div>
            <div class="col-sm-4">
                <h3 class="text-center">Академија за маркетинг</h3>
                <a href="https://www.brainster.io/marketpreneurs"><img src="assets/css/images/marketing.jpg"></a>
            </div>
        
    </div>
</div>
<footer class="aboutusFooter">
    <?php footer();?>
</footer>
</body>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script>
$(window).scroll(function() {
  var offset = $(window).scrollTop();
  console.log(offset);
  $('.navbar').toggleClass('trans', offset < 50);
});
</script>
</html>
