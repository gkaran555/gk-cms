
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php echo $this->global_data[site_title]; ?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>public/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>public/css/jumbotron_narrow.css" rel="stylesheet">
   
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li><a href="<?php echo base_url(); ?>">Home</a></li>
            <?php foreach($menu_items as $item) : ?>
            <li><a href="<?php echo base_url(); ?>index.php/articles/view/<?php echo $item->id; ?>"><?php echo $item->title; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <h3><?php echo $this->global_data['site_title']; ?></h3>		
        <h3 class="text-muted"><img src="<?php echo base_url()?>public/img/<?php echo $this->global_data['logo']; ?>" alt="<?php echo $this->global_data['site_title']; ?>"/></h3>
      </div>

         <div class="row">
         <div class="col-lg-12">
           			
		    <?php foreach($images as $image) : ?>
			<?php if($article->image_id == $image->id) : ?>
			<img src="<?php echo base_url()?>public/img/<?php echo $image->name; ?>"/>
			<?php endif;?>
			<?php endforeach; ?>
			
			<h1><?php echo $article->title; ?></h1>
            <?php echo $article->body; ?>
			
         </div>
         </div>

      <footer class="footer">
        <p>GK</p>
      </footer>

    </div> <!-- /container -->
   
  </body>
</html>
