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
                        <div class="service-container" data-id="<?php echo $service["sid"]; ?>" style="margin-bottom: 5mm">
                            <label style="font-size: 32px"> <strong><?php echo $service["service"]; ?></strong></label>
                            <p><?php echo $service["description"];?></p>
                            <h4><?php echo $service["price"]?></h4>
                            <button><i class="material-icons">book</i></button>
                        </div><?php

                    }
                ?>
            </div>
        </main>
    </body>
    <footer>
        <?php include "partials/footer.php"; ?>
    </footer>
</html>
