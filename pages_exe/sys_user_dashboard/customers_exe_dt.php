<?php
include '../../environment.php';
include '../../config/database.php';

$request=$_REQUEST;
$col =array(
    0   =>  'userid',
    1   =>  'username',
    2   =>  'usersalt',
    3   =>  'userpass',
    4   =>  'userfirstname',
    5   =>  'usermiddlename',
    6   =>  'userlastname',
    7   =>  'useremail',
    8   =>  'usercategory',
    9   =>  'userstatus'
);  //create column like table in database

$sql =" SELECT * FROM users
        WHERE usercategory =3
        ORDER BY userid ASC;";
$query=mysqli_query($db,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql =" SELECT * FROM users
        WHERE usercategory =3
        AND 1=1
        ";

if(!empty($request['search']['value'])){
    $sql.=" AND (username Like '%".$request['search']['value']."%' ";
    $sql.=" OR usersalt Like '%".$request['search']['value']."%' ";
    $sql.=" OR userpass Like '%".$request['search']['value']."%' ";
    $sql.=" OR userfirstname Like '%".$request['search']['value']."%' ";
    $sql.=" OR usermiddlename Like '%".$request['search']['value']."%' ";
    $sql.=" OR userlastname Like '%".$request['search']['value']."%' ";
    $sql.=" OR useremail Like '%".$request['search']['value']."%' ";
    $sql.=" OR usercategory Like '%".$request['search']['value']."%' ";
    $sql.=" OR userstatus Like '%".$request['search']['value']."%' )";
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
    $subdata[]=$row[4]; 
    $subdata[]=$row[5]; 
    $subdata[]=$row[6]; 
    $subdata[]=$row[7]; 
    $subdata[]=$row[9]; 
    $subdata[]='<button type="button" class="btn btn-default btn-sm" id="resetpass" data-id="'.$row[0].'" >Reset Password</button>
                <button type="button" class="btn btn-primary btn-sm" id="update" data-id="'.$row[0].'" >Edit</button>
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