<h1 class="page-header">Edit User Group</h1>
          
	<ol class="breadcrumb">
	  <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard">dashboard</a></li>
	  <li><a href="<?php echo base_url(); ?>index.php/admin/groups">user groups</a></li>
	  <li class="active">edit user group</li>
	</ol>
			
  <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
  
  <form class="col-sm-10 col-md-8 col-xs-10" method="post" action="<?php echo base_url(); ?>index.php/admin/groups/edit/<?php echo $group->id; ?>">
	  <div class="form-group">
		<label>Group name</label>
		<input type="text" class="form-control" name="name" value="<?php echo $group->name; ?>">
	  </div>
	  	  
	  <button type="submit" name="submit" class="btn btn-primary btn-sm">Save</button>
	  <a href="<?php echo base_url(); ?>index.php/admin/groups" class="btn btn-primary btn-sm">Close</a>
  </form>