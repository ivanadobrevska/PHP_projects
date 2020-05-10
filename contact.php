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
<div class="aboutusBg">
</div>
    <?php
    navbar();
    ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="yellow">Контакт</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 text-center">
            <div class=" contact ">
            <i class="fas fa-map-marker-alt"></i>
            <h4>ул. Востаничка бр.140</h4>
</div>
        </div>
        <div class="col-sm-4 text-center">
            <div class=" contact ">
            <i class="fas fa-mobile-alt"></i>
            <h4> +389 70 38 47 28 </h4>
</div>
        </div>
        <div class="col-sm-4 text-center">
            <div class=" contact ">
            <i class="far fa-envelope-open"></i>
            <h4>contact@brainster.co</h4>
</div>
        </div>
    </div>
</div>
<footer class="contactFooter">
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