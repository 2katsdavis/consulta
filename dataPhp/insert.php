<?php 
if (isset($_POST["submit"])) {
	$misqldata = " INSERT INTO hospital (`Piso`, `Departamento`, `Edificio`,`Referencia`) VALUES
('$Piso','$Departamento','$Edificio', '$Referencia' );";  

	mysqli_query($conn, $misqldata);
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$sql= "SELECT * FROM hospital WHERE Departamento LIKE '%$search1%'";
$result =mysqli_query($conn,$sql);

} else{

		header("Location: ../index.php");
	exit();

}


 ?>