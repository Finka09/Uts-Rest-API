<?php
	//Include koneksi ke database
	include "conn.php";

	//echo "update smartphone";

	//menangkap variabel parameter get
	$id = $_GET['id'];
	//echo $id;

	//bagian yang akan diubah
	$merek = isset($_POST["merek"]) ? $_POST["merek"] : "";
	//echo $merek;
	$type = isset($_POST["type"]) ? $_POST["type"] : "";
	//echo $type;
	$harga = isset($_POST["harga"]) ? $_POST["harga"] : "";
	//echo $harga;

	$sql = "UPDATE `smartphone` SET `merek` = '".$merek."', `type` = '".$type."', `harga` = '".$harga."' 
	WHERE `smartphone`.`id_smartphone` = ".$id.";";
	//echo $sql;

	//Running query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Update data smartphone berhasil";
	}else{
		$msg = "Update data smartphone gagal";
	}

	$response = array(
		'status' =>'OK',
		'msg' =>$msg
	);

	echo json_encode($response);

?>