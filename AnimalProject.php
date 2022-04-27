<?php
$servername="localhost";
$username="root";
$password= "root";
$connect=mysqli_connect($servername,$username,$password);
if(!$connect) die("ERROR not working");
$sql =
		"INSERT INTO Animals.animal (animal_name, habitat, animal_type)
		VALUES ('".$_REQUEST['Name']."','".$_REQUEST['Habitat']."','".$_REQUEST['Type']."')";
		$result = mysqli_query($connect, $sql);
		if($result)
			echo "ANIMAL INSERTED";
		else
			echo "ANIMAL NOT INSERTED";

?>