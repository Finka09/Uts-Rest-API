<?php
	//include koneksi ke database
	include "conn.php";
	//echo "delete smartphone";

	//menangkap variabel parameter get
	$id = $_GET['id'];
	//echo $id;

	$sql = "DELETE FROM smartphone WHERE `smartphone`.`id_smartphone` = ".$id.";";
	//echo $sql;

	//Running query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Delete data smartphone berhasil";
	}else{
		$msg = "Delete data smartphone gagal";
	}

	$response = array(
		'status' =>'OK',
		'msg' =>$msg
	);

	echo json_encode($response);
?>