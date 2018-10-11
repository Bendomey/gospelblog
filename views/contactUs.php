<!-- header -->
<?php
	include "header.php";
?>

<!-- body -->
<div class="one">
  <img src="../public/images/0.jpg" class="img" alt="" width="100%" height="150vh" style="margin-top: -2vh;">
  <div class="caption">
    <h1 class="heading">CONTACT US</h1>
  </div>
</div>
<div class="container-fluid" style="margin-top: 1vh; padding-top: 5vh; padding-bottom: 5vh; margin-bottom: -3vh; background: #f6f4f4">
	<div class="row">
		<div class="col-lg-8">
			<div class="row" style="margin-left: 1vw;">
				<h2>Get in Touch</h2>
        		<h5>Please fill out the quick form and we will be in touch with us</h5>
			</div>
			<div class="row" style="margin-left: 1vw; margin-top: 3vh;">
				<div class="col-lg-11">
					<form class="form" action="" method="">
						<div class="form-group">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control" name="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="form-label">Email</label>
							<input type="email" name="email" placeholder="Your email address" class="form-control">
						</div>
						<div class="form-group">
							<label for="message" class="form-label">Message</label>
							<textarea placeholder="Message" rows="5" cols="80" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="form-control-inline btn btn-success submit">
							<input type="reset" name="reset" class="form-control-inline btn btn-warning submit">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="row" style="margin-top: 7vh;">
				<h4>Connect with us:</h4>
				<p>For support or any questions <br> Email us at: <a href="mailto: domeybenjamin1@gmail.com">info@gmail.com</a></p>
			</div>
		</div>
	</div>
</div>

<!-- footer -->
<?php
include "footer.php";
?>
</body>
<script type="text/javascript" src="../public/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../public/js/bootstrap.min.js"></script>
<script type="text/javascript" charset="utf-8" src="../public/js/index.js"></script>
<script type="text/javascript" charset="utf-8" src="../public/js/contactUs.js"></script>
<script type="text/javascript">
	var myDate = new Date();
    var dateString = myDate.toLocalString();
    document.getElementById("date").innerHTML = dateString;
</script>
</html>