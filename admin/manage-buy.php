<?php include('partials/menu.php'); ?>

<div class='main-content'>
	<div class='wrapper'>
		<h1>Manage Property</h1><br>
		<br><br>
				<!-- Button to add admin -->
				<a href="<?php echo SITEURL; ?>admin/add-buy.php" class="btn-primary">Add Property</a>

				<br><br><br>

				<?php
					if(isset($_SESSION['add']))
					{
						echo $_SESSION['add'];
						unset($_SESSION['add']);
					}
				?>
				
				<table class="tbl-full">
					<tr>
						<th>SL NO.</th>
						<th>Description</th>
						<th>Price</th>
						<th>Location</th>
					</tr>

					<?php
						//Create a SQL query to get all the buy
						$sql = "SELECT * FROM tbl_buy";

						//Execute the query
						$res = mysqli_query($conn, $sql);

						//Count Rows to check whether we have foods or not
						$count = mysqli_num_rows($res);

						//Create serial number variable and set default value as 1
						$sn = 1;

						if($count>0)
						{
							//We have food in database
							//Get the property from database and display
							while($row=mysqli_fetch_assoc($res))
							{
								//get the values from individual columns
								$id = $row['id'];
								$description = $row['description'];
								$price = $row['price'];
								$location = $row['location'];

								?>

								<tr>
									<td><?php echo $sn++; ?></td>
									<td><?php echo $description; ?>
									</td>
									<td>Tk <?php echo $price; ?>	
									</td>
									<td><?php echo $location; ?></td>
								</tr>

								<?php
							}
						}
						else
						{
							//Buy not added in database
							echo "<tr> <td colspan='7' class='error'>Property not added yet</td></tr>"; 
						}
					?>


				</table>
	</div>
</div>

<?php include('partials/footer.php'); ?>