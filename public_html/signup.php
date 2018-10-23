<!DOCTYPE html>  
<html>
<head>
	<meta charset="utf-8">
	<title>Sign Up</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/sandstone/bootstrap.min.css">
	
</head>
<body>

    <?php include '../resources/navigation.php'; ?>
</nav>
<br>
<div class="container">
<p>Sign up to be a member of the New Delhi Restaurant Rewards Club. Once you have an account with us, you will be able to access special deals and coupons. You will be the first to know if a new dish is being offered for a limited-time, and you will have first-priority for making reservations. Creating an account is easy and becoming a member of the Rewards Club is completely free! Just fill out the sign up fields down below and we will send you an email confirming your club membership.</p>

<header><h1>Sign Up</h1></header>
    <form action="index.html">
	First Name:<br>
	<input type="text"
	name="firstname"> 
	<br>
	Last Name:<br>
	<input type="text"
	name="lastname">
	<br>
	Email: <br>
	<input type="text"
	name="email">
	<br>
	Username:<br>
	<input type="text"
	name="username">
	<br>
	Password:<br>
	<input type="text"
	name="password">
	<br>
	Verify Password:<br>
	<input type="text"
	name="password">
	<br>
	Date of Birth: <br>
	<input type="text"
	name="dateofbirth">
	<br>
	Gender:<br>
	<input type="radio"
	name="gender" value="male" 
	checked> Male<br>
	<input type="radio"
	name="gender" value="female">
	Female<br>
	<input type="radio"
	name="gender" value="other">
	Other
	<br>
	<br>

	<input type="submit" value="Submit" class="btn btn-primary">
	</form>
<br>
<br>
 <?php include '../resources/footer.php'; ?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
