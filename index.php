<?php
    $title = "Home";
    include "controller/MainController.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "partials/head.php"; ?>
    </head>

    <header>
        <?php include "partials/header.php"; ?>
    </header>
    <body>
        <main>
            <!--//////////////////// Template Code ////////////////////////-->
            <div class="slider-wrap">
                <div class="slider">
                    <div class="slide"><br><br><br><br>Img 1</div>
                    <div class="slide"><br><br><br><br>Img 2</div>
                    <div class="slide"><br><br><br><br>Img 3</div>
                    <div class="slide"><br><br><br><br>Img 4</div>
                    
                </div>
            </div>
            <!--//////////////////// Template Code ////////////////////////-->

        </main>
    </body>
    <footer>
        <?php include "partials/footer.php"; ?>
    </footer>
</html>
