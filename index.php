<?php include 'header.php' ?>
<?php include 'config.php';?>
<!-- Page content -->
<div class="content">
<p>
  <!-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Jobs
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <!-- Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger. -->
    <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <!-- <textarea name="" cols="30" rows="10" class="form-control" id="" name="Jdesc"></textarea> -->
    <input type="text" class="form-control" id="" name="Jdesc">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">Job Description</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  
    <!-- <tr>
      <th scope="row">1</th>
      <td>Perfect Telecom Solutions</td>
      <td>Computer Engineer</td>
      <td>5LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Perfect Solutions</td>
      <td>KTS Expert</td>
      <td>4LPA</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Perfect Telecom Solutions</td>
      <td>Mobile Engineer</td>
      <td>5LPA</td>
    </tr> -->
    <?php
      // 
      include("./database.php");
      $sql="SELECT cname,position,Jdesc,CTC FROM jobs";
      $result = mysqli_query($conn,$sql);
      $i=0;
      if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
        
        echo"
        <tbody>
          <tr>      
              <td>".++$i."</td>
              <td>".$row['cname']."</td>
              <td>".$row['position']."</td>
              <td>".$row['Jdesc']."</td>
              <td>".$row['CTC']."</td>
          </tr>";    
      }}
      else{
        echo"";
      }
      
      
    ?>
  </tbody>
</table>
    
 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>   
</body>
</html>