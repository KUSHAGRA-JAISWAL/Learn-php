<!--
* @file associative_arrays.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-19
* @copyright Copyright (c) 2022
-->

<!-- Program show's the concepts of associatives arrays in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "associative arays"; ?></title>

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
        <h1>associative arrays in php</h1><br>

        <h3>
            Associative arrays are arrays that have keys and values.<br>
            The keys are used to identify the value.<br>
            The values are the data that is stored.<br>
            The keys can be any type of data.<br><br>
            $favCol = array(<br>
            'hrv' => 'blue',<br>
            'mohan' => 'red',<br>
            'kush' => 'black',<br>
            'gaurav' => 'yellow'<br>
            );<br><br>
            echo "the favCol of hrv is $favCol[hrv]";<br>
            echo "the favCol of mohan is $favCol[mohan]";<br><br>
        </h3>

        <h3>
            <?php
            // Associative arrays are arrays that have keys and values.
            // The keys are used to identify the value.
            // The values are the data that is stored.
            // The keys can be any type of data.
            $favCol = array(
                'hrv' => 'blue',
                'mohan' => 'red',
                'kush' => 'black',
                'gaurav' => 'yellow'
            );
            echo "the favCol of hrv is $favCol[hrv] <br>";
            echo "the favCol of mohan is $favCol[mohan] <br>";
            ?>
        </h3>
        <br><br>

        <h3>
            $favCol = array(<br>
            'hrv' => 'blue',<br>
            'mohan' => 'red',<br>
            'kush' => 'black',<br>
            'gaurav' => 'yellow'<br>
            );<br>
            foreach ($favCol as $key => $value)<br>
            {<br>
            echo "the favCol of $key is $value";<br>
            }<br>
            <hr>
            <h2><b><u>Output</u></b></h2><br>
        </h3>

        <h3>
            <?php
            $favCol = array(
                'hrv' => 'blue',
                'mohan' => 'red',
                'kush' => 'black',
                'gaurav' => 'yellow'
            );
            foreach ($favCol as $key => $value) {
                echo "the favCol of $key is $value <br>";
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