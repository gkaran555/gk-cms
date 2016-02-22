
 
 <h1 class="page-header">Ad User</h1>
          
	<ol class="breadcrumb">
	  <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard">dashboard</a></li>
	  <li><a href="<?php echo base_url(); ?>index.php/admin/users">users</a></li>
	  <li class="active">add user</li>
	</ol>
			
  <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
  
  <form class="col-sm-10 col-md-8 col-xs-10" method="post" action="<?php echo base_url(); ?>index.php/admin/users/add">
	    <div class="form-group">
			<label for="first_name">First Name</label>
			<input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo set_value('first_name'); ?>"placeholder="Enter First Name" />
		</div>
		<div class="form-group">
			<label for="last_name">Last Name</label>
			<input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo set_value('last_name'); ?>" placeholder="Enter Last Name" />
		</div>
		<div class="form-group">
			<label for="email">Email Address</label>
			<input class="form-control" type="email" name="email" id="email" value="<?php echo set_value('email_address'); ?>"placeholder="Enter Email Address" />
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input class="form-control" type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" placeholder="Enter Username" />
		</div>
		<div class="form-group">
			<label for="password">Password</label>
			<input class="form-control" type="password" name="password" id="password" value="<?php echo set_value('password'); ?>" placeholder="Enter Password" />
		</div>
		<div class="form-group">
			<label for="password2">Confirm Password</label>
			<input class="form-control" type="password" name="password2" id="password2" value="<?php echo set_value('password2'); ?>" placeholder="Confirm Password" />
		</div>
		 <div class="form-group">
			<label for="user_group">Choose User Group</label>
			<select name="user_group" class="form-control">
			<option value="0">Select Group</option>
				<?php foreach($groups as $group) : ?>
					<option value="<?php echo $group->id; ?>"><?php echo $group->name; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
			  
	  <button type="submit" name="submit" class="btn btn-primary btn-sm">Save</button>
	  <a href="<?php echo base_url(); ?>index.php/admin/users" class="btn btn-primary btn-sm">Close</a>
  </form>
		  
		  
		  
		  
		  
		  
		  
		  
		  