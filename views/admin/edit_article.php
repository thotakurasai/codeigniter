<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <title>Articles List</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Admin Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="<?= base_url('index.php/login/logout') ?>">Logout</a></li>
    </ul>
    </div>
  
</nav>

<div class="container">
<?php echo form_open("admin/update_article/{$article->id}", ['class' => 'form-horizontal']); ?>
  <fieldset>
    <legend>Edit Article</legend>

    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <?php echo form_input(['name'=>'title','class'=>'form-control', 'placeholder'=>'Title','value'=>set_value('title',$article->title)]); ?>
    </div>
    </div>
    
    <div class="col-lg-6">
        <?php
            echo "<br />";
            echo "<br />";
            echo form_error('title',"<p class='text-danger'>", "</p>"); 
        ?>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Article Body</label>
      <?php echo form_textarea(['name'=>'body','class'=>'form-control', 'placeholder'=>'Article Body','value'=>set_value('body',$article->body)]); ?>
    </div>
    </div>
    
    <div class="col-lg-6">
        <?php 
        echo "<br />" ;
        echo "<br />" ;
        echo form_error('body',"<p class='text-danger'>", "</p>"); ?>
    </div>
    </div>
    
    </fieldset>
    <?php echo form_reset(['name'=>'Reset','value'=>'Reset','class'=>'btn btn-default']); ?>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

</div>


<script>src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>