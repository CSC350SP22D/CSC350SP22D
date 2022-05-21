
<?php
	$servername="localhost";
	$username="root";
	$password= "root";
	$connect=mysqli_connect($servername,$username,$password);
	if(!$connect)  die("Error"); 
	//if ( !isset($_POST['username'], $_POST['password']) ) 
		//exit('Please fill both the username and password fields!');
	$sql = "SELECT * FROM laundryservice.users WHERE email = '".$_REQUEST['Email']."' and  userpassword =  '".$_REQUEST['Password']."' and  aptnumber =  '".$_REQUEST['apt']."' ";
	$result = mysqli_query($connect, $sql);
	//checking if login exists.
	if (mysqli_num_rows($result)>0)
	{
		//$sql = "SELECT * FROM laundryservice.users WHERE aptnumber = '".$_REQUEST['apt']."' ";
		//$result = mysqli_query($connect, $sqli);
		
		session_start();
		if(isset($_POST['apt'])) { 
		$_SESSION['apartment'] = $_POST['apt'];
		}
		
		
		
		//inserting apartment unit into table.
		//$sql = "INSERT INTO laundryservice.appointments (aptnumber)
		//VALUES ('".$_REQUEST['apt']."')";
		//$result = mysqli_query($connect, $sql);
		
		
		
		
		//selecting new info from table.
		$sql = "SELECT * FROM laundryservice.appointments";
		$result = mysqli_query($connect,$sql);
		//if(mysqli_num_rows($result)>0)
		//{
			
		
		
		echo 
	"
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
			<h1 class='TitleForm'>LOGIN SUCCESSFUL<h1>
		</body>
	</html>
	";
	
		
		
		echo "<table border='1'><tr><td>DAY</td><td>TIME TAKEN</td></tr>";
		while($row = mysqli_fetch_assoc($result)) 									// fetch next row
		{ 																			// display the data
			echo "<tr><td>".$row["day_app"]." </td><td>". $row["time_app"]."</td></tr>"; // output data of that row
		}
		echo "</table>";
		echo '
			<form action="time.php" method="post">
			<br>
			<p>Select a time not taken already shown in the table above.<p>
            <label for="Day">Choose a day:</label>
			 <select name="day_app" id="day_app">
			   <option value="Monday">Monday</option>
			   <option value="Tuesday">Tuesday</option>
			   <option value="Wednesday">Wednesday</option>
			   <option value="Thursday">Thursday</option>
			   <option value="Friday">Friday</option>
			   <option value="Saturday">Saturday</option>
			   <option value="Sunday">Sunday</option>
			 </select>
			 <br></br>
			 <label for="Time">Choose hours:</label>
			<select name="time_app" id="time_app">
			<option value="12:00 AM to 3:00 AM">12:00 AM to 3:00 AM</option>
			<option value="3:00 AM to 6:00 AM">3:00 AM to 6:00 AM</option>
			<option value="6:00 AM to 9:00 AM">6:00 AM to 9:00 AM</option>
			<option value="9:00 AM to 12:00 PM">9:00 AM to 12:00 PM</option>
			<option value="12:00 PM to 3:00 PM ">12:00 PM to 3:00 PM </option>
			<option value="3:00 PM to 6:00 PM">3:00 PM to 6:00 PM</option>
			<option value="6:00 PM to 9:00 PM">6:00 PM to 9:00 PM </option>
			<option value="9:00 PM to 12:00 AM">9:00 PM to 12:00 AM</option>
			</select>
			 <br><br>
            <input class="buttonSubmit" type="submit" value="Submit" name="submit">
        </form>';
		
			
		}
	else{
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
			<h1 class='TitleForm'>Login failed. Please try again with the correct login info.<h1>
			<a href='index.html'><button class='buttonColor'>Login</button></a>
		</body>
	</html>
			";
	}
	
	

	

	
	