<!--
* @file data_types.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-18
* @copyright Copyright (c) 2022
-->

<!-- Program show's concepts of data types in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "data types "; ?></title>

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
        <h1>Datatypes in php</h1>
        <?php
        $name = "Kushagra";
        $income = 10000;
        ?>
        <h3>php data types</h3>
        <ol>
            <b>
                <li>String</li>
                <li>Integer</li>
                <li>Float</li>
                <li>Boolean</li>
                <li>Array</li>
                <li>Object</li>
                <li>Null</li>
            </b>
        </ol>
        <h4><u><b>String:-</b></u> It is a sequence of characters.(like $name , $friend). </h4>
        <p>
            $name = "Kushagra";<br>
            $friend = "Hrv";<br>
            echo "$name is friend of $friend";<br>
            <hr>
            <h2><b><u>Output</u></b></h2><br>
        </p>
        <?php
        $name = "Kushagra";
        $friend = "Hrv";
        echo "$name is friend of $friend.";
        ?>
        <br><br><hr>
        <h4><u><b>Integer:-</b></u> It is a non-decimal number.(like $income , $debts). </h4>
        <p>
            $income = 455;<br>
            $debts = -655;<br>
            echo $income;<br>
            echo $debts;<br>
            <hr>
            <h2><b><u>Output</u></b></h2><br>
        </p>
        <?php
        $income = 455;
        $debts = -655;
        echo $income;
        echo "<br>";
        echo $debts;
        ?>

        <br><br><hr>
        <h4><u><b>Float:-</b></u> It is a decimal point number.(like $income , $debts). </h4>
        <p>
            $income = 55.5;<br>
            $debts = -65.5;<br>
            echo $income;<br>
            echo $debts;<br>
            <hr>
            <h2><b><u>Output</u></b></h2><br>
        </p>
        <?php
        $income = 55.5;
        $debts = -65.5;
        echo $income;
        echo "<br>";
        echo $debts;
        ?>

        <br><br><hr>
        <h4><u><b>Boolean:-</b></u> Can be either true or false.(like $x , $y). </h4>
        <p>
            $x = true;<br>
            $y = flase;<br>
            echo var_dump($x);<br>
            echo var_dump($x);<br>
            work of var_dump function is to print its value and data type.<br>
            <hr>
            <h2><b><u>Output</u></b></h2><br>
        </p>
        <?php
        $x = true;
        $y = false;
        echo var_dump($x);
        echo "<br>";
        echo var_dump($y);
        ?>

        <br><br><hr>
        <h4><u><b>Array:-</b></u> It is use to store multiple values in a single variable.(like $friends). </h4>
        <p>
            $friends = array("kush", "hrv", "mohan");<br>
            echo $friends[0];<br>
            echo $friends[1];<br>
            echo $friends[2];<br>
            <hr>
            <h2><b><u>Output</u></b></h2><br>
            
        </p>
        <?php
         $friends = array("kush", "hrv", "mohan");
         echo $friends[0];
         echo "<br>";
         echo $friends[1];
         echo "<br>";
         echo $friends[2];
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