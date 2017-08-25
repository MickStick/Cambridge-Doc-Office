<?php
    $title = "Have A Concern?";
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
            <form class="contact-form">
                <label for=""> Voice Your Concern </label>
                <table>
                    <tr><td><input type="text" name="name" placeholder="Your Name"/></td></tr>
                    <tr><td><input type="text" name="subject" placeholder="Subject Of The Matter"/></td></tr>
                    <tr><td><input type="text" name="email" placeholder="Your Email Address"/></td></tr>
                    <tr><td><textarea name="concern" placeholder="Your Concern Here..."></textarea></td></tr>
                </table>
                <button type="">Submit</button>
            </form>
        </main>
    </body>
    <footer>
        <?php include "partials/footer.php"; ?>
    </footer>
</html>
