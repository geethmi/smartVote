<!DOCTYPE html>
<html lang="en">



  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Upadate Data Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dcalendar.picker.css" rel="stylesheet">
	
<style type="text/css">
<!--form action="signupBackend.php" method="get"-->
#deceased{
    background-color:#FFF3F5;
	padding-top:10px;
	margin-bottom:10px;
}
.remove_field{
	float:right;	
	cursor:pointer;
	position : absolute;
}
.remove_field:hover{
	text-decoration:none;
}
</style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-1.12.4.js"></script>
	<script src="js/dcalendar.picker.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
	<script type='text/javascript'>
	$(function() {
		//calendar call function
		$('.datepicker').dcalendar();
		$('.datepicker').dcalendarpicker();

		    var max_fields = 10; //maximum input boxes allowed
		    var x = 1; //initlal text box count
		
		$('#add').click(function () {		   
			if(x < max_fields){ //max input box allowed
			    x++; //text box increment
			    $("#addblock").before('<div class="col-md-12 col-sm-12" id="deceased">	<a href="#" class="remove_field" title="Remove">X</a>	<div class="form-group col-md-3 col-sm-3">            <label for="name">Name*</label>            <input type="text" class="form-control input-sm" id="name" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="gender">Gender*</label>            <input type="text" class="form-control input-sm" id="gender" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="age">Age*</label>            <input type="text" class="form-control input-sm" id="age" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOB">Date of Birth or Exact Birth Year*</label>            <input type="text" class="form-control input-sm datepicker" id="DOB'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="DOD">Date of Death or Exact Death Year*</label>             <input type="text" class="form-control input-sm datepicker" id="DOD'+x+'" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="mother">Deceased Person\'s Mother Name*</label>            <input type="text" class="form-control input-sm" id="mother" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">            <label for="father">Deceased Person\'s Father Name*</label>            <input type="text" class="form-control input-sm" id="father" placeholder="">        </div>	<div class="form-group col-md-3 col-sm-3">	    <label for="photo">Upload Photo*</label>	    <input type="file" id="photo">	    <p class="help-block">Please upload individual photo. Group photo is not acceptable.</p>	</div></div>');

				$('.datepicker').dcalendarpicker();
			}  else{
				alert("Only 10 Names Allowed");
			}  
		});
		$(document).on('click', '.remove_field', function(e){
		        e.preventDefault(); 
			$(this).parent('div').remove(); 
			x--;
		});

		
	});
	</script>
  </head>
  <body>
<div class="panel panel-primary" style="margin:20px;">
	<div class="panel-heading">
        	<h3 class="panel-title">Update Data</h3>
	</div>
<div class="panel-body">
    <form>
<div class="col-md-12 col-sm-12">
	<div class="form-group col-md-6 col-sm-6">
            <label for="name">The Number of eligible votors is around*</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
        <div class="form-group col-md-6 col-sm-6">
		<label for="photo">Voters details*</label>
	    <input type="file" id="votersdetails">
	    <p class="help-block"></p>
            
        </div>

       

	
            <!--label for="pincode">Pincode</label>
            <input type="text" class="form-control input-sm" id="pincode" placeholder=""-->
			<div class="form-group col-md-6 col-sm-6">		
<label for="name">The Number of eligible candidates is around*</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
		</div>
		
<div class="form-group col-md-6 col-sm-6">
<label for="photo">candidate details*</label>
	    <input type="file" id="candidatedetails">
	    <p class="help-block"></p>

			</div>
	
		<!--div class="form-group col-md-3 col-sm-3 pull-right" -->
			<input type="submit" class="btn btn-primary" value="Submit"/>
	</div>

			</div>

	<!--div class = "form-group col-md-6 col-sm-6">
	      <label for="years">You could register for up to 10 years for Kalabhairava Shanthi - M.A *</label>	 
		<span class="help-block">Please choose the no. of months for which you would like to register</span-->
     
	      <!--select class="form-control input-sm" id="years">
		<option>-- Select No of Year --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select-->
	</div>

	<!--div class = "form-group col-md-6 col-sm-6">
	      <label for="months">You could register for up to 10 months for Kalabhairava Shanthi. *</label>
	      <span class="help-block">Please choose the no. of months for which you would like to register</span>	      
	      <select class="form-control input-sm" id="months"-->
		<!--option>-- Select No of Month --</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	      </select>
	</div-->

	<!--div class="form-group col-md-6 col-sm-6" >
            <label for="pincode">Would you be visiting ashram to participate in Kalabhairava Shanthi - M.A ? * 
	    <input type="checkbox" checked data-toggle="toggle"></label>
	    <span class="help-block">if you need a cottage to stay, you could book in advance through email to ishastay@ishafoundation.org</span>
	</div>

	<div class="form-group col-md-6 col-sm-6">
            <label for="arrival">Arrival Date</label>
            <input type="text" class="form-control input-sm datepicker" id="arrival" placeholder="">
        </div>
</div>
<div class="col-md-12 col-sm-12" id="deceased">
	<div class="form-group col-md-3 col-sm-3">
            <label for="name">Name*</label>
            <input type="text" class="form-control input-sm" id="name" placeholder="">
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="gender">Gender*</label>
            <input type="text" class="form-control input-sm" id="gender" placeholder="">
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="age">Age*</label>
            <input type="text" class="form-control input-sm" id="age" placeholder="">
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="DOB">Date of Birth or Exact Birth Year*</label>
            <input type="text" class="form-control input-sm datepicker" id="DOB" placeholder="">
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="DOD">Date of Death or Exact Death Year*</label>
            <input type="text" class="form-control input-sm datepicker" id=" DOD" placeholder="">
        </div>
	<div class="form-group col-md-3 col-sm-3">
            <label for="mother">Deceased Person's Mother Name*</label>
            <input type="text" class="form-control input-sm" id="mother" placeholder="">
        </div-->
	<!--div class="form-group col-md-3 col-sm-3">
            <label for="father">Deceased Person's Father Name*</label>
            <input type="text" class="form-control input-sm" id="father" placeholder="">
        </div-->
	
</div>
</div>
<!--div class="col-md-12 col-sm-12" id="addblock">
	<div class="form-group col-md-3 col-sm-3">
		<input type='button' class="btn btn-primary" value="Add" id="add"/>
	</div>
</div-->
<!--div class="col-md-12 col-sm-12" >
	<div class="form-group col-md-3 col-sm-3 pull-right">
		<input type='text' class="form-control input-sm" id="amount" readonly placeholder="Total Amount"/>
	</div-->
</div>
<div class="col-md-12 col-sm-6">
	
</div>
</form>
</div>
</body>

<?php 

/*define('DB_HOST', 'localhost');
define('DB_NAME', 'login');
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
function NewUser() { 
	$name = $_POST['name']; 
	//$userName = $_POST['user']; 
	$email = $_POST['email']; 
	$password = $_POST['password']; 
	$query = "INSERT INTO signup (name,email,password) VALUES ('$name','$email','$password')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
		if($data) { echo "YOUR REGISTRATION IS COMPLETED..."; 
				} 
				} 
	function SignUp() { 
		if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
		{ 
			$query = mysql_query("SELECT * FROM login WHERE userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
			if(!$row = mysql_fetch_array($query) or die(mysql_error())) { newuser(); 
			} 
			else { 
			echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; } } } 
			if(isset($_POST['submit'])) {
				SignUp(); 
			} 
	*/		
			?>






















</html>