<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Collectiv - A PHP CRUD Example by Craig Moss</title>
  <!-- MDB icon -->
  <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="assets/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- Main Navigation-->
	<header>
		<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar">
			<div class="container-fluid">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle Navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="/" class="logo">
					Collectiv
				</a>
				
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Contact</a>
						</li>
						<li class="nav-item justify-end">
							<a class="nav-link create-user" data-toggle="modal" data-target="#createUserModal" href="#">Create User</a>
						</li>
					</ul>
					<ul class="navbar-nav nav-flex-icons">
						<li class="nav-item">
							<a class="nav-link"><i class="fab fa-facebook-f"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link"><i class="fab fa-twitter"></i></a>
						</li>
						<li class="nav-item">
							<a class="nav-link"><i class="fab fa-instagram"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- END Main Navigation-->
    
	<!-- Main Content-->
	<main class="pt-5 mx-lg-5">
		<div class="container-fluid mt-5">
			<!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-md-12 mb-4">
					<!-- Table  -->
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th scope="col">ID</th>
								<th scope="col">First Name</th>
								<th scope="col">Last Name</th>
								<th scope="col">Email</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>

							<!-- <?php // for($i = 0, $size = count($results); $i < $size; ++$i) {  ?>
								<tr>
									<th scope="row"><?php // echo $results[$i]['id']; ?></th>
									<td><?php // echo $results[$i]['first_name']; ?></td> 
									<td><?php // echo $results[$i]['surname']; ?></td>
									<td><?php // echo $results[$i]['email']; ?></td>
									<td class="actions">
										<span class="table-remove">
											<button type="button" id="edit-user-<?php // echo $results[$i]['id']; ?>" class="btn btn-success btn-rounded btn-sm my-0 edit-user" data-toggle="modal" data-target="#editUserModal">Edit</button>
										</span>
										<span class="table-remove">
											<button type="button" id="delete-user-<?php // echo $results[$i]['id']; ?>" class="btn btn-danger btn-rounded btn-sm my-0 delete-user" data-toggle="modal" data-target="#modalLRFormDemo">Delete</button>
										</span>
									</td>
								</tr>
							<?php //} ?> -->

							<tr>
								<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td class="actions">
									<span class="table-remove">
										<button type="button" class="btn btn-success btn-rounded btn-sm my-0 edit-user" data-toggle="modal" data-target="#editUserModal">Edit</button>
									</span>
									<span class="table-remove">
										<button type="button" class="btn btn-danger btn-rounded btn-sm my-0 delete-user" data-toggle="modal" data-target="#deleteUserModal">Delete</button>
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
								<td class="actions">
									<span class="table-remove">
										<button type="button" class="btn btn-success btn-rounded btn-sm my-0 edit-user" data-toggle="modal" data-target="#editUserModal">Edit</button>
									</span>
									<span class="table-remove">
										<button type="button" class="btn btn-danger btn-rounded btn-sm my-0 delete-user" data-toggle="modal" data-target="#deleteUserModal">Delete</button>
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="actions">
									<span class="table-remove">
										<button type="button" class="btn btn-success btn-rounded btn-sm my-0 edit-user" data-toggle="modal" data-target="#editUserModal">Edit</button>
									</span>
									<span class="table-remove">
										<button type="button" class="btn btn-danger btn-rounded btn-sm my-0 delete-user" data-toggle="modal" data-target="#deleteUserModal">Delete</button>
									</span>
								</td>
							</tr>
							<tr>
								<th scope="row">4</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
								<td class="actions">
									<span class="table-remove">
										<button type="button" class="btn btn-success btn-rounded btn-sm my-0 edit-user" data-toggle="modal" data-target="#editUserModal">Edit</button>
									</span>
									<span class="table-remove">
										<button type="button" class="btn btn-danger btn-rounded btn-sm my-0 delete-user" data-toggle="modal" data-target="#deleteUserModal">Delete</button>
									</span>
								</td>
							</tr>
						</tbody>
					</table>

					<!--Modal: Create User -->
					<div class="modal fade" id="createUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Create User</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<!-- Create User Form -->
									<form class="text-center border border-light p-5 needs-validation was-validated" action="#" novalidate>
										
										<div class="form-row mb-4">
											<label for="firstName">First Name</label>
											<input type="text" id="firstName" class="form-control is-invalid" placeholder="" required>
											<div class="invalid-feedback">
												Please enter your First Name
											</div>
										</div>

										<!-- Last name -->
										<div class="form-row mb-4">
											<label for="lastName">Last Name</label>
											<input type="text" id="lastName" class="form-control is-invalid" placeholder="" required>
											<div class="invalid-feedback">
												Please enter your Last Name
											</div>
										</div>

										<!-- E-mail -->
										<div class="form-row mb-4">
											<label for="eMail">Email</label>
											<input type="email" id="eMail" class="form-control is-invalid" placeholder="" required >
											<div class="invalid-feedback">
												Please enter your email address
											</div>
										</div>

										<!-- Username -->
										<div class="form-row mb-4">
											<label for="userName">Username</label>
											<input type="text" id="userName" class="form-control is-invalid" placeholder=""required>
											<div class="invalid-feedback">
												Please enter your Username
											</div>
										</div>

										<!-- Password -->
										<div class="form-row mb-4">
											<label for="userPassword">Password</label>
											<input type="password" id="userPassword" class="form-control is-invalid" placeholder="" required>
											<div class="invalid-feedback">
												Please enter a secure Password
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" id="create-user-submit" class="btn btn-success btn-sm">Submit</button>
									<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<!--Modal: END Create User Modal -->

					<!--Modal: Edit User -->
					<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<!-- Edit User Form -->
									<form class="text-center border border-light p-5 needs-validation was-validated" action="#" novalidate>
										
										<div class="form-row mb-4">
											<label for="firstName">First Name</label>
											<input type="text" id="firstName" class="form-control is-invalid" placeholder="" required>
											<div class="invalid-feedback">
												Please enter your First Name
											</div>
										</div>

										<!-- Last name -->
										<div class="form-row mb-4">
											<label for="lastName">Last Name</label>
											<input type="text" id="lastName" class="form-control is-invalid" placeholder="" required>
											<div class="invalid-feedback">
												Please enter your Last Name
											</div>
										</div>

										<!-- E-mail -->
										<div class="form-row mb-4">
											<label for="eMail">Email</label>
											<input type="email" id="eMail" class="form-control is-invalid" placeholder="" required >
											<div class="invalid-feedback">
												Please enter your email address
											</div>
										</div>

										<!-- Username -->
										<div class="form-row mb-4">
											<label for="userName">Username</label>
											<input type="text" id="userName" class="form-control is-invalid" placeholder=""required>
											<div class="invalid-feedback">
												Please enter your Username
											</div>
										</div>

										<!-- Password -->
										<div class="form-row mb-4">
											<label for="userPassword">Password</label>
											<input type="password" id="userPassword" class="form-control is-invalid" placeholder="" required>
											<div class="invalid-feedback">
												Please enter a secure Password
											</div>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" id="edit-user-submit" class="btn btn-success btn-sm">Submit</button>
									<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<!--Modal: END Edit User Modal -->

					<!--Modal: Delete User -->
					<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="myModalLabel">Delete User</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<p>
										Are you sure you would like to remove this user permanently?
								</div>
								<div class="modal-footer">
									<button type="button" id="delete-user-submit" class="btn btn-success btn-sm">Confirm</button>
									<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
								</div>
							</div>
						</div>
					</div>
					<!--Modal: END Delete User Modal -->
				</div>
			</div>

			<!--Grid row-->
      <div class="row wow fadeIn">
        <!--Grid column-->
        <div class="col-md-6 mb-4">
					<h3 class="title is-3 has-text-centered">Environment</h3>
					<hr>
					<ul>
						<li><?php echo apache_get_version(); ?></li>
						<li>PHP <?php echo phpversion(); ?></li>
						<li>
							<?php
								$link = mysqli_connect("mysql", "root", "tiger", null);

								/* check connection */
								if (mysqli_connect_errno()) {
									printf("MySQL connecttion failed: %s", mysqli_connect_error());
								} else {
									/* print server version */
									printf("MySQL Server %s", mysqli_get_server_info($link));
								}
								/* close connection */
								mysqli_close($link);
							?>
						</li>
					</ul>
				</div>
        <!--Grid column-->
        <div class="col-md-6 mb-4">
					<h3 class="title is-3 has-text-centered">Quick Links</h3>
					<hr>
					<ul>
						<li><a href="http://localhost/phpinfo.php">phpinfo()</a></li>
						<li><a href="http://localhost:8080">phpMyAdmin</a></li>
						<li><a href="http://localhost/test_db.php">Test DB Connection</a></li>
					</ul>
				</div>
			</div>

		</div>
	</main>
	<!-- END Main Content-->

	<!-- Footer -->
	<footer class="page-footer font-small fixed-bottom unique-color-dark">
		<div class="footer-copyright text-center py-3">Collectiv &copy; 2020 - 
			<a href="#"> All Rights Reserved</a>
		</div>
	</footer>
	<!-- END Footer -->

  <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>
