<!DOCTYPE html>
<!-- saved from url=(0076)http://bootstrap.snipplicious.com/snippets/preview/19?name=edit-profile-page -->
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Edit Profiler page handcoded in pure Bootstrap 3. Suitable for any web application with user management.">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>snipplicious - preview</title>
<!-- <link rel="stylesheet" type="text/css" href="./snipplicious - preview_files/bootstrap-3.2.0.min.css"> -->
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./snipplicious - preview_files/font-awesome-4.1.0.min.css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<div class="container" style="padding-top: 60px;">
  <h1 class="page-header">Inspa-Rate Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
       <?php
error_reporting(E_ALL); 
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "tabledata123";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['id'];
$id = mysqli_real_escape_string($conn,$id);
$query = "SELECT * FROM `table123` WHERE `id`='" . $id . "'";
$result = mysqli_query($conn,$query);

while($row = mysqli_fetch_array($result)) { ?>
        <img src="<?php echo $row['123'];?>" class="avatar img-circle img-thumbnail" alt="avatar">
      
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
      <h3>Personal info</h3>
      
     


      
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-lg-3 control-label">First name:</label>
          <div class="col-lg-8"><?php echo $row['qwa']; ?>

           </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Last name:</label>
          <div class="col-lg-8">
       <?php echo $row['sdf']; ?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Your Score</label>
          <div class="col-lg-8">
        
<?php echo $row['sdf']; ?>


          </div>
        </div>
       
        <div class="form-group">
          <label class="col-lg-3 control-label">Meanest post or tweet</label>
          <div class="col-lg-8">
       <?php echo $row['sdfsd'];

?>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Nicest post or tweet</label>
          <div class="col-md-8">
        <?php echo $row['sdfsd'];
}
?>         </div>
        </div>
        <div class="form-group"></div>
        
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
         <a href="../pooldetails.html?id=2"> <button type="button" class="btn btn-default">Go Back To List</button></a>
        </div>
      </form>
    </div>
  </div>
</div></html>