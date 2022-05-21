<?php

session_start(); 

$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect) die("ERROR not working");


$sql =	"INSERT INTO laundryservice.appointments (aptnumber,day_app,time_app)
		VALUES ('".$_SESSION['apartment']."','".$_REQUEST['day_app']."','".$_REQUEST['time_app']."')";
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
			<h1 class='TitleForm'>You have scheluded your laundry appointment successfully! <h1>
			<a href='index.html'><button class='buttonColor'>Go back to Login</button></a>
			<p>Your appointment scheduled below.</p>
		</body>
	</html>
			";
		
		$sql = "SELECT * FROM laundryservice.appointments WHERE time_app = '".$_REQUEST['time_app']."' and  day_app =  '".$_REQUEST['day_app']."' and  aptnumber =  '".$_SESSION['apartment']."' ";
		$result = mysqli_query($connect, $sql);
		echo "<table border='1'><tr><td>DAY</td><td>TIME</td></tr>";
		while($row = mysqli_fetch_assoc($result)) 									// fetch next row
		{ 																			// display the data
			echo "<tr><td>".$row["day_app"]." </td><td>". $row["time_app"]."</td></tr>"; // output data of that row
		}
		echo "</table>";
		}
			
			
		else
		{
			//echo $_SESSION['apartment'];
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
			<h1 class='TitleForm'>Time already taken or you have signed up already... Log in and choose a different time.<h1>
			<a href='index.html'><button class='buttonColor'>Go back to Login</button></a>
		</body>
	</html>
			";
		}
			
	
		

?>
