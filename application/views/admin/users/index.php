<?php if($this->session->flashdata('user_saved')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('user_saved') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('user_deleted')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('user_deleted') . '</p>'; ?>
<?php endif; ?>


<h1 class="page-header">Users</h1>
<a href="<?php echo base_url(); ?>index.php/admin/users/add" class="btn btn-primary pull-right btn-sm">Add User</a>
  <br></br>
                      
  <div class="row">
				  
   <div class="table-responsive">
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th width="70">#</th>
		  <th>Name</th>
		  <th>Username</th>
		  <th>Email</th>
		</tr>
	  </thead>
	  <tbody>
		
		   <?php foreach($users as $user) : ?>
				<tr>
				  <td><?php echo $user->id; ?></td>
				  <td><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></td>
				  <td><?php echo $user->username; ?></td>
                  <td><?php echo $user->email; ?></td>
				  <td>
					  <a href="<?php echo base_url(); ?>index.php/admin/users/edit/<?php echo $user->id; ?>" class="btn btn-primary btn-sm">Edit</a>
				      <a href="<?php echo base_url(); ?>index.php/admin/users/delete/<?php echo $user->id; ?>" class="btn btn-primary btn-sm">Delete</a>
				  </td>
				</tr>
		  <?php endforeach; ?> 
							   
	  </tbody>
	</table>
   </div>
			  
  </div>