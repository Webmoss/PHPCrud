<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Collectiv</title>
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

  <!-- Start your project here-->  
  <div style="height: 100vh">
    
		<div class="flex-center flex-column">

			<a href="/" class="logo">
				Collectiv
			</a>

      <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>
      <p class="animated fadeIn text-muted">Craig Moss</p>


    	<h3 class="title is-3 has-text-centered">Environment</h3>
      <hr>
      <div class="container">
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
      <h3 class="title is-3 has-text-centered">Quick Links</h3>
      <hr>
			
      <div class="container">
        <ul>
          <li><a href="http://localhost/phpinfo.php">phpinfo()</a></li>
          <li><a href="http://localhost:8080">phpMyAdmin</a></li>
          <li><a href="http://localhost/test_db.php">Test DB Connection</a></li>
        </ul>
      </div>
  	</div>

		<!-- Footer -->
		<footer class="page-footer font-small fixed-bottom unique-color-dark">
  		<div class="footer-copyright text-center py-3">Collectiv &copy; 2020 - 
	    	<a href="#"> All Rights Reserved</a>
  		</div>
		</footer>
		<!-- END Footer -->

  </div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
