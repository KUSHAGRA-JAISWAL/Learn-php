<!--
* @file index.php
* @author KUSHAGRA JAISWAL 
* @date 2022-06-21
* @copyright Copyright (c) 2022
-->

<?php
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES ('1', 'go to buy fruits', 'hey kush you have to buy some fruits\r\n\r\n1.mangoes\r\n2.bananas\r\n3.lavdaas\r\n4.lassans', current_timestamp());
// connect to the database.
$servername = "localhost";
$username = "root";
$password = "";
$database = "crud_app";
$insert = false;
$update = false;
$delete = false;

// Create a Connection Object
$conn = mysqli_connect($servername, $username, $password, $database);

//Die if connection was not successfull
if (!$conn) {
  die("Sorry we failed to connect : " . mysqli_connect_error());
}
if (isset($_GET['delete'])) {
  $sno = $_GET['delete'];
  // echo $sno;
  $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
  $result = mysqli_query($conn, $sql);
  $aff = mysqli_affected_rows($conn);
  // echo "Number of records deleted: " . $aff . "<br>";
  if ($result) {
    $delete = true;
  } else {
    $err = mysqli_error($conn);
    echo "Data not deleted due to this error --> $err";
  }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['snoEdit'])) {
    $sno = $_POST["snoEdit"];
    $title = $_POST["titleEdit"];
    $description = $_POST["descriptionEdit"];

    // sql query to update data into the database
    $sql = "UPDATE `notes` SET `title`='$title' , `description`='$description' WHERE `notes` . `sno` =$sno";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $update = true;
    } else {
      echo "Data not updated";
    }
  } 
  else {
    $title = $_POST["title"];
    $description = $_POST["description"];

    // sql query to insert data into the database
    $sql = "INSERT INTO `notes`(`title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $insert = true;
    } else {
      echo "Data was not inserted due to this error -->" . mysqli_error($conn);
    }
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <title>iNotes - Notes taking made easy</title>
</head>

<body>
  <!-- Modal -->
  <div class="modal fade" name="editModal" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="/learnPHP/projects/crud_app/index.php" method="POST">
          <div class="modal-body">
            <input type="hidden" name="snoEdit" id="snoEdit">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Note Title</label>
              <input type="text" name="titleEdit" class="form-control" id="titleEdit" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="floatingTextarea">Note Description</label>
              <textarea class="form-control" name="descriptionEdit" id="descriptionEdit" rows="3"></textarea>
            </div>
          </div>
          <div class="modal-footer d-block mr-auto">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">iNotes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <?php
  if ($insert) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been added successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  ?>
  <?php
  if ($delete) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been deleted successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  ?>
  <?php
  if ($update) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong> Your note has been updated successfully.
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
  }
  ?>

  <div class="container my-4">
    <h2>Add a Note to iNotes</h2>
    <form action="/learnPHP/projects/crud_app/index.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Note Title</label>
        <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="floatingTextarea">Note Description</label>
        <textarea class="form-control" id=" description" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
  </div>
  <div class="container my-4">
    <table class="table my-4" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `notes`";
        $result = mysqli_query($conn, $sql);
        $sno = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $sno = $sno + 1;
          echo "<tr>
      <th scope='row'>" . $sno . "</th>
      <td>" . $row['title'] . "</td>
      <td>" . $row['description'] . "</td>
      <td><button class='edit btn btn-sm btn-primary' id=" . $row['sno'] . " >Edit</button> <button class='delete btn btn-sm btn-primary' id=d" . $row['sno'] . " >Delete</button></td>
    </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <hr>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
  <script>
    var editModal = new bootstrap.Modal(document.getElementById('editModal'), {
      keyboard: false
    })
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit", );
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id);
        editModal.toggle();
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("delete", );
        sno = e.target.id.substr(1, );

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `/learnPHP/projects/crud_app/index.php?delete=${sno}`;
          // create a form and use post request to submit the form.
        } else {
          console.log("no");
        }
      })
    })
  </script>


</body>

</html>