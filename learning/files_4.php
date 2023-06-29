<!--
* @file files_4.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-23
* @copyright Copyright (c) 2022
-->

<!-- Program show's the Concept of Files write mode, append and fwrite() in php. -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title><?php echo "files 4"; ?></title>
</head>

<body>
    <div class="container my-3">
        <h1>Concept of Files write mode, append and fwrite() in php</h1>
        <h3><br>

            $fptr = fopen("myFiles.txt", "w");<br>
            /*<br>
            here fptr is file pointer,<br>
            fopen means we are opeaning the file,<br>
            inside the fopen we passed two arguments,<br>
            first is our file name which we want to open and<br>
            second is w which means write.<br>
            */<br>
            if (!$fptr) {<br>
            die("Unable to open the file. Pleae enter a valid file name.");<br>
            }<br>
            <br>
            fwrite($fptr, "i m writing inside a text file using fwrite().\n");<br>
            fwrite($fptr, "i m writing inside a text file using fwrite() and it is amazing.\n");<br>
            // fwrite() is use to write the content inside the file, here first argument is $fptr which indicates which file we have to write and second is the content which we want to write inside the file.<br>
            fclose($fptr);<br>
            // we use fclose to close the file after work it saves the memory.<br>
            <br>
            // Appending to a file in php<br>
            $fptr = fopen("myFiles.txt", "a");<br>
            // here a means append.<br>
            <br>
            fwrite($fptr,"this is being append to a file.\n");<br>
            <br>
            fclose($fptr);<br>
            <br>
            <hr>
            <h2><b><u>Output</u></b></h2><br>
        </h3>
        <h3>
            <?php
            $fptr = fopen("myFiles.txt", "w");
            /* 
             here fptr is file pointer,
            fopen means we are opeaning the file,
            inside the fopen we passed two arguments,
            first is our file name which we want to open and
            second is w which means write.
            */
            if (!$fptr) {
                die("Unable to open the file. Pleae enter a valid file name.");
            }

            fwrite($fptr, "i m writing inside a text file using fwrite().\n");
            fwrite($fptr, "i m writing inside a text file using fwrite() and it is amazing.\n");
            // fwrite() is use to write the content inside the file, here first argument is $fptr which indicates which file we have to write and second is the content which we want to write inside the file.
            fclose($fptr);
            // we use fclose to close the file after work it saves the memory.

            // Appending to a file in php
            $fptr = fopen("myFiles.txt", "a");
            // here a means append.

            fwrite($fptr, "this is being append to a file.\n");

            fclose($fptr);
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