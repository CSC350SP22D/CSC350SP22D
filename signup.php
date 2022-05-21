<?php
$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect) die("ERROR not working");
$sql =
		"INSERT INTO laundryservice.users (aptnumber, email, userpassword)
		VALUES ('".$_REQUEST['apt']."','".$_REQUEST['Email']."','".$_REQUEST['Password']."')";
		$result = mysqli_query($connect, $sql);
		if($result)
		{
			echo "
				<!DOCTYPE html>
			<header>
				<title>Select Date</title>
				<style>
					body{
						background-color: aquamarine;
					}
					.TitleForm{
						color:black;
						text-align:center;   text-align: center;
						vertical-align: top;
						font-style: italic;
						font-weight: bolder;
						font-size: 50px;
						color:black;
						font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
					}
					
					.buttonColor{
					background-color: black;
					color:aquamarine;
					padding: 8px;
					border-radius: 15px;
					font-weight: bold;
					border-style: solid;
					border-color: black;
					font-style: italic;
					font-size: 18px;
					box-shadow: 10px 10px 10px rgba(0,0,0,.7);
					margin-left: 20px;
					transition: opacity 1s;
					cursor: pointer;
					}
					
					.buttonSubmit{
						background-color: black;
						color:aquamarine;
						padding: 8px;
						border-radius: 15px;
						font-weight: bold;
						border-style: solid;
						border-color: black;
						font-style: italic;
						font-size: 18px;
						box-shadow: 10px 10px 10px rgba(0,0,0,.7);
						margin-left: 20px;
						transition: opacity 1s;
						cursor: pointer;
					}
					
					 .buttonSubmit:hover{
					opacity: .7;
					}

					.buttonSubmit:active{
					opacity: .3;
					}
					
				</style>
			</header>
			<body>
				<h1 class='TitleForm'>Account successfully created. Congratulations!<h1>
				<a href='index.html'><button class='buttonColor'>Login</button></a>
			</body>
		</html>
			";
		}
		else
		{
			echo "
				<!DOCTYPE html>
			<header>
				<title>Select Date</title>
				<style>
					body{
						background-color: aquamarine;
					}
					.TitleForm{
						color:black;
						text-align:center;   text-align: center;
						vertical-align: top;
						font-style: italic;
						font-weight: bolder;
						font-size: 50px;
						color:black;
						font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
					}
					
					.buttonColor{
					background-color: black;
					color:aquamarine;
					padding: 8px;
					border-radius: 15px;
					font-weight: bold;
					border-style: solid;
					border-color: black;
					font-style: italic;
					font-size: 18px;
					box-shadow: 10px 10px 10px rgba(0,0,0,.7);
					margin-left: 20px;
					transition: opacity 1s;
					cursor: pointer;
					}
					
					.buttonSubmit{
						background-color: black;
						color:aquamarine;
						padding: 8px;
						border-radius: 15px;
						font-weight: bold;
						border-style: solid;
						border-color: black;
						font-style: italic;
						font-size: 18px;
						box-shadow: 10px 10px 10px rgba(0,0,0,.7);
						margin-left: 20px;
						transition: opacity 1s;
						cursor: pointer;
					}
					
					 .buttonSubmit:hover{
					opacity: .7;
					}

					.buttonSubmit:active{
					opacity: .3;
					}
					
				</style>
			</header>
			<body>
				<h1 class='TitleForm'>Account with that apartment unit already exists. Try again.<h1>
				<a href='signup.html'><button class='buttonColor'>Signup</button></a>
			</body>
		</html>
			";
			//echo "Account already exists.";
		}
?>