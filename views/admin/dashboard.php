<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <title>Articles Admin Panel</title>
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
    <div class="row">
        <div class="col-lg-6 col-lg-offset-6">
        <?= anchor('admin/add_article','Add Article',['class'=>'btn btn-lg btn-primary float-right']) ?>
        </div>
    </div>
    <?php if($feedback = $this->session->flashdata('feedback')): 
            $feedback_class = $this->session->flashdata('feedback_class');
        ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="alert alert-dismissible <?= $feedback_class ?>">
                <?= $feedback; ?>
            </div> 
        </div>
    </div>
    <?php endif; ?>

    <table class="table">
        <th>Sr. No.</th>
        <th>Title</th>
        <th>Action</th>
    </thead>
    <tbody>
    <?php if(count($articles)): ?>
        <?php foreach($articles as $article): ?>
        <tr>
            <td>1</td>
            <td>
                <?= $article->title; ?>
            </td>
            <td>
            <div class="row">
                <div class="col-lg-2">
                <?= anchor("admin/edit_article/{$article->id}",'Edit',['class'=>'btn btn-primary']); ?>
                </div>
            <div class="col-lg-2">
                <?=
                    form_open('admin/delete_article'),
                    form_hidden('article_id', $article->id),
                    form_submit(['name'=>'submit','value'=>'Delete','class'=>'btn btn-danger']),
                    form_close();
                ?>
            </div>
            </div>
            
                <!-- <a href="" class="btn btn-primary">Edit</a> -->
                
                <!-- <a href="" class="btn btn-danger">Delete</a> -->
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">
                No Records Found.
            </td>
        </tr>
    <?php endif; ?>
    </tbody>
    </table>
</div>
<script>src ="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>