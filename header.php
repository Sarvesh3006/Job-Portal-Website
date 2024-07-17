<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Job Portal|Dashboard</title>

    <style>
        /* The side navigation menu */

.sidebar {
    margin: 0;
    margin-top: 2px;
    /* margin-top: 56px; */
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
}


/* Sidebar links */

.sidebar a {
    display: block;
    color: black;
    padding: 16px;
    text-decoration: none;
}


/* Active/current link */

.sidebar a.active {
    background-color: #04AA6D;
    color: white;
}


/* Links on mouse-over */

.sidebar a:hover:not(.active) {
    background-color: #555;
    color: white;
}


/* Page content. The value of the margin-left property should match the value of the sidebar's width property */

div.content {
    margin-top: 60px;
    margin-left: 200px;
    padding: 1px 16px;
    height: 1000px;
}


/* On screens that are less than 700px wide, make the sidebar into a topbar */

@media screen and (max-width: 700px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }
    .sidebar a {
        float: left;
    }
    div.content {
        margin-left: 0;
    }
}


/* On screens that are less than 400px, display the bar vertically, instead of horizontally */

@media screen and (max-width: 400px) {
    .sidebar a {
        text-align: center;
        float: none;
    }
}
/* The navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}
    </style>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Job Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <div class="collapse navbar-collapse" id="navbarNav">
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
</div>
<!-- The sidebar -->
<div class="sidebar">
  <a href="index.php">Jobs</a>
  <a href="jobs.php">Candidates Applied</a>
  <a href="career.php">Available Jobs</a>
  <a href="#about">About</a>
</div>