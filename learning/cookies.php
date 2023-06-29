<!--
* @file cookies.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-23
* @copyright Copyright (c) 2022
-->

<!-- Program show's the Concept of cookies in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "cookies"; ?></title>
</head>

<body>
    <div class="container my-3">
        <h1>Concept of cookies in php</h1>
        <h3>
            echo "welcome to the world of cookies";<br>
            <br>
            // Syntax to set a cookie<br>
            setcookie("category","Books", time() + 86400, "/");<br>
            /**<br>
            * setcookie is a function which is use to set the cookie<br>
            * first it takes category<br>
            * second the name of category example books<br>
            * third it takes the time, till how much time you want to store the cookie<br>
            * fourth it take the url where you want to store the cookie<br>
            */<br>
            <br>
            echo "The cookie is set";<br>
        </h3>
        <hr>
        <h2><b><u>Output</u></b></h2><br>
        <h3>
            <?php
            echo "welcome to the world of cookies <br>";

            // Syntax to set a cookie
            setcookie("category", "Books", time() + 86400, "/");
            /**
             * setcookie is a function which is use to set the cookie
             * first it takes category
             * second the name of category example books
             * third it takes the time, till how much time you want to store the cookie
             * fourth it take the url where you want to store the cookie
             */

            echo "The cookie is set <br>";
            ?>
        </h3>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>