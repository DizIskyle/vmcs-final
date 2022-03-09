<?php
include '../../environment.php';
include '../../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'appointment_id',
    1   =>  'appointment_customerid',
    2   =>  'appointment_vetid',
    3   =>  'appointment_schedid',
    4   =>  'appointment_code',
    5   =>  'appointment_reason',
    6   =>  'appointment_time',
    7   =>  'appointment_status',
    8   =>  'appointment_come',
    9   =>  'appointment_createddate'
);  //create column like table in database

$sql =" SELECT * FROM appointment
        /*WHERE pet_updateddate != 'disable'*/
        ORDER BY appointment_id ASC;";
$query=mysqli_query($db,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM appointment
        /*WHERE pet_updateddate != 'disable'*/
        WHERE 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (appointment_customerid Like '%".$request['search']['value']."%' ";
    $sql.=" OR appointment_vetid Like '%".$request['search']['value']."%' ";
    $sql.=" OR appointment_schedid Like '%".$request['search']['value']."%' ";
    $sql.=" OR appointment_code Like '%".$request['search']['value']."%'";
    $sql.=" OR appointment_reason Like '%".$request['search']['value']."%' ";
    $sql.=" OR appointment_time Like '%".$request['search']['value']."%' ";
    $sql.=" OR appointment_status Like '%".$request['search']['value']."%' ";
    $sql.=" OR appointment_come Like '%".$request['search']['value']."%' ";
    $sql.=" OR appointment_createddate Like '%".$request['search']['value']."%' )";
}
$query=mysqli_query($db,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($db,$sql);

$data=array();
$i=1;
while($row=mysqli_fetch_array($query)){
    $subdata=array();

    $subdata[]= $i++;
    $subdata[]=$row[1]; 
    $subdata[]=$row[2]; 
    $subdata[]=$row[3]; 
    $subdata[]=$row[4];  
    $subdata[]=$row[5]; 
    $subdata[]=$row[6];
    $subdata[]=$row[7];
    $subdata[]=$row[8];
    $subdata[]=$row[9];
    $subdata[]='<button type="button" class="btn btn-primary btn-sm" id="update" data-id="'.$row[0].'" >Edit</button>
                <button type="button" class="btn btn-danger btn-sm" id="delete" data-id="'.$row[0].'" >Delete</button>';
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);
 
?>