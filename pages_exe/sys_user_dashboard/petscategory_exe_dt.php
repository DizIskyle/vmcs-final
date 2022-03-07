<?php
include '../../environment.php';
include '../../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'pet_catid',
    1   =>  'petcat_name',
    2   =>  'petcat_processdate',
    3   =>  'petcat_processby',
    4   =>  'petcat_status'
);  //create column like table in database

$sql =" SELECT * FROM pet_category
        /*WHERE pet_updateddate != 'disable'*/
        ORDER BY pet_catid ASC;";
$query=mysqli_query($db,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM pet_category
        /*WHERE pet_updateddate != 'disable'*/
        WHERE 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (petcat_name Like '%".$request['search']['value']."%' ";
    $sql.=" OR petcat_processdate Like '%".$request['search']['value']."%' ";
    $sql.=" OR petcat_processby Like '%".$request['search']['value']."%' ";
    $sql.=" OR petcat_status Like '%".$request['search']['value']."%' )";
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