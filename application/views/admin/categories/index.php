<?php if($this->session->flashdata('category_saved')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('category_saved') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('category_deleted')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('category_deleted') . '</p>'; ?>
<?php endif; ?>


<h1 class="page-header">Categories</h1>
<a href="<?php echo base_url(); ?>index.php/admin/categories/add" class="btn btn-primary pull-right btn-sm">Add Category</a>
  <br></br>
                      
  <div class="row">
				  
   <div class="table-responsive">
	<table class="table table-striped">
	  <thead>
		<tr>
		  <th width="70">#</th>
		  <th>Name</th>
		  <th>Actions</th>
		</tr>
	  </thead>
	  <tbody>
		
		   <?php foreach($categories as $category) : ?>
				<tr>
				  <td><?php echo $category->id; ?></td>
				  <td><?php echo $category->name; ?></td>
				  
				  <td>
					  <a href="<?php echo base_url(); ?>index.php/admin/categories/edit/<?php echo $category->id; ?>" class="btn btn-primary btn-sm">Edit</a>
					  <a href="<?php echo base_url(); ?>index.php/admin/categories/delete/<?php echo $category->id; ?>" class="btn btn-primary btn-sm">Delete</a>
				  </td>
				</tr>
		  <?php endforeach; ?> 
							   
	  </tbody>
	</table>
   </div>
			  
  </div>