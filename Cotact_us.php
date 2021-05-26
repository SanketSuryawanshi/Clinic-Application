<?php

include('Db_Connect.php');
session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="css/sts.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins',sans-serif;
		}


		.contact {
			position: relative;
			min-height: 100vh;
			padding: 50px 100px;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			background: #7F7FD5;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

			background-size: cover;
		}

		.contact .content {
			max-width: 800px;
			text-align: center;
		}

		.contact .content h2 {
			font-size: 36px;
			font-weight: 500;
			color: black;
		}

		.contact .content p {

			font-weight: 300;
			color: black;
		}

		.container {
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 30px;
		}

		.container .contactInfo {
			width: 50%;
			display: flex;
			flex-direction: column;
		}

		.container .contactInfo .box {
			position: relative;
			padding: 20px 0;
			display: flex;
		}

		.container .contactInfo .box .icon {
			min-width: 60px;
			height: 60px;
			background: #fff;
			display: flex;
			justify-content: center;
			align-items: center;
			border-radius: 50%;
			font-size: 22px;
		}

		.container .contactInfo .box .icon:hover {
			background-color: #32a89b;
			cursor: pointer;
		}

		.container .contactInfo .box .text {
			display: flex;
			margin-left: 20px;
			font-size: 16px;
			color: black;
			flex-direction: column;
			font-weight: 300;
		}

		.container .contactInfo .box .text h3 {
			font-weight: 500;
			color: black;
		}

		.contactForm {
			width: 40%;
			padding: 40px;
			background: #fff;
		}

		.contactForm h2 {
			font-size: 30px;
			color: #333;
			font-weight: 500;
		}

		.contactForm .inputBox {
			position: relative;
			width: 100%;
			margin-top: 10px;
		}

		.contactForm .inputBox input,
		.contactForm .inputBox textarea {
			width: 100%;
			padding: 5px 0;
			font-size: 16px;
			margin: 10px 0;
			border: none;
			border-bottom: 2px solid #333;
			outline: none;
			resize: none;

		}

		.contactForm .inputBox span {
			position: absolute;
			left: 0;
			padding: 5px 0;
			font-size: 16px;
			margin: 10px 0;
			pointer-events: none;
			transition: 0.5s;
			color: #666;
		}

		.contactForm .inputBox input:focus~span,
		.contactForm .inputBox input:valid~span,
		.contactForm .inputBox textarea:focus~span,
		.contactForm .inputBox textarea:valid~span {
			color: #e91e63;
			font-size: 12px;
			transform: translateY(-20px);

		}

		.contactForm .inputBox input[type="submit"] {
			width: 100px;
			background: #00bcd4;
			color: black;
			border: none;
			cursor: pointer;
			padding: 10px;
			font-size: 18px;
		}

		@media (max-width: 991px) {
			.contact {
				padding: 50px;
			}

			.container {
				flex-direction: column;
			}

			.container .contactInfo {
				margin-bottom: 40px;
			}

			.container .contactInfo,
			.contactForm {
				width: 100%;
			}
		}
	</style>
</head>

<body>
	<section class="contact">
		<div class="content">
			<h2><b><u>Contact Us</u></b></h2><br>
			<p>Please send your message below. We will get back to you at the earliest.</p>
		</div>
		<div class="container">
			<div class="contactInfo">
				<div class="box">
					<div class="icon"><i class="fa fa-map-marker"></i></div>
					<div class="text">
						<h3>Address</h3>
						<p>Vishrambag<br> Sangli-Miraj Road<br> Sangli, Maharashtra- 416416</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Phone</h3>
						<p>(02342) 241 117</p>
					</div>
				</div>
				<div class="box">
					<div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
					<div class="text">
						<h3>Email</h3>
						<p>profrak@rediffmail.com</p>
					</div>
				</div>
			</div>
			<div class="w-50 m-auto">
				<form method="post">
					<div class="form-group">
						<label style="font-size:25px ; color:black">Name :</label>
						<input type="text" name="user" autocomplete="off" class="form-control" required>
					</div>
					<div class="form-group">
						<label style="font-size:25px ; color:black">Email Id :</label>
						<input type="text" name="email" autocomplete="off" class="form-control" required>
					</div>
					<div class="form-group">
						<label style="font-size:25px ; color:black">Mobile Number :</label>
						<input type="text" name="mobile" autocomplete="off" class="form-control" required>
					</div>
					<div class="form-group">
						<label style="font-size:25px ; color:black">Message :</label>
						<textarea class="form-control" name="message" required></textarea>
					</div>

					<button type="submit" name="Contact" class="btn btn-success mb-2 w-100">Send Message</button>
				</form>
			</div>


			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

<?php

if (isset($_POST['Contact'])) {
	$user = mysqli_real_escape_string($Con, $_POST['user']);
	$email = mysqli_real_escape_string($Con, $_POST['email']);
	$mobile = mysqli_real_escape_string($Con, $_POST['mobile']);
	$comments = mysqli_real_escape_string($Con, $_POST['message']);

	$Insert_Contact_Query = "INSERT INTO `contact`(`Name`, `Email`, `Mobile`, `Msg`) VALUES ('$user','$email','$mobile','$comments')";

	$result_contact = mysqli_query($Con, $Insert_Contact_Query);

	if ($result_contact) {
	?>
		<script>
			swal("Success !", "We Will Contact You Shortly !!", "success");
		</script>
	<?php
	} else {
	?>
		<script>
			swal("Error!", "Something Went Wroong !!", "error");
		</script>
	<?php
	}
}

?>