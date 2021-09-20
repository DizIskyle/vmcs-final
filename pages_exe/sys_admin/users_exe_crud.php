<?php
include '../environment.php';
include '../config/database.php';

if (isset($_POST['submit_btn'])) {

	$machine = $_POST["machine"];
	$color = $_POST["color"];
	$widthinch = $_POST["widthinch"];
    $widthmm = $_POST["widthmm"];
    $cylindertype = $_POST["cylindertype"];
    $spec = $_POST["spec"];
    $plate = $_POST["plate"];
    $qty = $_POST["qty"];
    $dstape = $_POST["dstape"];
    $distortion = $_POST["distortion"];

	$query="INSERT INTO mach_flexocylinderv2(
			machine,
			color,
			widthinch,
            widthmm,
            cylindertype,
            spec,
            qty,
            plate,
            dstape,
            distortion
			) 
			VALUES (
			'$machine',
			'$color',
			'$widthinch',
            '$widthmm',
            '$cylindertype',
            '$spec',
            '$qty',
            '$plate',
            '$dstape',
            '$distortion'
			)"; 
		$response = array();
	if (!$result = mysqli_query($db,$query)) {
        //exit(mysqli_error());
        $response=999;
    } else {
    	$response = 'ok';
    }
    echo json_encode($response);	
}

if (isset($_POST['read_selected'])) {
    $id=$_POST['crud_id'];
    $query = "SELECT * FROM mach_flexocylinderv2
        WHERE machid = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    }
    $response = array();
    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $response = $row;
        }
    }
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
    echo json_encode($response);
} 

//Update
if (isset($_POST['update_btn'])) {
    $id = $_POST["machid"];
    $machine = $_POST["machine"];
	$color = $_POST["color"];
	$widthinch = $_POST["widthinch"];
    $widthmm = $_POST["widthmm"];
    $cylindertype = $_POST["cylindertype"];
    $spec = $_POST["spec"];
    $qty = $_POST["qty"];
    $plate = $_POST["plate"];
    $dstape = $_POST["dstape"];
    $distortion = $_POST["distortion"];


	$query = "  UPDATE mach_flexocylinderv2 
                SET machine = '$machine',
                color = '$color',
                widthinch = '$widthinch',
                widthmm = '$widthmm',
                cylindertype = '$cylindertype',
                spec = '$spec',
                qty = '$qty',
                plate = '$plate', 
                dstape = '$dstape',
                distortion = '$distortion'
                WHERE
                    machid = '$id'";

	if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }  
}

//Delete
if (isset($_POST["delete_selected"])) {
    $id=$_POST['crud_id'];

    $query = "DELETE FROM mach_flexocylinderv2 WHERE machid = '$id'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysql_error());
    } 
}

?>