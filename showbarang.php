<?php
	include_once 'dbconnect.php';
	$stmt = $conn ->prepare
	("select id,nama,keterangan,harga,promo,image from barang;");
	$stmt->execute();
	$stmt->bind_result($id,$nama,$keterangan,$harga,$promo,$image);
	$arraybarang=array();
	while($stmt->fetch()){
		$data = array();
		$data['id']=$id;
		$data['nama']=$nama;
		$data['keterangan']=$keterangan;
		$data['harga']=$harga;
		$data['promo']=$promo;
		$data['image']=$image;
		array_push($arraybarang,$data);
	}
	echo json_encode($arraybarang);
	?>