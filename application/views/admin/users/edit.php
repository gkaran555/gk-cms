
 
 <h1 class="page-header">Edit User</h1>
          
	<ol class="breadcrumb">
	  <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard">dashboard</a></li>
	  <li><a href="<?php echo base_url(); ?>index.php/admin/users">users</a></li>
	  <li class="active">edit user</li>
	</ol>
			
  <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
  
  <form class="col-sm-10 col-md-8 col-xs-10" method="post" action="<?php echo base_url(); ?>index.php/admin/users/edit/<?php echo $user->id; ?>">
	    <div class="form-group">
			<label for="first_name">First Name</label>
			<input class="form-control" type="text" name="first_name" id="first_name" value="<?php echo $user->first_name; ?>"placeholder="Enter First Name" />
		</div>
		<div class="form-group">
			<label for="last_name">Last Name</label>
			<input class="form-control" type="text" name="last_name" id="last_name" value="<?php echo $user->last_name; ?>" placeholder="Enter Last Name" />
		</div>
		<div class="form-group">
			<label for="email">Email Address</label>
			<input class="form-control" type="email" name="email" id="email" value="<?php echo $user->email; ?>"placeholder="Enter Email Address" />
		</div>
		<div class="form-group">
			<label for="username">Username</label>
			<input class="form-control" type="text" name="username" id="username" value="<?php echo $user->username; ?>" placeholder="Enter Username" />
		</div>
		
		 <div class="form-group">
			<label for="user_group">Choose User Group</label>
			<select name="user_group" class="form-control">
			<option value="0">Select Group</option>
				<?php foreach($groups as $group) : ?>
				<?php if($user->group_id == $group->id) : ?>
		        <?php $selected = 'selected' ; ?>
		        <?php else : ?>
		        <?php $selected = '' ; ?>
		        <?php endif; ?>
					<option value="<?php echo $group->id; ?>" <?php echo $selected; ?>><?php echo $group->name; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
			  
	  <button type="submit" name="submit" class="btn btn-primary btn-sm">Save</button>
	  <a href="<?php echo base_url(); ?>index.php/admin/users" class="btn btn-primary btn-sm">Close</a>
  </form>
		  
		  
		  
		  
		  
		  
		  
		  
		  