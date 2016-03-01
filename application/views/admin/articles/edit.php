
 
 <h1 class="page-header">Edit Article</h1>
          
	<ol class="breadcrumb">
	  <li><a href="<?php echo base_url(); ?>index.php/admin/dashboard">dashboard</a></li>
	  <li><a href="<?php echo base_url(); ?>index.php/admin/articles">articles</a></li>
	  <li class="active">edit articles</li>
	</ol>
			
  <?php echo validation_errors('<p class="alert alert-dismissable alert-danger">'); ?>
  
  <form class="col-sm-10 col-md-8 col-xs-10" method="post" action="<?php echo base_url(); ?>index.php/admin/articles/edit/<?php echo $article->id; ?>" enctype="multipart/form-data">
	  <div class="form-group">
		<label>Article Title</label>
		<input type="text" class="form-control" name="title" value="<?php echo $article->title; ?>" placeholder="enter article title">
	  </div>
	  
	  <div class="form-group">
		<label>Categories</label>
		<select class="form-control" name="category">
		  <option value="0">Select Category</option>
		  <?php foreach($categories as $category) : ?>
		   <?php if($category->id == $article->category_id) : ?>
		    <?php $selected = 'selected' ; ?>
		   <?php else : ?>
		    <?php $selected = '' ; ?>
		   <?php endif; ?>
		  <option value="<?php echo $category->id; ?>" <?php echo $selected; ?>><?php echo $category->name; ?></option>
		  <?php endforeach; ?> 
		</select>
	  </div>
	  
	  <div class="form-group">
		<label for="page_bady">Article Body</label>
		<textarea class="form-control" type="text" rows="5" name="body"> <?php echo $article->body; ?></textarea>
	  </div>
	  
	  <div class="form-group">
		<label>Images</label>
		<select class="form-control" name="image">
		  <option value="0">Select Image</option>
		  <?php foreach($images as $image) : ?>
		   <?php if($image->id == $article->image_id) : ?>
		    <?php $selected = 'selected' ; ?>
		   <?php else : ?>
		    <?php $selected = '' ; ?>
		   <?php endif; ?>
		  <option value="<?php echo $image->id; ?>" <?php echo $selected; ?>><?php echo $image->name; ?></option>
		  <?php endforeach; ?> 
		</select>
	  </div>
	  	  	  
	  
	   <div class="form-group">
		<label>Author</label>
		<select class="form-control" name="user">
		  <option value="0">Select Author</option>
		  <?php foreach($users as $user) : ?>
		  <?php if($user->id == $article->user_id) : ?>
		  <?php $selected = 'selected' ; ?>
		  <?php else : ?>
		  <?php $selected = '' ; ?>
		  <?php endif;?>
		  <option value="<?php echo $user->id; ?>"<?php echo $selected; ?>><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></option>
		  <?php endforeach; ?> 
		</select>
	  </div>
	  
	  <div class="form-group">
		<label>Published</label>
		<label for="is_published" class="radio-inline">
		  <input type="radio" name="is_published" value="1" checked>Yes
		</label>
		<label class="radio-inline">
		<input type="radio" name="is_published" value="0">No
		</label>
	  </div>
	  
	  <div class="form-group">
		<label>Add to menu</label>
		<label for="in_menu" class="radio-inline">
		  <input type="radio" name="in_menu" value="1">Yes
		</label>
		<label class="radio-inline">
		<input type="radio" name="in_menu" value="0" checked>No
		</label>
	  </div>
	  
      <div class="form-group">
		<label>Order the menu</label>
		<input type="text" class="form-control" name="order" style="width:40px" value="0">
	    <p class="help-block">Order the menu line from 1 to ...</p>
	  </div>
	  
	  <button type="submit" name="submit" class="btn btn-primary btn-sm">Save</button>
	  <a href="<?php echo base_url(); ?>index.php/admin/articles" class="btn btn-primary btn-sm">Close</a>
  </form>
		  
		  
		  
		  
		  
		  
		  
		  
		  