<br>
<ol class="breadcrumb">
  <li><a href="index.php?page=dashboard">Home</a></li>
</ol> 
<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
   <div class="panel panel-info">
     <div class="panel-heading">
       <h3 class="panel-title">Sheena Shrestha</h3>
     </div>
     <div class="panel-body">
       <div class="row">

         <div class=" col-md-9 col-lg-9 "> 
           <table class="table table-user-information">
             <tbody>
               <tr>
                 <td>Department:</td>
                 <td value=""><?php echo $_SESSION['system_useremail']?></td>
               </tr>
               <tr>
                 <td>Hire date:</td>
                 <td>06/23/2013</td>
               </tr>
               <tr>
                 <td>Date of Birth</td>
                 <td>01/24/1988</td>
               </tr>
            
                  <tr>
                      <tr>
                 <td>Gender</td>
                 <td>Female</td>
               </tr>
                 <tr>
                 <td>Home Address</td>
                 <td>Kathmandu,Nepal</td>
               </tr>
               <tr>
                 <td>Email</td>
                 <td><a href="mailto:info@support.com">info@support.com</a></td>
               </tr>
                 <td>Phone Number</td>
                 <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                 </td>
                    
               </tr>
              
             </tbody>
           </table>
           
         </div>
       </div>
     </div>
          <div class="panel-footer">
                 <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                 <span class="pull-right">
                     <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                     <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                 </span>
             </div>
     
   </div>
 </div>

 <style>
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

     </style>