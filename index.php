<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign_In</title> 
 	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="feed.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 	<style type="text/css">.label {width:100px;text-align:right;float:left;padding-right:10px;font-weight:bold;}
    #login label.error, .output {color:#FB3A3A;font-weight:bold;}
  	</style>
  
  	<!-- Load jQuery and the validate plugin -->
  	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  	<!-- jQuery Form Validation code -->
  	<script>
  
  // When the browser is ready...
  $(function() {
  
    // Setup form validation on the #register-form element
    $("#login").validate({
    
        // Specify the validation rules
        rules: {
                user: {
                required: true,
                user: true
            },
                pass: {
                required: true,
				 minlength: 5
            }
        },
        
        // Specify the validation error messages
        messages: {
            user: "Please enter a valid email address",
                pass: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            }
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
  	</script>
</head> 
<body>
<div class="container">
<!-- Feedback Form Starts Here -->
<div id="feedback">
<!-- Heading Of The Form -->
<div class="head">
<h3>LOG-IN HERE</h3>
</div>

	<form name="login" id="login" method="post" action="log.php" novalidate="novalidate">
	<p>
	<p id="returnmessage"></p>
  		<div class="form-control-group">
        	<label class="control-label" for="name">Email </label>
		  <div class="controls">
	      	<p><input type="text" id="user" name="user" class="col-xs-5"></p>
	      	<p>&nbsp;</p></div>
		</div>
		
	    <div class="form-control-group">
        	<label class="control-label" for="name"> Password</label>
		   	<div class="controls">
			<input type="password" id="pass" name="pass" class="col-xs-5">
		   	</div>
		</div>
		
		<div class="form-actions">
          <p>&nbsp;</p>
          <button type="submit" name="submit" class="btn btn-success">Log_In</button>
		</div>
		 </p>
	 </form> 
</div>
</div>
</body>
</html> 

