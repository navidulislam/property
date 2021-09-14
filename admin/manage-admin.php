<?php include('partials/menu.php'); ?>

<!-- Main Content Section Starts -->
<div class="main-content">
	<div class="wrapper">
		<h1>Manage Admin</h1><br>
		<br>

		<?php
			if(isset($_SESSION['add']))
			{
				echo $_SESSION['add'];//Displaying Session Message
				unset($_SESSION['add']);//Removing Session Message
			}

			if(isset($_SESSION['delete']))
			{
				echo $_SESSION['delete'];
				unset($_SESSION['delete']);
			}

		?>

		<br><br><br>

		<!-- Button to add admin -->
		<a href="add-admin.php" class="btn-primary">Add Admin</a>

		<br><br><br>
		
		<table class="tbl-full">
			<tr>		
				<th>SL NO.</th>
				<th>Full Name</th>
				<th>Username</th>
				<th>Actions</th>
			</tr>

			<?php 
				//Query to Get all Admin
				$sql = "SELECT * FROM tbl_admin";
				//Execute the Query
				$res = mysqli_query($conn, $sql);

				//Check whether the Query is Executed or Not
				if($res==TRUE)
				{
					//Count rows to check whether we have data in database or not
					$count = mysqli_num_rows($res);//Function to get all the rows in database
					$sn=1; //Create a variable and assign thw value

					//Check the number of rows
					if($count>0)
					{
						//We have data in database
						while($rows=mysqli_fetch_assoc($res))
						{
							//Using while loop to get all the data in the database
							//And while loop will run as long as we have data in database

							//Get individual data
							$id=$rows['id'];
							$full_name=$rows['full_name'];
							$username=$rows['username'];

							//Display the values in our table
							?>

							<tr>
								<td><?php echo $sn++; ?></td>
								<td><?php echo $full_name; ?></td>
								<td><?php echo $username; ?></td>
								<td>
									<a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a>
								</td> 
							</tr>
							<?php
						}
					}
					else
					{
						//We do not have data in database
					}
				}
				?>

		</table>
		
	</div>
</div>
<!-- Main Content Section Starts -->


<?php include('partials/footer.php'); ?>

