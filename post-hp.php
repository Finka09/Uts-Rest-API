<?php
	//Koneksi ke database mysql
	include "conn.php";

	//mendapatkan variabel post
	$merek = isset($_POST["merek"]) ? $_POST["merek"] : "";
	//echo $merek;
	$type = isset($_POST["type"]) ? $_POST["type"] : "";
	//echo $type;
	$harga = isset($_POST["harga"]) ? $_POST["harga"] : "";
	//echo $harga;



	//Query menambahkan data
	$sql = "INSERT INTO `Smartphone` (`merek`, `type`, `harga`) VALUES ('".$merek."', '".$type."', '".$harga."');";
	//echo $sql;

	//Running query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "Simpan data smartphone berhasil";
	}else{
		$msg = "Simpan data smartphone gagal";
	}

	//echo $msg;
	//echo 'test';

	$response = array(
		'status' =>'OK',
		'msg' =>$msg
	);

	echo json_encode($response);

?>