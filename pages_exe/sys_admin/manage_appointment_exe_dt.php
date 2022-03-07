<?php
include '../../environment.php';
include '../../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'appointmentid',
    1   =>  'userid',
    2   =>  'username',
    3   =>  'date_sched',
    4   =>  'pet_id',
    5   =>  'status',
    6   =>  'date_created',
    7   =>  'purpose'

);  //create column like table in database

$sql =" SELECT * FROM appointments
        /*WHERE qty != 'disable'*/
        ORDER BY userid DESC;";
$query=mysqli_query($db,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM appointments
        /*WHERE qty != 'disable'*/
        WHERE 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (userid Like '%".$request['search']['value']."%' ";
    $sql.=" OR username Like '%".$request['search']['value']."%' ";
    $sql.=" OR date_sched Like '%".$request['search']['value']."%' ";
    $sql.=" OR pet_id Like '%".$request['search']['value']."%' ";
    $sql.=" OR status Like '%".$request['search']['value']."%'";
    $sql.=" OR date_created Like '%".$request['search']['value']."%' ";
    $sql.=" OR purpose Like '%".$request['search']['value']."%' ";

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