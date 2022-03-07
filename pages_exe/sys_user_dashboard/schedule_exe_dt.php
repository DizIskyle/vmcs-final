<?php
include '../../environment.php';
include '../../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'sched_id',
    1   =>  'sched_vetid',
    2   =>  'sched_date',
    3   =>  'sched_day',
    4   =>  'sched_starttime',
    5   =>  'sched_endtime',
    6   =>  'sched_consultingtime',
    7   =>  'sched_status',
    8   =>  'sched_createdby',
    9   =>  'sched_createddate'
);  //create column like table in database

$sql =" SELECT * FROM schedules
        /*WHERE pet_updateddate != 'disable'*/
        ORDER BY sched_id ASC;";
$query=mysqli_query($db,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM schedules
        /*WHERE pet_updateddate != 'disable'*/
        WHERE 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (sched_vetid Like '%".$request['search']['value']."%' ";
    $sql.=" OR sched_date Like '%".$request['search']['value']."%' ";
    $sql.=" OR sched_day Like '%".$request['search']['value']."%' ";
    $sql.=" OR sched_starttime Like '%".$request['search']['value']."%'";
    $sql.=" OR sched_endtime Like '%".$request['search']['value']."%' ";
    $sql.=" OR sched_consultingtime Like '%".$request['search']['value']."%' ";
    $sql.=" OR sched_status Like '%".$request['search']['value']."%' ";
    $sql.=" OR sched_createdby Like '%".$request['search']['value']."%' ";
    $sql.=" OR sched_createddate Like '%".$request['search']['value']."%' )";
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