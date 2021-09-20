<?php
include '../environment.php';
include '../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'machid',
    1   =>  'machine',
    2   =>  'color',
    3   =>  'widthinch',
    4   =>  'widthmm',
    5   =>  'cylindertype',
    6   =>  'spec',
    7   =>  'qty',
    8   =>  'plate',
    9   =>  'dstape',
    10   =>  'distortion'
);  //create column like table in database

$sql =" SELECT * FROM mach_flexocylinder
        /*WHERE qty != 'disable'*/
        ORDER BY machine ASC;";
$query=mysqli_query($db,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM mach_flexocylinder
        /*WHERE qty != 'disable'*/
        WHERE 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (machine Like '%".$request['search']['value']."%' ";
    $sql.=" OR color Like '%".$request['search']['value']."%' ";
    $sql.=" OR widthinch Like '%".$request['search']['value']."%' ";
    $sql.=" OR widthmm Like '%".$request['search']['value']."%'";
    $sql.=" OR cylindertype Like '%".$request['search']['value']."%' ";
    $sql.=" OR spec Like '%".$request['search']['value']."%' ";
    $sql.=" OR plate Like '%".$request['search']['value']."%' ";
    $sql.=" OR qty Like '%".$request['search']['value']."%' ";
    $sql.=" OR dstape Like '%".$request['search']['value']."%' ";
    $sql.=" OR distortion Like '%".$request['search']['value']."%' )";
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
    $subdata[]=$row[10];
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