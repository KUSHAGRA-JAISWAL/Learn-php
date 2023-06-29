<!--
* @file sessions.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-23
* @copyright Copyright (c) 2022
-->

<!-- Program show's the Concept of sessions in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "sessions"; ?></title>
</head>

<body>
    <div class="container my-3">
        <h1>Concept of sessions in php</h1>
        <h3>
            // what is session?<br>
            // used to manage information across different pages.<br>
            <br>
            // verify user login info<br>
            session_start();<br>
            $_SESSION['username'] = "kush";<br>
            $_SESSION['favcat'] = "books";<br>
            echo "we have saved your session";<br>
        </h3>
        <hr>
        <h2><b><u>Output</u></b></h2><br>
        <h3>
            <?php
            // what is session?
            // used to manage information across different pages.  

            // verify user login info
            session_start();
            $_SESSION['username'] = "kush";
            $_SESSION['favcat'] = "books";
            echo "we have saved your session";

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