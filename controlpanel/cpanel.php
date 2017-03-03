<?php       
    require_once '../includes/initialize.php';
    
    $admin = new Admin();
    $admin_id = !empty($_SESSION['admin_id']) ? $_SESSION['admin_id'] : 0;
    if(isset($_GET['quit'])){
        $admin->adminLogout();
        redirectTo("cpanel.php");
    }
    
    $ERRmessage = '';
    if(isset($_POST['submit'])){
        $username = trim($_POST['username']);
        $password = trim($_POST['userpass']);
        
        if($username == "" || $password == ""){
            $ERRmessage = "<span class=\"fa fa-exclamation-triangle fa-2x\"></span> please enter username and pasword to continue !";
        }else{
            $admin_login = $admin->getAdmin($username, $password);
            if($admin_login){
                redirectTo("index.php");
            }  else {
                $ERRmessage = "<span class=\"fa fa-exclamation-triangle fa-2x\"></span>       username and password incorrect";
            }
        }
        
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>cPanel/login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" type="text/css" href="css/cpanel.css">

        <script type="text/javascript" src="scripts/jquery lib v2.2.5.js"></script>
        <script type="text/javascript" src="scripts/jqueryvalidation-plugin v1.16.0.js"></script>
</head>
<body class="login">
<div class="container">
	<div class="w3-card-4" style="width:60%; margin-right:auto; margin-left:auto; margin-top:5%; ">
		<div class="box-body " style="width:50%; margin-left:auto; margin-right:auto; padding-bottom: 20px;">
			<div class="box-primary" style="padding:15px;">
				<div class="box-header" id="header" style="margin-left:auto; width: 100%; margin-right:auto;"><img src="../img/cpanel.png" class="img-responsive" height="120px" style="margin:auto;" width="400px" >
				</div>
				<div class="box-body">
					<form method="post" action="">
						<div class="form-group">
							<label for=userid"">UserID:</label>
							<input type="text" name="username" id="userid" placeholder="Enter admin ID" class="form-control">
						</div>
						<div class="form-group">
							<label for="userpass">Password:</label>
							<input type="password" name="userpass" id="userpass" placeholder="Enter Password" class="form-control">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember"> remember me
							</label>
						</div>
						<button type="submit" name="submit" class="btn btn-primary form-control">submit</button>
                                                <br>
                                                <?php echo '<br>'.outputMessage($ERRmessage); ?>
					</form>	
				</div>
			</div>
		</div>
	</div>
</div>
    <script src="scripts/bootstrap.js"></script>
</body>
</html>
