<?php

	$index = "../index.php";
    $logo = "../assets/images/logo.png";
    $style = "../assets/styles.css";
	$logout = "../utils/logout.php";

	include_once("../utils/validate-access.php");
	
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once("../includes/head.php"); ?>

<body>

	<?php include_once("../includes/nav.php"); ?>

	<div class="container">
		<div class="row">

			<div class="card-open-ticket">
				<div class="card">
					<div class="card-header">
						Ticket Opening
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">

								<form method="POST" action="../utils/create-ticket.php">
									<div class="form-group">
										<label>Title</label>
										<input name="title" type="text" class="form-control" placeholder="Title">
									</div>

									<div class="form-group">
										<label>Category</label>
										<select name="category" class="form-control">
											<option>User Creation</option>
											<option>Printer</option>
											<option>Hardware</option>
											<option>Software</option>
											<option>Network</option>
										</select>
									</div>

									<div class="form-group">
										<label>Description</label>
										<textarea name="description" class="form-control" rows="3"></textarea>
									</div>

									<div class="row mt-5">
										<div class="col-6">
											<a href="../home.php" class="btn btn-lg btn-warning btn-block" type="submit">
												Back
											</a>
										</div>

										<div class="col-6">
											<button class="btn btn-lg btn-info btn-block" type="submit">
												Open
											</button>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>