<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script>
    function showfunction() {
      var x = document.getElementById("apply");
      if (x.style.display === "none") {
        x.style.display = "block";
       } 
       //else {
      //   x.style.display = "none";
      // }
    }
  </script>
  <style>
    .banner {
      background: url('bgimage.jpg');
      background-size: cover;



    }

    .navbar {
      overflow: hidden;
      background-color: #333;
      position: fixed;
      /* Set the navbar to fixed position */
      top: 0;
      /* Position the navbar at the top of the page */
      width: 100%;
      /* Full width */
    }
  </style>
  <title>Career Page</title>
</head>
<body>
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
      <div class="container-fluid">
        <a class="navbar-brand" href="">Job Portal</a>
        <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>
    <div class="row">
      <div class="col-12">
        <div class="jumbotron jumbotron-fluid" style="background-image: url('bgimage.jpg'); background-size:cover; padding:200px; font-size: x-large;">
          <div class="container" >
            <h1 class="display-4">Job Portal</h1>
            <p class="lead">Best Jobs available matching your skills</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      error_reporting(0);
      include("./database.php");
      $conn = mysqli_connect("localhost", "root", "", "jobs");
      $sql = "SELECT cname,position,Jdesc,CTC FROM jobs";
      $result = mysqli_query($conn, $sql);
      $allow = false;
      // echo($result)
      if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
          //  echo($rows["position"]);
      ?>
          <div class="card col-md-3 mt-5 m-3">
            <h5 class="card-header"><?php echo ($rows["cname"]) ?></h5>
            <div class="card-body">
              <h3 class="card-title"><?php echo ($rows["position"]) ?></h3>
              <p class="card-text"><?php echo ($rows["Jdesc"]) ?></p>
              <p class="card-text"><b>CTC :</b><?php echo ($rows["CTC"]) ?></p>
              <a href="#" class="btn btn-primary" onclick="showfunction()">Apply Job</a>
            </div>
          </div>
          <!-- <div class='col-md-4'>
            <div class='jobs'>

              <h3 style=text-align: center;><?php echo ($rows["position"]) ?></h3>
              <h4 style=text-align: center;><?php echo ($rows["cname"]) ?></h4>
              <p style=color: black; text-align: justify;><?php echo ($rows["Jdesc"]) ?></p>
              <p style=color: black;><b>CTC :</b><?php echo ($rows["CTC"]) ?></p>
              <button class=btn btn-primary type=button data-bs-toggle=modal data-bs-target=exampleModal aria-expanded=false aria-controls=collapseExample>
                Apply Job </button>
            </div>
          </div> -->



      <?php }
      } ?>





      <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Apply for Jobs</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="POST">
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Applying For:</label>
                  <input type="text" class="form-control" name="apply">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Qualification</label>
                  <input type="text" class="form-control" name="qual">
                </div>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Year Passed</label>
                  <input type="text" class="form-control" name="year">
                </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Apply</button>
              </form>
            </div>
          </div>
        </div>
      </div> -->

      <form id="apply" style="display: none;" action="config.php" method="POST">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>

        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Applying For:</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apply" required>

        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Qualification </label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="qual" required>

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Year Passed</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="year" required>
        </div>
        <!-- <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary" name="applied">Submit</button>
      </form>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>