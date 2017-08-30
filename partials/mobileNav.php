<ul>
    <li><a href="<?php
        if($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php"){
            echo "#here";
        }else{
            echo "/";
        }
    ?>"><i class="material-icons">home</i></a></li>
    <li><a href="<?php
        if($_SERVER['REQUEST_URI'] == "/services.php"){
            echo "#here";
        }else{
            echo "/services.php";
        }
    ?>"><i class="material-icons">services</i></a></li>
    <li><a href="<?php
        if($_SERVER['REQUEST_URI'] == "/about.php"){
            echo "#here";
        }else{
            echo "/about.php";
        }
    ?>"><i class="material-icons">about</i></a></li>
    <li><a href="<?php
        if($_SERVER['REQUEST_URI'] == "/contact.php"){
            echo "#here";
        }else{
            echo "/contact.php";
        }
    ?>"><i class="material-icons">contact</i></a></li>
</ul>