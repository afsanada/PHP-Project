<!DOCTYPE html>
<html lang="en">
<head>

<title>ldap Form</title>
	<link href="feed.css" rel="stylesheet">
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<!-- Define some CSS -->
  	<style type="text/css">.label {width:100px;text-align:right;float:left;padding-right:10px;font-weight:bold;}
    #form label.error, .output {color:#FB3A3A;font-weight:bold;}
  	</style>
  
  	<!-- Load jQuery and the validate plugin -->
  	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  	<!-- jQuery Form Validation code -->
	<script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#form").validate({
    
        // Specify the validation rules
        rules: {
            username: "required",
            password:  "required",
               

			host: {
			required:true,
			minlength:10
			},
            port: "required",
            basedn: "required",
        },
        
        // Specify the validation error messages
        messages: {
            username: "Please enter your username",
			password: "Please enter password",
			host: "Please enter valid host number",
            port: "Please enter a valid port",
            basedn: "Please enter basedn",
                 },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  </script>
</head>

<!-- Body Starts Here -->
<body>
<center><h2>Home Page</h2></center>
<div class="container">
	<!-- Ldap -->
	<form action="ldap1.php" id="form" method="post" name="form" novalidate="novalidate">
 	<p>
  	<div class="form-control-group">
     	<label class="control-label" for="name">Username</label>
   	<div class="controls">
  		<input type="text" name="username" class="form-control" id="username" placeholder="Username" value=""></div>
  	</div>
	
  	<div class="form-control-group">
     	<label class="control-label" for="name">Password</label>
  	<div class="controls">
  		<input type="text" name="password" class="form-control" id="password" placeholder="Password" value=""></div>
  	</div>
	
  	<div class="form-control-group">
        <label class="control-label" for="name">Host</label>
  	<div class="controls">
  		<input type="text" name="host" class="form-control" id="host" placeholder="Host Number" value=""></div>
  	</div>	
	<div class="form-control-group">
        <label class="control-label" for="name">Port</label>
	<div class="controls">
		<input type="text" name="port" class="form-control" id="port" placeholder="Port" value=""></div>
	</div>	
	<div class="form-control-group">
        <label class="control-label" for="name">Besedn</label>
	<div class="controls">
		<input type="text" name="basedn" class="form-control" id="basedn" placeholder="Basedn" value=""></div>
	</div>
	
	<div class="form-actions">
		<button type="submit" name="submit" class="btn btn-success"> Sumbit</button>
		</div>
		</form>
		
<!-- ldap Form Ends Here -->
</div>
<center><button type="submit" name="submit" class="btn btn-success" onclick="document.location.href='report.php'"> Get Report</button></center>
</div>
</body>
<!-- Body Ends Here -->
</html>