<?php  

if (isset($_POST["search"])) { 
	
include_once 'conn.php';
if (mysqli_num_rows($result) > 0) {
	$output='<h4> Serch result </h4>';
	$output.='<div class="table-responsive">
		<table class = "table table-condensed table-hover table-bordered">
		<tr>
		<th>Piso </th>
		<th>Depart</th>
		<th>Edificio</th>
		<th>Referencia</th>
		</tr>';
///table head 
	while ($row = mysqli_fetch_assoc($result)) {
		$output .= '
	
	 <tr>
	 	<td> ' .$row["Piso"]. ' </td>
	 	<td> ' .$row["Departamento"]. ' </td>
	 	<td> ' .$row["Edificio"]. ' </td>
	 	<td> ' .$row["Referencia"]. ' </td>

	 </tr>

	 '; //// table data



}else{
			header("Location: ../index.php");
	exit();
}
 ?>}
