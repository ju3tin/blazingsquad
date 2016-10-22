 
    
    <?php
	
	$link = mysqli_connect("localhost", "root", "", "transport123");
  $lname = $_POST['txt_lname'];
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

// attempt insert query execution

$sql = "UPDATE `transport123`.`text` SET `text` = '$lname' WHERE `text`.`123` = 1;";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
	
	?>
    
    <table class="table table-striped" border="0">
    
    <tr>
    <td colspan="2">
    	<div class="alert alert-info">
    		<strong>Success</strong>, Form Submitted Successfully...
    	</div>
    </td>
    </tr>
    
    <tr>
    <td>First Name</td>
	  </tr>
    
    <tr>
    <td>Last Name</td>
    <td><?php echo $lname ?></td>
    </tr>
    
    <tr>
    <td>Your eMail</td>
     </tr>
    
    <tr>
    <td>Contact No</td>
   </tr>
    
    </table>
   