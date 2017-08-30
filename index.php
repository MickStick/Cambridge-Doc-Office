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
                    <div class="slide" style="background-color: rgba(255,0,0,0.5);"><br><br><br><br>Img 1</div>
                    <div class="slide" style="background-color: rgba(255,255,0,0.6);"><br><br><br><br>Img 2</div>
                    <div class="slide" style="background-color: rgba(0,0,255,0.4);"><br><br><br><br>Img 3</div>
                    <div class="slide" style="background-color: rgba(0,255,0, 0.5);"><br><br><br><br>Img 4</div>
                    
                </div>
            </div>
            <!--//////////////////// Template Code ////////////////////////-->

            <!--/////////////////// Services Teaser ///////////////////////-->
            <div class="Service-Teaser-wrapper">
                <div class="Service-Teaser-Container">
                    <?php
                        include "model/DBConfig.php";
                        $service = $conn->query("SELECT service FROM services");
                        $x = 0;
                        while($name = $service->fetch_assoc()){?>
                            <div class="service-teaser">
                                <h3><?php echo $name["service"]?></h3>
                                <a href="">Read More</a>
                            </div>
                            <?php
                            $x++;
                            if($x >= 5){
                                break;
                            }
                        }
                        $conn->close();
                    ?>
                </div>
                <a href="">View More</a>
            </div>
            <!--/////////////////// Services Teaser ///////////////////////-->

        </main>
    </body>
    
    <footer>
        <?php include "partials/footer.php"; ?>
    </footer>

    <nav class="lower-nav" hidden>
        <?php include "partials/mobileNav.php";?>
    </nav>
</html>
