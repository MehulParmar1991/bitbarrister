<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $common; ?>
    </head>
    <body>
        <?php echo $header; ?>
        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 card">
                        <h3 class="blue">Sign In</h3>
                        <?php if ($message != "") { ?>                    
                            <div class="alert alert-danger alert-dismissable">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $message; ?>
                            </div>
                        <?php } ?>
                        <form data-toggle="validator" role="form" method="post" id="login">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                                    <input type="text" class="form-control" id="login_identity" name="login_identity" placeholder="User Name" autofocus="autofocus">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-unlock-alt"></i></div>
                                    <input type="password" class="form-control" id="login_password" name="login_password" placeholder="Password" autofocus="autofocus">
                                </div>
                            </div>
                            <a href="<?php echo base_url()?>auth/forgotten_password">Forgot Password ? </a>
                            <div class="form-group">
                                <button type="submit" name="login" id="login" class="btn btn-info btn-block">Login Now</button>                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php echo $footer; ?>
        <div class="scroll-top-wrapper ">
            <span class="scroll-top-inner">
                <i class="fa fa-2x fa-arrow-circle-up"></i>
            </span>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>include_files/js/bitbarrister.js"></script>      
    </body>
</html>