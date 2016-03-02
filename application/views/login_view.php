<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/index.css"); ?>" />   
    <link rel="stylesheet" href="<?php echo base_url("assets/css/materialize.min.css"); ?>" />  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body>
        <section class="container body">
            <figure class="center"><img src="http://placehold.it/200x100"></figure>
            <div class="row">
                <div class="col s12 m6 l6 offset-l3">
                    <div class="card">
                        <div class="card-content">
                            <h5 class="card-title center">Login</h5>
                            <?php echo validation_errors(); ?>
                                <?php echo form_open('verifylogin'); ?>
                                  <div class="row">
                                    <div class="input-field col s12">
                                      <input placeholder="User" id="user" name="user" type="text" class="validate">
                                    </div>
                                    <div class="input-field col s12">
                                      <input placeholder="Password" id="password" name="password" type="password" class="validate">
                                    </div>
                                  </div>
                                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                        <i class="material-icons right">send</i>
                                    </button>
                                <?=form_close()?>
                        </div>
                        <div class="card-action">
                          <a href="#">This is a link</a>
                          <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>