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
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="backgroundUp" id="top"></div>
   
    <?php navbar(); ?>    
    <div class="blueBackground movedFromTop">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Изработено од студенти на академијата за програмирање на <span class="yellowHighlight">Brainster</span></p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-12 hiddenButtons">
                    <a href="https://www.brainster.io/business" target="_blank"><button class="btn yellowButton">Обуки на компании</button></a>
                    <a href="https://www.brainster.io/business" target="_blank"><button class="btn blackButton">Вработи наши студенти</button></a>
                </div>
            </div>
        </div>
</div>
    <?php 
    mainPage();
    ?>
    <div class="wrapper">
    <div class="content">
        <?php 
        if (count($games) == 0) {
            echo "<div class='box'>Still no games, come later</div>";
        } else {?>
            <?php
            for ($i = 0; $i < count($games); $i++) {
                printGame($games[$i], $i);
            }
        }
        ?>

    </div>
    <div class="backgroundDown"></div>
    <?php mainPage();
    footer();
    ?>
    </div>
    
    
    
            
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

