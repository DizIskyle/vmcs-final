<?php
include '../../environment.php';
include '../../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'stock_id',
    1   =>  'stock_code',
    2   =>  'stock_catid',
    3   =>  'stock_name',
    4   =>  'stock_quantity',
    5   =>  'stock_price',
    6   =>  'stock_expirationdate',
    7   =>  'stock_processdate',
    8   =>  'stock_processby',
    9   =>  'stock_status'
);  //create column like table in database

$sql =" SELECT * FROM stocks
        /*WHERE pet_updateddate != 'disable'*/
        ORDER BY stock_id ASC;";
$query=mysqli_query($db,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM stocks
        /*WHERE pet_updateddate != 'disable'*/
        WHERE 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (stock_code Like '%".$request['search']['value']."%' ";
    $sql.=" OR stock_catid Like '%".$request['search']['value']."%' ";
    $sql.=" OR stock_name Like '%".$request['search']['value']."%' ";
    $sql.=" OR stock_quantity Like '%".$request['search']['value']."%'";
    $sql.=" OR stock_price Like '%".$request['search']['value']."%' ";
    $sql.=" OR stock_expirationdate Like '%".$request['search']['value']."%' ";
    $sql.=" OR stock_processdate Like '%".$request['search']['value']."%' ";
    $sql.=" OR stock_processby Like '%".$request['search']['value']."%' ";
    $sql.=" OR stock_status Like '%".$request['search']['value']."%' )";
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