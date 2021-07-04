<?php
include("php74.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bootstrap business-plate template </title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
	
    <!-- Custom styles for this template -->
	
    <link href="assets/custom/css/business-plate.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/custom/ico/favicon.ico">
  </head>
<!-- NAVBAR
================================================== -->
  <body>

	
    <!-- topHeaderSection -->	
    <div class="topHeaderSection">		
    <div class="header">			
		<div class="container">
        <div class="navbar-header">
       
          <a class="navbar-brand" href="index.html"><img src="assets/custom/img/logo.png" alt="My web solution" /></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
          <?php
		  $menus=$obj->getAll("menus","*");
		 
		  foreach($menus as $menu){
			   extract($menu);
		  ?>
            <li><a href="index.php?menu_id=<?=$menu_id;?>"><?=$name;?></a></li>
            
            <?php
		  }
		  ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
	</div>
	</div>

    
		
		<div class="container">
        <?php
		
	
	if(isset($_REQUEST['menu_id'])){
		$menu_id=$_REQUEST['menu_id'];
			extract($obj->getById("menus","*","menu_id=$menu_id"));
				echo "<h2>$menu_title</h2>";
				echo "<p>$content</p>";
		}
	else{
		echo "<h2>Hello Home Page</h2>";
	}
        ?>
		
        </div>
	</div>
	</div>
    
	


	</body>
</html>