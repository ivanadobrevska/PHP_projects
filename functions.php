<?php

function printGame($game, $index, $location = 'index')
{
  $title = $game['title'];
  $text = $game['text'];
  $img = $game['image'];
  $link = '<a href="./index.php">Go back to all games</a>';

  if ($location == 'index') {
    $text = substr($text, 0, 150);
    $link = "<a href='./game.php?gameIndex=$index'>Go to the game</a>";
  }

  echo "
    <div class='game'>
    <div class='thumbnail' id=>
    <a href='http://localhost/proekt/game.php?gameIndex=$index'>
    <img src=" . $game['img'] . " class='img-responsive image'>
      <div class='caption'>
          <div class='row'>
              <div class='col-md-9 col-md-offset-1 col-sm-9 col-sm-offset-1 col-xs-9'>
                  <span class='boldLetters'>" . $game['title'] . "<br></span>
                  <span><br>Категорија: <span class='blueLetters boldLetters'>" . $game['category'] . "</span></span>
              </div>
              <div class='col-md-1 col-sm-1 col-xs-2 blackBackground'>
                  <img src=" . $game['image'] . " class='img-responsive smallImg'>
              </div>
          </div>
          <div class='row space'>
              <div class='col-md-1 col-md-offset-1 col-sm-1 col-sm-offset-1 col-xs-1 col-xs-offset-1'>
                  <i class='far fa-clock'></i>
              </div>
              <div class='col-md-9 col-sm-9 col-xs-9'>
                  <span class='boldLetters'>Времетраење<br></span>
                  <span>" . $game['time'] . "</span>
              </div>
          </div>
      </div>
      </a>
   </div>
   </div>
";
}

function navbar()
{
  echo '
  <nav class="navbar navbar-default">
  
    <div class="row">
      <div class="col-md-2 col-sm-3 col-xs-4">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="modal" data-target=#myModal role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i> Мени</a>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <a href="#top"><img src="assets/css/images/logo.png" class="img-responsive"></a>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <button type="button btn-lg" class="close" data-dismiss="modal" aria-label="Close"> <i class="fas fa-times"></i> <span>Затвори</span></button>
                      </div>
                    </div>
                  </div>
                  <div class="modal-body">
                    <ul class="nav-list">
                      <li><a href="login.php" class="yellow">Регистрирај се</span></li>
                      <li><a href="login.php" class="yellow">Најави се</a></li>
                      <li><a href="login.php">Регистрирај се</a></li>
                      <li><a href="aboutus.php">За нас</a></li>
                      <li><a href="#">Галерија</a></li>
                      <li><a href="contact.php">Контакт</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-md-3 col-md-offset-2 col-sm-4 col-xs-8">
        <div class="navbar-brand"> 
          <a href="#top"><img src="assets/css/images/logo.png" class="img-responsive headerLogo"></a>
        </div>
      </div>
      <div class="col-md-5 text-right">
        <div class="navbar-form navbar-right hiddenTablet">
          <a href="https://www.brainster.io/business" target="_blank"><button class="btn yellowButton">Обуки на компании</button></a>
          <a href="https://www.brainster.io/business" target="_blank"><button class="btn blackButton">Вработи наши студенти</button></a>
        </div>  
      </div>
    </div>
</nav>
    ';
}
function mainPage(){
  echo "
  <div class='blueBackground'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12 col-sm-12 text-center'>
          <h1>FUTURE-PROOF YOUR ORGANISATION</h1>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-12 col-sm-12 text-center'>
          <h4>Find out how to unlock progress in your business. Understand your current state, identify <br> opportunity areas and prepare to take charge of your organization's future.</h4>
        </div>
      </div>
      <div class='row'>
        <div class='col-md-12 col-sm-12 text-center'>
          <a href='https://brainsterquiz.typeform.com/to/kC2I9E' target='_blank'><button class='btn yellowButton'>Take the assessment</button></a>
        </div>
      </div>
    </div>
  </div>
  ";
}

function footer(){
  echo '
  
  <footer class="blueBackground">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 faLinks fahiddenLaptop text-center">
            <a href="https://www.linkedin.com/school/brainster-co/" target="_blank"><i class="fab fa-linkedin-in yellow"></i></a>
            <a href="https://twitter.com/BrainsterCo" target="_blank"><i class="fab fa-twitter yellow"></i></a>
                <a href="https://www.facebook.com/brainster.co" target="_blank"><i class="fab fa-facebook-f yellow"></i></a>
            </div>
                <div class="col-md-4 col-sm-4 col-xs-12 links text-center">
                    <a href="https://brainster.co/about" target="_blank">About us</a>
                    <a href="https://brainster.co/contact" target="_blank">Contact</a>
                    <a href="https://www.facebook.com/pg/brainster.co/photos/" target="_blank">Gallery</a>
                </div>
                <div class="col-md-4 col-md-offset-1 col-sm-4 col-xs-12">
                    <img src="assets/css/images/logo.png" class="img-responsive logo">
                </div>
                <div class="col-md-3 col-sm-3 faLinks fahiddenMobile">
                <a href="https://www.linkedin.com/school/brainster-co/" target="_blank"><i class="fab fa-linkedin-in yellow"></i></a>
                <a href="https://twitter.com/BrainsterCo" target="_blank"><i class="fab fa-twitter yellow"></i></a>
                    <a href="https://www.facebook.com/brainster.co" target="_blank"><i class="fab fa-facebook-f yellow"></i></a>
                </div>
            </div>
        </div>
    </footer>
    
  ';
}
function backgroundGame($game,$index,$location='index'){
  $img = $game['img'];
  echo '
  <div class="bgGame">
  <img src="' . $game["img"] . '">
  </div>
  ';
}
function singleGame($game, $index, $location = 'index'){
  $title = $game['title'];
  $text = $game['text'];
  $img = $game['img'];
  $level=$game['level'];
  $materials=$game['materials'];
  $time=$game['time'];
  $members=$game['members'];
  $level=$game['level'];
  $steps=$game['description'];
  echo "
  <div class='container setOfGames'>
        <div class='row'>
            <div class='col-md-12'>
                <h2>$title</h2>
            </div>
        </div>
        <div class='row  gameMain'>
            <div>
                <div class='col-md-3 col-sm-3 col-xs-12'>
                    <div class='row'>
                        <div class='col-md-1 col-sm-1 col-xs-1'>
                            <i class='far fa-clock'></i> 
                        </div>
                        <div class='col-md-10 col-sm-9 col-xs-9'>    
                            <span>Time Frame</span>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 greyLetters'>$time</div>
                    </div>
                </div>
            </div>
            <div>
                <div class='col-md-3 col-sm-3 col-xs-12'>
                <div class='row'>
                        <div class='col-md-1 col-sm-1 col-xs-1'>
                        <i class='fas fa-user-friends'></i>
                        </div>
                        <div class='col-md-10 col-sm-9 col-xs-9'>    
                            <span>Group Size</span>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 greyLetters'>$members</div>
                    </div>
                </div>
            </div>
            <div>
                <div class='col-md-3 col-sm-3 col-xs-12'>
                    <div class='row'>
                        <div class='col-md-1 col-sm-1 col-xs-1'>
                            <i class='fas fa-university'></i>
                        </div>
                        <div class='col-md-10 col-sm-9 col-xs-9'>    
                            <span>Facilitation Level</span>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 greyLetters'>Level</div>
                    </div>
                </div>
            </div>
        
            <div>
                <div class='col-md-3 col-sm-3 col-xs-12'>
                    <div class='row'>
                        <div class='col-md-1 col-sm-1 col-xs-1'>
                            <i class='fas fa-paint-roller'></i>
                        </div>
                        <div class='col-md-10 col-sm-9 col-xs-9'>    
                            <span>Materials</span>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 greyLetters'>$materials</div>
                    </div>
                </div>
            </div>
        </div>
        <div>$text</div>
        <div>$steps</div>
    </div>";
}