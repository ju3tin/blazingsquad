
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Submit PHP Forms without Page Refresh using jQuery and Ajax</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
 </script>
<style>
	.wrapper{
		padding-top: 50px;
	}
	.col-lg-3{
		text-align: center;
	}
	.col-lg-6{
		padding: 20px;
	}
</style>



 <script>
 $(document).ready(function(){
 setInterval(function(){cache_clear()},3000);
 });
 function cache_clear()
{
 
    document.getElementById("button1").click();
}
</script>



<script type="text/javascript">
setTimeout("CallButton()",3000)
function CallButton()
{
   document.getElementById("button1").click();    
}
</script>
</head>
<body>
<div class="wrapper">
	
	<div class="container">
	
	<div class="col-lg-12">
		
		
		
		<div class="col-lg-6">
		
			<div id="form-content">
			
			<form id="reg-form">
				
				<div class="form-group">
					<input type="text" class="form-control" name="txt_fname" id="lname" placeholder="First Name" required />
				</div>
				
				<div class="form-group">
					<input type="text" class="form-control" name="txt_lname" id="lname" placeholder="Last Name" required />
				</div>
				
				<div class="form-group">
					<input type="text" class="form-control" name="txt_email" id="lname" placeholder="Your Mail" required />
				</div>
				
				<div class="form-group">
					<input type="text" class="form-control" name="txt_contact" id="lname" placeholder="Contact No" required />
				</div>
				
				<hr />
				
				<div class="form-group">
					<button id="button1" class="btn btn-primary">Submit</button>
				</div>
				
			</form>
            
            </div>
			
		</div>
		
		<div class="col-lg-3">
	
		</div>
		
	</div>
	
</div>
	
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function() {	
	
	// submit form using $.ajax() method
	
	$('#reg-form').submit(function(e){
		
		e.preventDefault(); // Prevent Default Submission
		
		$.ajax({
			url: 'submit1.php',
			type: 'POST',
			data: $(this).serialize() // it will serialize the form data
		})
		.done(function(data){
			$('#form-content').fadeOut('slow', function(){
				$('#form-content').fadeIn('slow').html(data);
			});
		})
		.fail(function(){
			alert('Ajax Submit Failed ...');	
		});
	});
	
});
</script>

<!-- analytics -->

<!-- alalytics -->

</body>
</html>