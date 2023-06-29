<!--
* @file operators.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-18
* @copyright Copyright (c) 2022
-->

<!-- Program show's concepts of Operators in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "Operators"; ?></title>

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
        <h1>Operators in php</h1><br><br>
        <ol>
            <b>
                <li>Arthmetic Operators</li>
                <li>Assignment Operators</li>
                <li>Comparison Operators</li>
                <li>Logical Operators</li>
            </b>
        </ol>
        <h4>1.<u><b>Artmetic Operators:-</b></u>+, -, x, /, % are the arthmetic operators.</h4>
        <p>
            $a = 10;<br>
            $b = 2;<br>
            echo "For a + b, the result is " . ($a + $b) <br>
            echo "For a - b, the result is " . ($a - $b) <br>
            echo "For a * b, the result is " . ($a * $b) <br>
            echo "For a / b, the result is " . ($a / $b) <br>
            echo "For a % b, the result is " . ($a % $b) <br>
            echo "For a ** b, the result is " . ($a ** $b) <br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $a = 10;
        $b = 2;
        echo "For a + b, the result is " . ($a + $b) . "<br>";
        echo "For a - b, the result is " . ($a - $b) . "<br>";
        echo "For a * b, the result is " . ($a * $b) . "<br>";
        echo "For a / b, the result is " . ($a / $b) . "<br>";
        echo "For a % b, the result is " . ($a % $b) . "<br>";
        echo "For a ** b, the result is " . ($a ** $b) . "<br>";
        // We can join two strings using the . operator.
        ?>

        <br><br><hr>
        <h4>2.<u><b>Assignment Operators:-</b></u> It is use to assign the values.(=, +=, -=, *=, /=).</h4>
        <p>
            $a = 10;<br>
            $b = $a;<br>
            echo "For b, the result is " . $b <br>
            $b += 10;<br>
            echo "For b, the result is " .$b <br>
            $b = 10;<br>
            $b -= 10;<br>
            echo "For b, the result is " .$b <br>
            $b = 10;<br>
            $b *= 10;<br>
            echo "For b, the result is " .$b <br>
            $b = 10;<br>
            $b /= 10;<br>
            echo "For b, the result is " .$b <br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $a = 10;
        $b = $a;
        echo "For b, the result is " . $b . "<br>";
        $b += 10;
        echo "For b, the result is " .$b . "<br>";
        $b = 10;
        $b -= 10;
        echo "For b, the result is " .$b . "<br>";
        $b = 10;
        $b *= 10;
        echo "For b, the result is " .$b . "<br>";
        $b = 10;
        $b /= 10;
        echo "For b, the result is " .$b . "<br>";
        // We can join two strings using the . operator.
        ?>

        <br><br><hr>
        <h4>3.<u><b>Comparison Operators:-</b></u> It is use for the comparision.(x==y, x>y ,etc..  )</h4>
        <p>
           $x = 7;<br>
           $y = 7;<br>
           echo "For x == y, the result is "; <br>
           echo var_dump($x == $y);<br>
           $y = 10;<br>
           echo "For x > y, the result is "; <br>
           echo var_dump($x > $y);<br>
           $x = 11;<br>
           echo "For x > y, the result is "; <br>
           echo var_dump($x > $y);<br>
           $x = 7;<br>
           echo "For x < y, the result is "; <br>
           echo var_dump($x < $y);<br>
           echo "Forx != y, the result is "; <br>
           echo var_dump($x != $y);<br>
        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
       $x = 7;
       $y = 7;
       echo "For x == y, the result is " . "<br>"; 
       echo var_dump($x == $y) . "<br>";
       $y = 10;
       echo "For x > y, the result is " . "<br>"; 
       echo var_dump($x > $y) . "<br>";
       $x = 11;
       echo "For x > y, the result is " . "<br>"; 
       echo var_dump($x > $y) . "<br>";
       $x = 7;
       echo "For x < y, the result is " . "<br>"; 
       echo var_dump($x < $y) . "<br>";
       echo "Forx != y, the result is " . "<br>"; 
       echo var_dump($x != $y) . "<br>";
        // We can join two strings using the . operator.
        ?>

        <br><br><hr>
        <h4>4.<u><b>Logical Operators:-</b></u> And, OR, NOT, &&, ||, !, these are the logical operators.</h4>
        <p>
           $a = true;<br>
           $b = true;<br>

           echo "For a and b, the result is "; <br>
           echo var_dump($a and $b);<br>

           $a = true;<br>
           $b = false;<br>
           echo "For a and b, the result is "; <br>
           echo var_dump($a && $b);<br>
        
           echo "For a or b, the result is "; <br>
           echo var_dump($a or $b);<br>
          
           echo "For a or b, the result is "; <br>
           echo var_dump($a || $b);<br>

           echo "For not b, the result is "; <br>
           echo var_dump( ! $b);<br>

        </p>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <?php
        $a = true;
        $b = true;

        echo "For a and b, the result is "; 
        echo var_dump($a and $b) . "<br>";

        $a = true;
        $b = false;
        echo "For a and b, the result is "; 
        echo var_dump($a && $b) . "<br>";
        echo "For a or b, the result is "; 
        echo var_dump($a or $b) . "<br>";
       
        echo "For a or b, the result is "; 
        echo var_dump($a || $b) . "<br>";

        echo "For not b, the result is "; 
        echo var_dump( ! $b) . "<br>";
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