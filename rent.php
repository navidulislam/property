<?php include('partials-front/menu.php'); ?>

<!---- Options Bar ----->
<div class="col">
  <?php 
      //Getting property from database
      //SQL Query
      $sql2 = "SELECT * FROM tbl_rent";

      //Execute the Query
      $res2 = mysqli_query($conn, $sql2);

      //Count Rows
      $count2 = mysqli_num_rows($res2);

      //Check whether rent available or not
      if($count2>0)
      {
        //Rent Available
        while($row=mysqli_fetch_assoc($res2))
        {
          //Get all the values
          $id = $row['id'];
          $description = $row['description'];
          $price = $row['price'];
          $location = $row['location'];
          ?>

          <div class="card">
            <img src="image/rent/1/1.png" class="card-img-top" style="width:600px" alt="...">
            <div class="card-body">
              <h5><?php echo $price; ?></h5>
              <p class="card-text"><?php echo $description; ?></p>
              <p class="address"><?php echo $location; ?></p><br>
              <a href="rent1.php"><button type="button" class="btn btn-success" style="position: inherit;">View More</button></a>
            </div>
          </div>

          <?php
        }
      }
      else
      {
        //Rent not available
        echo "<div class='error'>Property Not Available</div>";
      }

  ?>

</div>
</br> </br>

<?php include('partials-front/footer.php'); ?>
