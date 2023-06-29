<!--
* @file files_2.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-23
* @copyright Copyright (c) 2022
-->

<!-- Program show's the Concept of Files ( fopean(), fread() and fclose() ) in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "files 2"; ?></title>
</head>

<body>
    <div class="container my-3">
        <h1>Concept of Files ( fopean(), fread() and fclose() ) in php</h1><br>
        <h3>
            $fptr = fopen("aboutMe.txt", "r");<br>
            /*<br>
            here fptr is file pointer,<br>
            fopen means we are opeaning the file,<br>
            inside the fopen we passed two arguments,<br>
            first is our file name which we want to open and<br>
            second is r which means read.<br>
            */<br>
            if (!$fptr){<br>
            die("Unable to open the file. Pleae enter a valid file name.");<br>
            }<br>
            <br>
            $content = fread($fptr, filesize("aboutMe.txt"));<br>
            echo $content;<br>
            /*<br>
            here fread means file read,<br>
            here also we pass two arguments in it,<br>
            first is $fptr which opens our file in read mode,<br>
            second is a function filesize("filename.txt") which tells the total number of characters in file.<br>
            */<br>
            <br>
            fclose($fptr);<br>
            // we use fclose to close the file after work it saves the memory.<br>
            <hr>
            <h2><b><u>Output</u></b></h2><br>
        </h3>
        <h3>
            <?php
            $fptr = fopen("aboutMe.txt", "r");
            /* 
             here fptr is file pointer,
            fopen means we are opeaning the file,
            inside the fopen we passed two arguments,
            first is our file name which we want to open and
            second is r which means read.
            */
            if (!$fptr) {
                die("Unable to open the file. Pleae enter a valid file name.");
            }

            $content = fread($fptr, filesize("aboutMe.txt"));
            echo $content;
            /*
            here fread means file read,
            here also we pass two arguments in it,
            first is $fptr which opens our file in read mode,
            second is a function filesize("filename.txt") which tells the total number of characters in file.
            */

            fclose($fptr);
            // we use fclose to close the file after work it saves the memory.
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