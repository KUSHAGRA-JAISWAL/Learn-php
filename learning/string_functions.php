<!--
* @file string_functions.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-18
* @copyright Copyright (c) 2022
-->

<!-- Program show's concepts of string functions in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "string functions"; ?></title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">php tutorials</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-3">
        <h1>String functions in php</h1><br><br>
        <h4>1.<u><b>strlen:-</b></u> It is the function which counts the length of the string including the white spaces.</h4>
        <p>
            $name = "Kushagra";<br>
            echo "The name is : $name";<br>
            echo "The length of the name is : " . strlen($name);<br>
            We can join two strings using the (.) operator.<br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $name = "Kushagra";
        echo "The name is : $name";
        echo "<br>";
        echo "The length of the name is : " . strlen($name);
        // We can join two strings using the . operator.
        ?>

        <br><br><hr>
        <h4>2.<u><b>str_word_count:-</b></u> It is the function which counts the word of the given string.</h4>
        <p>
            $name = "Kushagra";<br>
            echo "The name is : $name";<br>
            echo "The words in the name is : " . str_word_count($name);<br>
            We can join two strings using the (.) operator.<br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $name = "Kushagra";
        echo "The name is : $name";
        echo "<br>";
        echo "The words in the name is : " . str_word_count($name);
        // We can join two strings using the . operator.
        ?>

        <br><br><hr>
        <h4>3.<u><b>strrev:-</b></u> It is the function which reverse the given string.</h4>
        <p>
            $name = "Kushagra";<br>
            echo "The name is : $name";<br>
            echo "The reverse of name is : " . strrev($name);<br>
            We can join two strings using the (.) operator.<br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $name = "Kushagra";
        echo "The name is : $name";
        echo "<br>";
        echo "The revere of name is : " . strrev($name);
        // We can join two strings using the . operator.
        ?>

        <br><br><hr>
        <h4>4.<u><b>strpos:-</b></u> It is the function which search the word or letter in the given string and returns it position.</h4>
        <p>
            $name = "Kushagra";<br>
            echo "The name is : $name";<br>
            echo "The position of the string in name is : " . strpos($name, "a");<br>
            We can join two strings using the (.) operator.<br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $name = "Kushagra";
        echo "The name is : $name";
        echo "<br>";
        echo "The position of the string in name is : " . strpos($name, "a");
        // We can join two strings using the . operator.
        ?>

        <br><br><hr>
        <h4>5.<u><b>str_replace:-</b></u> It is the function which replace the word or letter in the given string.</h4>
        <p>
            $name = "Kushagra";<br>
            echo "The name is : $name";<br>
            echo "The replace of letter in name is : " . str_replace("a", "A", $name);<br>
            We can join two strings using the (.) operator.<br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $name = "Kushagra";
        echo "The name is : $name";
        echo "<br>";
        echo "The replace of letter in name is : " . str_replace("a", "A", $name);
        // We can join two strings using the . operator.
        ?>

        <br><br><hr>
        <h4>6.<u><b>str_repeat:-</b></u> It is the function which repeat's the given string as many time as we want.</h4>
        <p>
            $name = "Kushagra ";<br>
            echo "The name is : $name";<br>
            echo "The repeation is : " . str_repeat($name, 10);<br>
            We can join two strings using the (.) operator.<br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $name = "Kushagra ";
        echo "The name is : $name";
        echo "<br>";
        echo "The repeation is : " . str_repeat($name, 10);
        // We can join two strings using the . operator.
        ?>



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