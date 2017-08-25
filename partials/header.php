<h1><i class="material-icons">&#xE3F3;</i></h1>
<h2>CMSC</h2>
<ul>
    <li><a href="<?php
        if($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index.php"){
            echo "#here";
        }else{
            echo "/";
        }
    ?>">Home</a></li>
    <li><a href="<?php
        if($_SERVER['REQUEST_URI'] == "/services.php"){
            echo "#here";
        }else{
            echo "/services.php";
        }
    ?>">What We Do</a></li>
    <li><a href="<?php
        if($_SERVER['REQUEST_URI'] == "/about.php"){
            echo "#here";
        }else{
            echo "/about.php";
        }
    ?>">Who We Are</a></li>
    <li><a href="<?php
        if($_SERVER['REQUEST_URI'] == "/contact.php"){
            echo "#here";
        }else{
            echo "/contact.php";
        }
    ?>">Have A Concern?</a></li>
</ul>