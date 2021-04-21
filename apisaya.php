<?php
	//Koneksi ke database mysql
	include "conn.php";

	//Membuat query/sql untuk mengambil seluruh data
	$sql = "SELECT * FROM smartphone";
	$query = mysqli_query($conn, $sql);
	while($data = mysqli_fetch_array($query)){
		//echo $data["merek"]." ";

		$item[] = array(
			'Id' => $data["id_smartphone"],
			'Merek' => $data["merek"],
			'Type' => $data["type"],
			'Harga' => $data["harga"]
		);
	}

	$response = array(
		'status' =>'OK',
		'data' =>$item
	);

	echo json_encode($response);
?>