<?php
  
    require_once '../includes/initialize.php';
    
//    die('<pre>' . print_r($_SESSION, true));
    $admin = new Admin();
    $admin_id = $_SESSION['admin_id'];
    if(!$admin->getSession()){
        redirectTo("cpanel.php");
    }
    
    if(isset($_GET['quit'])){
        $admin->adminLogout();
        redirectTo("cpanel.php");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin-ControlPanel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/cpanel.css" type="text/css" />
        
        <script src="scripts/jquery lib v2.2.5.js"></script> 
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Controlpanel</a>
              </div>

                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">welcome <span class="fa fa-user"></span> <?php echo $admin->getAdminName($admin_id); ?></a></li>
                        <li><a href="cpanel.php?quit=logout"><span class="fa fa-power-off"></span> logout</a></li>  
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-3 sidebar">
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <span class="fa fa-dashboard"></span>  
                          Dashboard
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">10</span>
                            <i class="fa fa-envelope"></i>
                           Messages     
                        </a>
                        <a href="#" class="list-group-item">
                            <span class="badge">22</span>
                            <i class="fa fa-users"></i>
                            Visitors
                        </a>
                   </div>
                </div>
                <div class="col-sm-8 col-md-9">
                    <h2><span class="fa fa-dashboard"></span> Dashboard <small>statistics</small></h2>
                    <hr>
                    <ol class="breadcrumb">
                        <li class="active">Dashboard</li>
                    </ol>
                    
                    <div class="row" id="panel-box">
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <span class="fa fa-envelope fa-5x"></span>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right big">10</div>
                                            <div class="text-right">New messages</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">view message</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>    
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <span class="fa fa-users fa-5x"></span>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right big">22</div>
                                            <div class="text-right">All visitors</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">view all visitors </span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>    
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <script src="scripts/bootstrap.js"></script>
    </body>
</html> 
    


