<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<title>Contact Us</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/sandstone/bootstrap.min.css">
	
</head>
<body>

    <?php include '../resources/navigation.php'; ?>

<div class="container">

<header><h1>Contact Us</h1></header>
			<p>If you have any questions, contact us with provided number below.</p>
			<ul>
				<li><b>Brett Dewerff</b>: <br> 515-555-1242</li> <!--- This is a fake number -->
				<li><b>Bishnu Adhikari</b>: <br> 515-555-1243</li> <!--- This is a fake number -->
			</ul>
				<header><h3>Follow Us</h3></header>
				<ul> 
					<li><b>Instagram</b>: @NewDelhiRestaurant <br> <b>Tag Us</b>: #NewDelhiRestaurant</li>
				</ul>
				<header><h3>Tweet Us</h3></header>
				<ul>
					<li><b>Twitter</b>: @NewDelhiRestaurant <br> <b>Tag Us</b>: #NewDelhiRestaurant </li>
				</ul>
				<header><h3>Snap Us</h3></header>
				<ul>
					<li><b>Snapchat</b>: @NewDelhiRestaurant <br> <b>Tag Us</b>: #NewDelhiRestaurant</li>
				</ul>
			
			<p>If you have any comments please leave a message bellow.</p>

<form action="contact.html" method="get"> <!--- This is a fake email -->
Subject: <input type="text" name="subject"><br>
<br>
Comment: <textarea name="body"></textarea><br>
<br>
<input type="submit" value="Send" class="btn btn-primary">
</form>

 <?php include '../resources/footer.php'; ?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>