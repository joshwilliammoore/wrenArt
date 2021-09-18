<!DOCTYPE html>
<?php
require_once '../Controller/allPortfolio.php';
require_once '../Model/Portfolio.php';
?>
<html>
    <head>
        <?php include_once '../View/stylesheets.php'; ?>
        <title>Hello</title>
        
    </head>
    <?php include_once 'navbar.php'; ?>
    <body>
        <div class="container">
            <h1>Portfolio</h1>
            <div id="gridview">
                <?php foreach ($results as $image): ?>
                    <div class="image myImg">
                        <a href="../View/portfolio.php#portfolio_id=<?= $image->Portfolio_ID ?>"><img src="data:image/png;base64,<?= base64_encode($image->Image) ?>" name="<?= $image->Name ?>" class="imageView" id="<?= $image->Portfolio_ID ?>" value="<?= $image->Portfolio_ID ?>" /></a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>
        <script src="../js/imageView.js"></script> 
    </body>
</html>
