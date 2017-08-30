<?php
    $title = "What We Do";
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
            <div class="Services">
                <?php
                    include "model/DBConfig.php";
                    $services = $conn->query("select * from services");
                    while($service = $services->fetch_assoc()){?>
                        <div class="service-container" data-id="<?php echo $service["sid"]; ?>">
                            <label> <strong><?php echo $service["service"]; ?></strong></label>
                            <p><?php echo $service["description"];?></p>
                            <label id="view-desc">Read More</label>
                            <h4><?php echo "$".$service["price"].".00"?></h4>                            
                            <button><i class="material-icons">book</i></button>
                        </div><?php

                    }
                    $conn->close();
                ?>
            </div>
            <script>
                $(document).ready(function(){   
                    $('body main .Services .service-container #view-desc').click(function(e) {
                        if ($(this).parent().children('p').css("height") == "65px") {
                            $(this).text("See Less");
                            $(this).parent().children('p').animate({ height: $(this).parent().children('p').get(0).scrollHeight });
                            //$(this).parent().children('p').css({ "padding": "0mm 0mm 2mm 0mm" });
                        } else {
                            $(this).text("Read More");
                            $(this).parent().children('p').animate({ height: "65px" });
                            //$(this).parent().children('p').css({ "padding": "initial" });
                        }
                    });
                });
            </script>
        </main>
    </body>
    <footer>
        <?php include "partials/footer.php"; ?>
    </footer>
    <nav class="lower-nav" hidden>
        <?php include "partials/mobileNav.php";?>
    </nav>
</html>
