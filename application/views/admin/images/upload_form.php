<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GKCMS Dashboard</title>
   
    <link href="<?php echo base_url()?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/dashboard.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/style.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
		
          <ul class="nav navbar-nav navbar-right">
   			<li><a href="<?php echo base_url(); ?>" target="_blank">View Site</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/admin/provera/logout">Logout</a></li>
		
			<li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown" href="#">GKCMS<span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li class="<?php if($this->uri->segment(2) == "dashboard"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/dashboard">Dashboard</a></li>
				<li class="<?php if($this->uri->segment(2) == "articles"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/articles">Articles</a></li>
				<li class="<?php if($this->uri->segment(2) == "categories"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/categories">Categories</a></li>
				<li class="<?php if($this->uri->segment(2) == "images"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/images">Images</a></li>
				<li class="<?php if($this->uri->segment(2) == "users"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/users">Users</a></li>
				<li class="<?php if($this->uri->segment(2) == "groups"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/groups">User Groups</a></li>
			  </ul>
			</li>
			         
          </ul>
          <form class="navbar-form navbar-right" method="post" action="<?php echo base_url(); ?>index.php/admin/articles/index">
            <input type="text" name="keywords" class="form-control" placeholder="Search article...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar">
		
          <ul class="nav nav-sidebar">
            <li class="<?php if($this->uri->segment(2) == "dashboard"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/dashboard">Dashboard</a></li>
            <li class="<?php if($this->uri->segment(2) == "articles"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/articles">Articles</a></li>
            <li class="<?php if($this->uri->segment(2) == "categories"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/categories">Categories</a></li>
			<li class="<?php if($this->uri->segment(2) == "images"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/images">Images</a></li>
            <li class="<?php if($this->uri->segment(2) == "users"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/users">Users</a></li>
			<li class="<?php if($this->uri->segment(2) == "groups"){echo "active";} ?>"><a href="<?php echo base_url(); ?>index.php/admin/groups">User Groups</a></li>
          </ul>
                   
        </div>
		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		
		<h1 class="page-header">Ad Image</h1>
          
		<ol class="breadcrumb">
		  <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard">dashboard</a></li>
		  <li><a href="<?php echo base_url(); ?>index.php/admin/images">images</a></li>
		  <li class="active">add image</li>
		</ol>
   
				<?php echo $error;?>
		 
				<?php echo form_open_multipart('admin/upload/do_upload');?>
				 
				<input type="file" name="userfile" size="20" />
				 
				<br /><br />
				 				
				<button type="submit" value="upload" name="upload" class="btn btn-primary btn-sm">upload</button>
	            <a href="<?php echo base_url(); ?>index.php/admin/images" class="btn btn-primary btn-sm">Close</a>
				 
				</form>
				
				
				
					  
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url()?>public/js/bootstrap.js"></script>
  </body>
</html>
