<!DOCTYPE HTML>
<html lang="pl">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="js/js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="msbioss">
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
</head>
<body>
  <div class="top">
    <div class="imgtop he100 js-parallax-bg"></div>
    <div class="logotop"><h1 style="margin-top:150px;">MS Bioss</h1><h2>Serwis, sklep komputerowy</h2></div>
  </div>
  <div class="bottom container-fluid">
    <div class="nav-bar col-lg-12 col-md-12-col-sm-12">

      <!-- lewa strona navbar -->
      <div class="col-lg-6 col-md-6 col-sm-6 text-center">
        <div id="btn_nd" class="button col-lg-6 col-md-6 col-sm-6">Nowogard</div>

        <div id="gol_left_nav2" class="navbar2 col-lg-12 col-md-12-col-sm-12" style="display:none;">
          <div id="gol_left_btn_1" class="col-lg-4 col-md-5 col-sm-5 text-center"><div class="main_btn button col-lg-12">Strona główna</div></div>
          <div id="gol_left_btn_2" class="col-lg-4 col-md-5 col-sm-5 text-center"><div class="button col-lg-12">Co oferujemy</div></div>
          <div id="gol_left_btn_3" class="col-lg-4 col-md-5 col-sm-5 text-center"><div class="button col-lg-12">Jak nas szukać</div></div>
        </div>

        <div id="nd_left_logo" class="col-lg-12 col-md-12-col-sm-12" style="display:none;">
          <div class="col-lg-6 col-md-6 col-sm-6"></div>
          <div id="nd_left_btn_nd" class="col-lg-6 col-md-6 col-sm-6"><div class="button col-lg-12">Nowogard</div></div>
        </div>

      </div>

      <!-- prawa strona navbar -->
      <div id="right_nav2" class="np col-lg-6 col-md-6 col-sm-6 text-center">
        <div id="btn_gol" class="button col-lg-6 col-md-6 col-sm-6">Goleniów</div>

        <div id="nd_right_nav2" class="navbar2 col-lg-12 col-md-12-col-sm-12" style="display:none;">
          <div id="nd_right_btn_1" class="col-lg-4 col-md-5 col-sm-5 text-center"><div class="main_btn button col-lg-12">Strona główna</div></div>
          <div id="nd_right_btn_2" class="col-lg-4 col-md-5 col-sm-5 text-center"><div class="button col-lg-12">Co oferujemy</div></div>
          <div id="nd_right_btn_3" class="col-lg-4 col-md-5 col-sm-5 text-center"><div class="button col-lg-12">Jak nas szukać</div></div>
        </div>

        <div id="gol_right_logo" class="col-lg-12 col-md-12-col-sm-12" style="display:none;">
          <div id="gol_right_btn_gol" class="col-lg-6 col-md-6 col-sm-6"><div class="button col-lg-12">Goleniów</div></div>
          <div class="col-lg-6 col-md-6 col-sm-6"></div>
        </div>

      </div>


    </div>
    <div class="main">

<?php
include "main.php";
?>
      <!--<p>Witaj na stronie naszego serwisu. Jesteśmy szczęśliwi że nas odwiedzasz. Mamy do zaoferowania szeroki wachlarz usług oraz towarów.</p> -->
    </div>
  </div>
</body>
</html>
