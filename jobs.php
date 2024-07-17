<?php include 'header.php' ?>
<?php include 'config.php';?>
<div class="content">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">Position</th>
      <th scope="col">Resume</th>
    </tr>
  </thead>
  <tbody>
    
  <?php
      // 
      include("./database.php");
      $sql="SELECT name,apply,year FROM candidates";
      $result = mysqli_query($conn,$sql);
      $i=0;
      if($result->num_rows > 0){
        while($row=$result->fetch_assoc()){
        
        echo"
        <tbody>
          <tr>      
              <td>".++$i."</td>
              <td>".$row['name']."</td>
              <td>".$row['apply']."</td>
              <td>Resume</td> 
          </tr>";    
      }}
      else{
        echo"";
      }
      
      
    ?>
  </tbody>
</table>
</div>