<!--
* @file multi_dim_arrays.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-19
* @copyright Copyright (c) 2022
-->

<!-- Program show's the concepts of multi dimensional arrays in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "multi dimensional arrays"; ?></title>

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
        <h1>multi dimensional arrays in php</h1><br>
        <h2><u><b>Creating 2D arrays<b></u></h2>

        <h4>
        $multiDim = array(array(2,5,7,8),<br>
                          array(1,2,3,1),<br>
                          array(4,5,0,1));<br><br>

                printing the multi dimensional array.<br><br>
                for ($i = 0;  $i < count($multiDim); $i++){<br>
                    for ($j = 0; $j < count($multiDim[$i]); $j++){<br>
                        echo $multiDim[$i][$j];<br>
                        echo " ";<br>
                    }<br>
                    echo "< br >";<br>
                }<br><br>
        </h4>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <h3>
            <?php
                // creating multi dimensional arrays.
                $multiDim = array(array(2,5,7,8),
                                  array(1,2,3,1),
                                  array(4,5,0,1));

                // printing the multi dimensional array.
                for ($i = 0;  $i < count($multiDim); $i++){
                    for ($j = 0; $j < count($multiDim[$i]); $j++){
                        echo $multiDim[$i][$j];
                        echo " ";
                    }
                    echo "<br>";
                }

                ?>
        </h3>

        <h2><u><b>Creating 3D arrays<b></u></h2>

        <h4>
        $threeDim = array(array(array(1,2,3,4),<br>
                                        array(5,6,7,8),<br>
                                        array(9,10,11,12)<br>
                                        ),<br>
                                  array(array(13,14,15,16),<br>
                                        array(17,18,19,20),<br>
                                        array(21,22,23,24)<br>
                                        ),<br>
                                  array(array(25,26,27,28),<br>
                                        array(29,30,31,32),<br>
                                        array(33,34,35,36)<br>
                                        )<br>
                                  );<br><br>

                for ($x = 0; $x < count($threeDim); $x++){<br>
                    for ($y = 0; $y < count($threeDim[$x]); $y++){<br>
                        for ($z = 0; $z < count($threeDim[$x][$y]); $z++){<br>
                            echo "[$x][$y][$z] = ". $threeDim[$x][$y][$z] . "&nbsp;&nbsp;";<br><br>
                
                        }<br>
                        echo "< br >";<br>
                    }<br>
                    echo "< br >";<br>
                }<br><br>
        </h4>
            <h3>
                <?php

                $threeDim = array(array(array(1,2,3,4),
                                        array(5,6,7,8),
                                        array(9,10,11,12)
                                        ),
                                  array(array(13,14,15,16),
                                        array(17,18,19,20),
                                        array(21,22,23,24)
                                        ),
                                  array(array(25,26,27,28),
                                        array(29,30,31,32),
                                        array(33,34,35,36)
                                        )
                                  );

                for ($x = 0; $x < count($threeDim); $x++){
                    for ($y = 0; $y < count($threeDim[$x]); $y++){
                        for ($z = 0; $z < count($threeDim[$x][$y]); $z++){
                            echo "[$x][$y][$z] = ". $threeDim[$x][$y][$z] . "&nbsp;&nbsp;";
                
                        }
                        echo "<br>";
                    }
                    echo "<br>";
                }
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