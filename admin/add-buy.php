<?php include('partials/menu.php'); ?>

<div class="main-content">
	<div class="wrapper">
		<h1>Add Property</h1>
		<br><br>


		<form action="" method="POST" enctype="multipart/form-data">
			<table class="tbl-30">
				
				<tr>
					<td>Description: </td>
					<td>
						 <textarea name="description" cols="30" rows="5" placeholder="Description of the Property"></textarea>
					</td>
				</tr>

				<tr>
					<td>Location: </td>
					<td>
						<input type="text-area" name="location">
					</td>
				</tr>

				<tr>
					<td>Price: </td>
					<td>
						<input type="number" name="price">
					</td>
				</tr>


				<tr>
					<td colspan="2">
						<input type="submit" name="submit" value="Add Property" class="btn-secondary">
					</td>
				</tr>

			</table>
		</form>

		<?php 
			//Check whether the button is clicked or not
			if(isset($_POST['submit']))
			{
				//Add the property in database
				//echo "Click";

				//1. Get the data from form
				$description = $_POST['description'];
				$location = $_POST['location'];
				$price = $_POST['price'];

				

				//3. Insert into database
				//Create a SQL Query to save or add buy
				$sql2 = "INSERT INTO tbl_buy SET 
					description = '$description',
					price = $price,
					location = '$location'";

				//Execute the Query
				$res2 = mysqli_query($conn, $sql2);

				//4. Redirect with message to manage buy page

				//Check whether data inserted or not
				if($res2 == true)
				{
					//Data inserted Successfully
					$_SESSION['add'] = "<div class='success'>Property Added Successfully</div>";
					header('location:'.SITEURL.'admin/manage-buy.php');
				}

				else
				{
					//Failed to insert data
					$_SESSION['add'] = "<div class='error'>Failed to add property</div>";
					header('location:'.SITEURL.'admin/manage-buy.php');
				}

			}
		?>

	</div>
</div>


<?php include('partials/footer.php'); ?>