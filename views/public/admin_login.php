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
  <a class="navbar-brand" href="#">Articles</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
    </ul>
  </div>
</nav>

<div class="container">
<?php echo form_open('login/admin_login'); ?>
  <fieldset>
    <legend>Admin Login</legend>
    <?php if($error = $this->session->flashdata('login_failed')): ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-dismissible alert-danger">
                <?= $error; ?>
            </div> 
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputEmail1">User Name</label>
      <?php echo form_input(['name'=>'username','class'=>'form-control', 'placeholder'=>'UserName','value'=>set_value('username')]); ?>
    </div>
    </div>
    
    <div class="col-lg-6">
        <?php
            echo "<br />" ;
            echo "<br />" ;
            echo form_error('username',"<p class='text-danger'>", "</p>"); 
        ?>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    </div>
    
    <div class="col-lg-6">
        <?php 
        echo "<br />" ;
        echo "<br />" ;
        echo form_error('password',"<p class='text-danger'>", "</p>"); ?>
    </div>
    </div>
    
    </fieldset>
    <?php echo form_reset(['name'=>'Reset','value'=>'Reset','class'=>'btn btn-default']); ?>
    <button type="submit" class="btn btn-primary">Login</button>
  </fieldset>
</form>

</div>


<script>src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>