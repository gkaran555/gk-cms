 <h1 class="page-header">Dashboard</h1>
 
        <?php if($this->session->flashdata('pass_login')) : ?>
        <?php echo '<p class="alert alert-dismissable alert-success">' .$this->session->flashdata('pass_login') . '</p>'; ?>
        <?php endif; ?>
		
          <h2 class="sub-header">Articles</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Categoty</th>
                  <th>Author</th>
                  <th>Date</th>
				  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
			    <?php foreach($articles as $article) : ?>
                <tr>
                  <td><?php echo $article->id; ?></td>
                  <td><?php echo $article->title; ?></td>
                  <td><?php echo $article->category_name; ?></td>
                  <td><?php echo $article->first_name; ?> <?php echo $article->last_name; ?></td>
                  <td><?php echo date("F j, Y, g:i, a", strtotime($article->created)); ?></td>
				  <td>
				      <a href="<?php echo base_url(); ?>index.php/admin/articles/edit/<?php echo $article->id; ?>" class="btn btn-primary btn-sm">Edit</a>
				      <a href="<?php echo base_url(); ?>index.php/admin/articles/unpublish/<?php echo $article->id; ?>" class="btn btn-primary btn-sm">Unpublish</a>
				      <a href="<?php echo base_url(); ?>index.php/admin/articles/delete/<?php echo $article->id; ?>" class="btn btn-primary btn-sm">Delete</a>
				  </td>
                </tr>
                <?php endforeach; ?>        
              </tbody>
            </table>
          </div>
		  
		  
		  <div class="row">
		  <div class="col-md-6">
		  <h2>Latest Categories</h2>
		  
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
		  
		  <div class="col-md-6">
		  <h2>Latest Users</h2>
		  
		   <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th width="70">#</th>
                  <th>Username</th>
   				  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
			    <?php foreach($users as $user) : ?>
                <tr>
                  <td><?php echo $user->id; ?></td>
                  <td><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></td>
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
		  		  
         </div>