<?php

require_once ' koneksi.php';

$idFakultas 	= $_POST['id_fakultas'];
if(!$idFakultas){
	echo json_encode(array('message'=>'required failed empty.'));
}

else{!$ = mysqli_query($con, "DELETE FROM fakultas WHERE id_fakultas='$idFakultas'");
	
	if($query){
		echo json_encode(array('message'=>'faultas data successfully deleted.'));
	}
	else{
		echo json_encode(array('message'=>'fakultas data failed deleted.'));
	} 
}
?>