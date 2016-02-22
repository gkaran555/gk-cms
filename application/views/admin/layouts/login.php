
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
   
    <link href="<?php echo base_url()?>public/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>public/css/signin.css" rel="stylesheet">
    
  </head>

  <body>
  
   <div class="container">

      <form class="form-signin" method="post" action="<?php echo base_url(); ?>index.php/admin/provera/login">
        <h2 class="form-signin-heading">GKCMS</h2>
		<?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
		
		<?php if($this->session->flashdata('login_failed')) : ?>
        <?php echo '<p class="alert alert-dismissable alert-danger">' .$this->session->flashdata('login_failed') . '</p>'; ?>
        <?php endif; ?>
		<?php if($this->session->flashdata('access_denied')) : ?>
        <?php echo '<p class="alert alert-dismissable alert-danger">' .$this->session->flashdata('access_denied') . '</p>'; ?>
        <?php endif; ?>
		<?php if($this->session->flashdata('logged_out')) : ?>
        <?php echo '<p class="alert alert-dismissable alert-success">' .$this->session->flashdata('logged_out') . '</p>'; ?>
        <?php endif; ?>
		
        <input type="text" name="username" class="form-control" placeholder="Username">
        <input type="password" name="password" class="form-control" placeholder="Password">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
      </form>

    </div> <!-- /container -->

    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
  </body>
</html>
