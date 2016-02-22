  
<?php if($this->session->flashdata('article_saved')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('article_saved') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('article_published')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('article_published') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('article_unpublished')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('article_unpublished') . '</p>'; ?>
<?php endif; ?>
<?php if($this->session->flashdata('article_deleted')) : ?>
    <?php echo '<p class="alert alert-success">' .$this->session->flashdata('article_deleted') . '</p>'; ?>
<?php endif; ?>
  
  
  <h1 class="page-header">Articles</h1> 
  <a href="<?php echo base_url(); ?>index.php/admin/articles/add" class="btn btn-primary btn-sm pull-right">Add Article</a>
  <br></br>
                    
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
				      <?php if($article->is_published == 1) : ?>
					  <a href="<?php echo base_url(); ?>index.php/admin/articles/unpublish/<?php echo $article->id; ?>" class="btn btn-primary btn-sm">Unpublish</a>
				      <?php elseif($article->is_published == 0) : ?>
					  <a href="<?php echo base_url(); ?>index.php/admin/articles/publish/<?php echo $article->id; ?>" class="btn btn-primary btn-sm">Publish</a>
					  <?php endif;?>
					  <a href="<?php echo base_url(); ?>index.php/admin/articles/delete/<?php echo $article->id; ?>" class="btn btn-primary btn-sm">Delete</a>
				  </td>
                </tr>
                <?php endforeach; ?> 
                            
              </tbody>
            </table>
          </div>