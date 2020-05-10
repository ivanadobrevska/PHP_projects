<?php
    include 'allgames.php'; 
    include 'functions.php';

    $error = false;
    $gameIndex = -1;

    if(!isset($_GET['gameIndex'])) {
        $error = true;
    } else {
        $gameIndex = $_GET['gameIndex']; //100
    }

    if(!isset($games[$gameIndex])) {
        $error = true;
    }

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
    <?php
        backgroundGame($games[$gameIndex], $gameIndex, 'game');
    ?>
    
    <?php
    navbar();
    ?>
     
        <?php
            if($error) {
                echo "<div class='box'>Game not found</div><a href='index.php'>Go Back</a>";
            } else {
                singleGame($games[$gameIndex], $gameIndex, 'game');   
            } 
        ?> <br>
    <div class="wrapper"> 
    <div class="backgroundDownGame"></div>
    <?php 
    mainPage();
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