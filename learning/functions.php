<!--
* @file functions.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-19
* @copyright Copyright (c) 2022
-->

<!-- Program show's the concepts of functions in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "functions"; ?></title>

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
        <h1>functions in php</h1><br><br>
        <h2><b><u>Function for calculating total marks</u></b></h2><br>
        <h3>
            function processMarks($marksArr){<br>
            $sum = 0;<br>
            foreach($marksArr as $value){<br>
            $sum += $value;<br>
            }<br>
            return $sum;<br>
            }<br><br>

            $hrv = array(100, 95, 93, 97, 99);<br>
            $sumMarksHrv = processMarks($hrv);<br>
            echo "Total marks scored by god hrv out of 500 is $sumMarksHrv";<br>

            $kush = [10, 40, 50, 55, 5];<br>
            $sumMarksKush = processMarks($kush);<br>
            echo "Total marks scored by noob kush out of 500 is $sumMarksKush";<br><br>

        </h3>
        <hr>
            <h2><b><u>Output</u></b></h2><br>
        <h3>
            <?php
            // function declaration
            function processMarks($marksArr)
            {
                $sum = 0;
                foreach ($marksArr as $value) {
                    $sum += $value;
                }
                return $sum;
            }

            $hrv = array(100, 95, 93, 97, 99);
            $sumMarksHrv = processMarks($hrv);
            echo "Total marks scored by god hrv out of 500 is $sumMarksHrv" . "<br>";

            $kush = [10, 40, 50, 55, 5];
            $sumMarksKush = processMarks($kush);
            echo "Total marks scored by noob kush out of 500 is $sumMarksKush";
            ?>
        </h3>
        <h2>_________________________________________________________</h2><br>
        <h2><b><u>Function for calculating average marks</u></b></h2><br>
        <h3>
            function avgMarks($marksArr){<br>
            $sum = 0;<br>
            $i = 1;<br>
            foreach($marksArr as $value){<br>
            $sum += $value;<br>
            $i++;<br>
            }<br>
            return $sum/$i;<br>
            }<br>
            <br>
            $hrv = array(100, 95, 93, 97, 99);<br>
            $sumMarksHrv = avgMarks($hrv);<br>
            echo "Total marks scored by god hrv out of 500 is $sumMarksHrv";<br>
            <br>
            $kush = [10, 40, 50, 55, 5];<br>
            $sumMarksKush = avgMarks($kush);<br>
            echo "Total marks scored by noob kush out of 500 is $sumMarksKush";<br>
            <br>
            <br>
        </h3>
        <h3>
            <?php
            function avgMarks($marksArr)
            {
                $sum = 0;
                $i = 1;
                foreach ($marksArr as $value) {
                    $sum += $value;
                    $i++;
                }
                return $sum / $i;
            }

            $hrv = array(100, 95, 93, 97, 99);
            $sumMarksHrv = avgMarks($hrv);
            echo "Total marks scored by god hrv out of 500 is $sumMarksHrv" . "<br>";

            $kush = [10, 40, 50, 55, 5];
            $sumMarksKush = avgMarks($kush);
            echo "Total marks scored by noob kush out of 500 is $sumMarksKush";

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