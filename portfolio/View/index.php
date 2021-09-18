<!DOCTYPE html>
<?php

?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include_once '../View/stylesheets.php'; ?>
        <title>Grace Moore</title>
        
    </head>
    <?php include_once 'navbar.php'; ?>
    <body>
        <div class="container">
            <div class="row"> 
                <div class="col"><img src="../images/logo.jpg" alt="logo" id="myImg"></div>
                <div class="col buttons" id="con">
                    <img src="../images/image2.jpg" alt="logo" > 
                    <a href="portfolio.php" id="button1" >View Portfolio</a>
                </div>
            </div>
            <div class="block"></div>
            <div class="logo">
                <h2>PORTFOLIO</h2>
                <!--<img src="../images/image3.jpg" alt="logo" > -->
            </div>
        </div>

        <img id="myImg" src="../images/logo.jpg" alt="Snow" style="width:500px;max-width:auto">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>

<script src="../js/imageView.js"></script> 
    </body>
</html>
