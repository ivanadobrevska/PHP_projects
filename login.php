<?php
include 'functions.php';
?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log In or Register!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
</head>
<body>
    <?php
    navbar();
    ?>
    <div class="container loginMain">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Логирај се или Регистрирај се!</h2>
            </div>
        </div>
            
            <form method="POST" action="checklogin.php">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <input type="text" name="firstname" placeholder="First Name"><br>
                        <input type="text" name="lastname" placeholder="Last Name"><br>
                        <input type="text" name="company" placeholder="Company"><br>
                        <input type="email" name="email" placeholder="Email" id="email"><br>
                        <input type="text" name="phone" placeholder="Phone Number (Optional)"><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-3">
                        <label for="employees">Number of Employees</label><br>
                        <select name="employees">
                            <option value="1">1</option>
                            <option value="2-10">2-10</option>
                            <option value="11-50">11-50</option>
                            <option value="51-200">51-200</option>
                            <option value="200+">200+</option>
                        </select><br>
                        <label for="department">Deparment</label><br>
                        <select name="department">
                            <option value="human resources">Human resources</option>
                            <option value="marketing">Marketing</option>
                            <option value="product">Product</option>
                            <option value="sales">Sales</option>
                            <option value="seo">SEO</option>
                            <option value="others">Others</option>
                        </select><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <textarea maxlength="300" rows="5">Please use this space to tell us more about your needs.Our team can craft custom solution around reskilling,upskilling, onboarding, hiring and benchmarking your talent.</textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-3">
                        <button type="submit" class="btn btn-danger btn-lg">Submit</button>
                    </div>
                </div>
            </form>
    </div>
    <?php
            if(isset($_GET['error'])){
                if($_GET['error']=='blank'){
                    echo "
                    <div class='row'>
                        <div class='col-sm-12 text-center'>
                            <p style='color:red'>Не ги внесовте сите потребни информации</p>
                            <a href='index.php'><button class='btn btn-danger'>Врати се назад</button></a>
                        </div>
                    </div>";
                    }
                }
            ?>
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