<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
 
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.23/datatables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <!-- Main css -->
    <style>
        body {
  min-height: 100vh;

  background-color: #FFE53B;
  background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 100%);
}
    </style>
</head>
<body>
<?php

$servername = "localhost";
$database = "ngo";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from tbl_info";
$r = mysqli_query($conn, $sql);

?>
    <div class="container py-5">
        <header class="text-center text-white">
          <h1 class="display-4">Participant Registration List</h1>
          <p class="lead mb-0">December For Charity - Seva 2020</p>
          <p>
                <a href="index.php" class="loginhere-link">Register</a>
          </p>

        </header>
        <div class="row py-5">
          <div class="col-lg-10 mx-auto">
            <div class="card rounded shadow border-0">
              <div class="card-body p-5 bg-white rounded">
                <div class="table-responsive">
                  <table id="example" style="width:100%" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      while($a=mysqli_fetch_array($r))
                      {
                      echo '<tr>
                        <td><a href="index.php?id='.$a['no'].'">Edit</a></td>
                        <td>'.$a['first_name'].'</td>
                        <td>'.$a['last_name'].'</td>
                        <td>'.$a['date_of_birth'].'</td>
                        <td>'.$a['gender'].'</td>
                      </tr>';
                      }
                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </body>
      <script>
  $(function() {
  $(document).ready(function() {
    $('#example').DataTable();
  });
});
      </script>
</html>