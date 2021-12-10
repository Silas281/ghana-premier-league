<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>GPL BASE | LOGIN</title>
<link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="login-form">    
    <form action="../dashboard-view/crud.php" method="post">
		<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
    	<h4 class="modal-title">Login to Your Account</h4>
        <div class="form-group">
            <input type="text" name='username' class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" name='password' class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group small clearfix">
            <label class="form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="forgot-link">Forgot Password?</a>
        </div> 
        <input type="submit" name='submit-login' class="btn btn-primary btn-block btn-lg" value="Login"> 
        <div class="text-center small mt-2 mb-0">Don't have an account? <a href="sign_up.php">Sign up</a></div>             
    </form>			
   
</div>
</body>
</html>