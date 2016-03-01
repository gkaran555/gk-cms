<?php if($this->session->flashdata('image_saved')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('image_saved') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('image_deleted')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('image_deleted') . '</p>'; ?>
<?php endif; ?>


<h1 class="page-header">Images</h1>
<a href="<?php echo base_url(); ?>index.php/admin/upload" class="btn btn-primary pull-right btn-sm">Add Image</a>
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
		
		   <?php foreach($images as $image) : ?>
				<tr>
				  <td><?php echo $image->id; ?></td>
				  <td><img src="<?php echo base_url()?>public/img/<?php echo $image->name; ?>"/></td>
				  
				  <td>
					  <a href="<?php echo base_url(); ?>index.php/admin/images/delete/<?php echo $image->id; ?>" class="btn btn-primary btn-sm">Delete</a>
				  </td>
				</tr>
		  <?php endforeach; ?> 
							   
	  </tbody>
	</table>
   </div>
			  
  </div>