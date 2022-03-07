<?php
include '../../environment.php';
include '../../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'pet_id',
    1   =>  'pet_code',
    2   =>  'pet_catid',
    3   =>  'pet_name',
    4   =>  'pet_adopted',
    5   =>  'pet_adoptedfrom',
    6   =>  'pet_rescuedfrom',
    7   =>  'pet_processdate', 
    8   =>  'pet_processby',
    9   =>  'pet_status'
);  //create column like table in database

$sql =" SELECT * FROM pets 
        /*WHERE pet_updateddate != 'disable'*/
        ORDER BY pet_id ASC;";

        
$query=mysqli_query($db,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM pets
        /*WHERE pet_updateddate != 'disable'*/
        WHERE 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (pet_code Like '%".$request['search']['value']."%' ";
    $sql.=" OR pet_catid Like '%".$request['search']['value']."%' ";
    $sql.=" OR pet_name Like '%".$request['search']['value']."%' ";
    $sql.=" OR pet_adopted Like '%".$request['search']['value']."%'";
    $sql.=" OR pet_adoptedfrom Like '%".$request['search']['value']."%' ";
    $sql.=" OR pet_rescuedfrom Like '%".$request['search']['value']."%' ";
    $sql.=" OR pet_processdate Like '%".$request['search']['value']."%' ";
    $sql.=" OR pet_processby Like '%".$request['search']['value']."%' ";
    $sql.=" OR pet_status Like '%".$request['search']['value']."%' )";
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